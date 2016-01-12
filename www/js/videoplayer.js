



<!DOCTYPE html>
<html lang="en" class=" is-u2f-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=1020">
    
    
    <title>cordova-plugin-videoplayer/videoplayer.js at 7129007f4f6361412cf8a0aa5412885c6478dab8 · moust/cordova-plugin-videoplayer · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="moust/cordova-plugin-videoplayer" name="twitter:title" /><meta content="cordova-plugin-videoplayer - A Codova plugin to play video with the native MediaPlayer on Android devices." name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/1053102?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/1053102?v=3&amp;s=400" property="og:image" /><meta content="moust/cordova-plugin-videoplayer" property="og:title" /><meta content="https://github.com/moust/cordova-plugin-videoplayer" property="og:url" /><meta content="cordova-plugin-videoplayer - A Codova plugin to play video with the native MediaPlayer on Android devices." property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="51202148:6266:6781BF1:569562DD" name="octolytics-dimension-request_id" />
<meta content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/show" data-pjax-transient="true" name="analytics-location" />
<meta content="Rails, view, blob#show" data-pjax-transient="true" name="analytics-event" />


  <meta class="js-ga-set" name="dimension1" content="Logged Out">



        <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

        <meta name="expected-hostname" content="github.com">

      <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

    <meta content="8ac4bcee7b3d5226674213061bc1ffb4f15db704" name="form-nonce" />

    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-2cd8e7b7c650541e94a142c9c10fb231b81455e1777c62510eb9b3402cc220b3.css" media="all" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github2-59f5919583cf2e70e57d04603053adbf07b93660733ba65df25454e92d209fe1.css" media="all" rel="stylesheet" />
    
    


    <meta http-equiv="x-pjax-version" content="056c86881be23af5cd8a809fecb37d38">

      
  <meta name="description" content="cordova-plugin-videoplayer - A Codova plugin to play video with the native MediaPlayer on Android devices.">
  <meta name="go-import" content="github.com/moust/cordova-plugin-videoplayer git https://github.com/moust/cordova-plugin-videoplayer.git">

  <meta content="1053102" name="octolytics-dimension-user_id" /><meta content="moust" name="octolytics-dimension-user_login" /><meta content="20064168" name="octolytics-dimension-repository_id" /><meta content="moust/cordova-plugin-videoplayer" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="20064168" name="octolytics-dimension-repository_network_root_id" /><meta content="moust/cordova-plugin-videoplayer" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/moust/cordova-plugin-videoplayer/commits/7129007f4f6361412cf8a0aa5412885c6478dab8.atom" rel="alternate" title="Recent Commits to cordova-plugin-videoplayer:7129007f4f6361412cf8a0aa5412885c6478dab8" type="application/atom+xml">

  </head>


  <body class="logged_out   env-production windows vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>

    
    
    



      
      <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span aria-hidden="true" class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="btn btn-primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="btn" href="/login?return_to=%2Fmoust%2Fcordova-plugin-videoplayer%2Fblob%2F7129007f4f6361412cf8a0aa5412885c6478dab8%2Fwww%2Fvideoplayer.js" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/moust/cordova-plugin-videoplayer/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/moust/cordova-plugin-videoplayer/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <label class="js-chromeless-input-container form-control">
    <div class="scope-badge">This repository</div>
    <input type="text"
      class="js-site-search-focus js-site-search-field is-clearable chromeless-input"
      data-hotkey="s"
      name="q"
      placeholder="Search"
      aria-label="Search this repository"
      data-global-scope-placeholder="Search GitHub"
      data-repo-scope-placeholder="Search"
      tabindex="1"
      autocapitalize="off">
  </label>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/pricing" data-ga-click="(Logged out) Header, go to pricing, text:pricing">Pricing</a>
          </li>
      </ul>

  </div>
</div>



    <div id="start-of-content" class="accessibility-aid"></div>

      <div id="js-flash-container">
</div>


    <div role="main" class="main-content">
        <div itemscope itemtype="http://schema.org/WebPage">
    <div id="js-repo-pjax-container" class="context-loader-container js-repo-nav-next" data-pjax-container>
      
<div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
  <div class="container repohead-details-container">

    

<ul class="pagehead-actions">

  <li>
      <a href="/login?return_to=%2Fmoust%2Fcordova-plugin-videoplayer"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <span aria-hidden="true" class="octicon octicon-eye"></span>
    Watch
  </a>
  <a class="social-count" href="/moust/cordova-plugin-videoplayer/watchers">
    7
  </a>

  </li>

  <li>
      <a href="/login?return_to=%2Fmoust%2Fcordova-plugin-videoplayer"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span aria-hidden="true" class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/moust/cordova-plugin-videoplayer/stargazers">
      34
    </a>

  </li>

  <li>
      <a href="/login?return_to=%2Fmoust%2Fcordova-plugin-videoplayer"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span aria-hidden="true" class="octicon octicon-repo-forked"></span>
        Fork
      </a>

    <a href="/moust/cordova-plugin-videoplayer/network" class="social-count">
      20
    </a>
  </li>
