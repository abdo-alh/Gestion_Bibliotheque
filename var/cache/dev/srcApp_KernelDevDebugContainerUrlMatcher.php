<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'hom', '_controller' => 'App\\Controller\\routecontroller::index1'], null, null, null, false, false, null]],
            '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\routecontroller::index'], null, null, null, false, false, null]],
            '/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\routecontroller::categorie'], null, null, null, false, false, null]],
            '/books' => [[['_route' => 'books', '_controller' => 'App\\Controller\\routecontroller::books'], null, null, null, false, false, null]],
            '/customer_account' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\routecontroller::customer_account'], null, null, null, false, false, null]],
            '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\routecontroller::logout'], null, null, null, false, false, null]],
            '/store_pages' => [[['_route' => 'store_pages', '_controller' => 'App\\Controller\\routecontroller::store_pages'], null, null, null, false, false, null]],
            '/contactus' => [[['_route' => 'contactus', '_controller' => 'App\\Controller\\routecontroller::contactus'], null, null, null, false, false, null]],
            '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\routecontroller::about'], null, null, null, false, false, null]],
            '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\routecontroller::register'], null, null, null, false, false, null]],
            '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\routecontroller::inscription'], null, null, null, false, false, null]],
            '/authors' => [[['_route' => 'authors', '_controller' => 'App\\Controller\\routecontroller::authors'], null, null, null, false, false, null]],
            '/admin/user/activer' => [[['_route' => 'activer', '_controller' => 'App\\Controller\\routecontroller::activer'], null, null, null, false, false, null]],
            '/my_dashboard' => [[['_route' => 'my_dashboard', '_controller' => 'App\\Controller\\routecontroller::my_dashboard'], null, null, null, false, false, null]],
            '/edit_my_profile' => [[['_route' => 'edit_my_profile', '_controller' => 'App\\Controller\\routecontroller::edit_my_profile'], null, null, null, false, false, null]],
            '/allcomment' => [[['_route' => 'allcomment', '_controller' => 'App\\Controller\\routecontroller::allcomment'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
            '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/filter_book(?'
                        .'|s/([^/]++)(*:194)'
                        .'|/([^/]++)(*:211)'
                        .'|_aut/([^/]++)(*:232)'
                    .')'
                    .'|/book/([^/]++)(*:255)'
                    .'|/comment/([^/]++)(*:280)'
                    .'|/a(?'
                        .'|uthors/([^/]++)(*:308)'
                        .'|pi(?'
                            .'|(?:/(index)(?:\\.([^/]++))?)?(*:349)'
                            .'|/(?'
                                .'|docs(?:\\.([^/]++))?(*:380)'
                                .'|c(?'
                                    .'|o(?'
                                        .'|ntexts/(.+)(?:\\.([^/]++))?(*:422)'
                                        .'|mmentaires(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:461)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:499)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ategories(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:540)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:578)'
                                        .')'
                                    .')'
                                .')'
                                .'|book(?'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:618)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:656)'
                                        .')'
                                    .')'
                                    .'|_likes(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:693)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:731)'
                                        .')'
                                    .')'
                                .')'
                                .'|auteurs(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:770)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:808)'
                                    .')'
                                .')'
                                .'|messages(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:847)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:885)'
                                    .')'
                                .')'
                                .'|users(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:921)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:959)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/post/([^/]++)/like(*:991)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            194 => [[['_route' => 'filter_books', '_controller' => 'App\\Controller\\routecontroller::filter'], ['id'], ['GET' => 0], null, false, true, null]],
            211 => [[['_route' => 'filter_pagecat', '_controller' => 'App\\Controller\\routecontroller::filter_books_from_page_cat'], ['id'], ['GET' => 0], null, false, true, null]],
            232 => [[['_route' => 'filter_pageaut', '_controller' => 'App\\Controller\\routecontroller::filter_books_from_page_aut'], ['id'], ['GET' => 0], null, false, true, null]],
            255 => [[['_route' => 'book', '_controller' => 'App\\Controller\\routecontroller::book'], ['id'], null, null, false, true, null]],
            280 => [[['_route' => 'comment', '_controller' => 'App\\Controller\\routecontroller::comment'], ['id'], null, null, false, true, null]],
            308 => [[['_route' => 'author_profile', '_controller' => 'App\\Controller\\routecontroller::author'], ['id'], null, null, false, true, null]],
            349 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
            380 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
            422 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
            461 => [
                [['_route' => 'api_commentaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_commentaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            499 => [
                [['_route' => 'api_commentaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_commentaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_commentaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            540 => [
                [['_route' => 'api_categories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_categories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            578 => [
                [['_route' => 'api_categories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_categories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_categories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            618 => [
                [['_route' => 'api_books_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_books_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            656 => [
                [['_route' => 'api_books_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_books_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_books_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            693 => [
                [['_route' => 'api_book_likes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_book_likes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            731 => [
                [['_route' => 'api_book_likes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_book_likes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_book_likes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            770 => [
                [['_route' => 'api_auteurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_auteurs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            808 => [
                [['_route' => 'api_auteurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_auteurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_auteurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            847 => [
                [['_route' => 'api_messages_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_messages_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            885 => [
                [['_route' => 'api_messages_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_messages_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_messages_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            921 => [
                [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            959 => [
                [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            991 => [[['_route' => 'book_like', '_controller' => 'App\\Controller\\routecontroller::like'], ['id'], ['GET' => 0], null, false, false, null]],
        ];
    }
}
