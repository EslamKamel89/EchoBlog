import Echo from "laravel-echo";

import Pusher from "pusher-js";
Pusher.logToConsole = true;
window.Pusher = Pusher;

var echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    wsHost: import.meta.env.VITE_PUSHER_HOST,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? "https") === "https",
    enabledTransports: ["ws", "wss"],
    cluster: "eu",
    forceTLS: true,
});
window.Echo = echo;
// window.Echo.channel("posts").listen(".myevent", function () {
//     alert("hello world");
// });
