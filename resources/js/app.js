import "./bootstrap";

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
import { intersect } from "@alpinejs/intersect";
import {
    Alpine,
    Livewire,
} from "../../vendor/livewire/livewire/dist/livewire.esm";

Alpine.plugin(intersect);
Livewire.start();
