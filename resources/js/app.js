import { intersect } from "@alpinejs/intersect";
import {
    Alpine,
    Livewire,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import "./bootstrap";

Alpine.plugin(intersect);
Livewire.start();
