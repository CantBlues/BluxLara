<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection md5
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection principle
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection habbit_id
     * @property Grid\Column|Collection weight
     * @property Grid\Column|Collection img
     * @property Grid\Column|Collection audio
     * @property Grid\Column|Collection video
     * @property Grid\Column|Collection addr
     * @property Grid\Column|Collection aid
     * @property Grid\Column|Collection delay
     * @property Grid\Column|Collection host
     * @property Grid\Column|Collection net
     * @property Grid\Column|Collection ping
     * @property Grid\Column|Collection port
     * @property Grid\Column|Collection protocol
     * @property Grid\Column|Collection speed
     * @property Grid\Column|Collection tls
     * @property Grid\Column|Collection uid
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection display
     * @property Grid\Column|Collection ignore
     * @property Grid\Column|Collection package_name
     * @property Grid\Column|Collection appid
     * @property Grid\Column|Collection node
     * @property Grid\Column|Collection usage
     * @property Grid\Column|Collection classify
     * @property Grid\Column|Collection sort
     * @property Grid\Column|Collection date
     * @property Grid\Column|Collection mark
     * @property Grid\Column|Collection type_id
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection images
     * @property Grid\Column|Collection process_image
     *
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection md5(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection principle(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection habbit_id(string $label = null)
     * @method Grid\Column|Collection weight(string $label = null)
     * @method Grid\Column|Collection img(string $label = null)
     * @method Grid\Column|Collection audio(string $label = null)
     * @method Grid\Column|Collection video(string $label = null)
     * @method Grid\Column|Collection addr(string $label = null)
     * @method Grid\Column|Collection aid(string $label = null)
     * @method Grid\Column|Collection delay(string $label = null)
     * @method Grid\Column|Collection host(string $label = null)
     * @method Grid\Column|Collection net(string $label = null)
     * @method Grid\Column|Collection ping(string $label = null)
     * @method Grid\Column|Collection port(string $label = null)
     * @method Grid\Column|Collection protocol(string $label = null)
     * @method Grid\Column|Collection speed(string $label = null)
     * @method Grid\Column|Collection tls(string $label = null)
     * @method Grid\Column|Collection uid(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection display(string $label = null)
     * @method Grid\Column|Collection ignore(string $label = null)
     * @method Grid\Column|Collection package_name(string $label = null)
     * @method Grid\Column|Collection appid(string $label = null)
     * @method Grid\Column|Collection node(string $label = null)
     * @method Grid\Column|Collection usage(string $label = null)
     * @method Grid\Column|Collection classify(string $label = null)
     * @method Grid\Column|Collection sort(string $label = null)
     * @method Grid\Column|Collection date(string $label = null)
     * @method Grid\Column|Collection mark(string $label = null)
     * @method Grid\Column|Collection type_id(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection images(string $label = null)
     * @method Grid\Column|Collection process_image(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection version
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection username
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection md5
     * @property Show\Field|Collection path
     * @property Show\Field|Collection content
     * @property Show\Field|Collection principle
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection habbit_id
     * @property Show\Field|Collection weight
     * @property Show\Field|Collection img
     * @property Show\Field|Collection audio
     * @property Show\Field|Collection video
     * @property Show\Field|Collection addr
     * @property Show\Field|Collection aid
     * @property Show\Field|Collection delay
     * @property Show\Field|Collection host
     * @property Show\Field|Collection net
     * @property Show\Field|Collection ping
     * @property Show\Field|Collection port
     * @property Show\Field|Collection protocol
     * @property Show\Field|Collection speed
     * @property Show\Field|Collection tls
     * @property Show\Field|Collection uid
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection display
     * @property Show\Field|Collection ignore
     * @property Show\Field|Collection package_name
     * @property Show\Field|Collection appid
     * @property Show\Field|Collection node
     * @property Show\Field|Collection usage
     * @property Show\Field|Collection classify
     * @property Show\Field|Collection sort
     * @property Show\Field|Collection date
     * @property Show\Field|Collection mark
     * @property Show\Field|Collection type_id
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection images
     * @property Show\Field|Collection process_image
     *
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection md5(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection principle(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection habbit_id(string $label = null)
     * @method Show\Field|Collection weight(string $label = null)
     * @method Show\Field|Collection img(string $label = null)
     * @method Show\Field|Collection audio(string $label = null)
     * @method Show\Field|Collection video(string $label = null)
     * @method Show\Field|Collection addr(string $label = null)
     * @method Show\Field|Collection aid(string $label = null)
     * @method Show\Field|Collection delay(string $label = null)
     * @method Show\Field|Collection host(string $label = null)
     * @method Show\Field|Collection net(string $label = null)
     * @method Show\Field|Collection ping(string $label = null)
     * @method Show\Field|Collection port(string $label = null)
     * @method Show\Field|Collection protocol(string $label = null)
     * @method Show\Field|Collection speed(string $label = null)
     * @method Show\Field|Collection tls(string $label = null)
     * @method Show\Field|Collection uid(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection display(string $label = null)
     * @method Show\Field|Collection ignore(string $label = null)
     * @method Show\Field|Collection package_name(string $label = null)
     * @method Show\Field|Collection appid(string $label = null)
     * @method Show\Field|Collection node(string $label = null)
     * @method Show\Field|Collection usage(string $label = null)
     * @method Show\Field|Collection classify(string $label = null)
     * @method Show\Field|Collection sort(string $label = null)
     * @method Show\Field|Collection date(string $label = null)
     * @method Show\Field|Collection mark(string $label = null)
     * @method Show\Field|Collection type_id(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection images(string $label = null)
     * @method Show\Field|Collection process_image(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