</ul>

    <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public ">
  <span aria-hidden="true" class="octicon octicon-repo"></span>
  <span class="author"><a href="/moust" class="url fn" itemprop="url" rel="author"><span itemprop="title">moust</span></a></span><!--
--><span class="path-divider">/</span><!--
--><strong><a href="/moust/cordova-plugin-videoplayer" data-pjax="#js-repo-pjax-container">cordova-plugin-videoplayer</a></strong>

  <span class="page-context-loader">
    <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
  </span>

</h1>

  </div>
  <div class="container">
    
<nav class="reponav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container">

  <a href="/moust/cordova-plugin-videoplayer" aria-label="Code" aria-selected="true" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /moust/cordova-plugin-videoplayer">
    <span aria-hidden="true" class="octicon octicon-code"></span>
    Code
</a>
    <a href="/moust/cordova-plugin-videoplayer/issues" class="js-selected-navigation-item reponav-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /moust/cordova-plugin-videoplayer/issues">
      <span aria-hidden="true" class="octicon octicon-issue-opened"></span>
      Issues
      <span class="counter">9</span>
</a>
  <a href="/moust/cordova-plugin-videoplayer/pulls" class="js-selected-navigation-item reponav-item" data-hotkey="g p" data-selected-links="repo_pulls /moust/cordova-plugin-videoplayer/pulls">
    <span aria-hidden="true" class="octicon octicon-git-pull-request"></span>
    Pull requests
    <span class="counter">1</span>
</a>

  <a href="/moust/cordova-plugin-videoplayer/pulse" class="js-selected-navigation-item reponav-item" data-selected-links="pulse /moust/cordova-plugin-videoplayer/pulse">
    <span aria-hidden="true" class="octicon octicon-pulse"></span>
    Pulse
</a>
  <a href="/moust/cordova-plugin-videoplayer/graphs" class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors /moust/cordova-plugin-videoplayer/graphs">
    <span aria-hidden="true" class="octicon octicon-graph"></span>
    Graphs
</a>

</nav>

  </div>
</div>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content">

    

<a href="/moust/cordova-plugin-videoplayer/blob/7129007f4f6361412cf8a0aa5412885c6478dab8/www/videoplayer.js" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:2e47189144e6b7ab4d8bfa30bc09a0c6 -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu js-menu-container js-select-menu left">
  <button class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    title=""
    type="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <i>Tree:</i>
    <span class="js-select-button css-truncate-target">7129007f4f</span>
  </button>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span aria-label="Close" class="octicon octicon-x js-menu-close" role="button"></span>
        <span class="select-menu-title">Switch branches/tags</span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/moust/cordova-plugin-videoplayer/blob/feature-video-controls/www/videoplayer.js"
               data-name="feature-video-controls"
               data-skip-pjax="true"
               rel="nofollow">
              <span aria-hidden="true" class="octicon octicon-check select-menu-item-icon"></span>
              <span class="select-menu-item-text css-truncate-target" title="feature-video-controls">
                feature-video-controls
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/moust/cordova-plugin-videoplayer/blob/master/www/videoplayer.js"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span aria-hidden="true" class="octicon octicon-check select-menu-item-icon"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

  <div class="btn-group right">
    <a href="/moust/cordova-plugin-videoplayer/find/7129007f4f6361412cf8a0aa5412885c6478dab8"
          class="js-show-file-finder btn btn-sm"
          data-pjax
          data-hotkey="t">
      Find file
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button">Copy path</button>
  </div>
  <div class="breadcrumb js-zeroclipboard-target">
    <span class="repo-root js-repo-root"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/moust/cordova-plugin-videoplayer/tree/7129007f4f6361412cf8a0aa5412885c6478dab8" class="" data-branch="7129007f4f6361412cf8a0aa5412885c6478dab8" data-pjax="true" itemscope="url" rel="nofollow"><span itemprop="title">cordova-plugin-videoplayer</span></a></span></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/moust/cordova-plugin-videoplayer/tree/7129007f4f6361412cf8a0aa5412885c6478dab8/www" class="" data-branch="7129007f4f6361412cf8a0aa5412885c6478dab8" data-pjax="true" itemscope="url" rel="nofollow"><span itemprop="title">www</span></a></span><span class="separator">/</span><strong class="final-path">videoplayer.js</strong>
  </div>
</div>

<include-fragment class="commit-tease" src="/moust/cordova-plugin-videoplayer/contributors/7129007f4f6361412cf8a0aa5412885c6478dab8/www/videoplayer.js">
  <div>
    Fetching contributors&hellip;
  </div>

  <div class="commit-tease-contributors">
    <img alt="" class="loader-loading left" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" />
    <span class="loader-error">Cannot retrieve contributors at this time</span>
  </div>
