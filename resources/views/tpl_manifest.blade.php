{
  "name": "{{ $club->name }}",
  "short_name": "{{ $club->server }}",
  "icons": [
    {
      "src": "./img/icons/{{ $club->server }}/icon-192x192.png",
      "sizes": "192x192",
      "type": "image/png"
    },
    {
      "src": "./img/icons/{{ $club->server }}/icon-512x512.png",
      "sizes": "512x512",
      "type": "image/png"
    }
  ],
  "start_url": "/",
  "display": "standalone",
  "background_color": "#000000",
  "theme_color": "{{ $club->color }}"
}