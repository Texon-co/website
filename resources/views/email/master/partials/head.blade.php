<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Texon Company{{ isset($title) ? " - $title" : ""}}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
    /*--------------------------------------------------------------
    # General
    --------------------------------------------------------------*/
    body {
        font-family: "Open Sans", sans-serif;
        color: #444444;
    }

    a {
        color: #00465c;
        text-decoration: none;
    }

    a:hover {
        color: #6c7afa;
        text-decoration: none;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: "Krub", sans-serif;
    }
    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
        background: #f6f7ff;
        border-bottom: 2px solid #eceefe;
        transition: all 0.5s;
        z-index: 997;
        padding: 15px 0;
    }
    #header .logo {
        font-size: 30px;
        margin: 0;
        padding: 0;
        line-height: 1;
        font-weight: 600;
        letter-spacing: 1px;
        font-family: "Poppins", sans-serif;
    }
    #header .logo a {
        color: #2d405f;
    }
    #header .logo img {
        max-height: 40px;
    }
    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    #footer {
        color: #444444;
        font-size: 14px;
        background: #fff;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }
    #footer .logo {
        width: 100%;
        height: 100%;
    }
    #footer .footer-top {
        padding: 60px 0 30px 0;
        background: #f1f3ff;
    }
    #footer .footer-top .footer-contact h4 {
        font-size: 22px;
        margin: 0 0 30px 0;
        padding: 2px 0 2px 0;
        line-height: 1;
        font-weight: 700;
        color: #2d405f;
    }
    #footer .footer-top .footer-contact p {
        font-size: 14px;
        line-height: 24px;
        margin-bottom: 0;
        font-family: "Krub", sans-serif;
        color: #4e6fa4;
    }
    #footer .footer-top h4 {
        font-size: 16px;
        font-weight: bold;
        color: #2d405f;
        position: relative;
        padding-bottom: 12px;
    }
    #footer .footer-top .footer-links {
        margin-bottom: 30px;
    }
    #footer .footer-top .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #footer .footer-top .footer-links ul i {
        padding-right: 2px;
        color: #6c7afa;
        font-size: 18px;
        line-height: 1;
    }
    #footer .footer-top .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
    }
    #footer .footer-top .footer-links ul li:first-child {
        padding-top: 0;
    }
    #footer .footer-top .footer-links ul a {
        color: #777777;
        transition: 0.3s;
        display: inline-block;
        line-height: 1;
    }
    #footer .footer-top .footer-links ul a:hover {
        text-decoration: none;
        color: #A5E9FF;
    }
    #footer .credits {
        padding-top: 5px;
        font-size: 13px;
        color: #444444;
    }
    #footer .social-links a {
        font-size: 18px;
        display: inline-block;
        background: #e7eafe;
        color: #00465c;
        line-height: 1;
        padding: 8px 0;
        margin-right: 4px;
        border-radius: 5px;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s;
    }
    #footer .social-links a:hover {
        background: #A5E9FF;
        color: #fff;
        text-decoration: none;
    }
</style>