</include-fragment>
<div class="file">
  <div class="file-header">
  <div class="file-actions">

    <div class="btn-group">
      <a href="/moust/cordova-plugin-videoplayer/raw/7129007f4f6361412cf8a0aa5412885c6478dab8/www/videoplayer.js" class="btn btn-sm " id="raw-url">Raw</a>
        <a href="/moust/cordova-plugin-videoplayer/blame/7129007f4f6361412cf8a0aa5412885c6478dab8/www/videoplayer.js" class="btn btn-sm js-update-url-with-hash">Blame</a>
      <a href="/moust/cordova-plugin-videoplayer/commits/7129007f4f6361412cf8a0aa5412885c6478dab8/www/videoplayer.js" class="btn btn-sm " rel="nofollow">History</a>
    </div>

        <a class="btn-octicon tooltipped tooltipped-nw"
           aria-label="You must be on a branch to open this file in GitHub Desktop">
            <span aria-hidden="true" class="octicon octicon-device-desktop"></span>
        </a>

        <button type="button" class="btn-octicon disabled tooltipped tooltipped-nw"
          aria-label="You must be signed in to make or propose changes">
          <span aria-hidden="true" class="octicon octicon-pencil"></span>
        </button>
        <button type="button" class="btn-octicon btn-octicon-danger disabled tooltipped tooltipped-nw"
          aria-label="You must be signed in to make or propose changes">
          <span aria-hidden="true" class="octicon octicon-trashcan"></span>
        </button>
  </div>

  <div class="file-info">
      30 lines (24 sloc)
      <span class="file-info-divider"></span>
    675 Bytes
  </div>
</div>

  

  <div class="blob-wrapper data type-javascript">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-k">var</span> exec <span class="pl-k">=</span> <span class="pl-c1">require</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>cordova/exec<span class="pl-pds">&quot;</span></span>);</td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-smi">module</span>.<span class="pl-smi">exports</span> <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line">    DEFAULT_OPTIONS<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line">        volume<span class="pl-k">:</span> <span class="pl-c1">1.0</span>,</td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line">        scalingMode<span class="pl-k">:</span> <span class="pl-c1">1</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line">    SCALING_MODE<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line">        SCALE_TO_FIT<span class="pl-k">:</span> <span class="pl-c1">1</span>,</td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line">        SCALE_TO_FIT_WITH_CROPPING<span class="pl-k">:</span> <span class="pl-c1">2</span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">play</span><span class="pl-k">:</span> <span class="pl-k">function</span> (<span class="pl-smi">path</span>, <span class="pl-smi">options</span>, <span class="pl-smi">errorCallback</span>) {</td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line">        options <span class="pl-k">=</span> <span class="pl-v">this</span>.<span class="pl-en">merge</span>(<span class="pl-v">this</span>.<span class="pl-c1">DEFAULT_OPTIONS</span>, options);</td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line">        <span class="pl-c1">exec</span>(<span class="pl-c1">null</span>, errorCallback, <span class="pl-s"><span class="pl-pds">&quot;</span>VideoPlayer<span class="pl-pds">&quot;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span>play<span class="pl-pds">&quot;</span></span>, [path, options]);</td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">merge</span><span class="pl-k">:</span> <span class="pl-k">function</span> () {</td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">var</span> obj <span class="pl-k">=</span> {};</td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line">        <span class="pl-smi">Array</span>.<span class="pl-c1">prototype</span>.<span class="pl-smi">slice</span>.<span class="pl-c1">call</span>(arguments).<span class="pl-en">forEach</span>(<span class="pl-k">function</span>(<span class="pl-smi">source</span>) {</td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line">            <span class="pl-k">for</span> (<span class="pl-k">var</span> prop <span class="pl-k">in</span> source) {</td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line">                obj[prop] <span class="pl-k">=</span> source[prop];</td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line">            }</td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line">        });</td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">return</span> obj;</td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line">};</td>
      </tr>
</table>

  </div>

</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

  </div>
  <div class="modal-backdrop"></div>
</div>

    </div>
  </div>

    </div>

        <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>
        <li><a href="https://github.com/pricing" data-ga-click="Footer, go to pricing, text:pricing">Pricing</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage">
      <span aria-hidden="true" class="mega-octicon octicon-mark-github" title="GitHub "></span>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2016 <span title="0.05358s from github-fe119-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>
  </div>
</div>



    
    
    

    <div id="ajax-error-message" class="flash flash-error">
      <span aria-hidden="true" class="octicon octicon-alert"></span>
      <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
        <span aria-hidden="true" class="octicon octicon-x"></span>
      </button>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-ef8eb4a89ee9f3c8b7613307fe589a8f5705817f7cee27bec51ce5e963234abf.js"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-119bc4b0e461ed40cd8b8110904de550f7886bc02efd25109df2740328bae70d.js"></script>
      
      
      
    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner hidden">
      <span aria-hidden="true" class="octicon octicon-alert"></span>
      <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
      <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
    </div>
  </body>
</html>

