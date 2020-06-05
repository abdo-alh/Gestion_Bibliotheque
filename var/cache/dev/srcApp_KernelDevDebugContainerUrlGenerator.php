<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'hom' => [[], ['_controller' => 'App\\Controller\\routecontroller::index1'], [], [['text', '/']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\routecontroller::index'], [], [['text', '/home']], [], []],
        'categories' => [[], ['_controller' => 'App\\Controller\\routecontroller::categorie'], [], [['text', '/categories']], [], []],
        'books' => [[], ['_controller' => 'App\\Controller\\routecontroller::books'], [], [['text', '/books']], [], []],
        'filter_books' => [['id'], ['_controller' => 'App\\Controller\\routecontroller::filter'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/filter_books']], [], []],
        'filter_pagecat' => [['id'], ['_controller' => 'App\\Controller\\routecontroller::filter_books_from_page_cat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/filter_book']], [], []],
        'filter_pageaut' => [['id'], ['_controller' => 'App\\Controller\\routecontroller::filter_books_from_page_aut'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/filter_book_aut']], [], []],
        'book' => [['id'], ['_controller' => 'App\\Controller\\routecontroller::book'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book']], [], []],
        'comment' => [['id'], ['_controller' => 'App\\Controller\\routecontroller::comment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment']], [], []],
        'security_login' => [[], ['_controller' => 'App\\Controller\\routecontroller::customer_account'], [], [['text', '/customer_account']], [], []],
        'logout' => [[], ['_controller' => 'App\\Controller\\routecontroller::logout'], [], [['text', '/deconnexion']], [], []],
        'store_pages' => [[], ['_controller' => 'App\\Controller\\routecontroller::store_pages'], [], [['text', '/store_pages']], [], []],
        'contactus' => [[], ['_controller' => 'App\\Controller\\routecontroller::contactus'], [], [['text', '/contactus']], [], []],
        'about' => [[], ['_controller' => 'App\\Controller\\routecontroller::about'], [], [['text', '/about']], [], []],
        'contact' => [[], ['_controller' => 'App\\Controller\\routecontroller::register'], [], [['text', '/contact']], [], []],
        'inscription' => [[], ['_controller' => 'App\\Controller\\routecontroller::inscription'], [], [['text', '/inscription']], [], []],
        'authors' => [[], ['_controller' => 'App\\Controller\\routecontroller::authors'], [], [['text', '/authors']], [], []],
        'author_profile' => [['id'], ['_controller' => 'App\\Controller\\routecontroller::author'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/authors']], [], []],
        'activer' => [[], ['_controller' => 'App\\Controller\\routecontroller::activer'], [], [['text', '/admin/user/activer']], [], []],
        'my_dashboard' => [[], ['_controller' => 'App\\Controller\\routecontroller::my_dashboard'], [], [['text', '/my_dashboard']], [], []],
        'edit_my_profile' => [[], ['_controller' => 'App\\Controller\\routecontroller::edit_my_profile'], [], [['text', '/edit_my_profile']], [], []],
        'book_like' => [['id'], ['_controller' => 'App\\Controller\\routecontroller::like'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], []],
        'allcomment' => [[], ['_controller' => 'App\\Controller\\routecontroller::allcomment'], [], [['text', '/allcomment']], [], []],
        'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
        'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
        'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
        'api_books_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/books']], [], []],
        'api_books_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/books']], [], []],
        'api_books_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/books']], [], []],
        'api_books_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/books']], [], []],
        'api_books_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Book', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/books']], [], []],
        'api_auteurs_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/auteurs']], [], []],
        'api_auteurs_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/auteurs']], [], []],
        'api_auteurs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/auteurs']], [], []],
        'api_auteurs_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/auteurs']], [], []],
        'api_auteurs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Auteur', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/auteurs']], [], []],
        'api_book_likes_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/book_likes']], [], []],
        'api_book_likes_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/book_likes']], [], []],
        'api_book_likes_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/book_likes']], [], []],
        'api_book_likes_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/book_likes']], [], []],
        'api_book_likes_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BookLike', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/book_likes']], [], []],
        'api_categories_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categories']], [], []],
        'api_categories_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/categories']], [], []],
        'api_categories_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], []],
        'api_categories_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], []],
        'api_categories_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/categories']], [], []],
        'api_commentaires_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/commentaires']], [], []],
        'api_commentaires_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/commentaires']], [], []],
        'api_commentaires_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/commentaires']], [], []],
        'api_commentaires_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/commentaires']], [], []],
        'api_commentaires_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/commentaires']], [], []],
        'api_messages_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/messages']], [], []],
        'api_messages_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/messages']], [], []],
        'api_messages_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], []],
        'api_messages_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], []],
        'api_messages_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], []],
        'api_users_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], []],
        'api_users_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], []],
        'api_users_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
        'api_users_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
        'api_users_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
        'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
        'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}