




<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>steunpuntkindervakanties/module/assets/plugins/data-tables/DT_bootstrap.js at master · devrepublicrep/steunpuntkindervakanties</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="devrepublicrep/steunpuntkindervakanties" name="twitter:title" /><meta content="steunpuntkindervakanties" name="twitter:description" /><meta content="https://1.gravatar.com/avatar/f7498726b259addbf2410a2ddaaf87e6?d=https%3A%2F%2Fidenticons.github.com%2F9be7913858ee6e7f6cbf6bee41166a6e.png&amp;r=x&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://1.gravatar.com/avatar/f7498726b259addbf2410a2ddaaf87e6?d=https%3A%2F%2Fidenticons.github.com%2F9be7913858ee6e7f6cbf6bee41166a6e.png&amp;r=x&amp;s=400" property="og:image" /><meta content="devrepublicrep/steunpuntkindervakanties" property="og:title" /><meta content="https://github.com/devrepublicrep/steunpuntkindervakanties" property="og:url" /><meta content="steunpuntkindervakanties" property="og:description" />

    <meta name="hostname" content="github-fe127-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 2.1.0p0-github-tcmalloc (87c9373a41) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="7BC9B2BA:671B:CE7E71:5303879C" name="octolytics-dimension-request_id" /><meta content="5779842" name="octolytics-actor-id" /><meta content="devsoyab" name="octolytics-actor-login" /><meta content="8c8793047b85e4082f8e006485a174390628d9899d827419e85f5ca1429bc75a" name="octolytics-actor-hash" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="mSYXl0Sq7IYRn+VEulJwqSavk+Goyhb/1oo/8xaZsZk=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-7155069f3ef445db5fc6503a1ff3eec8cf0a450d.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-3a6dc4491c9f58157083750fd09b905c0d93f602.css" media="all" rel="stylesheet" type="text/css" />
    
    


      <script src="https://github.global.ssl.fastly.net/assets/frameworks-693e11922dcacc3a7408a911fe1647da4febd3bd.js" type="text/javascript"></script>
      <script async="async" src="https://github.global.ssl.fastly.net/assets/github-7d6d16ceddadd41e4c0b6d2ebc549550e945f813.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="2bd2904ac7465273c5e51f06069a9020">

        <link data-pjax-transient rel='permalink' href='/devrepublicrep/steunpuntkindervakanties/blob/e76f97d21ab823ab5c74c0a6c425d71c76deab76/module/assets/plugins/data-tables/DT_bootstrap.js'>

  <meta name="description" content="steunpuntkindervakanties" />

  <meta content="416230" name="octolytics-dimension-user_id" /><meta content="devrepublicrep" name="octolytics-dimension-user_login" /><meta content="16166640" name="octolytics-dimension-repository_id" /><meta content="devrepublicrep/steunpuntkindervakanties" name="octolytics-dimension-repository_nwo" /><meta content="false" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="16166640" name="octolytics-dimension-repository_network_root_id" /><meta content="devrepublicrep/steunpuntkindervakanties" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/devrepublicrep/steunpuntkindervakanties/commits/master.atom?token=5779842__eyJzY29wZSI6IkF0b206L2RldnJlcHVibGljcmVwL3N0ZXVucHVudGtpbmRlcnZha2FudGllcy9jb21taXRzL21hc3Rlci5hdG9tIiwiZXhwaXJlcyI6Mjk3MDU3NzA1M30=--8221de48c2cc428ffbee40a4db9243d33f479912" rel="alternate" title="Recent Commits to steunpuntkindervakanties:master" type="application/atom+xml" />

  </head>


  <body class="logged_in  env-production windows vis-private page-blob tipsy-tooltips">
    <div class="wrapper">
      
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    
    <a href="/notifications" aria-label="You have no unread notifications" class="notification-indicator tooltipped downwards" data-gotokey="n">
        <span class="mail-status all-read"></span>
</a>

      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="devsoyab"
      data-repo="devrepublicrep/steunpuntkindervakanties"
      data-branch="master"
      data-sha="fba6d9254a60e42e3cf02bd46f57b29b460c0616"
  >

    <input type="hidden" name="nwo" value="devrepublicrep/steunpuntkindervakanties" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    


  <ul id="user-links">
    <li>
      <a href="/devsoyab" class="name">
        <img alt="devsoyab" class=" js-avatar" data-user="5779842" height="20" src="https://0.gravatar.com/avatar/95e1d38c80cbc695f68003f5eb9b09ea?d=https%3A%2F%2Fidenticons.github.com%2Fe15843e3ed38bb432f8a6cf5c778ae05.png&amp;r=x&amp;s=140" width="20" /> devsoyab
      </a>
    </li>

    <li class="new-menu dropdown-toggle js-menu-container">
      <a href="#" class="js-menu-target tooltipped downwards" aria-label="Create new...">
        <span class="octicon octicon-plus"></span>
        <span class="dropdown-arrow"></span>
      </a>

      <div class="js-menu-content">
      </div>
    </li>

    <li>
      <a href="/settings/profile" id="account_settings"
        class="tooltipped downwards"
        aria-label="Account settings ">
        <span class="octicon octicon-tools"></span>
      </a>
    </li>
    <li>
      <a class="tooltipped downwards" href="/logout" data-method="post" id="logout" aria-label="Sign out">
        <span class="octicon octicon-log-out"></span>
      </a>
    </li>

  </ul>

