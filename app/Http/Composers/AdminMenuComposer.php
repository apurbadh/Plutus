<?php

namespace App\Http\Composers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Varbox\Helpers\MenuHelper;
use Varbox\Menu\MenuItem;

class AdminMenuComposer
{
    /**
     * @var Authenticatable
     */
    protected $user;

    /**
     * @var Collection
     */
    protected $permissions;

    /**
     * @param Authenticatable $user
     */
    public function __construct(Authenticatable $user)
    {
        $this->user = $user;
    }

    /**
     * Construct the admin menu.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $menu = menu()->make(function (MenuHelper $menu) {
            $menu->add(function (MenuItem $item) {
                $item->name('Home')->url(route('admin'))->data('icon', 'fa-home')->active('admin');
            });

            $menu->add(function ($item) use ($menu) {
                $auth = $item->name('Access Control')->data('icon', 'fa-sign-in-alt')
                    ->permissions('users-list', 'admins-list', 'roles-list', 'permissions-list', 'activity-list', 'notifications-list')
                    ->active('admin/users/*', 'admin/admins/*', 'admin/roles/*', 'admin/permissions/*', 'admin/activity/*', 'admin/notifications/*');

                $menu->child($auth, function (MenuItem $item) {
                    $item->name('Users')->url(route('admin.users.index'))->permissions('users-list')->active('admin/users/*');
                });

                $menu->child($auth, function (MenuItem $item) {
                    $item->name('Admins')->url(route('admin.admins.index'))->permissions('admins-list')->active('admin/admins/*');
                });

                $menu->child($auth, function (MenuItem $item) {
                    $item->name('Roles')->url(route('admin.roles.index'))->permissions('roles-list')->active('admin/roles/*');
                });

                $menu->child($auth, function (MenuItem $item) {
                    $item->name('Permissions')->url(route('admin.permissions.index'))->permissions('permissions-list')->active('admin/permissions/*');
                });

                $menu->child($auth, function (MenuItem $item) {
                    $item->name('Activity')->url(route('admin.activity.index'))->permissions('activity-list')->active('admin/activity/*');
                });

                $menu->child($auth, function (MenuItem $item) {
                    $item->name('Notifications')->url(route('admin.notifications.index'))->permissions('notifications-list')->active('admin/notifications/*');
                });
            });

            $menu->add(function ($item) use ($menu) {
                $cms = $item->name('Manage Content')->data('icon', 'fa-edit')
                    ->permissions('pages-list', 'menus-list', 'blocks-list', 'emails-list', 'layouts-list')
                    ->active('admin/pages/*', 'admin/menus/*', 'admin/blocks/*', 'admin/emails/*', 'admin/layouts/*');

                $menu->child($cms, function (MenuItem $item) {
                    $item->name('Pages')->url(route('admin.pages.index'))->permissions('pages-list')->active('admin/pages/*');
                });

                $menu->child($cms, function (MenuItem $item) {
                    $item->name('Menus')->url(route('admin.menus.locations'))->permissions('menus-list')->active('admin/menus/*');
                });

                $menu->child($cms, function (MenuItem $item) {
                    $item->name('Blocks')->url(route('admin.blocks.index'))->permissions('blocks-list')->active('admin/blocks/*');
                });

                $menu->child($cms, function (MenuItem $item) {
                    $item->name('Emails')->url(route('admin.emails.index'))->permissions('emails-list', 'aa')->active('admin/emails/*');
                });
            });

            $menu->add(function ($item) use ($menu) {
                $media = $item->name('Media Library')->data('icon', 'fa-copy')
                    ->permissions('uploads-list')
                    ->active('admin/uploads/*');

                $menu->child($media, function (MenuItem $item) {
                    $item->name('Uploads')->url(route('admin.uploads.index'))->permissions('uploads-list')->active('admin/uploads/*');
                });
            });

            $menu->add(function ($item) use ($menu) {
                $trans = $item->name('Multi Language')->data('icon', 'fa-globe-americas')
                    ->permissions('translations-list', 'languages-list')
                    ->active('admin/translations/*', 'admin/languages/*');

                $menu->child($trans, function (MenuItem $item) {
                    $item->name('Translations')->url(route('admin.translations.index'))->permissions('translations-list')->active('admin/translations/*');
                });

                $menu->child($trans, function (MenuItem $item) {
                    $item->name('Languages')->url(route('admin.languages.index'))->permissions('languages-list')->active('admin/languages/*');
                });
            });

            $menu->add(function ($item) use ($menu) {
                $geo = $item->name('Geo Location')->data('icon', 'fa-map-marker-alt')
                    ->permissions('countries-list', 'states-list', 'cities-list')
                    ->active('admin/countries/*', 'admin/states/*', 'admin/cities/*');

                $menu->child($geo, function (MenuItem $item) {
                    $item->name('Countries')->url(route('admin.countries.index'))->permissions('countries-list')->active('admin/countries/*');
                });

                $menu->child($geo, function (MenuItem $item) {
                    $item->name('States')->url(route('admin.states.index'))->permissions('states-list')->active('admin/states/*');
                });

                $menu->child($geo, function (MenuItem $item) {
                    $item->name('Cities')->url(route('admin.cities.index'))->permissions('cities-list')->active('admin/cities/*');
                });
            });

            $menu->add(function ($item) use ($menu) {
                $sys = $item->name('System Settings')->data('icon', 'fa-cog')
                    ->permissions('configs-list', 'redirects-list', 'errors-list', 'backups-list')
                    ->active('admin/config/*', 'admin/redirects/*', 'admin/errors/*', 'admin/backups/*');

                $menu->child($sys, function (MenuItem $item) {
                    $item->name('Configs')->url(route('admin.configs.index'))->permissions('configs-list')->active('admin/configs/*');
                });

                $menu->child($sys, function (MenuItem $item) {
                    $item->name('Redirects')->url(route('admin.redirects.index'))->permissions('redirects-list')->active('admin/redirects/*');
                });

                $menu->child($sys, function (MenuItem $item) {
                    $item->name('Errors')->url(route('admin.errors.index'))->permissions('errors-list')->active('admin/errors/*');
                });

                $menu->child($sys, function (MenuItem $item) {
                    $item->name('Backups')->url(route('admin.backups.index'))->permissions('backups-list')->active('admin/backups/*');
                });
            });
        })->filter(function (MenuItem $item) {
            return $this->user->isSuper() || $this->userHasAnyMenuPermission($item->permissions());
        });

        $view->with('menu', $menu);
    }

    /**
     * Determine if the user has any of the given permissions.
     *
     * @param array $permissions
     * @return bool
     */
    protected function userHasAnyMenuPermission(array $permissions = [])
    {
        if (empty($permissions)) {
            return true;
        }

        if (!$this->permissions) {
            $this->permissions = $this->user->getPermissions()->pluck('name');
        }

        foreach ($permissions as $permission) {
            if ($this->permissions->contains($permission)) {
                return true;
            }
        }

        return false;
    }
}
