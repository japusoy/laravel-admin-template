<header class="header">
    <!--Nav-->
    <nav aria-label="menu nav" class="nav">

        <div class="headerNav">
            <div class="main-logo">
                <a href="#" aria-label="Home">
                    LOGO
                </a>
            </div>
            <div class="headerMenu">
                <ul>
                    <li class="active">
                        <a href="#">Active</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a href="#">link</a>
                    </li>
                    <li class="withDropdown">
                        <div class="dropdown">
                            <button onclick="toggleDD('myDropdown')" class="drop-button"> 
                                <img src="https://twemoji.maxcdn.com/2/72x72/1f916.png" alt="">
                                <span>Hi, Admin</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg></button>
                            <div id="myDropdown" class="dropdownlist invisible">
                                <input type="text" class="drop-search block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-gray-800"></div>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>