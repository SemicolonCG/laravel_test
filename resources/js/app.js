require("./bootstrap");

require("alpinejs");

//system management dropdown

var system_dropdown_btn = document.getElementById("system-drop-down-Btn");

var system_dropdown_content = document.getElementById(
    "system_drop_down_content"
);

system_dropdown_btn.onclick = function () {
    dropDownSys();
};

function dropDownSys() {
    system_dropdown_content.classList.toggle("show");
}

//user management dropdown

var user_dropdown_btn = document.getElementById("user-drop-down-Btn");

var user_dropdown_content = document.getElementById("user_drop_down_content");

user_dropdown_btn.onclick = function () {
    dropDownUser();
};

function dropDownUser() {
    user_dropdown_content.classList.toggle("show");
}

//active on click

var activeTab = document.getElementsByClassName("sidebar-list");

activeTab.onclick = function () {
    pressTab();
};

function pressTab() {
    activeTab.classList.toggle("active");
}