<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>


    <li class="section-title">
      <span title="devrepublicrep/steunpuntkindervakanties">This repository</span>
    </li>
      <li>
        <a href="/devrepublicrep/steunpuntkindervakanties/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
      </li>
</ul>

</div>


    
  </div>
</div>

      

        




          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="mSYXl0Sq7IYRn+VEulJwqSavk+Goyhb/1oo/8xaZsZk=" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="16166640" />

    <div class="select-menu js-menu-container js-select-menu">
      <a class="social-count js-social-count" href="/devrepublicrep/steunpuntkindervakanties/watchers">
        1
      </a>
      <span class="minibutton select-menu-button with-count js-menu-target" role="button" tabindex="0">
        <span class="js-select-button">
          <span class="octicon octicon-eye-unwatch"></span>
          Unwatch
        </span>
      </span>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container" role="menu">

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for conversations in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
  

  <div class="js-toggler-container js-social-container starring-container ">
    <a href="/devrepublicrep/steunpuntkindervakanties/unstar"
      class="minibutton with-count js-toggler-target star-button starred upwards"
      title="Unstar this repository" data-remote="true" data-method="post" rel="nofollow">
      <span class="octicon octicon-star-delete"></span><span class="text">Unstar</span>
    </a>

    <a href="/devrepublicrep/steunpuntkindervakanties/star"
      class="minibutton with-count js-toggler-target star-button unstarred upwards"
      title="Star this repository" data-remote="true" data-method="post" rel="nofollow">
      <span class="octicon octicon-star"></span><span class="text">Star</span>
    </a>

      <a class="social-count js-social-count" href="/devrepublicrep/steunpuntkindervakanties/stargazers">
        0
      </a>
  </div>

  </li>


        <li>
          <a href="/devrepublicrep/steunpuntkindervakanties/fork" class="minibutton with-count js-toggler-target fork-button lighter upwards" title="Fork this repo" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span><span class="text">Fork</span>
          </a>
          <a href="/devrepublicrep/steunpuntkindervakanties/network" class="social-count">0</a>
        </li>


