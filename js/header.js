class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <header>
            <div class="logo">
                <img src="../assets/site-logo.png"  >
            </div>
            <nav>
                <ul>
                    <li><a href="../pages/home.php">Home </a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Some Link</a></li>
                    <li><a href="#">Some Link</a></li>
                    <li><a href="#">Some Link</a></li>
                </ul>
            </nav>
        </header>
        `;
    }
}

customElements.define('header-widget', Header);