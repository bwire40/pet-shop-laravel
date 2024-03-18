import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";

import DataTable from 'datatables.net-dt';
// require( 'datatables.net-responsive' );

let table_pet_cat = new DataTable('#pet_cat', {
    responsive: true
});
let table_breed = new DataTable('#breed_table', {
    responsive: true
});
let table_pets = new DataTable('#pets_table', {
    responsive: true
});
let table_manage_adoption = new DataTable('#table_manage_adoption', {
    responsive: true
});
let table_acc_cat = new DataTable('#table_acc_cat', {
    responsive: true
});
let table_acc = new DataTable('#table_acc', {
    responsive: true
});
let table_users = new DataTable('#table_users', {
    responsive: true
});
let table_man_user_adoption = new DataTable('#table_man_user_adoption', {
    responsive: true
});
window.Alpine = Alpine;

Alpine.start();

// loader

window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    const content = document.querySelector(".content");

    const delayTime = 0;
    setTimeout(function () {
        content.classList.remove("hidden");
        loader.classList.add("loader-hidden");
    }, delayTime);
});
