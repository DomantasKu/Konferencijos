import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.css';
import JSConfetti from "js-confetti";
window.JSConfetti = JSConfetti;
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded and parsed');
    document.querySelectorAll('.datepicker').forEach(function(item) {
        flatpickr(item, {
            mode: 'range'
        });
    });
});


