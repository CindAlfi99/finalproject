self.addEventListener("install", function(event) {
	event.waitUntil(
		caches.open("pwa").then(function(cache) {
			return cache.addAll([
				"/",
				"/asset/css/sb-admin-2.css",
				"/asset/css/bootstrap.min.css",
				"/asset/js/sb-admin-2.js",
				"/asset/js/order.js",
				"/script.js",
			]);
		})
	);
});

self.addEventListener("fetch", function(event) {
	event.respondWith(
		caches.open("pwa").then(function(cache) {
			return cache.match(event.request).then(function(response) {
				cache.addAll([event.request.url]);

				if(response) {
					return response;
				}

				return fetch(event.request);
			});
		})
	);
});