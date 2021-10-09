@push('scripts')
    <script type="text/javascript">
        window.__UploaderIndex = '{{ $index }}';

        $(function () {
            const uploadNewOpenButtonId = '#js-UploadNewOpenBtn',
                uploadNewOpenButtonSelector = '.js-UploadNewOpenBtn',
                uploadNewModalSelector = '.js-UploadNewModal',
                uploadNewFileButtonSelector = '.js-UploadNewFileBtn',
                uploadNewSaveButtonSelector = '.js-UploadNewSaveBtn',
                uploadNewTabSelector = '.js-UploadTab',
                uploadNewTabButtonSelector = '.js-UploadTabBtn',
                uploadNewTabContainerSelector = '#tab-UploadTab',
                uploadNewMessage = '.js-UploadNewMessage',
                uploadCurrentOpenButtonSelector = '.js-UploadCurrentOpenBtn',
                uploadCurrentModalSelector = '.js-UploadCurrentModal',
                uploadCurrentDeleteButtonSelector = '.js-UploadDeleteBtn',
                uploadInputSelector = '.js-UploadInput',
                uploadFilesContainerSelector = '.js-UploadFilesContainer',
                uploadFilesTableSelector = '.js-UploadFilesTable',
                uploadSelectButtonSelector = '.js-UploadSelectBtn',
                uploadCropperButtonSelector = '.js-UploadOpenCropper',
                uploadCropSectionSelector = '.js-UploadCrop',
                uploadCropContainerSelector = '.js-UploadCropContainer';

            let _uploaderPage = 2,
                _CSRFToken = '{{ csrf_token() }}';

            let uploadLoad = function (_this) {
                let uploadModal = _this.next(uploadNewModalSelector),
                    tabButton = uploadModal.find(uploadNewTabButtonSelector + '.active'),
                    tabContent = uploadModal.find(uploadNewTabSelector + '.active'),
                    filesContainer = tabContent.find(uploadFilesContainerSelector);

                $.ajax({
                    type: 'GET',
                    url: '{{ route('admin.uploads.get') }}' + '/' + tabButton.data('type'),
                    dataType: 'json',
                    data: {
                        _token : _CSRFToken,
                        accept: tabButton.data('accept'),
                        keyword: tabContent.find('input[type="search"]').val()
                    },
                    success: function(data) {
                        _uploaderPage = 2;
                        filesContainer.html(data.html);

                        $('[data-toggle="tooltip"]').tooltip();
                    }
                });
            }, uploadSwitch = function (_this) {
                let uploadModal = _this.closest(uploadNewModalSelector),
                    tabContent = uploadModal.find(uploadNewTabContainerSelector + '-' + _this.data('type') + '-' + uploadModal.data('index')),
                    filesContainer = tabContent.find(uploadFilesContainerSelector);

                $.ajax({
                    type: 'GET',
                    url: '{{ route('admin.uploads.get') }}' + '/' + _this.data('type'),
                    dataType: 'json',
                    data: {
                        _token : _CSRFToken,
                        accept: _this.data('accept'),
                        keyword: tabContent.find('input[type="search"]').val()
                    },
                    success: function(data) {
                        _uploaderPage = 2;
                        filesContainer.html(data.html);

                        $('[data-toggle="tooltip"]').tooltip();
                    }
                });
            }, uploadScroll = function (_this) {
                let tabContent = _this.find(uploadNewTabSelector + '.active'),
                    tabButton = _this.find(uploadNewTabButtonSelector + '.active'),
                    filesContainer = tabContent.find(uploadFilesContainerSelector);

                if(filesContainer.scrollTop() + filesContainer.innerHeight() >= filesContainer[0].scrollHeight) {
                    $.ajax({
                        type : 'GET',
                        url: '{{ route('admin.uploads.get') }}' + '/' + tabButton.data('type') + '?page=' + _uploaderPage,
                        data: {
                            _token: _CSRFToken,
                            accept: tabButton.data('accept'),
                            keyword: tabContent.find('input[type="search"]').val()
                        },
                        success : function(data) {
                            _uploaderPage += 1;
                            filesContainer.append(data.html);

                            $('[data-toggle="tooltip"]').tooltip();
                        }
                    });
                }
            }, uploadSearch = function (_this) {
                let tabContent = _this.find(uploadNewTabSelector + '.active'),
                    tabButton = _this.find(uploadNewTabButtonSelector + '.active'),
                    filesContainer = tabContent.find(uploadFilesContainerSelector),
                    searchTimer;

                clearInterval(searchTimer);

                searchTimer = setTimeout(function(){
                    $.ajax({
                        type: 'GET',
                        url: '{{ route('admin.uploads.get') }}' + '/' + tabButton.data('type'),
                        dataType: 'json',
                        data: {
                            _token : _CSRFToken,
                            accept: tabButton.data('accept'),
                            keyword : tabContent.find('input[type="search"]').val()
                        },
                        success: function(data) {
                            _uploaderPage = 2;
                            filesContainer.html(data.html);

                            $('[data-toggle="tooltip"]').tooltip();
                        }
                    });
                }, 300);
            }, uploadUpload = function (_this) {
                _this.fileupload({
                    url: '{{ route('admin.uploads.upload') }}',
                    dataType: 'json',
                    formData: {
                        _token : _CSRFToken,
                        model: _this.data('model'),
                        field: _this.data('field'),
                        accept: _this.find(uploadNewTabButtonSelector + '.active').data('accept')
                    },
                    done: function (e, data) {
                        let uploadMessage = _this.find(uploadNewMessage);

                        _this.find(uploadFilesContainerSelector).css('opacity', '1');
                        _this.find(uploadNewFileButtonSelector).removeClass('btn-loading');

                        if (data.result.status === true) {
                            let tabContent = _this.find(uploadNewTabContainerSelector + '-' + data.result.type + '-' + _this.data('index'));

                            console.log(uploadNewTabContainerSelector + '-' + data.result.type + '-' + _this.data('index'));

                            tabContent.find(uploadFilesContainerSelector).prepend(data.result.html);
                            tabContent.find(uploadFilesContainerSelector + ' > p').remove();


                            let selectButton = tabContent.find(uploadFilesContainerSelector + ' ' + uploadSelectButtonSelector).first(),
                                parentTableRow = selectButton.parent().parent();

                            _this.find(uploadNewTabSelector).find(uploadSelectButtonSelector).removeClass('selected');

                            selectButton.addClass('selected');

                            if (parentTableRow.is('tr')) {
                                $(uploadFilesTableSelector + ' tr').removeClass('hovered');
                                parentTableRow.addClass('hovered');
                            }

                            uploadMessage.text(data.result.message).removeClass('text-red').addClass('text-green');

                            $('[data-toggle="tooltip"]').tooltip();
                        } else {
                            uploadMessage.text(data.result.message).removeClass('text-green').addClass('text-red');
                        }

                        setTimeout(function(){
                            uploadMessage.text('');
                        }, 5000);
                    },
                    progressall: function (e, data) {
                        _this.find(uploadFilesContainerSelector).css('opacity', '0.5');
                        _this.find(uploadNewFileButtonSelector).addClass('btn-loading');
                    }
                });
            }, uploadSave = function (_this) {
                let tabContent = _this.find(uploadNewTabSelector + '.active'),
                    selectedUpload = tabContent.find(uploadSelectButtonSelector + '.selected');

                $.ajax({
                    type: 'POST',
                    url: "{{ route('admin.uploads.set') }}",
                    dataType: 'json',
                    data: {
                        _token : _CSRFToken,
                        path: selectedUpload.data('path'),
                        model: _this.data('model'),
                        field: _this.data('field')
                    },
                    beforeSend: function () {
                        _this.find(uploadFilesContainerSelector).css('opacity', '0.5');
                        _this.find(uploadNewSaveButtonSelector).addClass('btn-loading');
                    },
                    complete: function () {
                        _this.find(uploadFilesContainerSelector).css('opacity', '1');
                        _this.find(uploadNewSaveButtonSelector).removeClass('btn-loading');
                    },
                    success: function(data) {
                        let uploadMessage = _this.find(uploadNewMessage);

                        if (data.status === true) {
                            _this.closest('.form-group').find(uploadInputSelector).val(data.path);
                            _this.prev(uploadNewOpenButtonSelector).html(data.name);

                            $(_this).modal('hide');
                        } else {
                            uploadMessage.text(data.message).removeClass('text-green').addClass('text-red');

                            setTimeout(function(){
                                uploadMessage.text('');
                            }, 5000);
                        }
                    }
                });
            }, uploadRemove = function (_this) {
                let uploadIndex = _this.closest(uploadCurrentModalSelector).data('index');
                console.log(uploadIndex);

                $(uploadInputSelector + '-' + uploadIndex).val('');
                $(uploadCurrentOpenButtonSelector + '-' + uploadIndex).remove();
                $(uploadNewOpenButtonId + '-' + uploadIndex).removeClass('w-50').removeClass('border-right-0').addClass('w-100');
                $(uploadCurrentModalSelector).modal('hide');
            }, uploadCrop = function (_this) {
                let uploadModal = _this.closest(uploadCurrentModalSelector);

                $.ajax({
                    type: 'GET',
                    url: '{{ route('admin.uploads.crop') }}',
                    dataType: 'json',
                    data: {
                        _token : _CSRFToken,
                        index: uploadModal.data('index'),
                        model: uploadModal.data('model'),
                        field: uploadModal.data('field'),
                        url: _this.data('url'),
                        path: _this.data('path'),
                        style: _this.data('style')
                    },
                    success: function(data) {
                        if (data.status === true) {
                            $(uploadCropContainerSelector + '-' + uploadModal.data('index')).html(data.html);
                            $(uploadCropSectionSelector + '-' + uploadModal.data('index')).modal('show');
                        }
                    }
                });
            };

            //initial load
            $(document).on('click', uploadNewOpenButtonSelector + ':not(.disabled)', function (e) {
                e.preventDefault();

                uploadLoad($(this));
            });

            //click load
            $(document).on('click', uploadNewTabButtonSelector, function(e) {
                uploadSwitch($(this));
            });

            //scroll load
            document.addEventListener('scroll', function (event) {
                if (event.target.classList && event.target.classList.contains('js-UploadFilesContainer')) {
                    uploadScroll($(event.target).closest(uploadNewModalSelector));
                }
            }, true);

            //search load
            $(document).on('keyup', uploadNewTabSelector + '.active input[type="search"]', function(e) {
                e.preventDefault();

                uploadSearch($(this).closest(uploadNewModalSelector));
            });

            //upload new
            $(document).on('click', uploadNewFileButtonSelector + ' > input[type="file"]', function (e) {
                uploadUpload($(this).closest(uploadNewModalSelector));
            });

            //save new
            $(document).on('click', uploadNewSaveButtonSelector, function(e) {
                e.preventDefault();

                uploadSave($(this).closest(uploadNewModalSelector));
            });

            //cropper load
            $(document).on('click', uploadCropperButtonSelector + ':not(.disabled)', function (e) {
                e.preventDefault();

                uploadCrop($(this));
            });

            //delete current
            $(document).on('click', uploadCurrentDeleteButtonSelector, function(){
                uploadRemove($(this));
            });

            // select file
            $(document).on('click', uploadSelectButtonSelector, function(e){
                e.preventDefault();

                $(uploadSelectButtonSelector).removeClass('selected');
                $(this).addClass('selected');

                if ($(this).parent().parent().is('tr')) {
                    $(uploadFilesTableSelector + ' tr').removeClass('hovered');
                    $(this).parent().parent().addClass('hovered');
                }
            });
        });
    </script>
@endpush
