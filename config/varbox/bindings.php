<?php

/*
| ------------------------------------------------------------------------------------------------------------------
| Class Bindings
| ------------------------------------------------------------------------------------------------------------------
|
| FQNs of the classes used by the Varbox platform internally to achieve different functionalities.
| Each of these classes represents a concrete implementation that is bound to the Laravel's IoC container.
|
| If you need to extend or modify a functionality, you can swap the implementation below with your own class.
| Swapping the implementation, requires some steps, like extending the core class, or implementing an interface.
|
*/
return [

    /*
    | --------------------------------------------------------------------------------------------------------------
    | Service Class Bindings
    | --------------------------------------------------------------------------------------------------------------
    */
    'services' => [

        /*
        |
        | Concrete implementation for the "upload service".
        | To extend or replace this functionality, change the value below with your full "upload service" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Services\UploadService" class
        | - or at least implement the "Varbox\Contracts\UploadServiceContract" interface
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('upload.service') OR app('\Varbox\Contracts\UploadServiceContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'upload_service' => \Varbox\Services\UploadService::class,

        /*
        |
        | Concrete implementation for the "translation service".
        | To extend or replace this functionality, change the value below with your full "translation service" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Services\TranslationService" class
        | - or at least implement the "Varbox\Contracts\TranslationServiceContract" interface
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - translation() OR app('translation.service') OR app('\Varbox\Contracts\TranslationServiceContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'translation_service' => \Varbox\Services\TranslationService::class,

    ],

    /*
    | --------------------------------------------------------------------------------------------------------------
    | Model Class Bindings
    | --------------------------------------------------------------------------------------------------------------
    */
    'models' => [

        /*
        |
        | Concrete implementation for the "user model".
        | To extend or replace this functionality, change the value below with your full "user model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\User" class
        | - or at least implement the "Varbox\Contracts\UserModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('user.model') OR app('\Varbox\Contracts\UserModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'user_model' => \App\Models\User::class,

        /*
        |
        | Concrete implementation for the "role model".
        | To extend or replace this functionality, change the value below with your full "role model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Role" class
        | - or at least implement the "Varbox\Contracts\RoleModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('role.model') OR app('\Varbox\Contracts\RoleModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'role_model' => \Varbox\Models\Role::class,

        /*
        |
        | Concrete implementation for the "permission model".
        | To extend or replace this functionality, change the value below with your full "permission model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Permission" class
        | - or at least implement the "Varbox\Contracts\PermissionModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('permission.model') OR app('\Varbox\Contracts\PermissionModelContract')
        | - or you could even use your own class as a direct implementation
        */
        'permission_model' => \Varbox\Models\Permission::class,

        /*
        |
        | Concrete implementation for the "url model".
        | To extend or replace this functionality, change the value below with your full "url model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Url" class
        | - or at least implement the "Varbox\Contracts\UrlModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('url.model') OR app('\Varbox\Contracts\UrlModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'url_model' => \Varbox\Models\Url::class,

        /*
        |
        | Concrete implementation for the "upload model".
        | To extend or replace this functionality, change the value below with your full "upload model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Upload" class
        | - or at least implement the "Varbox\Contracts\UploadModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('upload.model') OR app('\Varbox\Contracts\UploadModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'upload_model' => \Varbox\Models\Upload::class,

        /*
        |
        | Concrete implementation for the "revision model".
        | To extend or replace this functionality, change the value below with your full "revision model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Revision" class
        | - or at least implement the "Varbox\Contracts\RevisionModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('revision.model') OR app('\Varbox\Contracts\RevisionModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'revision_model' => \Varbox\Models\Revision::class,

        /*
        |
        | Concrete implementation for the "activity model".
        | To extend or replace this functionality, change the value below with your full "activity model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Activity" class
        | - or at least implement the "Varbox\Contracts\ActivityModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('activity.model') OR app('\Varbox\Contracts\ActivityModelContract')
        | - or you could even use your own class as a direct implementation
        */
        'activity_model' => \Varbox\Models\Activity::class,

        /*
        |
        | Concrete implementation for the "country model".
        | To extend or replace this functionality, change the value below with your full "country model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Country" class
        | - or at least implement the "Varbox\Contracts\CountryModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('country.model') OR app('\Varbox\Contracts\CountryModelContract')
        | - or you could even use your own class as a direct implementation
        */
        'country_model' => \Varbox\Models\Country::class,

        /*
        |
        | Concrete implementation for the "state model".
        | To extend or replace this functionality, change the value below with your full "state model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\State" class
        | - or at least implement the "Varbox\Contracts\StateModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('state.model') OR app('\Varbox\Contracts\StateModelContract')
        | - or you could even use your own class as a direct implementation
        */
        'state_model' => \Varbox\Models\State::class,

        /*
        |
        | Concrete implementation for the "city model".
        | To extend or replace this functionality, change the value below with your full "city model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\City" class
        | - or at least implement the "Varbox\Contracts\CityModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('city.model') OR app('\Varbox\Contracts\CityModelContract')
        | - or you could even use your own class as a direct implementation
        */
        'city_model' => \Varbox\Models\City::class,

        /*
        |
        | Concrete implementation for the "address model".
        | To extend or replace this functionality, change the value below with your full "address model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Address" class
        | - or at least implement the "Varbox\Contracts\AddressModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('address.model') OR app('\Varbox\Contracts\AddressModelContract')
        | - or you could even use your own class as a direct implementation
        */
        'address_model' => \Varbox\Models\Address::class,

        /*
        |
        | Concrete implementation for the "config model".
        | To extend or replace this functionality, change the value below with your full "config model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Config" class
        | - or at least implement the "Varbox\Contracts\ConfigModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('config.model') OR app('\Varbox\Contracts\ConfigModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'config_model' => \Varbox\Models\Config::class,

        /*
        |
        | Concrete implementation for the "backup model".
        | To extend or replace this functionality, change the value below with your full "backup model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Backup" class
        | - or at least implement the "Varbox\Contracts\BackupModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('backup.model') OR app('\Varbox\Contracts\BackupModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'backup_model' => \Varbox\Models\Backup::class,

        /*
        |
        | Concrete implementation for the "error model".
        | To extend or replace this functionality, change the value below with your full "error model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Error" class
        | - or at least implement the "Varbox\Contracts\ErrorModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('error.model') OR app('\Varbox\Contracts\ErrorModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'error_model' => \Varbox\Models\Error::class,

        /*
        |
        | Concrete implementation for the "email model".
        | To extend or replace this functionality, change the value below with your full "email model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Email" class
        | - or at least implement the "Varbox\Contracts\EmailModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('email.model') OR app('\Varbox\Contracts\EmailModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'email_model' => \Varbox\Models\Email::class,

        /*
        |
        | Concrete implementation for the "block model".
        | To extend or replace this functionality, change the value below with your full "block model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Block" class
        | - or at least implement the "Varbox\Contracts\BlockModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('block.model') OR app('\Varbox\Contracts\BlockModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'block_model' => \Varbox\Models\Block::class,

        /*
        |
        | Concrete implementation for the "page model".
        | To extend or replace this functionality, change the value below with your full "page model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Page" class
        | - or at least implement the "Varbox\Contracts\PageModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('page.model') OR app('\Varbox\Contracts\PageModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'page_model' => \Varbox\Models\Page::class,

        /*
        |
        | Concrete implementation for the "menu model".
        | To extend or replace this functionality, change the value below with your full "menu model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Menu" class
        | - or at least implement the "Varbox\Contracts\MenuModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('menu.model') OR app('\Varbox\Contracts\MenuModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'menu_model' => \Varbox\Models\Menu::class,

        /*
        |
        | Concrete implementation for the "language model".
        | To extend or replace this functionality, change the value below with your full "language model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Language" class
        | - or at least implement the "Varbox\Contracts\LanguageModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('language.model') OR app('\Varbox\Contracts\LanguageModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'language_model' => \Varbox\Models\Language::class,

        /*
        |
        | Concrete implementation for the "translation model".
        | To extend or replace this functionality, change the value below with your full "translation model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Translation" class
        | - or at least implement the "Varbox\Contracts\TranslationModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('translation.model') OR app('\Varbox\Contracts\TranslationModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'translation_model' => \Varbox\Models\Translation::class,

        /*
        |
        | Concrete implementation for the "redirect model".
        | To extend or replace this functionality, change the value below with your full "redirect model" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Models\Redirect" class
        | - or at least implement the "Varbox\Contracts\RedirectModelContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('redirect.model') OR app('\Varbox\Contracts\RedirectModelContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'redirect_model' => \Varbox\Models\Redirect::class,

    ],

    /*
    | --------------------------------------------------------------------------------------------------------------
    | Controller Class Bindings
    | --------------------------------------------------------------------------------------------------------------
    */
    'controllers' => [

        /*
        |
        | Concrete implementation for the "dashboard controller".
        | To extend or replace this functionality, change the value below with your full "dashboard controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\DashboardController" class
        |
        */
        'dashboard_controller' => \Varbox\Controllers\DashboardController::class,

        /*
        |
        | Concrete implementation for the "login controller".
        | To extend or replace this functionality, change the value below with your full "login controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\LoginController" class
        |
        */
        'login_controller' => \Varbox\Controllers\LoginController::class,

        /*
        |
        | Concrete implementation for the "password forgot controller".
        | To extend or replace this functionality, change the value below with your full "password forgot controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\ForgotPasswordController" class
        |
        */
        'password_forgot_controller' => \Varbox\Controllers\ForgotPasswordController::class,

        /*
        |
        | Concrete implementation for the "password reset controller".
        | To extend or replace this functionality, change the value below with your full "password reset controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\ResetPasswordController" class
        |
        */
        'password_reset_controller' => \Varbox\Controllers\ResetPasswordController::class,

        /*
        |
        | Concrete implementation for the "users controller".
        | To extend or replace this functionality, change the value below with your full "users controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\UsersController" class
        |
        */
        'users_controller' => \Varbox\Controllers\UsersController::class,

        /*
        |
        | Concrete implementation for the "admins controller".
        | To extend or replace this functionality, change the value below with your full "admins controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\AdminsController" class
        |
        */
        'admins_controller' => \Varbox\Controllers\AdminsController::class,

        /*
        |
        | Concrete implementation for the "roles controller".
        | To extend or replace this functionality, change the value below with your full "roles controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\RolesController" class
        |
        */
        'roles_controller' => \Varbox\Controllers\RolesController::class,

        /*
        |
        | Concrete implementation for the "permissions controller".
        | To extend or replace this functionality, change the value below with your full "permissions controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\PermissionsController" class
        |
        */
        'permissions_controller' => \Varbox\Controllers\PermissionsController::class,

        /*
        |
        | Concrete implementation for the "upload controller".
        | To extend or replace this functionality, change the value below with your full "upload controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\UploadController" class
        |
        */
        'upload_controller' => \Varbox\Controllers\UploadController::class,

        /*
        |
        | Concrete implementation for the "uploads controller".
        | To extend or replace this functionality, change the value below with your full "uploads controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\UploadsController" class
        |
        */
        'uploads_controller' => \Varbox\Controllers\UploadsController::class,

        /*
        |
        | Concrete implementation for the "revisions controller".
        | To extend or replace this functionality, change the value below with your full "revisions controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\RevisionsController" class
        |
        */
        'revisions_controller' => \Varbox\Controllers\RevisionsController::class,

        /*
        |
        | Concrete implementation for the "notifications controller".
        | To extend or replace this functionality, change the value below with your full "notifications controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\NotificationsController" class
        |
        */
        'notifications_controller' => \Varbox\Controllers\NotificationsController::class,

        /*
        |
        | Concrete implementation for the "activity controller".
        | To extend or replace this functionality, change the value below with your full "activity controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\ActivityController" class
        |
        */
        'activity_controller' => \Varbox\Controllers\ActivityController::class,

        /*
        |
        | Concrete implementation for the "countries controller".
        | To extend or replace this functionality, change the value below with your full "countries controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\CountriesController" class
        |
        */
        'countries_controller' => \Varbox\Controllers\CountriesController::class,

        /*
        |
        | Concrete implementation for the "states controller".
        | To extend or replace this functionality, change the value below with your full "states controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\StatesController" class
        |
        */
        'states_controller' => \Varbox\Controllers\StatesController::class,

        /*
        |
        | Concrete implementation for the "cities controller".
        | To extend or replace this functionality, change the value below with your full "cities controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\CitiesController" class
        |
        */
        'cities_controller' => \Varbox\Controllers\CitiesController::class,

        /*
        |
        | Concrete implementation for the "addresses controller".
        | To extend or replace this functionality, change the value below with your full "addresses controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\AddressesController" class
        |
        */
        'addresses_controller' => \Varbox\Controllers\AddressesController::class,

        /*
        |
        | Concrete implementation for the "configs controller".
        | To extend or replace this functionality, change the value below with your full "configs controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\ConfigsController" class
        |
        */
        'configs_controller' => \Varbox\Controllers\ConfigsController::class,

        /*
        |
        | Concrete implementation for the "backups controller".
        | To extend or replace this functionality, change the value below with your full "backups controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\BackupsController" class
        |
        */
        'backups_controller' => \Varbox\Controllers\BackupsController::class,

        /*
        |
        | Concrete implementation for the "errors controller".
        | To extend or replace this functionality, change the value below with your full "errors controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\ErrorsController" class
        |
        */
        'errors_controller' => \Varbox\Controllers\ErrorsController::class,

        /*
        |
        | Concrete implementation for the "wysiwyg controller".
        | To extend or replace this functionality, change the value below with your full "wysiwyg controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\WysiwygController" class
        |
        */
        'wysiwyg_controller' => \Varbox\Controllers\WysiwygController::class,

        /*
        |
        | Concrete implementation for the "emails controller".
        | To extend or replace this functionality, change the value below with your full "emails controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\EmailsController" class
        |
        */
        'emails_controller' => \Varbox\Controllers\EmailsController::class,

        /*
        |
        | Concrete implementation for the "blocks controller".
        | To extend or replace this functionality, change the value below with your full "blocks controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\BlocksController" class
        |
        */
        'blocks_controller' => \Varbox\Controllers\BlocksController::class,

        /*
        |
        | Concrete implementation for the "pages controller".
        | To extend or replace this functionality, change the value below with your full "pages controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\PagesController" class
        |
        */
        'pages_controller' => \Varbox\Controllers\PagesController::class,

        /*
        |
        | Concrete implementation for the "pages tree controller".
        | To extend or replace this functionality, change the value below with your full "pages tree controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\PagesTreeController" class
        |
        */
        'pages_tree_controller' => \Varbox\Controllers\PagesTreeController::class,

        /*
        |
        | Concrete implementation for the "menus controller".
        | To extend or replace this functionality, change the value below with your full "menus controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\MenusController" class
        |
        */
        'menus_controller' => \Varbox\Controllers\MenusController::class,

        /*
        |
        | Concrete implementation for the "menus tree controller".
        | To extend or replace this functionality, change the value below with your full "menus tree controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\MenusTreeController" class
        |
        */
        'menus_tree_controller' => \Varbox\Controllers\MenusTreeController::class,

        /*
        |
        | Concrete implementation for the "languages controller".
        | To extend or replace this functionality, change the value below with your full "languages controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\LanguagesController" class
        |
        */
        'languages_controller' => \Varbox\Controllers\LanguagesController::class,

        /*
        |
        | Concrete implementation for the "translations controller".
        | To extend or replace this functionality, change the value below with your full "translations controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\TranslationsController" class
        |
        */
        'translations_controller' => \Varbox\Controllers\TranslationsController::class,

        /*
        |
        | Concrete implementation for the "redirects controller".
        | To extend or replace this functionality, change the value below with your full "redirects controller" FQN.
        |
        | Your class will have to:
        | - extend the "Varbox\Controllers\RedirectsController" class
        |
        */
        'redirects_controller' => \Varbox\Controllers\RedirectsController::class,

    ],

    'form_requests' => [

        /*
        |
        | Concrete implementation for the "user form request".
        | To extend or replace this functionality, change the value below with your full "user form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\UserRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'user_form_request' => \Varbox\Requests\UserRequest::class,

        /*
        |
        | Concrete implementation for the "admin form request".
        | To extend or replace this functionality, change the value below with your full "admin form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\AdminRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'admin_form_request' => \Varbox\Requests\AdminRequest::class,

        /*
        |
        | Concrete implementation for the "role form request".
        | To extend or replace this functionality, change the value below with your full "role form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\RoleRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'role_form_request' => \Varbox\Requests\RoleRequest::class,

        /*
        |
        | Concrete implementation for the "permission form request".
        | To extend or replace this functionality, change the value below with your full "permission form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\PermissionRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'permission_form_request' => \Varbox\Requests\PermissionRequest::class,

        /*
        |
        | Concrete implementation for the "login form request".
        | To extend or replace this functionality, change the value below with your full "login form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\LoginRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'login_form_request' => \Varbox\Requests\LoginRequest::class,

        /*
        |
        | Concrete implementation for the "password forgot form request".
        | To extend or replace this functionality, change the value below with your full "password forgot form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\PasswordForgotRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'password_forgot_form_request' => \Varbox\Requests\PasswordForgotRequest::class,

        /*
        |
        | Concrete implementation for the "password reset form request".
        | To extend or replace this functionality, change the value below with your full "password reset form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\PasswordResetRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'password_reset_form_request' => \Varbox\Requests\PasswordResetRequest::class,

        /*
        |
        | Concrete implementation for the "upload form request".
        | To extend or replace this functionality, change the value below with your full "upload form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\UploadRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'upload_form_request' => \Varbox\Requests\UploadRequest::class,

        /*
        |
        | Concrete implementation for the "country form request".
        | To extend or replace this functionality, change the value below with your full "country form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\CountryRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'country_form_request' => \Varbox\Requests\CountryRequest::class,

        /*
        |
        | Concrete implementation for the "state form request".
        | To extend or replace this functionality, change the value below with your full "state form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\StateRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'state_form_request' => \Varbox\Requests\StateRequest::class,

        /*
        |
        | Concrete implementation for the "city form request".
        | To extend or replace this functionality, change the value below with your full "city form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\CityRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'city_form_request' => \Varbox\Requests\CityRequest::class,

        /*
        |
        | Concrete implementation for the "address form request".
        | To extend or replace this functionality, change the value below with your full "address form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\AddressRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'address_form_request' => \Varbox\Requests\AddressRequest::class,

        /*
        |
        | Concrete implementation for the "config form request".
        | To extend or replace this functionality, change the value below with your full "config form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\ConfigRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'config_form_request' => \Varbox\Requests\ConfigRequest::class,

        /*
        |
        | Concrete implementation for the "email form request".
        | To extend or replace this functionality, change the value below with your full "email form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\EmailRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'email_form_request' => \Varbox\Requests\EmailRequest::class,

        /*
        |
        | Concrete implementation for the "block form request".
        | To extend or replace this functionality, change the value below with your full "block form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\BlockRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'block_form_request' => \Varbox\Requests\BlockRequest::class,

        /*
        |
        | Concrete implementation for the "page form request".
        | To extend or replace this functionality, change the value below with your full "page form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\PageRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'page_form_request' => \Varbox\Requests\PageRequest::class,

        /*
        |
        | Concrete implementation for the "menu form request".
        | To extend or replace this functionality, change the value below with your full "menu form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\MenuRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'menu_form_request' => \Varbox\Requests\MenuRequest::class,

        /*
        |
        | Concrete implementation for the "language form request".
        | To extend or replace this functionality, change the value below with your full "language form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\LanguageRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'language_form_request' => \Varbox\Requests\LanguageRequest::class,

        /*
        |
        | Concrete implementation for the "translation form request".
        | To extend or replace this functionality, change the value below with your full "translation form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\TranslationRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'translation_form_request' => \Varbox\Requests\TranslationRequest::class,

        /*
        |
        | Concrete implementation for the "redirect form request".
        | To extend or replace this functionality, change the value below with your full "redirect form request" FQN.
        |
        | Your class will have to (first options is recommended):
        | - extend the "\Varbox\Requests\RedirectRequest" class
        | - or extend the "\Illuminate\Foundation\Http\FormRequest" class.
        |
        */
        'redirect_form_request' => \Varbox\Requests\RedirectRequest::class,

    ],

    /*
    | --------------------------------------------------------------------------------------------------------------
    | Middleware Class Bindings
    | --------------------------------------------------------------------------------------------------------------
    */
    'middleware' => [

        /*
        |
        | Concrete implementation for the "authenticate session middleware".
        | To extend or replace this functionality, change the value below with your full "authenticate session middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.auth.session"
        |
        */
        'authenticate_session_middleware' => \Varbox\Middleware\AuthenticateSession::class,

        /*
        |
        | Concrete implementation for the "authenticated middleware".
        | To extend or replace this functionality, change the value below with your full "authenticated middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.authenticated"
        |
        */
        'authenticated_middleware' => \Varbox\Middleware\Authenticated::class,

        /*
        |
        | Concrete implementation for the "not authenticated middleware".
        | To extend or replace this functionality, change the value below with your full "not authenticated middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.not.authenticated"
        |
        */
        'not_authenticated_middleware' => \Varbox\Middleware\NotAuthenticated::class,

        /*
        |
        | Concrete implementation for the "check roles middleware".
        | To extend or replace this functionality, change the value below with your full "check roles middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.check.roles"
        |
        */
        'check_roles_middleware' => \Varbox\Middleware\CheckRoles::class,

        /*
        |
        | Concrete implementation for the "check permissions middleware".
        | To extend or replace this functionality, change the value below with your full "check permissions middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.check.permissions"
        |
        */
        'check_permissions_middleware' => \Varbox\Middleware\CheckPermissions::class,

        /*
        |
        | Concrete implementation for the "overwrite configs middleware".
        | To extend or replace this functionality, change the value below with your full "overwrite configs middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.overwrite.configs"
        |
        */
        'overwrite_configs_middleware' => \Varbox\Middleware\OverwriteConfigs::class,

        /*
        |
        | Concrete implementation for the "redirect requests middleware".
        | To extend or replace this functionality, change the value below with your full "redirect requests middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.redirect.requests"
        |
        */
        'redirect_requests_middleware' => \Varbox\Middleware\RedirectRequests::class,

        /*
        |
        | Concrete implementation for the "persist locale middleware".
        | To extend or replace this functionality, change the value below with your full "persist locale middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.persist.locale"
        |
        */
        'persist_locale_middleware' => \Varbox\Middleware\PersistLocale::class,

        /*
        |
        | Concrete implementation for the "is translatable middleware".
        | To extend or replace this functionality, change the value below with your full "is translatable middleware" FQN.
        |
        | Once the value below is changed, your new middleware will be automatically registered with the application.
        |
        | You can then use the middleware by its alias: "varbox.is.translatable"
        |
        */
        'is_translatable_middleware' => \Varbox\Middleware\IsTranslatable::class,

    ],

    /*
    | --------------------------------------------------------------------------------------------------------------
    | Helper Class Bindings
    | --------------------------------------------------------------------------------------------------------------
    */
    'helpers' => [

        /*
        |
        | Concrete implementation for the "admin form helper".
        | To extend or replace this functionality, change the value below with your full "admin form helper" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Helpers\AdminFormHelper" class
        | - or at least implement the "Varbox\Contracts\AdminFormHelperContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - form_admin() OR app('admin_form.helper') OR app('\Varbox\Contracts\AdminFormHelperContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'admin_form_helper' => \Varbox\Helpers\AdminFormHelper::class,

        /*
        |
        | Concrete implementation for the "admin form lang helper".
        | To extend or replace this functionality, change the value below with your full "admin form lang helper" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Helpers\AdminFormLangHelper" class
        | - or at least implement the "Varbox\Contracts\AdminFormLangHelperContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - form_admin_lang() OR app('admin_form_lang.helper') OR app('\Varbox\Contracts\AdminFormLangHelperContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'admin_form_lang_helper' => \Varbox\Helpers\AdminFormLangHelper::class,

        /*
        |
        | Concrete implementation for the "admin menu helper".
        | To extend or replace this functionality, change the value below with your full "admin menu helper" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Helpers\MenuHelper" class
        | - or at least implement the "Varbox\Contracts\MenuHelperContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - menu() OR app('menu.helper') OR app('\Varbox\Contracts\MenuHelperContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'menu_helper' => \Varbox\Helpers\MenuHelper::class,

        /*
        |
        | Concrete implementation for the "flash helper".
        | To extend or replace this functionality, change the value below with your full "flash helper" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Helpers\FlashHelper" class
        | - or at least implement the "Varbox\Contracts\FlashHelperContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - flash() OR app('flash.helper') OR app('\Varbox\Contracts\FlashHelperContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'flash_helper' => \Varbox\Helpers\FlashHelper::class,

        /*
        |
        | Concrete implementation for the "meta helper".
        | To extend or replace this functionality, change the value below with your full "meta helper" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Helpers\MetaHelper" class
        | - or at least implement the "Varbox\Contracts\MetaHelperContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - meta() OR app('meta.helper') OR app('\Varbox\Contracts\MetaHelperContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'meta_helper' => \Varbox\Helpers\MetaHelper::class,

        /*
        |
        | Concrete implementation for the "uploaded helper".
        | To extend or replace this functionality, change the value below with your full "uploaded helper" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Helpers\UploadedHelper" class
        | - or at least implement the "Varbox\Contracts\UploadedHelperContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - uploaded() OR app('uploaded.helper') OR app('\Varbox\Contracts\UploadedHelperContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'uploaded_helper' => \Varbox\Helpers\UploadedHelper::class,

        /*
        |
        | Concrete implementation for the "uploader helper".
        | To extend or replace this functionality, change the value below with your full "uploader helper" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Helpers\UploaderHelper" class
        | - or at least implement the "Varbox\Contracts\UploaderHelperContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - uploader() OR app('uploader.helper') OR app('\Varbox\Contracts\UploaderHelperContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'uploader_helper' => \Varbox\Helpers\UploaderHelper::class,

        /*
        |
        | Concrete implementation for the "uploader lang helper".
        | To extend or replace this functionality, change the value below with your full "uploader lang helper" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Helpers\UploaderLangHelper" class
        | - or at least implement the "Varbox\Contracts\UploaderLangHelperContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - uploader_lang() OR app('uploader_lang.helper') OR app('\Varbox\Contracts\UploaderLangHelperContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'uploader_lang_helper' => \Varbox\Helpers\UploaderLangHelper::class,

    ],

    /*
    | --------------------------------------------------------------------------------------------------------------
    | View Composers Class Bindings
    | --------------------------------------------------------------------------------------------------------------
    */
    'view_composers' => [

        /*
        |
        | Concrete implementation for the "admin menu view composer".
        | To extend or replace this functionality, change the value below with your full "admin menu view composer" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Composers\AdminMenuComposer" class
        | - or at least implement the following methods: compose()
        |
        */
        'admin_menu_view_composer' => \App\Http\Composers\AdminMenuComposer::class,

        /*
        |
        | Concrete implementation for the "notifications view composer".
        | To extend or replace this functionality, change the value below with your full "notifications view composer" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Composers\NotificationsComposer" class
        | - or at least implement the following methods: compose()
        |
        */
        'notifications_view_composer' => \Varbox\Composers\NotificationsComposer::class,

        /*
        |
        | Concrete implementation for the "languages view composer".
        | To extend or replace this functionality, change the value below with your full "languages view composer" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Composers\LanguagesComposer" class
        | - or at least implement the following methods: compose()
        |
        */
        'languages_view_composer' => \Varbox\Composers\LanguagesComposer::class,

    ],

    /*
    | --------------------------------------------------------------------------------------------------------------
    | Filter Class Bindings
    | --------------------------------------------------------------------------------------------------------------
    */
    'filters' => [

        /*
        |
        | Concrete implementation for the "activity filter".
        | To extend or replace this functionality, change the value below with your full "activity filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\ActivityFilter" class
        | - or at least implement the "Varbox\Contracts\ActivityFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\ActivityFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'activity_filter' => \Varbox\Filters\ActivityFilter::class,

        /*
        |
        | Concrete implementation for the "address filter".
        | To extend or replace this functionality, change the value below with your full "address filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\AddressFilter" class
        | - or at least implement the "Varbox\Contracts\AddressFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\AddressFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'address_filter' => \Varbox\Filters\AddressFilter::class,

        /*
        |
        | Concrete implementation for the "admin filter".
        | To extend or replace this functionality, change the value below with your full "admin filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\AdminFilter" class
        | - or at least implement the "Varbox\Contracts\AdminFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\AdminFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'admin_filter' => \Varbox\Filters\AdminFilter::class,

        /*
        |
        | Concrete implementation for the "backup filter".
        | To extend or replace this functionality, change the value below with your full "backup filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\BackupFilter" class
        | - or at least implement the "Varbox\Contracts\BackupFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\BackupFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'backup_filter' => \Varbox\Filters\BackupFilter::class,

        /*
        |
        | Concrete implementation for the "city filter".
        | To extend or replace this functionality, change the value below with your full "city filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\CityFilter" class
        | - or at least implement the "Varbox\Contracts\CityFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\CityFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'city_filter' => \Varbox\Filters\CityFilter::class,

        /*
        |
        | Concrete implementation for the "config filter".
        | To extend or replace this functionality, change the value below with your full "config filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\ConfigFilter" class
        | - or at least implement the "Varbox\Contracts\ConfigFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\ConfigFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'config_filter' => \Varbox\Filters\ConfigFilter::class,

        /*
        |
        | Concrete implementation for the "country filter".
        | To extend or replace this functionality, change the value below with your full "country filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\CountryFilter" class
        | - or at least implement the "Varbox\Contracts\CountryFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\CountryFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'country_filter' => \Varbox\Filters\CountryFilter::class,

        /*
        |
        | Concrete implementation for the "email filter".
        | To extend or replace this functionality, change the value below with your full "email filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\EmailFilter" class
        | - or at least implement the "Varbox\Contracts\EmailFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - OR app('\Varbox\Contracts\EmailFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'email_filter' => \Varbox\Filters\EmailFilter::class,

        /*
        |
        | Concrete implementation for the "error filter".
        | To extend or replace this functionality, change the value below with your full "error filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\ErrorFilter" class
        | - or at least implement the "Varbox\Contracts\ErrorFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\ErrorFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'error_filter' => \Varbox\Filters\ErrorFilter::class,

        /*
        |
        | Concrete implementation for the "language filter".
        | To extend or replace this functionality, change the value below with your full "language filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\LanguageFilter" class
        | - or at least implement the "Varbox\Contracts\LanguageFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\LanguageFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'language_filter' => \Varbox\Filters\LanguageFilter::class,

        /*
        |
        | Concrete implementation for the "menu filter".
        | To extend or replace this functionality, change the value below with your full "menu filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\MenuFilter" class
        | - or at least implement the "Varbox\Contracts\MenuFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\MenuFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'menu_filter' => \Varbox\Filters\MenuFilter::class,

        /*
        |
        | Concrete implementation for the "page filter".
        | To extend or replace this functionality, change the value below with your full "page filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\PageFilter" class
        | - or at least implement the "Varbox\Contracts\PageFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\PageFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'page_filter' => \Varbox\Filters\PageFilter::class,

        /*
        |
        | Concrete implementation for the "permission filter".
        | To extend or replace this functionality, change the value below with your full "permission filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\PermissionFilter" class
        | - or at least implement the "Varbox\Contracts\PermissionFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\PermissionFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'permission_filter' => \Varbox\Filters\PermissionFilter::class,

        /*
        |
        | Concrete implementation for the "redirect filter".
        | To extend or replace this functionality, change the value below with your full "redirect filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\RedirectFilter" class
        | - or at least implement the "Varbox\Contracts\RedirectFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\RedirectFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'redirect_filter' => \Varbox\Filters\RedirectFilter::class,

        /*
        |
        | Concrete implementation for the "role filter".
        | To extend or replace this functionality, change the value below with your full "role filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\RoleFilter" class
        | - or at least implement the "Varbox\Contracts\RoleFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\RoleFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'role_filter' => \Varbox\Filters\RoleFilter::class,

        /*
        |
        | Concrete implementation for the "state filter".
        | To extend or replace this functionality, change the value below with your full "state filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\StateFilter" class
        | - or at least implement the "Varbox\Contracts\StateFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\StateFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'state_filter' => \Varbox\Filters\StateFilter::class,

        /*
        |
        | Concrete implementation for the "translation filter".
        | To extend or replace this functionality, change the value below with your full "translation filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\TranslationFilter" class
        | - or at least implement the "Varbox\Contracts\TranslationFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\TranslationFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'translation_filter' => \Varbox\Filters\TranslationFilter::class,

        /*
        |
        | Concrete implementation for the "upload filter".
        | To extend or replace this functionality, change the value below with your full "upload filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\UploadFilter" class
        | - or at least implement the "Varbox\Contracts\UploadFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\UploadFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'upload_filter' => \Varbox\Filters\UploadFilter::class,

        /*
        |
        | Concrete implementation for the "user filter".
        | To extend or replace this functionality, change the value below with your full "user filter" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Filters\UserFilter" class
        | - or at least implement the "Varbox\Contracts\UserFilterContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\UserFilterContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'user_filter' => \Varbox\Filters\UserFilter::class,

    ],

    /*
    | --------------------------------------------------------------------------------------------------------------
    | Sort Class Bindings
    | --------------------------------------------------------------------------------------------------------------
    */
    'sorts' => [

        /*
        |
        | Concrete implementation for the "activity sort".
        | To extend or replace this functionality, change the value below with your full "activity sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\ActivitySort" class
        | - or at least implement the "Varbox\Contracts\ActivitySortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\ActivitySortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'activity_sort' => \Varbox\Sorts\ActivitySort::class,

        /*
        |
        | Concrete implementation for the "address sort".
        | To extend or replace this functionality, change the value below with your full "address sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\AddressSort" class
        | - or at least implement the "Varbox\Contracts\AddressSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\AddressSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'address_sort' => \Varbox\Sorts\AddressSort::class,

        /*
        |
        | Concrete implementation for the "admin sort".
        | To extend or replace this functionality, change the value below with your full "admin sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\AdminSort" class
        | - or at least implement the "Varbox\Contracts\AdminSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\AdminSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'admin_sort' => \Varbox\Sorts\AdminSort::class,

        /*
        |
        | Concrete implementation for the "backup sort".
        | To extend or replace this functionality, change the value below with your full "backup sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\BackupSort" class
        | - or at least implement the "Varbox\Contracts\BackupSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\BackupSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'backup_sort' => \Varbox\Sorts\BackupSort::class,

        /*
        |
        | Concrete implementation for the "city sort".
        | To extend or replace this functionality, change the value below with your full "city sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\CitySort" class
        | - or at least implement the "Varbox\Contracts\CitySortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\CitySortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'city_sort' => \Varbox\Sorts\CitySort::class,

        /*
        |
        | Concrete implementation for the "config sort".
        | To extend or replace this functionality, change the value below with your full "config sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\ConfigSort" class
        | - or at least implement the "Varbox\Contracts\ConfigSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\ConfigSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'config_sort' => \Varbox\Sorts\ConfigSort::class,

        /*
        |
        | Concrete implementation for the "country sort".
        | To extend or replace this functionality, change the value below with your full "country sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\CountrySort" class
        | - or at least implement the "Varbox\Contracts\CountrySortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\CountrySortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'country_sort' => \Varbox\Sorts\CountrySort::class,

        /*
        |
        | Concrete implementation for the "email sort".
        | To extend or replace this functionality, change the value below with your full "email sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\EmailSort" class
        | - or at least implement the "Varbox\Contracts\EmailSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - OR app('\Varbox\Contracts\EmailSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'email_sort' => \Varbox\Sorts\EmailSort::class,

        /*
        |
        | Concrete implementation for the "error sort".
        | To extend or replace this functionality, change the value below with your full "error sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\ErrorSort" class
        | - or at least implement the "Varbox\Contracts\ErrorSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\ErrorSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'error_sort' => \Varbox\Sorts\ErrorSort::class,

        /*
        |
        | Concrete implementation for the "language sort".
        | To extend or replace this functionality, change the value below with your full "language sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\LanguageSort" class
        | - or at least implement the "Varbox\Contracts\LanguageSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\LanguageSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'language_sort' => \Varbox\Sorts\LanguageSort::class,

        /*
        |
        | Concrete implementation for the "menu sort".
        | To extend or replace this functionality, change the value below with your full "menu sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\MenuSort" class
        | - or at least implement the "Varbox\Contracts\MenuSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\MenuSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'menu_sort' => \Varbox\Sorts\MenuSort::class,

        /*
        |
        | Concrete implementation for the "page sort".
        | To extend or replace this functionality, change the value below with your full "page sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\PageSort" class
        | - or at least implement the "Varbox\Contracts\PageSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\PageSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'page_sort' => \Varbox\Sorts\PageSort::class,

        /*
        |
        | Concrete implementation for the "permission sort".
        | To extend or replace this functionality, change the value below with your full "permission sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\PermissionSort" class
        | - or at least implement the "Varbox\Contracts\PermissionSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\PermissionSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'permission_sort' => \Varbox\Sorts\PermissionSort::class,

        /*
        |
        | Concrete implementation for the "redirect sort".
        | To extend or replace this functionality, change the value below with your full "redirect sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\RedirectSort" class
        | - or at least implement the "Varbox\Contracts\RedirectSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\RedirectSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'redirect_sort' => \Varbox\Sorts\RedirectSort::class,

        /*
        |
        | Concrete implementation for the "role sort".
        | To extend or replace this functionality, change the value below with your full "role sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\RoleSort" class
        | - or at least implement the "Varbox\Contracts\RoleSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\RoleSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'role_sort' => \Varbox\Sorts\RoleSort::class,

        /*
        |
        | Concrete implementation for the "state sort".
        | To extend or replace this functionality, change the value below with your full "state sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\StateSort" class
        | - or at least implement the "Varbox\Contracts\StateSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\StateSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'state_sort' => \Varbox\Sorts\StateSort::class,

        /*
        |
        | Concrete implementation for the "translation sort".
        | To extend or replace this functionality, change the value below with your full "translation sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\TranslationSort" class
        | - or at least implement the "Varbox\Contracts\TranslationSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\TranslationSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'translation_sort' => \Varbox\Sorts\TranslationSort::class,

        /*
        |
        | Concrete implementation for the "upload sort".
        | To extend or replace this functionality, change the value below with your full "upload sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\UploadSort" class
        | - or at least implement the "Varbox\Contracts\UploadSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\UploadSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'upload_sort' => \Varbox\Sorts\UploadSort::class,

        /*
        |
        | Concrete implementation for the "user sort".
        | To extend or replace this functionality, change the value below with your full "user sort" FQN.
        |
        | Your class will have to (first option is recommended):
        | - extend the "Varbox\Sorts\UserSort" class
        | - or at least implement the "Varbox\Contracts\UserSortContract" interface.
        |
        | Regardless of the concrete implementation below, you can still use it like:
        | - app('\Varbox\Contracts\UserSortContract')
        | - or you could even use your own class as a direct implementation
        |
        */
        'user_sort' => \Varbox\Sorts\UserSort::class,

    ],

];
