## 🌟 WordPress Custom API Plugin for WordCamp Malaysia 2023

This plugin is free for all. This is for study purpose. If you wanted to extend the functionalities, please do fork or clone the Repository.

### 📗 How to change the endpoint?

1. To change the route name, please go to the plugin folder `sm-api-route/routes/your-desire-file.php`.
2. Then at the `register_rest_route` function, please enter your desire endpoint name.
3. Example :

```
register_rest_route('route_namespace/v1', 'route-endpoint', [
    'methods' => 'POST',
    'callback' => 'your-callback'
]);
```
