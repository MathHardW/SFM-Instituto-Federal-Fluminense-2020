
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title>Select - Materialize</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- if !isDemo-->
    <!--   script.-->
    <!--     window.liveSettings = {-->
    <!--       api_key: "a0b49b34b93844c38eaee15690d86413",-->
    <!--       picker: "bottom-right",-->
    <!--       detectlang: true,-->
    <!--       dynamic: true,-->
    <!--       autocollect: true-->
    <!--     };-->
    <!--   script(src='//cdn.transifex.com/live.js')-->
  </head>
  <body>
    <header>
      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper">
            <div class="row">
              <div class="col s12 m10 offset-m1">
                <h1 class="header">Select</h1>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="container"><a href="#" data-target="nav-mobile" class="top-nav sidenav-trigger full hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="sidenav sidenav-fixed">
        <li class="logo"><a id="logo-container" href="/" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="res/materialize.svg">Your browser does not support SVG</object></a></li>
        <li class="version"><a href="#" data-target="version-dropdown" class="dropdown-trigger">
            1.0.0
            <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg></a>
          <ul id="version-dropdown" class="dropdown-content">
            <li><a>1.0.0</a></li>
            <li><a href="http://archives.materializecss.com/0.100.2/">0.100.2</a></li>
          </ul>
        </li>
        <li class="search">
          <div class="search-wrapper">
            <input id="search" placeholder="Search"><i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>
        </li>
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">About</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">CSS</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="color.html">Color</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                  <li><a href="media-css.html">Media</a></li>
                  <li><a href="pulse.html">Pulse</a></li>
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="shadow.html">Shadow</a></li>
                  <li><a href="table.html">Table</a></li>
                  <li><a href="css-transitions.html">Transitions</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">Components</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="collections.html">Collections</a></li>
                  <li><a href="floating-action-button.html">Floating Action Button</a></li>
                  <li><a href="footer.html">Footer</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="navbar.html">Navbar</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li><a href="preloader.html">Preloader</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">JavaScript</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="auto-init.html">Auto Init</a></li>
                  <li><a href="carousel.html">Carousel</a></li>
                  <li><a href="collapsible.html">Collapsible</a></li>
                  <li><a href="dropdown.html">Dropdown</a></li>
                  <li><a href="feature-discovery.html">FeatureDiscovery</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modals.html">Modals</a></li>
                  <li><a href="parallax.html">Parallax</a></li>
                  <li><a href="pushpin.html">Pushpin</a></li>
                  <li><a href="scrollspy.html">Scrollspy</a></li>
                  <li><a href="sidenav.html">Sidenav</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="toasts.html">Toasts</a></li>
                  <li><a href="tooltips.html">Tooltips</a></li>
                  <li><a href="waves.html">Waves</a></li>
                </ul>
              </div>
            </li>
            <li class="bold active"><a class="collapsible-header waves-effect waves-teal">Forms</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="autocomplete.html">Autocomplete</a></li>
                  <li><a href="checkboxes.html">Checkboxes</a></li>
                  <li><a href="chips.html">Chips</a></li>
                  <li><a href="pickers.html">Pickers</a></li>
                  <li><a href="radio-buttons.html">Radio Buttons</a></li>
                  <li><a href="range.html">Range</a></li>
                  <li class="active"><a href="select.html">Select</a></li>
                  <li><a href="switches.html">Switches</a></li>
                  <li><a href="text-inputs.html">Text Inputs</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="mobile.html" class="waves-effect waves-teal">Mobile</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
        <li class="bold"><a href="themes.html" class="waves-effect waves-teal">Themes<span data-badge-caption="updated" class="new badge"></span></a></li>
      </ul>
      <!-- Sidebar BSA-->
      <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
      <div class="bsa-cpc"></div>
      <script>
        (function(){
          if(typeof _bsa !== 'undefined' && _bsa) {
          _bsa.init('default', 'CKYD55QM', 'placement:materializecsscom', {
            target: '.bsa-cpc',
            align: 'horizontal',
            disable_css: 'true'
          });
            }
        })();
      </script>
      <div class="patreon-ad"><a href="https://www.patreon.com/materialize" target="_blank" class="waves-effect">Become a Patron</a></div>
    </header>
    <main><div class="container">
  <div class="row">

    <div class="col s12 m8 offset-m1 xl7 offset-xl1">

      <div id="introduction" class="section scrollspy">
        <p> Select allows user input through specified options. Make sure you wrap it in a
          <code class="language-markup">.input-field</code> for proper alignment with other text fields. Remember that this is a jQuery plugin so make sure you
          <a href="#initialization">initialize</a> this in your document ready. </p>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12 m6">
                <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Materialize Select</label>
              </div>
              <div class="col s12">
                <br>
                <p>You can add the property
                  <code class="language-markup">multiple</code> to get the multiple select and select several options.</p>
              </div>
              <div class="input-field col s12 m6">
                <select multiple>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Materialize Multiple Select</label>
              </div>
              <div class="col s12">
                <br>
                <p>We also support optgroups in our selects.</p>
              </div>
              <div class="input-field col s12 m6">
                <select>
                  <optgroup label="team 1">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </optgroup>
                  <optgroup label="team 2">
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                  </optgroup>
                </select>
                <label>Optgroups</label>
              </div>
              <div class="col s12">
                <br>
                <p>You can add icons to your options in any type of select. In the option you add the image source with the
                  <code class="language-markup">data-icon</code> attribute.</p>
              </div>
              <div class="input-field col s12 m6">
                <select class="icons">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="" data-icon="images/sample-1.jpg">example 1</option>
                  <option value="" data-icon="images/office.jpg">example 2</option>
                  <option value="" data-icon="images/yuna.jpg">example 3</option>
                </select>
                <label>Images in select</label>
              </div>
              <div class="input-field col s12 m6">
                <select class="icons">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="" data-icon="images/sample-1.jpg" class="left">example 1</option>
                  <option value="" data-icon="images/office.jpg" class="left">example 2</option>
                  <option value="" data-icon="images/yuna.jpg" class="left">example 3</option>
                </select>
                <label>Images in select</label>
              </div>
              <div class="col s12">
                <br>
                <p>You can add the class
                  <code class="language-markup">browser-default</code> to get the browser default.</p>
              </div>
              <div class="col s12 m6">
                <label>Browser Select</label>
                <select class="browser-default">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
            </div>
          </form>
          <div class="col s12">
            <pre><code class="language-markup">
  &lt;div class="input-field col s12">
    &lt;select>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Select&lt;/label>
  &lt;/div>

  &lt;div class="input-field col s12">
    &lt;select multiple>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Multiple Select&lt;/label>
  &lt;/div>

  &lt;div class="input-field col s12">
    &lt;select>
      &lt;optgroup label="team 1">
        &lt;option value="1">Option 1&lt;/option>
        &lt;option value="2">Option 2&lt;/option>
      &lt;/optgroup>
      &lt;optgroup label="team 2">
        &lt;option value="3">Option 3&lt;/option>
        &lt;option value="4">Option 4&lt;/option>
      &lt;/optgroup>
    &lt;/select>
    &lt;label>Optgroups&lt;/label>
  &lt;/div>

  &lt;div class="input-field col s12 m6">
    &lt;select class="icons">
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="" data-icon="images/sample-1.jpg">example 1&lt;/option>
      &lt;option value="" data-icon="images/office.jpg">example 2&lt;/option>
      &lt;option value="" data-icon="images/yuna.jpg">example 3&lt;/option>
    &lt;/select>
    &lt;label>Images in select&lt;/label>
  &lt;/div>
  &lt;div class="input-field col s12 m6">
    &lt;select class="icons">
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="" data-icon="images/sample-1.jpg" class="left">example 1&lt;/option>
      &lt;option value="" data-icon="images/office.jpg" class="left">example 2&lt;/option>
      &lt;option value="" data-icon="images/yuna.jpg" class="left">example 3&lt;/option>
    &lt;/select>
    &lt;label>Images in select&lt;/label>
  &lt;/div>

  &lt;label>Browser Select&lt;/label>
  &lt;select class="browser-default">
    &lt;option value="" disabled selected>Choose your option&lt;/option>
    &lt;option value="1">Option 1&lt;/option>
    &lt;option value="2">Option 2&lt;/option>
    &lt;option value="3">Option 3&lt;/option>
  &lt;/select>
            </code></pre>
          </div>
        </div>
      </div>

      <div id="initialization" class="scrollspy section">
        <h3 class="header">Initialization</h3>
        <p>You must initialize the select element as shown below. In addition, you will need a separate call for any dynamically
          generated select elements your page generates.</p>

        <pre><code class="language-javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
        </code></pre>
        <br>
      </div>

      <div id="options" class="scrollspy section">
        <h3 class="header">Options</h3>
        <table class="striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Type</th>
              <th>Default</th>
              <th>Description</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>classes</td>
              <td>String</td>
              <td>''</td>
              <td>Classes to be added to the select wrapper element.</td>
            </tr>
            <tr>
              <td>dropdownOptions</td>
              <td>Object</td>
              <td>{}</td>
              <td>Pass options object to select dropdown initialization.</td>
            </tr>
          </tbody>
        </table>
        <br>
      </div>

      <div id="methods" class="scrollspy section">
        <h3 class="header">Methods</h3>
        <blockquote>
          <p>Because jQuery is no longer a dependency, all the methods are called on the plugin instance. You can get the plugin
            instance like this: </p>
          <pre><code class="language-javascript col s12">
  var instance = M.FormSelect.getInstance(elem);

  /* jQuery Method Calls
    You can still use the old jQuery plugin method calls.
    But you won't be able to access instance properties.

    $('select').formSelect('methodName');
    $('select').formSelect('methodName', paramName);
  */
        </code></pre>
        </blockquote>

        <h5 class="method-header">
          .getSelectedValues();
        </h5>
        <p>Get selected values in an array.</p>
        <h6>Return Value</h6>
        <p>
          <b>Array:</b> Array of selected values.</p>
        <pre><code class="language-javascript col s12">
