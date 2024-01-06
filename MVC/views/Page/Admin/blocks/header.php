        <style>
.form-search-admin{
    display: flex;
}
.navbar-dark .navbar-nav .nav-link {
  color: white;
}
a.card {
  box-shadow: 2px 4px 20px 0px #d8d8d8;
}
a.card:hover {
  text-decoration: none;
  box-shadow: 2px 3px 25px 0px #dbdee0;
}
main {
  background-color: #ecececa4;
}
p .fa-caret-down {
  color: red;
}
li.nav-item {
  padding: 0 10px;
  white-space: nowrap;
}
.navbar-dark .navbar-nav .nav-link {
  color: white;
}
a.card {
    
  box-shadow: 2px 4px 20px 0px #d8d8d8;
}
a.card:hover {
  text-decoration: none;
  box-shadow: 2px 3px 25px 0px #dbdee0;
}
main {
  background-color: #ecececa4;
}
p .fa-caret-down {
  color: red;
}
td.descriptonSp {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  word-break: break-word;
  padding: 0.75rem 0.75rem 0;
}

/* CONTENt */
.modal-content {
  width: 200%;
  left: -50%;
}
td.address_user_truncate {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  word-break: break-word;
  padding-bottom: 0px;
}
.bg-header-admin{
    background-color: #404042;
    border-radius: 20px;
    width: 850px;
    margin: 20px auto;
}
.btn-outline-info{
    border-radius: 5px;
    border:0;

}
        </style>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-header-admin">
                <a class="navbar-brand" href="#">Ola  Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="<?=BASE_URL?>/Admin/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 19v-8.5a1 1 0 0 0-.4-.8l-7-5.25a1 1 0 0 0-1.2 0l-7 5.25a1 1 0 0 0-.4.8V19a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1"/></svg></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASE_URL?>/Admin/category"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" fill-rule="evenodd" d="M17 3a4 4 0 1 0 0 8a4 4 0 0 0 0-8M3 17a4 4 0 1 1 8 0a4 4 0 0 1-8 0m10-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v5a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2zM3 4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" clip-rule="evenodd"/></svg></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASE_URL?>/Admin/brand"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><path fill="white" d="M114.59 188A52 52 0 0 1 12 176a51.54 51.54 0 0 1 10.41-31.21a12 12 0 1 1 19.18 14.41A27.74 27.74 0 0 0 36 176a28 28 0 0 0 56 0a12 12 0 0 1 12-12h88a12 12 0 0 1 0 24Zm-56.88-1.78a12 12 0 0 0 16.51-3.93l43-69.94a12 12 0 0 0-3.93-16.51a28 28 0 1 1 40.34-35.06a12 12 0 1 0 22-9.59a52 52 0 1 0-84.42 57.62l-37.47 60.9a12 12 0 0 0 3.97 16.51M192 124a51.89 51.89 0 0 0-16.3 2.62L138.22 65.7a12 12 0 0 0-20.44 12.58l43 69.93a12 12 0 0 0 16.52 3.93A28 28 0 1 1 192 204a12 12 0 0 0 0 24a52 52 0 0 0 0-104"/></svg></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASE_URL?>/Admin/product"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024"><path fill="white" d="M956.9 845.1L896.4 632V168c0-17.7-14.3-32-32-32h-704c-17.7 0-32 14.3-32 32v464L67.9 845.1C60.4 866 75.8 888 98 888h828.8c22.2 0 37.6-22 30.1-42.9M200.4 208h624v395h-624zm228.3 608l8.1-37h150.3l8.1 37zm224 0l-19.1-86.7c-.8-3.7-4.1-6.3-7.8-6.3H398.2c-3.8 0-7 2.6-7.8 6.3L371.3 816H151l42.3-149h638.2l42.3 149z"/></svg></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASE_URL?>/Admin/user"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M12 5a3.5 3.5 0 0 0-3.5 3.5A3.5 3.5 0 0 0 12 12a3.5 3.5 0 0 0 3.5-3.5A3.5 3.5 0 0 0 12 5m0 2a1.5 1.5 0 0 1 1.5 1.5A1.5 1.5 0 0 1 12 10a1.5 1.5 0 0 1-1.5-1.5A1.5 1.5 0 0 1 12 7M5.5 8A2.5 2.5 0 0 0 3 10.5c0 .94.53 1.75 1.29 2.18c.36.2.77.32 1.21.32c.44 0 .85-.12 1.21-.32c.37-.21.68-.51.91-.87A5.42 5.42 0 0 1 6.5 8.5v-.28c-.3-.14-.64-.22-1-.22m13 0c-.36 0-.7.08-1 .22v.28c0 1.2-.39 2.36-1.12 3.31c.12.19.25.34.4.49a2.482 2.482 0 0 0 1.72.7c.44 0 .85-.12 1.21-.32c.76-.43 1.29-1.24 1.29-2.18A2.5 2.5 0 0 0 18.5 8M12 14c-2.34 0-7 1.17-7 3.5V19h14v-1.5c0-2.33-4.66-3.5-7-3.5m-7.29.55C2.78 14.78 0 15.76 0 17.5V19h3v-1.93c0-1.01.69-1.85 1.71-2.52m14.58 0c1.02.67 1.71 1.51 1.71 2.52V19h3v-1.5c0-1.74-2.78-2.72-4.71-2.95M12 16c1.53 0 3.24.5 4.23 1H7.77c.99-.5 2.7-1 4.23-1"/></svg></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASE_URL?>/Admin/comment"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M12.36 4C6.58 4 2.644 9.857 4.824 15.21l.933 2.288a.5.5 0 0 1-.15.579L3.634 19.66a.5.5 0 0 0 .313.89h7.82a8.732 8.732 0 0 0 8.733-8.732C20.5 7.5 17 4 12.682 4z"/></svg></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=BASE_URL?>/Admin/order"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" fill-rule="evenodd" d="M10 2.25a1.75 1.75 0 0 0-1.582 1c-.684.006-1.216.037-1.692.223A3.25 3.25 0 0 0 5.3 4.563c-.367.493-.54 1.127-.776 1.998l-.047.17l-.513 2.964c-.185.128-.346.28-.486.459c-.901 1.153-.472 2.87.386 6.301c.545 2.183.818 3.274 1.632 3.91C6.31 21 7.435 21 9.685 21h4.63c2.25 0 3.375 0 4.189-.635c.814-.636 1.086-1.727 1.632-3.91c.858-3.432 1.287-5.147.386-6.301a2.186 2.186 0 0 0-.487-.46l-.513-2.962l-.046-.17c-.237-.872-.41-1.506-.776-2a3.25 3.25 0 0 0-1.426-1.089c-.476-.186-1.009-.217-1.692-.222A1.75 1.75 0 0 0 14 2.25zm8.418 6.896l-.362-2.088c-.283-1.04-.386-1.367-.56-1.601a1.75 1.75 0 0 0-.768-.587c-.22-.086-.486-.111-1.148-.118A1.75 1.75 0 0 1 14 5.75h-4a1.75 1.75 0 0 1-1.58-.998c-.663.007-.928.032-1.148.118a1.75 1.75 0 0 0-.768.587c-.174.234-.277.56-.56 1.6l-.362 2.089C6.58 9 7.91 9 9.685 9h4.63c1.775 0 3.105 0 4.103.146M8 12.25a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4a.75.75 0 0 1 .75-.75m8.75.75a.75.75 0 0 0-1.5 0v4a.75.75 0 0 0 1.5 0zM12 12.25a.75.75 0 0 1 .75.75v4a.75.75 0 0 1-1.5 0v-4a.75.75 0 0 1 .75-.75" clip-rule="evenodd"/></svg> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link logout_nav" href="<?=BASE_URL?>/Admin/logout"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M11.25 19a.75.75 0 0 1 .75-.75h6a.25.25 0 0 0 .25-.25V6a.25.25 0 0 0-.25-.25h-6a.75.75 0 0 1 0-1.5h6c.966 0 1.75.784 1.75 1.75v12A1.75 1.75 0 0 1 18 19.75h-6a.75.75 0 0 1-.75-.75"/><path fill="white" d="M15.612 13.115a1 1 0 0 1-1 1H9.756c-.023.356-.052.71-.086 1.066l-.03.305a.718.718 0 0 1-1.025.578a16.844 16.844 0 0 1-4.885-3.539l-.03-.031a.721.721 0 0 1 0-.998l.03-.031a16.843 16.843 0 0 1 4.885-3.539a.718.718 0 0 1 1.025.578l.03.305c.034.355.063.71.086 1.066h4.856a1 1 0 0 1 1 1z"/></svg></i></a>
                        </li>
                    </ul>
                    <form class="form-search-admin">
                        <div><input class="form-control mr-sm-2" type="search" id="search" placeholder="Tìm kiếm..." aria-label="Search" /></div>
                        <div><button class=" btn-outline-info my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"><path fill="white" fill-rule="evenodd" d="M5 11a6 6 0 1 1 12 0a6 6 0 0 1-12 0m6-8a8 8 0 1 0 4.906 14.32l3.387 3.387a1 1 0 0 0 1.414-1.414l-3.387-3.387A8 8 0 0 0 11 3m0 12a4 4 0 1 0 0-8a4 4 0 0 0 0 8" clip-rule="evenodd"/></svg></button></div>
                    </form>
                </div>
            </nav>
        </header>
        <style>
            .navbar-dark .navbar-nav .nav-item .logout_nav i{
                color: white;
                border-radius: 10px;
                font-weight: 600;
                padding: 5px 10px;
                background-color: #c15a5a;
            }
            .navbar-dark .navbar-nav .nav-item .logout_nav i:hover{
                cursor: pointer;
                opacity: 0.9;
            }
        </style>
       