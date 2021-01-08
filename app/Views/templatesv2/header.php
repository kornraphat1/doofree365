<style>
    header .menu-bar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: max-content;
        float: left;
        padding: 2% 0% 0% 20%;
    }

    header .menu-bar ul li {
        display: inline-block;
        padding: 6px 13px 8px;
        cursor: pointer;
        position: relative;
    }

    header .menu-bar ul li.active a {
        color: #ffffff;
    }

    header .menu-bar ul li:hover:after {
        background-color: #ffffff;

        width: 6px;
        height: 6px;
        position: absolute;
        border-radius: 50%;
        bottom: 16px;
        left: 50%;
        transform: translateX(-50%);
    }

    header .menu-bar ul li a {
        font-size: 35px;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
    }


    header .menu-bar .search {
        margin: 2% 3% 0% 0%;
        float: right;
        height: 80px;
        text-align: right;
        cursor: pointer;
    }

    header .menu-bar .search .fa-search {
        color: #fff;
        background-color: #3d3e40;
        padding: 15px 15px;
        font-size: 20px;

    }

    header .search-text {
        width: 200px;
        height: 46px;
        font-size: 24px;
        transform: translate(4px, 1px);
        background-color: #fff;
        border: none;
        color: black;
        padding: 25px;

        border-radius: 30px 0px 0px 30px;
    }

    header .topnav {
        overflow: hidden;
        background-color: #333;
        position: relative;
    }

    header .topnav a {
        float: left;
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        width: 250px;
        border-bottom: 1px solid white;
    }

    header .topnav a.icon {
        float: right;
    }

    header .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    header .active {
        background-color: #4CAF50;
        color: white;
    }

    header .bar1,
    header .bar2,
    header .bar3 {
        width: 35px;
        height: 5px;
        background-color: #fff;
        margin: 6px 0;
        transition: 0.4s;
    }

    header .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        transform: rotate(-45deg) translate(-9px, 6px);
    }

    header .change .bar2 {
        opacity: 0;
    }

    header .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-8px, -8px);
    }

    header .size-bar {
        display: block;
        position: absolute;
        transform: translate(0%, 0%);
        top: 50px;
        left: 20px;
        z-index: 888;
    }

    header .size-flex {
        display: flex;
        flex-direction: column;
    }

    header .mobile-container {
        display: none;
    }

    header img.logo {
        height: 10%;
        width: 200px;
        background: url('/public/assets/img/LOGO.png') center center no-repeat;
        background-size: contain;
        position: absolute;

        margin-top: 50px;
    }

    header .menu-bar {
        background-color: #2c2e35;
        height: 13%;

        margin-bottom: 0px;
        width: 100%;
        z-index: 9999;
    }

    header .header-logo {
        text-align: left;
        padding: 5px 0px 0px 50px;
        position: absolute;
    }

    header .header-img {
        width: 15%;
    }

    @media screen and (min-device-width: 280px) and (max-device-width: 1024px) {
        header .menu-bar .search {
            margin: 3% 3% 0% 0%;
            float: right;
            height: 80px;
            text-align: right;
            cursor: pointer;
        }

        header .menu-bar ul li a {
            font-size: 13px;
        }

        header .search-text {
            width: 80px;
            height: 29px;
            font-size: 15px;
            transform: translate(3px, 0px);
            background-color: #fff;
            padding: 10px;

        }

        header .menu-bar .search .fa-search {

            padding: 7px 10px;
            font-size: 15px;
        }

        header .menu-bar {
            height: 10%
        }

        header .menu-bar ul li {
            display: inline-block;
            padding: 12px 3px 8px;
            cursor: pointer;
            position: relative;
        }

        header .search-text {
            display: none;
        }

        header .header-logo {
            text-align: left;
            padding: 10px 0px 0px 10px;
            position: absolute;
        }
    }
</style>
<header>

    <div class="menu-bar">
        <div class="header-logo">
            <img class="header-img" src="http://192.168.10.43:1002/public/assets/img/Doofree-365-LOGO.png"  alt="img">
        </div>

        <ul>
            <li><a href="#">หนังใหม่</a></li>
            <li><a href="#">หนังโป๊</a></li>
            <li><a href="#">ติดต่อ | ขอหนัง</a></li>

        </ul>
        <div class="search">
            <input class="search-text" type="text" id="lname" name="lastname" placeholder="search">
            <i class="fas fa-search"></i>
        </div>


    </div>
</header>