instance.getSelectedValues();
      </code></pre>
        <br>

        <h5 class="method-header">
          .destroy();
        </h5>
        <p>Destroy plugin instance and teardown</p>
        <pre><code class="language-javascript col s12">
instance.destroy();
      </code></pre>
      </div>

      <div id="properties" class="scrollspy section">
        <h3 class="header">Properties</h3>
        <table class="striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Type</th>
              <th>Description</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>el</td>
              <td>Element</td>
              <td>The DOM element the plugin was initialized with.</td>
            </tr>
            <tr>
              <td>options</td>
              <td>Object</td>
              <td>The options the instance was initialized with.</td>
            </tr>
            <tr>
              <td>isMultiple</td>
              <td>Boolean</td>
              <td>If this is a multiple select.</td>
            </tr>
            <tr>
              <td>wrapper</td>
              <td>Element</td>
              <td>The select wrapper element.</td>
            </tr>
            <tr>
              <td>dropdownOptions</td>
              <td>Element</td>
              <td>Dropdown UL element.</td>
            </tr>
            <tr>
              <td>input</td>
              <td>Element</td>
              <td>Text input that shows current selected option.</td>
            </tr>
            <tr>
              <td>dropdown</td>
              <td>Dropdown</td>
              <td>Instance of the dropdown plugin for this select.</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div id="disabled" class="section scrollspy">
        <div class="row">
          <div class="col s12">
            <br>
            <br>
            <h3 class="header">Disabled Styles</h3>
            <p>You can also add
              <code class="language-markup">disabled</code> to the select element to make the whole thing disabled. Or if you add
              <code class="language-markup">disabled</code> to the options, the individual options will be unselectable. </p>
          </div>
          <form class="col s12 m6">
            <div class="row">
              <div class="col s12 input-field">
                <select disabled>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Materialize Disabled</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <label>Browser Disabled</label>
                <select class="browser-default" disabled>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
            </div>
          </form>
          <div class="col s12">
            <pre><code class="language-markup">
  &lt;div class="input-field">
    &lt;select disabled>
      &lt;option value="" disabled selected>Choose your option&lt;/option>
      &lt;option value="1">Option 1&lt;/option>
      &lt;option value="2">Option 2&lt;/option>
      &lt;option value="3">Option 3&lt;/option>
    &lt;/select>
    &lt;label>Materialize Disabled&lt;/label>
  &lt;/div>

  &lt;label>Browser Disabled&lt;/label>
  &lt;select class="browser-default" disabled>
    &lt;option value="" disabled selected>Choose your option&lt;/option>
    &lt;option value="1">Option 1&lt;/option>
    &lt;option value="2">Option 2&lt;/option>
    &lt;option value="3">Option 3&lt;/option>
  &lt;/select>
            </code></pre>
          </div>
        </div>
      </div>


    </div>
    <div class="col hide-on-small-only m3 xl3 offset-xl1">
      <div class="toc-wrapper">
        <div class="buysellads hide-on-small-only">
          <!-- CarbonAds Zone Code -->
          <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=materializecss"
            id="_carbonads_js"></script>
        </div>
        <div style="height: 1px;">
          <ul class="section table-of-contents">
            <li>
              <a href="#introduction">Introduction</a>
            </li>
            <li>
              <a href="#initialization">Initialization</a>
            </li>
            <li>
              <a href="#options">Options</a>
            </li>
            <li>
              <a href="#methods">Methods</a>
            </li>
            <li>
              <a href="#properties">Properties</a>
            </li>
            <li>
              <a href="#disabled">Disabled Styles</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>
    </main>    <footer class="page-footer docs-footer">
      <div class="container">
        <div class="row" style="margin-bottom: 0;">
          <div class="col s12 m10 offset-m1">
            <div class="row">
              <div class="col l4 s12">
                <h5>Help Materialize Grow</h5>
                <p class="grey-text text-darken-2">We hope you have enjoyed using Materialize and if you feel like it has helped you out and want to support the team you can help us by donating or backing us on Patreon. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                <a class="btn waves-effect waves-light red lighten-2" href="/support-us.html">Support Us</a>

              </div>
              <div class="col l4 s12">
                <h5>Join the Discussion</h5>
                <p class="grey-text text-darken-2">We have a Gitter chat room set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.</p>
                <a class="btn waves-effect waves-light red lighten-2" target="_blank" href="https://gitter.im/Dogfalo/materialize">Chat</a>
              </div>
              <div class="col l4 s12" style="overflow: hidden;">
                <h5>Connect</h5>
                <iframe src="https://ghbtns.com/github-btn.html?user=dogfalo&repo=materialize&type=watch&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
                <br>
                <a href="https://twitter.com/MaterializeCSS" class="twitter-follow-button" data-show-count="true" data-size="large" data-dnt="true">Follow @MaterializeCSS</a>
                <br>
                <div class="g-follow" data-annotation="bubble" data-height="24" data-href="https://plus.google.com/108619793845925798422" data-rel="publisher"></div>
              </div>
            </div>

            <div class="row">
              <div class="col s12">
                <h5>Patreon Sponsors</h5>
              </div>
              <div class="col s12">
                <div class="patreon-footer-ad">
                  <a href="https://www.utilitysavingexpert.com/" alt="Compare Energy" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/fbGCbZs5/Logo-1200x630.png" alt="Compare car insurance at Utility Saving Expert">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://icons8.com/material-icons" target="_blank" rel="noopener">
                    <img src="https://s13.postimg.cc/q0lliz153/icons8-logo-opencollective.png" alt="Icons8">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://uiuxagencies.top" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/zDgLzCXN/Logo-1.png" alt="Top UI & UX Design Agencies">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="http://www.datantify.com/" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/C5SN1GLy/datantify.png" alt="Datantify">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://clay.global/" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/8knGJCYr/clay-logo-transp.png" alt="UI UX Design Agency">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.stillio.com/" target="_blank" rel="noopener">
                    <img src="https://s13.postimg.cc/hcpyykzbr/stillio-as-logo-1000-green.png" title="Capture and archive website screenshots automatically with Stillio" alt="Capture and archive website screenshots automatically with Stillio">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.onecompare.com/apple" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/vT9dwrvF/logo-temp.png" alt="Compare the cheapest Apple deals">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://blokt.com/" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/m27ZtrxQ/blokt-logo-no-tagline-light-bg-1200x250px1.png" alt="Blokt Cryptocurrency News">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.vpsserver.com/" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/VLsgFL7S/logo.png" alt="VPS Server">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://keymedium.com" target="_blank" rel="noopener">
                    <img src="https://s13.postimg.cc/m9c0wcpxz/2017-10-23-logo-refresh.png" alt="Philadelphia Web Design & SEO Agency">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://runningseo.com" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/Kz911f3c/56766135-running-SEO-logo-01.png" alt="SEO Companies and Optimization Tips from Experts">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.hosted.nl/vps/" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/6pfGWk4Q/hostednl.png" alt="Hosted NL">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.promocodewatch.com" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/1358DSGy/Promo-Code-Watch.png" alt="Promo Code Watch">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://typestack.nl" target="_blank" rel="noopener">
                    <img src="https://s13.postimg.cc/6k0vwalev/typestack.png" alt="Open source fully loaded CMS in #2019">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.brandnewweb.nl" target="_blank" rel="noopener">
                    <img src="https://s13.postimg.cc/3pxqiuqyf/brandnewweb.png" alt="Brand New Web">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.finanstopp.no/forbrukslan/" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/YCrnHp0L/Finanstopp-color.png" alt="Forbrukslån">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://usave.co.uk/utilities/broadband/" target="_blank" rel="noopener" title="Compare broadband deals with usave">
                    <img src="https://i.postimg.cc/Xq82zFGf/brand-logo.png" alt="Compare broadband deals with usave">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://webdock.io/en" target="_blank" rel="noopener">
                    <img src="https://s15.postimg.cc/3k2228kcb/ezgif.com-gif-maker.png" alt="Webdock">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.dontpayfull.com" target="_blank" rel="noopener">
                    <img src="https://s15.postimg.cc/elkjc67zv/Banner_120x60-white.png" alt="Dont Pay Full">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://cryptoefx.com" target="_blank" rel="noopener">
                    <img src="https://s14.postimg.cc/gs1o4wy29/crypto-_EFX.png" alt="crypto EFX">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://gaggle.email/" target="_blank" rel="noopener">
                    <img src="https://s13.postimg.cc/oqns3tzmf/gaggle-mail-logo.png" alt="Gaggle Mail">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://pdfsam.org/" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/yWCVvMRg/unnamed.png" alt="PDFsam">
                  </a>
                </div>
                <div class="patreon-footer-ad">
                  <a href="https://www.codefirst.co.uk/" target="_blank" rel="noopener">
                    <img src="https://i.postimg.cc/CKsnHG6P/image001.png" alt="CodeFirst">
                  </a>
                </div>


              </div>
            </div>

            <div class="footer-copyright">
              © 2014-<noscript>2018</noscript><script type="text/javascript">document.write(new Date().getFullYear());</script> Materialize, All rights reserved.
              <a class="grey-text text-darken-1 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a>
            </div>

          </div>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-3.2.1.min.js"><\/script>'); }
    </script>
    <script src="docs/js/jquery.timeago.min.js"></script>
    <script src="docs/js/prism.js"></script>
    <script src="docs/js/lunr.min.js"></script>
    <script src="docs/js/search.js"></script>
    <script src="bin/materialize.js"></script>
    <script src="docs/js/init.js"></script>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!--  Google Analytics  -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>

  </body>
</html>