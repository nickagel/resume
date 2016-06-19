<article id="portfolio" class="parent">
    <arcticle class="child fadeIn fadeOut">
<h1>Portfolio</h1>
<ol>
  <li ng-repeat="x in content.portfolio" refresh-all>
    <a href={{x.link}} target="_blank"><div class="portfolio-sprite {{x.type}}" style='background-color:{{x.backgroundcolor}}'></div><h6>{{x.title}}</h6></a>
  </li>
</ol>

</article>
</article>