class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <header>
        <div class="logo">
            <img src="../assets/site-logo.png"  >
            <h1>CryptoWebsite</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Cryptocurrencies </a></li>
                <li><a href="#">Exchanges</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Learn</a></li>
            </ul>
        </nav>
    </header>
        `;
    }
}

customElements.define('header-widget', Header);