        <footer>
            <ol>
                <li ng-repeat="f in content.footer">
                    <a id="{{f.id}}" class="footer-sprite" href="{{f.link}}" target="_blank"></a>
                </li>
            </ol>
        </footer>
        <script type="text/javascript">function downloadJSAtOnload() {var element = document.createElement("script");element.src = "scripts.min.js";document.body.appendChild(element);}if (window.addEventListener)window.addEventListener("load", downloadJSAtOnload, false);else if (window.attachEvent)window.attachEvent("onload", downloadJSAtOnload);else window.onload = downloadJSAtOnload;</script>
    </body>
    
</html>
