/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/users.js ***!
  \*******************************/
// Livewire.on("deleteTriggered", (CodePhysPerson, Zathetka, Name) => {
//     const proceed = confirm(`Are you sure you want to delete ${Name}`);
//
//     if (proceed) {
//         Livewire.emit("delete", Zathetka);
//     }
// });
Livewire.on("triggerCreate", function () {
  $("#user-modal").modal("show");
}); // window.addEventListener("user-saved", (event) => {
//     $("#user-modal").modal("hide");
//     alert(`User ${event.detail.user_name} was ${event.detail.action}!`);
// });
/******/ })()
;