</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title private">
          <span class="repo-label"><span>private</span></span>
          <span class="mega-octicon octicon-lock"></span>
          <span class="author">
            <a href="/devrepublicrep" class="url fn" itemprop="url" rel="author"><span itemprop="title">devrepublicrep</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/devrepublicrep/steunpuntkindervakanties" class="js-current-repository js-repo-home-link">steunpuntkindervakanties</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      

      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped leftwards" aria-label="Code">
        <a href="/devrepublicrep/steunpuntkindervakanties" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /devrepublicrep/steunpuntkindervakanties">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped leftwards" aria-label="Issues">
          <a href="/devrepublicrep/steunpuntkindervakanties/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /devrepublicrep/steunpuntkindervakanties/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped leftwards" aria-label="Pull Requests">
        <a href="/devrepublicrep/steunpuntkindervakanties/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /devrepublicrep/steunpuntkindervakanties/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped leftwards" aria-label="Wiki">
          <a href="/devrepublicrep/steunpuntkindervakanties/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_wiki /devrepublicrep/steunpuntkindervakanties/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped leftwards" aria-label="Pulse">
        <a href="/devrepublicrep/steunpuntkindervakanties/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /devrepublicrep/steunpuntkindervakanties/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" aria-label="Graphs">
        <a href="/devrepublicrep/steunpuntkindervakanties/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /devrepublicrep/steunpuntkindervakanties/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" aria-label="Network">
        <a href="/devrepublicrep/steunpuntkindervakanties/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /devrepublicrep/steunpuntkindervakanties/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=push">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/devrepublicrep/steunpuntkindervakanties.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/devrepublicrep/steunpuntkindervakanties.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=push">
  <h3><strong>SSH</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="git@github.com:devrepublicrep/steunpuntkindervakanties.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="git@github.com:devrepublicrep/steunpuntkindervakanties.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=push">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/devrepublicrep/steunpuntkindervakanties" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/devrepublicrep/steunpuntkindervakanties" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="octicon help tooltipped upwards" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="github-windows://openRepo/https://github.com/devrepublicrep/steunpuntkindervakanties" class="minibutton sidebar-button">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/devrepublicrep/steunpuntkindervakanties/archive/master.zip"
                   class="minibutton sidebar-button"
                   title="Download this repository as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:18e68b0028a799da1aa94edfa5ab1191 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/devrepublicrep/steunpuntkindervakanties/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Find or create a branch…" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Find or create a branch…">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/devrepublicrep/steunpuntkindervakanties/blob/master/module/assets/plugins/data-tables/DT_bootstrap.js"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <form accept-charset="UTF-8" action="/devrepublicrep/steunpuntkindervakanties/branches" class="js-create-branch select-menu-item select-menu-new-item-form js-navigation-item js-new-item-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="mSYXl0Sq7IYRn+VEulJwqSavk+Goyhb/1oo/8xaZsZk=" /></div>
            <span class="octicon octicon-git-branch-create select-menu-item-icon"></span>
            <div class="select-menu-item-text">
              <h4>Create branch: <span class="js-new-item-name"></span></h4>
              <span class="description">from ‘master’</span>
            </div>
            <input type="hidden" name="name" id="name" class="js-new-item-value">
            <input type="hidden" name="branch" id="branch" value="master" />
            <input type="hidden" name="path" id="path" value="module/assets/plugins/data-tables/DT_bootstrap.js" />
          </form> <!-- /.select-menu-item -->

      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/devrepublicrep/steunpuntkindervakanties" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">steunpuntkindervakanties</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/devrepublicrep/steunpuntkindervakanties/tree/master/module" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">module</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/devrepublicrep/steunpuntkindervakanties/tree/master/module/assets" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">assets</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/devrepublicrep/steunpuntkindervakanties/tree/master/module/assets/plugins" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">plugins</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/devrepublicrep/steunpuntkindervakanties/tree/master/module/assets/plugins/data-tables" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">data-tables</span></a></span><span class="separator"> / </span><strong class="final-path">DT_bootstrap.js</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="module/assets/plugins/data-tables/DT_bootstrap.js" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/devrepublicrep/steunpuntkindervakanties/contributors/master/module/assets/plugins/data-tables/DT_bootstrap.js">
    Fetching contributors…

    <div class="participation">
      <p class="loader-loading"><img alt="Octocat-spinner-32-eaf2f5" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>156 lines (139 sloc)</span>
          <span class="meta-divider"></span>
        <span>4.693 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped leftwards"
               href="github-windows://openRepo/https://github.com/devrepublicrep/steunpuntkindervakanties?branch=master&amp;filepath=module%2Fassets%2Fplugins%2Fdata-tables%2FDT_bootstrap.js" aria-label="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
                <a class="minibutton js-update-url-with-hash"
                   href="/devrepublicrep/steunpuntkindervakanties/edit/master/module/assets/plugins/data-tables/DT_bootstrap.js"
                   data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
          <a href="/devrepublicrep/steunpuntkindervakanties/raw/master/module/assets/plugins/data-tables/DT_bootstrap.js" class="button minibutton " id="raw-url">Raw</a>
            <a href="/devrepublicrep/steunpuntkindervakanties/blame/master/module/assets/plugins/data-tables/DT_bootstrap.js" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/devrepublicrep/steunpuntkindervakanties/commits/master/module/assets/plugins/data-tables/DT_bootstrap.js" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger empty-icon tooltipped downwards"
             href="/devrepublicrep/steunpuntkindervakanties/delete/master/module/assets/plugins/data-tables/DT_bootstrap.js"
             aria-label=""
             data-method="post" data-test-id="delete-blob-file" rel="nofollow">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-javascript js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="cm">/* Set the defaults for DataTables initialisation */</span></div><div class='line' id='LC2'><span class="nx">$</span><span class="p">.</span><span class="nx">extend</span><span class="p">(</span> <span class="kc">true</span><span class="p">,</span> <span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">dataTable</span><span class="p">.</span><span class="nx">defaults</span><span class="p">,</span> <span class="p">{</span></div><div class='line' id='LC3'>	<span class="s2">&quot;sDom&quot;</span><span class="o">:</span> <span class="s2">&quot;&lt;&#39;row&#39;&lt;&#39;col-md-6 col-sm-12&#39;l&gt;&lt;&#39;col-md-12 col-sm-12&#39;f&gt;r&gt;&lt;&#39;table-scrollable&#39;t&gt;&lt;&#39;row&#39;&lt;&#39;col-md-5 col-sm-12&#39;i&gt;&lt;&#39;col-md-7 col-sm-12&#39;p&gt;&gt;&quot;</span><span class="p">,</span></div><div class='line' id='LC4'>	<span class="s2">&quot;sPaginationType&quot;</span><span class="o">:</span> <span class="s2">&quot;bootstrap&quot;</span><span class="p">,</span></div><div class='line' id='LC5'>	<span class="s2">&quot;oLanguage&quot;</span><span class="o">:</span> <span class="p">{</span></div><div class='line' id='LC6'>		<span class="s2">&quot;sLengthMenu&quot;</span><span class="o">:</span> <span class="s2">&quot;_MENU_ records&quot;</span></div><div class='line' id='LC7'>	<span class="p">}</span></div><div class='line' id='LC8'><span class="p">}</span> <span class="p">);</span></div><div class='line' id='LC9'><br/></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'><span class="cm">/* Default class modification */</span></div><div class='line' id='LC12'><span class="nx">$</span><span class="p">.</span><span class="nx">extend</span><span class="p">(</span> <span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">dataTableExt</span><span class="p">.</span><span class="nx">oStdClasses</span><span class="p">,</span> <span class="p">{</span></div><div class='line' id='LC13'>	<span class="s2">&quot;sWrapper&quot;</span><span class="o">:</span> <span class="s2">&quot;dataTables_wrapper form-inline&quot;</span></div><div class='line' id='LC14'><span class="p">}</span> <span class="p">);</span></div><div class='line' id='LC15'><br/></div><div class='line' id='LC16'><br/></div><div class='line' id='LC17'><span class="cm">/* API method to get paging information */</span></div><div class='line' id='LC18'><span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">dataTableExt</span><span class="p">.</span><span class="nx">oApi</span><span class="p">.</span><span class="nx">fnPagingInfo</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span> <span class="nx">oSettings</span> <span class="p">)</span></div><div class='line' id='LC19'><span class="p">{</span></div><div class='line' id='LC20'>	<span class="k">return</span> <span class="p">{</span></div><div class='line' id='LC21'>		<span class="s2">&quot;iStart&quot;</span><span class="o">:</span>         <span class="nx">oSettings</span><span class="p">.</span><span class="nx">_iDisplayStart</span><span class="p">,</span></div><div class='line' id='LC22'>		<span class="s2">&quot;iEnd&quot;</span><span class="o">:</span>           <span class="nx">oSettings</span><span class="p">.</span><span class="nx">fnDisplayEnd</span><span class="p">(),</span></div><div class='line' id='LC23'>		<span class="s2">&quot;iLength&quot;</span><span class="o">:</span>        <span class="nx">oSettings</span><span class="p">.</span><span class="nx">_iDisplayLength</span><span class="p">,</span></div><div class='line' id='LC24'>		<span class="s2">&quot;iTotal&quot;</span><span class="o">:</span>         <span class="nx">oSettings</span><span class="p">.</span><span class="nx">fnRecordsTotal</span><span class="p">(),</span></div><div class='line' id='LC25'>		<span class="s2">&quot;iFilteredTotal&quot;</span><span class="o">:</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">fnRecordsDisplay</span><span class="p">(),</span></div><div class='line' id='LC26'>		<span class="s2">&quot;iPage&quot;</span><span class="o">:</span>          <span class="nb">Math</span><span class="p">.</span><span class="nx">ceil</span><span class="p">(</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">_iDisplayStart</span> <span class="o">/</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">_iDisplayLength</span> <span class="p">),</span></div><div class='line' id='LC27'>		<span class="s2">&quot;iTotalPages&quot;</span><span class="o">:</span>    <span class="nb">Math</span><span class="p">.</span><span class="nx">ceil</span><span class="p">(</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">fnRecordsDisplay</span><span class="p">()</span> <span class="o">/</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">_iDisplayLength</span> <span class="p">)</span></div><div class='line' id='LC28'>	<span class="p">};</span></div><div class='line' id='LC29'><span class="p">};</span></div><div class='line' id='LC30'><br/></div><div class='line' id='LC31'><br/></div><div class='line' id='LC32'><span class="cm">/* Bootstrap style pagination control */</span></div><div class='line' id='LC33'><span class="nx">$</span><span class="p">.</span><span class="nx">extend</span><span class="p">(</span> <span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">dataTableExt</span><span class="p">.</span><span class="nx">oPagination</span><span class="p">,</span> <span class="p">{</span></div><div class='line' id='LC34'>	<span class="s2">&quot;bootstrap&quot;</span><span class="o">:</span> <span class="p">{</span></div><div class='line' id='LC35'>		<span class="s2">&quot;fnInit&quot;</span><span class="o">:</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">oSettings</span><span class="p">,</span> <span class="nx">nPaging</span><span class="p">,</span> <span class="nx">fnDraw</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC36'>			<span class="kd">var</span> <span class="nx">oLang</span> <span class="o">=</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">oLanguage</span><span class="p">.</span><span class="nx">oPaginate</span><span class="p">;</span></div><div class='line' id='LC37'>			<span class="kd">var</span> <span class="nx">fnClickHandler</span> <span class="o">=</span> <span class="kd">function</span> <span class="p">(</span> <span class="nx">e</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC38'>				<span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span></div><div class='line' id='LC39'>				<span class="k">if</span> <span class="p">(</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">oApi</span><span class="p">.</span><span class="nx">_fnPageChange</span><span class="p">(</span><span class="nx">oSettings</span><span class="p">,</span> <span class="nx">e</span><span class="p">.</span><span class="nx">data</span><span class="p">.</span><span class="nx">action</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC40'>					<span class="nx">fnDraw</span><span class="p">(</span> <span class="nx">oSettings</span> <span class="p">);</span></div><div class='line' id='LC41'>				<span class="p">}</span></div><div class='line' id='LC42'>			<span class="p">};</span></div><div class='line' id='LC43'><br/></div><div class='line' id='LC44'>			<span class="cm">/**</span></div><div class='line' id='LC45'><span class="cm">			// pagination with prev, next link captions</span></div><div class='line' id='LC46'><span class="cm">			$(nPaging).append(</span></div><div class='line' id='LC47'><span class="cm">				&#39;&lt;ul class=&quot;pagination&quot;&gt;&#39;+</span></div><div class='line' id='LC48'><span class="cm">					&#39;&lt;li class=&quot;prev disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;icon-angle-left&quot;&gt;&lt;/i&gt;&#39;+oLang.sPrevious+&#39;&lt;/a&gt;&lt;/li&gt;&#39;+</span></div><div class='line' id='LC49'><span class="cm">					&#39;&lt;li class=&quot;next disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;&#39;+oLang.sNext+&#39;&lt;i class=&quot;icon-angle-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;&#39;+</span></div><div class='line' id='LC50'><span class="cm">				&#39;&lt;/ul&gt;&#39;</span></div><div class='line' id='LC51'><span class="cm">			);</span></div><div class='line' id='LC52'><span class="cm">			**/</span></div><div class='line' id='LC53'>			<span class="c1">// pagination with prev, next link icons</span></div><div class='line' id='LC54'>			<span class="nx">$</span><span class="p">(</span><span class="nx">nPaging</span><span class="p">).</span><span class="nx">append</span><span class="p">(</span></div><div class='line' id='LC55'>				<span class="s1">&#39;&lt;ul class=&quot;pagination&quot;&gt;&#39;</span><span class="o">+</span></div><div class='line' id='LC56'>					<span class="s1">&#39;&lt;li class=&quot;prev disabled&quot;&gt;&lt;a href=&quot;#&quot; title=&quot;&#39;</span><span class="o">+</span><span class="nx">oLang</span><span class="p">.</span><span class="nx">sPrevious</span><span class="o">+</span><span class="s1">&#39;&quot;&gt;&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;&#39;</span><span class="o">+</span></div><div class='line' id='LC57'>					<span class="s1">&#39;&lt;li class=&quot;next disabled&quot;&gt;&lt;a href=&quot;#&quot; title=&quot;&#39;</span><span class="o">+</span><span class="nx">oLang</span><span class="p">.</span><span class="nx">sNext</span><span class="o">+</span><span class="s1">&#39;&quot;&gt;&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;&#39;</span><span class="o">+</span></div><div class='line' id='LC58'>				<span class="s1">&#39;&lt;/ul&gt;&#39;</span></div><div class='line' id='LC59'>			<span class="p">);</span></div><div class='line' id='LC60'><br/></div><div class='line' id='LC61'>			<span class="kd">var</span> <span class="nx">els</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;a&#39;</span><span class="p">,</span> <span class="nx">nPaging</span><span class="p">);</span></div><div class='line' id='LC62'>			<span class="nx">$</span><span class="p">(</span><span class="nx">els</span><span class="p">[</span><span class="mi">0</span><span class="p">]).</span><span class="nx">bind</span><span class="p">(</span> <span class="s1">&#39;click.DT&#39;</span><span class="p">,</span> <span class="p">{</span> <span class="nx">action</span><span class="o">:</span> <span class="s2">&quot;previous&quot;</span> <span class="p">},</span> <span class="nx">fnClickHandler</span> <span class="p">);</span></div><div class='line' id='LC63'>			<span class="nx">$</span><span class="p">(</span><span class="nx">els</span><span class="p">[</span><span class="mi">1</span><span class="p">]).</span><span class="nx">bind</span><span class="p">(</span> <span class="s1">&#39;click.DT&#39;</span><span class="p">,</span> <span class="p">{</span> <span class="nx">action</span><span class="o">:</span> <span class="s2">&quot;next&quot;</span> <span class="p">},</span> <span class="nx">fnClickHandler</span> <span class="p">);</span></div><div class='line' id='LC64'>		<span class="p">},</span></div><div class='line' id='LC65'><br/></div><div class='line' id='LC66'>		<span class="s2">&quot;fnUpdate&quot;</span><span class="o">:</span> <span class="kd">function</span> <span class="p">(</span> <span class="nx">oSettings</span><span class="p">,</span> <span class="nx">fnDraw</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC67'>			<span class="kd">var</span> <span class="nx">iListLength</span> <span class="o">=</span> <span class="mi">5</span><span class="p">;</span></div><div class='line' id='LC68'>			<span class="kd">var</span> <span class="nx">oPaging</span> <span class="o">=</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">oInstance</span><span class="p">.</span><span class="nx">fnPagingInfo</span><span class="p">();</span></div><div class='line' id='LC69'>			<span class="kd">var</span> <span class="nx">an</span> <span class="o">=</span> <span class="nx">oSettings</span><span class="p">.</span><span class="nx">aanFeatures</span><span class="p">.</span><span class="nx">p</span><span class="p">;</span></div><div class='line' id='LC70'>			<span class="kd">var</span> <span class="nx">i</span><span class="p">,</span> <span class="nx">j</span><span class="p">,</span> <span class="nx">sClass</span><span class="p">,</span> <span class="nx">iStart</span><span class="p">,</span> <span class="nx">iEnd</span><span class="p">,</span> <span class="nx">iHalf</span><span class="o">=</span><span class="nb">Math</span><span class="p">.</span><span class="nx">floor</span><span class="p">(</span><span class="nx">iListLength</span><span class="o">/</span><span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC71'><br/></div><div class='line' id='LC72'>			<span class="k">if</span> <span class="p">(</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iTotalPages</span> <span class="o">&lt;</span> <span class="nx">iListLength</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC73'>				<span class="nx">iStart</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC74'>				<span class="nx">iEnd</span> <span class="o">=</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iTotalPages</span><span class="p">;</span></div><div class='line' id='LC75'>			<span class="p">}</span></div><div class='line' id='LC76'>			<span class="k">else</span> <span class="k">if</span> <span class="p">(</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iPage</span> <span class="o">&lt;=</span> <span class="nx">iHalf</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC77'>				<span class="nx">iStart</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC78'>				<span class="nx">iEnd</span> <span class="o">=</span> <span class="nx">iListLength</span><span class="p">;</span></div><div class='line' id='LC79'>			<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iPage</span> <span class="o">&gt;=</span> <span class="p">(</span><span class="nx">oPaging</span><span class="p">.</span><span class="nx">iTotalPages</span><span class="o">-</span><span class="nx">iHalf</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC80'>				<span class="nx">iStart</span> <span class="o">=</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iTotalPages</span> <span class="o">-</span> <span class="nx">iListLength</span> <span class="o">+</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC81'>				<span class="nx">iEnd</span> <span class="o">=</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iTotalPages</span><span class="p">;</span></div><div class='line' id='LC82'>			<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC83'>				<span class="nx">iStart</span> <span class="o">=</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iPage</span> <span class="o">-</span> <span class="nx">iHalf</span> <span class="o">+</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC84'>				<span class="nx">iEnd</span> <span class="o">=</span> <span class="nx">iStart</span> <span class="o">+</span> <span class="nx">iListLength</span> <span class="o">-</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC85'>			<span class="p">}</span></div><div class='line' id='LC86'><br/></div><div class='line' id='LC87'>			<span class="k">for</span> <span class="p">(</span> <span class="nx">i</span><span class="o">=</span><span class="mi">0</span><span class="p">,</span> <span class="nx">iLen</span><span class="o">=</span><span class="nx">an</span><span class="p">.</span><span class="nx">length</span> <span class="p">;</span> <span class="nx">i</span><span class="o">&lt;</span><span class="nx">iLen</span> <span class="p">;</span> <span class="nx">i</span><span class="o">++</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC88'>				<span class="c1">// Remove the middle elements</span></div><div class='line' id='LC89'>				<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;li:gt(0)&#39;</span><span class="p">,</span> <span class="nx">an</span><span class="p">[</span><span class="nx">i</span><span class="p">]).</span><span class="nx">filter</span><span class="p">(</span><span class="s1">&#39;:not(:last)&#39;</span><span class="p">).</span><span class="nx">remove</span><span class="p">();</span></div><div class='line' id='LC90'><br/></div><div class='line' id='LC91'>				<span class="c1">// Add the new list items and their event handlers</span></div><div class='line' id='LC92'>				<span class="k">for</span> <span class="p">(</span> <span class="nx">j</span><span class="o">=</span><span class="nx">iStart</span> <span class="p">;</span> <span class="nx">j</span><span class="o">&lt;=</span><span class="nx">iEnd</span> <span class="p">;</span> <span class="nx">j</span><span class="o">++</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC93'>					<span class="nx">sClass</span> <span class="o">=</span> <span class="p">(</span><span class="nx">j</span><span class="o">==</span><span class="nx">oPaging</span><span class="p">.</span><span class="nx">iPage</span><span class="o">+</span><span class="mi">1</span><span class="p">)</span> <span class="o">?</span> <span class="s1">&#39;class=&quot;active&quot;&#39;</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC94'>					<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;&lt;li &#39;</span><span class="o">+</span><span class="nx">sClass</span><span class="o">+</span><span class="s1">&#39;&gt;&lt;a href=&quot;#&quot;&gt;&#39;</span><span class="o">+</span><span class="nx">j</span><span class="o">+</span><span class="s1">&#39;&lt;/a&gt;&lt;/li&gt;&#39;</span><span class="p">)</span></div><div class='line' id='LC95'>						<span class="p">.</span><span class="nx">insertBefore</span><span class="p">(</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;li:last&#39;</span><span class="p">,</span> <span class="nx">an</span><span class="p">[</span><span class="nx">i</span><span class="p">])[</span><span class="mi">0</span><span class="p">]</span> <span class="p">)</span></div><div class='line' id='LC96'>						<span class="p">.</span><span class="nx">bind</span><span class="p">(</span><span class="s1">&#39;click&#39;</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC97'>							<span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span></div><div class='line' id='LC98'>							<span class="nx">oSettings</span><span class="p">.</span><span class="nx">_iDisplayStart</span> <span class="o">=</span> <span class="p">(</span><span class="nb">parseInt</span><span class="p">(</span><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;a&#39;</span><span class="p">,</span> <span class="k">this</span><span class="p">).</span><span class="nx">text</span><span class="p">(),</span><span class="mi">10</span><span class="p">)</span><span class="o">-</span><span class="mi">1</span><span class="p">)</span> <span class="o">*</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iLength</span><span class="p">;</span></div><div class='line' id='LC99'>							<span class="nx">fnDraw</span><span class="p">(</span> <span class="nx">oSettings</span> <span class="p">);</span></div><div class='line' id='LC100'>						<span class="p">}</span> <span class="p">);</span></div><div class='line' id='LC101'>				<span class="p">}</span></div><div class='line' id='LC102'><br/></div><div class='line' id='LC103'>				<span class="c1">// Add / remove disabled classes from the static elements</span></div><div class='line' id='LC104'>				<span class="k">if</span> <span class="p">(</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iPage</span> <span class="o">===</span> <span class="mi">0</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC105'>					<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;li:first&#39;</span><span class="p">,</span> <span class="nx">an</span><span class="p">[</span><span class="nx">i</span><span class="p">]).</span><span class="nx">addClass</span><span class="p">(</span><span class="s1">&#39;disabled&#39;</span><span class="p">);</span></div><div class='line' id='LC106'>				<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC107'>					<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;li:first&#39;</span><span class="p">,</span> <span class="nx">an</span><span class="p">[</span><span class="nx">i</span><span class="p">]).</span><span class="nx">removeClass</span><span class="p">(</span><span class="s1">&#39;disabled&#39;</span><span class="p">);</span></div><div class='line' id='LC108'>				<span class="p">}</span></div><div class='line' id='LC109'><br/></div><div class='line' id='LC110'>				<span class="k">if</span> <span class="p">(</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iPage</span> <span class="o">===</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iTotalPages</span><span class="o">-</span><span class="mi">1</span> <span class="o">||</span> <span class="nx">oPaging</span><span class="p">.</span><span class="nx">iTotalPages</span> <span class="o">===</span> <span class="mi">0</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC111'>					<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;li:last&#39;</span><span class="p">,</span> <span class="nx">an</span><span class="p">[</span><span class="nx">i</span><span class="p">]).</span><span class="nx">addClass</span><span class="p">(</span><span class="s1">&#39;disabled&#39;</span><span class="p">);</span></div><div class='line' id='LC112'>				<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC113'>					<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;li:last&#39;</span><span class="p">,</span> <span class="nx">an</span><span class="p">[</span><span class="nx">i</span><span class="p">]).</span><span class="nx">removeClass</span><span class="p">(</span><span class="s1">&#39;disabled&#39;</span><span class="p">);</span></div><div class='line' id='LC114'>				<span class="p">}</span></div><div class='line' id='LC115'>			<span class="p">}</span></div><div class='line' id='LC116'>		<span class="p">}</span></div><div class='line' id='LC117'>	<span class="p">}</span></div><div class='line' id='LC118'><span class="p">}</span> <span class="p">);</span></div><div class='line' id='LC119'><br/></div><div class='line' id='LC120'><br/></div><div class='line' id='LC121'><span class="cm">/*</span></div><div class='line' id='LC122'><span class="cm"> * TableTools Bootstrap compatibility</span></div><div class='line' id='LC123'><span class="cm"> * Required TableTools 2.1+</span></div><div class='line' id='LC124'><span class="cm"> */</span></div><div class='line' id='LC125'><span class="k">if</span> <span class="p">(</span> <span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">DataTable</span><span class="p">.</span><span class="nx">TableTools</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC126'>	<span class="c1">// Set the classes that TableTools uses to something suitable for Bootstrap</span></div><div class='line' id='LC127'>	<span class="nx">$</span><span class="p">.</span><span class="nx">extend</span><span class="p">(</span> <span class="kc">true</span><span class="p">,</span> <span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">DataTable</span><span class="p">.</span><span class="nx">TableTools</span><span class="p">.</span><span class="nx">classes</span><span class="p">,</span> <span class="p">{</span></div><div class='line' id='LC128'>		<span class="s2">&quot;container&quot;</span><span class="o">:</span> <span class="s2">&quot;DTTT btn-group&quot;</span><span class="p">,</span></div><div class='line' id='LC129'>		<span class="s2">&quot;buttons&quot;</span><span class="o">:</span> <span class="p">{</span></div><div class='line' id='LC130'>			<span class="s2">&quot;normal&quot;</span><span class="o">:</span> <span class="s2">&quot;btn default&quot;</span><span class="p">,</span></div><div class='line' id='LC131'>			<span class="s2">&quot;disabled&quot;</span><span class="o">:</span> <span class="s2">&quot;disabled&quot;</span></div><div class='line' id='LC132'>		<span class="p">},</span></div><div class='line' id='LC133'>		<span class="s2">&quot;collection&quot;</span><span class="o">:</span> <span class="p">{</span></div><div class='line' id='LC134'>			<span class="s2">&quot;container&quot;</span><span class="o">:</span> <span class="s2">&quot;DTTT_dropdown dropdown-menu&quot;</span><span class="p">,</span></div><div class='line' id='LC135'>			<span class="s2">&quot;buttons&quot;</span><span class="o">:</span> <span class="p">{</span></div><div class='line' id='LC136'>				<span class="s2">&quot;normal&quot;</span><span class="o">:</span> <span class="s2">&quot;&quot;</span><span class="p">,</span></div><div class='line' id='LC137'>				<span class="s2">&quot;disabled&quot;</span><span class="o">:</span> <span class="s2">&quot;disabled&quot;</span></div><div class='line' id='LC138'>			<span class="p">}</span></div><div class='line' id='LC139'>		<span class="p">},</span></div><div class='line' id='LC140'>		<span class="s2">&quot;print&quot;</span><span class="o">:</span> <span class="p">{</span></div><div class='line' id='LC141'>			<span class="s2">&quot;info&quot;</span><span class="o">:</span> <span class="s2">&quot;DTTT_print_info modal&quot;</span></div><div class='line' id='LC142'>		<span class="p">},</span></div><div class='line' id='LC143'>		<span class="s2">&quot;select&quot;</span><span class="o">:</span> <span class="p">{</span></div><div class='line' id='LC144'>			<span class="s2">&quot;row&quot;</span><span class="o">:</span> <span class="s2">&quot;active&quot;</span></div><div class='line' id='LC145'>		<span class="p">}</span></div><div class='line' id='LC146'>	<span class="p">}</span> <span class="p">);</span></div><div class='line' id='LC147'><br/></div><div class='line' id='LC148'>	<span class="c1">// Have the collection use a bootstrap compatible dropdown</span></div><div class='line' id='LC149'>	<span class="nx">$</span><span class="p">.</span><span class="nx">extend</span><span class="p">(</span> <span class="kc">true</span><span class="p">,</span> <span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">DataTable</span><span class="p">.</span><span class="nx">TableTools</span><span class="p">.</span><span class="nx">DEFAULTS</span><span class="p">.</span><span class="nx">oTags</span><span class="p">,</span> <span class="p">{</span></div><div class='line' id='LC150'>		<span class="s2">&quot;collection&quot;</span><span class="o">:</span> <span class="p">{</span></div><div class='line' id='LC151'>			<span class="s2">&quot;container&quot;</span><span class="o">:</span> <span class="s2">&quot;ul&quot;</span><span class="p">,</span></div><div class='line' id='LC152'>			<span class="s2">&quot;button&quot;</span><span class="o">:</span> <span class="s2">&quot;li&quot;</span><span class="p">,</span></div><div class='line' id='LC153'>			<span class="s2">&quot;liner&quot;</span><span class="o">:</span> <span class="s2">&quot;a&quot;</span></div><div class='line' id='LC154'>		<span class="p">}</span></div><div class='line' id='LC155'>	<span class="p">}</span> <span class="p">);</span></div><div class='line' id='LC156'><span class="p">}</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.06884s from github-fe127-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

      <div class="hidden" id="js-avatars" data-url="https://avatars.github.com"></div>
  </body>
</html>

