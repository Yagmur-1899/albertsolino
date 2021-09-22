
<?php
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    
</head>
<body>
     <div class="container-blog">
         <div id="wrapped">
          <ul>
              <li> <a href="blog.php">everything</a></li>
              <li> <a href="releases.php">releases</a></li>
              <li> <a href="news.php">news</a></li>
          </ul>
          <article>
          <header>
            <h2>
              <a href="/2021/9/17/this-week-in-rails-rails-7-alpha-released/" rel="bookmark">Rails 7 alpha released</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2021-09-17 00:00:00 +0000">September 17, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> here with more new Rails 7 changes.</p>

<h3 id="rails-70-alpha-released"><a href="https://weblog.rubyonrails.org/2021/9/15/Rails-7-0-alpha-1-released/">Rails 7.0 alpha released</a></h3>

<p>The new Rails frontend approach and all the other new goodies can already be checked in this release.</p>

<h3 id="introduce-activemodelapi"><a href="https://github.com/rails/rails/pull/43223">Introduce ActiveModel::API</a></h3>

<p>Make <em>ActiveModel::API</em> the minimum API to talk with Action Pack and Action View. This will allow adding more functionality to <em>ActiveModel::Model</em>.</p>

<h3 id="add-support-for-generated-columns-in-postgresql"><a href="https://github.com/rails/rails/pull/41856">Add support for generated columns in PostgreSQL</a></h3>

<p>Generated columns are supported since version 12.0 of PostgreSQL. This adds<br />
 support of those to the Active Record PostgreSQL adapter.</p>

<h3 id="generate-less-initializers-in-newupgraded-rails-apps"><a href="https://github.com/rails/rails/pull/42538">Generate less initializers in new/upgraded Rails apps</a></h3>

<p>Removed configurations are set by the default Rails configuration and can be still changed when needed.</p>

<h3 id="use-correct-precision-when-touching-updated_at-column-in-upsert-"><a href="https://github.com/rails/rails/pull/42993">Use correct precision when touching updated_at column in upsert </a></h3>

<p><em>CURRENT_TIMESTAMP</em> provides differing precision depending on the database,<br />
 and not all databases support explicitly specifying additional precision. Instead, delegate to the new <em>connection.high_precision_current_timestamp</em><br />
 for the SQL to produce a high precision timestamp on the current database.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210913-20210917">13 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-09-13%7D...main@%7B2021-09-17%7D">here</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/9/15/Rails-7-0-alpha-1-released/" rel="bookmark">Rails 7.0 Alpha 1: New JavaScript Answers, At-Work Encryption, Query Origin Logging, Zeitwerk Exclusively</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dhh</span></span>,
              <span class="published" title="2021-09-15 23:00:00 +0000">September 15, 2021 @ 11:00 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/releases/" rel="category tag">Releases</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Welcome to the first alpha release of Rails 7. It brings some very exciting new answers to how we do JavaScript, an awesome approach to at-work encryption with Active Record, SQL query origin logging, asynchronous query loading, exclusive autoloading through Zeitwerk, and much more.</p>

<p>We usually don’t do alpha releases for Rails, but given the fact that the new front-end approach is such a substantial change, we thought it best to validate that a little further before jumping straight on the beta -&gt; release candidate -&gt; final train.</p>

<p>Please help us test all this new stuff so we can ensure a solid final release of Rails 7 this year!</p>

<h2 id="all-new-answers-on-the-front-end">All New Answers On The Front-End</h2>

<p>After almost five years with <a href="https://github.com/rails/webpacker">Webpacker</a> as our default answer to writing modern JavaScript in Rails, <a href="https://www.youtube.com/watch?v=PtxZvFnL2i0">it’s time to move on</a>. Advancements in browser support for ES6/ESM, widespread adoption of HTTP/2, and <a href="https://github.com/rails/importmap-rails">the exciting new standard for import maps</a> has <a href="https://world.hey.com/dhh/modern-web-apps-without-javascript-bundling-or-transpiling-a20f2755">paved the way</a> for <a href="https://world.hey.com/dhh/rails-7-will-have-three-great-answers-to-javascript-in-2021-8d68191b">a no-Node approach to JavaScript in Rails 7</a> – <a href="https://github.com/rails/importmap-rails#using-node-modules-via-javascript-cdns">without giving up on npm packages</a>.</p>

<p>Together with the replacement of Turbolinks and Rails UJS by the <a href="https://hotwired.dev">Hotwire</a> combination of <a href="https://stimulus.hotwired.dev">Stimulus</a> and <a href="https://turbo.hotwired.dev">Turbo</a>, we now have the most complete in-the-box front-end setup for writing great Rails applications ever. Without needing thousands of node dependencies in <code class="language-plaintext highlighter-rouge">node_modules</code>, fighting with bundler configurations, or any of the other challenges common with JavaScript development.</p>

<p>At the same time, we’ve also <a href="https://www.youtube.com/watch?v=JsNtLiph87Y">dramatically improved the integration</a> between Rails and JavaScript + CSS bundlers for those who need that. Through two new companion gems that can be triggered via rails new <a href="https://github.com/rails/jsbundling-rails/">–javascript [bundler]</a> and <a href="https://github.com/rails/cssbundling-rails/">–css [bundler]</a>, you get easy access to starting a new application or changing one that starts with import maps to use <a href="https://github.com/evanw/esbuild">esbuild</a>, <a href="https://rollupjs.org/guide/en/">rollup.js</a>, <a href="https://webpack.js.org/">Webpack</a>, <a href="https://tailwindcss.com/">Tailwind CSS</a>, <a href="https://postcss.org/">PostCSS</a>, <a href="https://sass-lang.com/dart-sass">Dart Sass</a>, and <a href="https://getbootstrap.com/">Bootstrap</a>.</p>

<h2 id="at-work-encryption-with-active-record">At-Work Encryption With Active Record</h2>

<p>Extracted from <a href="https://hey.com/security">HEY</a>, we’ve added <a href="https://github.com/rails/rails/pull/41659">encrypted attributes to Active Record</a>, so your application can offer at-work encryption in addition to the traditional at-rest and in-transit coverage.</p>

<p>As an immediate practical benefit, encrypting sensitive attributes adds an additional security layer. For example, if an attacker gained access to your database, a snapshot of it, or your application logs, they wouldn’t be able to make sense of the encrypted information. And even without thinking about malicious actors, checking application logs for legit reasons shouldn’t expose personal information from customers either.</p>

<p>But more importantly, by using Active Record Encryption, you define what constitutes sensitive information in your application at the code level. This enables controlling how this information is accessed and building services around it. As examples, think about auditable Rails consoles that protect encrypted data or check the built-in system to filter controller params automatically.</p>

<p>Checkout the <a href="https://edgeguides.rubyonrails.org/active_record_encryption.html">full guide on how to use encrypted attributes</a>.</p>

<h2 id="trace-query-origins-with-marginalia-style-tagging">Trace Query Origins With Marginalia-Style Tagging</h2>

<p>Almost a decade ago, <a href="https://signalvnoise.com/posts/3130-tech-note-mysql-query-comments-in-rails">Marginalia was extracted from Basecamp</a> to trace query origins with SQL comment tagging. Now this external gem has been <a href="https://github.com/rails/rails/pull/42240">upstreamed into Active Record as QueryLogs</a>.</p>

<h2 id="asynchronous-query-loading">Asynchronous Query Loading</h2>

<p>When you have a controller action that needs to load two unrelated queries, you can now do it concurrently through <a href="https://github.com/rails/rails/pull/41372">Relation#load_async</a>. If you have three complex queries that each take 100ms, you’d have to spend 300ms executing them one by one before. Now you can run them in parallel, spending only a total of 100ms on the set.</p>

<h2 id="zeitwerk-exclusively">Zeitwerk Exclusively</h2>

<p>Autoloading in Rails is one of those magical quality of life realities that it’s easy to just take for granted. The trusty old <code class="language-plaintext highlighter-rouge">const_missing</code> approach which came with a range of quirks and missing features has finally been replaced exclusively with the <a href="https://github.com/fxn/zeitwerk#introduction">Zeitwerk code loader</a>. There are a few upgrade gotchas to be aware of, especially for older applications, but with this <a href="https://guides.rubyonrails.org/upgrading_ruby_on_rails.html#autoloading">upgrade guide</a> you should be on your way in no time</p>

<h2 id="a-few-other-highlights">A Few Other Highlights</h2>

<ul>
  <li><a href="https://github.com/rails/spring">Spring</a> is no longer on by default, as faster computers have made it less relevant on anything but the largest applications.</li>
  <li><a href="https://github.com/rails/rails/pull/41488">ActionController::Live#send_stream</a> makes it easy to stream files that are being generated on-the-fly in controller actions.</li>
  <li>Parallelized testing will now compare your CPU core count to your test count and <a href="https://github.com/rails/rails/pull/42761">scale the parallelization accordingly</a>.</li>
  <li>Active Storage now uses the faster and more secure <code class="language-plaintext highlighter-rouge">libvips</code> as its <a href="https://edgeguides.rubyonrails.org/upgrading_ruby_on_rails.html#activestorage-variant-processor-changed-to-vips">default variant processor</a>.</li>
</ul>

<h2 id="from-all-of-us-to-all-of-you">From All Of Us To All Of You</h2>

<p>There are <a href="https://github.com/rails/rails/compare/v6.1.4.1...main">over three thousand commits</a> that have gone into Rails 7 since we released version 6.1 last year. This is the work of hundreds of contributors. Including <a href="https://contributors.rubyonrails.org/contributors/in-time-window/this-year">over 200 first-time contributors</a> this year alone. They join the <a href="https://contributors.rubyonrails.org">nearly six thousand contributors</a> that have made changes to the Rails code base over the years!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/9/11/this-week-in-rails-bye-bye-byebug-hello-jsbundling-and-cssbundling/" rel="bookmark">Bye-bye Byebug, Hello jsbundling and cssbundling!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">zzak</span></span>,
              <span class="published" title="2021-09-11 00:00:00 +0000">September 11, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>

          
<p>Hi! <a href="https://github.com/zzak">zzak</a> here! We’re back after a 2 week break with some of the latest changes that will land in Rails 7.</p>

<h3 id="dhh-previews-javascript-options-in-rails-7-youtube"><a href="https://www.youtube.com/watch?v=JsNtLiph87Y">DHH previews JavaScript options in Rails 7 [YouTube]</a></h3>

<p>If you haven’t been following along, Rails 7 will get a major facelift on the front-end. We recommend reading this <a href="https://world.hey.com/dhh/rails-7-will-have-three-great-answers-to-javascript-in-2021-8d68191b">blog post</a> to learn more.</p>

<h3 id="replace-byebug-with-rubydebug"><a href="https://github.com/rails/rails/pull/43187">Replace Byebug with ruby/debug</a></h3>

<p>Ruby 3.1 will launch with a new first-class <a href="https://github.com/ruby/debug">debugger</a> that works great with Rails.</p>

<p>Let’s all appreciate the many years Byebug has helped us ship software.</p>

<h3 id="add-ssl-support-for-postgresql-in-binrails-dbconsole"><a href="https://github.com/rails/rails/pull/43118">Add SSL support for postgresql in “bin/rails dbconsole”</a></h3>

<p>This PR fixes the <code class="language-plaintext highlighter-rouge">dbconsole</code> command when used with PostgreSQL to support encrypted connections.</p>

<h3 id="instrument-activestorage-analyzers"><a href="https://github.com/rails/rails/pull/42939">Instrument ActiveStorage analyzers</a></h3>

<p>Help identify bottle necks when using ActiveStorage analyzers by emitting ActiveSupport instrumentation metrics.</p>

<h3 id="add-css-app-generator-option"><a href="https://github.com/rails/rails/pull/43177">Add –css app generator option</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">rails new</code> command just got a brand new <code class="language-plaintext highlighter-rouge">--css</code> flag that let’s you specify which CSS processor to use in your app. You can choose from tailwind, postcss, or sass.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210829-20210912">21 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-08-29%7D...main@%7B2021-09-12%7D">here</a>. Until next week!</p>


          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/9/3/autoloading-in-rails-7-get-ready/" rel="bookmark">Autoloading in Rails 7, get ready!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">Xavier Noria</span></span>,
              <span class="published" title="2021-09-03 11:21:31 +0000">September 3, 2021 @ 11:21 am</span>
              
                <span class="categories">in
              
              
                  <a href="/edge/" rel="category tag">Edge</a>
              
              
                </span>
              
            </p>
          </header>
          <section>

<p>The forthcoming Rails 7 represents a milestone for autoloading.</p>

<p>There are two important changes coming:</p>

<ol>
  <li>
    <p><a href="https://github.com/fxn/zeitwerk">Zeitwerk</a> has been the default autoloader for <a href="https://weblog.rubyonrails.org/2019/8/15/Rails-6-0-final-release/">more than two years</a>. Rails 6.0 and Rails 6.1 supported both <code class="language-plaintext highlighter-rouge">zeitwerk</code> and <code class="language-plaintext highlighter-rouge">classic</code> modes to help projects transition. This period ends with Rails 7: <code class="language-plaintext highlighter-rouge">classic</code> mode won’t be available anymore.</p>
  </li>
  <li>
    <p>Initializers can autoload reloadable constants if wrapped in <code class="language-plaintext highlighter-rouge">to_prepare</code> blocks, but they no longer can otherwise.</p>
  </li>
</ol>

<p>Maybe your 6.x application is already ready for these changes. Otherwise, you can prepare in advance to ease the upgrade. Let’s briefly explore their implications.</p>

<h2 id="applications-need-to-run-in-zeitwerk-mode">Applications need to run in <code class="language-plaintext highlighter-rouge">zeitwerk</code> mode</h2>

<p>Applications still running in <code class="language-plaintext highlighter-rouge">classic</code> mode have to switch to <code class="language-plaintext highlighter-rouge">zeitwerk</code> mode.</p>

<p>Don’t be scared, many non-trivial Rails applications reported really smooth switches. It is very likely that you only need to flip the switch, maybe configure some inflector, and done. Please check the <a href="https://guides.rubyonrails.org/upgrading_ruby_on_rails.html#autoloading">upgrading guide for Rails 6.0</a> for details.</p>

<p>I am personally more than willing to help if you find anything unexpected, just <a href="https://github.com/rails/rails/issues/new">open an issue</a> and tag <a href="https://github.com/fxn">@fxn</a>.</p>

<h2 id="the-setter-configautoloader-has-been-deleted">The setter config.autoloader= has been deleted</h2>

<p>In Rails 7 there is no configuration point to set the autoloading mode, <code class="language-plaintext highlighter-rouge">config.autoloader=</code> has been deleted.</p>

<h2 id="activesupportdependencies-private-api-has-been-deleted">ActiveSupport::Dependencies private API has been deleted</h2>

<p>You don’t announce changes to internal APIs, but since <code class="language-plaintext highlighter-rouge">classic</code> has been there since the first release of Rails, this is worth being included in this post.</p>

<p><code class="language-plaintext highlighter-rouge">ActiveSupport::Dependencies</code> implemented the <code class="language-plaintext highlighter-rouge">classic</code> autoloader, and with its removal a lot of internal methods have been dropped in cascade like <code class="language-plaintext highlighter-rouge">hook!</code>, <code class="language-plaintext highlighter-rouge">unhook!</code>, <code class="language-plaintext highlighter-rouge">depend_on</code>, <code class="language-plaintext highlighter-rouge">require_or_load</code>, <code class="language-plaintext highlighter-rouge">mechanism</code>, <code class="language-plaintext highlighter-rouge">qualified_name_for</code>, <code class="language-plaintext highlighter-rouge">warnings_on_first_load</code>, <code class="language-plaintext highlighter-rouge">logger</code>, <code class="language-plaintext highlighter-rouge">verbose</code>, and many others.</p>

<p>Auxiliary internal classes or modules are also gone, like <code class="language-plaintext highlighter-rouge">Reference</code>, <code class="language-plaintext highlighter-rouge">ClassCache</code>, <code class="language-plaintext highlighter-rouge">ModuleConstMissing</code>, <code class="language-plaintext highlighter-rouge">Blamable</code>, and more.</p>

<p>About 90% of <code class="language-plaintext highlighter-rouge">active_support/dependencies.rb</code> has been deleted. You can compare the <a href="https://github.com/rails/rails/blob/a44fbb5dcacd3281116f7d9881a25e8f08f729a4/activesupport/lib/active_support/dependencies.rb">version in edge</a> with <a href="https://github.com/rails/rails/blob/6-1-stable/activesupport/lib/active_support/dependencies.rb">the one in 6.1</a>.</p>

<h2 id="autoloading-during-initialization">Autoloading during initialization</h2>

<p>Applications that autoloaded reloadable constants during initialization outside of <code class="language-plaintext highlighter-rouge">to_prepare</code> blocks got those constants unloaded and had this warning issued since Rails 6.0:</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>DEPRECATION WARNING: Initialization autoloaded the constant User.

Being able to do this is deprecated. Autoloading during initialization is going
to be an error condition in future versions of Rails.

Reloading does not reboot the application, and therefore code executed during
initialization does not run again. So, if you reload User, for example,
the expected changes won't be reflected in that stale Class object.

This autoloaded constant has been unloaded.

In order to autoload safely at boot time, please wrap your code in a reloader
callback this way:

    Rails.application.reloader.to_prepare do
      # Autoload classes and modules needed at boot time here.
    end

That block runs when the application boots, and every time there is a reload.
For historical reasons, it may run twice, so it has to be idempotent.

Check the "Autoloading and Reloading Constants" guide to learn more about how
Rails autoloads and reloads.
 (called from ...)
</code></pre></div></div>

<p>If you still get this warning, please check the section about autoloading when the application boots in the <a href="https://guides.rubyonrails.org/v7.0/autoloading_and_reloading_constants.html#autoloading-when-the-application-boots">autoloading guide</a>. You’d get a <code class="language-plaintext highlighter-rouge">NameError</code> in Rails 7 otherwise.</p>

<h2 id="railsautoloaderszeitwerk_enabled">Rails.autoloaders.zeitwerk_enabled?</h2>

<p>Engines that want to support Rails 6.x can check</p>

<div class="language-ruby highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="no">Rails</span><span class="p">.</span><span class="nf">autoloaders</span><span class="p">.</span><span class="nf">zeitwerk_enabled?</span>
</code></pre></div></div>

<p>to know if the parent application runs in <code class="language-plaintext highlighter-rouge">zeitwerk</code> mode. This predicate still exists in Rails 7 for this use case.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/8/28/this-week-in-rails-remove-default-reliance-on-sass-and-more/" rel="bookmark">Remove default reliance on Sass and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2021-08-28 00:00:00 +0000">August 28, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>

<p>Hi, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the latest changes in Rails.</p>

<h3 id="remove-default-reliance-on-sass-and-css-generators"><a href="https://github.com/rails/rails/pull/43110">Remove default reliance on Sass and CSS generators</a></h3>

<p>Due to Saas has chosen to focus exclusively on dart-saas, Rails is decreasing its reliance on it. Besides that, this PR also removes the per model css file generation.</p>

<h3 id="avoid-use-of-exceptions-to-detect-invalid-floats"><a href="https://github.com/rails/rails/pull/43106">Avoid use of exceptions to detect invalid floats</a></h3>

<p>This PR Improves the performance of <em>ActiveSupport::NumberHelper</em> and <em>ActionView::Helpers::NumberHelper</em> formatters by avoiding the use of exceptions as flow control.</p>

<h3 id="make-preload_link_tag-work-with-images"><a href="https://github.com/rails/rails/pull/43088">Make preload_link_tag work with images</a></h3>

<p>Prior to this change, <em>preload_link_tag</em> with an image would generate a tag without an <em>as</em> attribute. If the <em>as</em> attribute doesn’t get set, browsers tend to ignore the link tag, making the tag useless. This change fixes the issue.</p>

<h3 id="add-ability-to-ignore-tables-in-the-schema-cache"><a href="https://github.com/rails/rails/pull/43075">Add ability to ignore tables in the schema cache</a></h3>

<p>In cases where an application uses pt-osc or lhm they may have temporary tables being used for migrations. Those tables shouldn’t be included by the schema cache because it makes the cache bigger and after this change, on_e can set config.active_record.schema_cache_ignored_tables_ to an array of tables or regex’s.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210821-20210828">22 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-08-21%7D...main@%7B2021-08-28%7D">here</a>. Until next week!</p>


          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/8/21/this-week-in-rails-good-bye-classic-mode-skip-puma-skip-gemfile-hello-weekday_options_for_select/" rel="bookmark">Good-bye classic mode, --skip-puma, --skip-gemfile.. hello weekday_options_for_select!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">zzak</span></span>,
              <span class="published" title="2021-08-21 00:00:00 +0000">August 21, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>

<p>Hello, <a href="https://github.com/zzak">zzak</a> again with the latest changes in Rails this week!</p>

<h3 id="dhh-previews-modern-web-apps-without-javascript-bundling-or-transpiling"><a href="https://www.youtube.com/watch?v=PtxZvFnL2i0">DHH previews modern web apps without JavaScript bundling or transpiling</a></h3>

<p>In this YouTube, DHH goes through the latest changes planned for Rails 7 and how the face of front-end development has evolved.</p>

<h3 id="rails-6041-and-6141-have-been-released"><a href="https://weblog.rubyonrails.org/2021/8/19/Rails-6-0-4-1-and-6-1-4-1-have-been-released/">Rails 6.0.4.1 and 6.1.4.1 have been released</a></h3>

<p>A reminder to upgrade to the latest stable versions of Rails which includes a critical security fix for Action Pack.</p>

<h3 id="dropping-support-for-classic-mode"><a href="">Dropping support for classic mode</a></h3>

<p>There’s an ongoing epic to delete the <a href="https://guides.rubyonrails.org/v6.1/autoloading_and_reloading_constants_classic_mode.html">classic</a> autoloader that <a href="https://github.com/rails/rails/commit/0d523d83657ce7066f25d87f6f094e804590e1e8">started months ago</a>. Let’s do a checkpoint in this newsletter.</p>

<p>You can no longer opt-in to classic mode using config.autoloader=, this setter has been deleted, Rails 7 has only one autoloading backend: <a href="https://github.com/fxn/zeitwerk">Zeitwerk</a>.</p>

<p>During application initialization, you can autoload classes and modules from <a href="https://edgeguides.rubyonrails.org/autoloading_and_reloading_constants.html#config-autoload-once-paths">config.autoload_once_paths</a>, but autoloading reloadable constants doesn’t work anymore. That has been deprecated and issuing warnings since Rails 6.0. Check the <a href="https://edgeguides.rubyonrails.org/autoloading_and_reloading_constants.html#autoloading-when-the-application-boots">documentation</a> for valid ways to do that.</p>

<p>Additionally, a lot of private APIs and orphan code fall in cascade. Check for example <a href="https://github.com/rails/rails/pull/43048">#43048</a> and <a href="https://github.com/rails/rails/pull/43058">#43058</a>, and there’s more to come.</p>

<h3 id="add-new-form-builder-weekday_options_for_select-"><a href="https://github.com/rails/rails/pull/42979">Add new form builder “weekday_options_for_select” </a></h3>

<p>This PR adds a helper for weekday select which even includes i18n!</p>

<h3 id="support-for-byte-ranges-in-active-storage"><a href="https://github.com/rails/rails/pull/41437">Support for byte ranges in Active Storage</a></h3>

<p>This PR allows serving uploads in chunks in order to stream buffered files as is required e.g. audio podcasts from S3 to an iphone.</p>

<h3 id="add-database-config-option-to-turn-off-tasks-like-dbmigrate"><a href="https://github.com/rails/rails/pull/42794">Add database config option to turn off tasks like db:migrate</a></h3>

<p>In a multidb configuration you may have a database that you want to connect to, such as a replica, but don’t want to accidentally run any db tasks on it.</p>

<p>The “database_task: false” config flag ensures you don’t accidentally “rails db:drop” your backup database.</p>

<h3 id="remove-legacy-skip-gemfile-option"><a href="https://github.com/rails/rails/pull/42996">Remove legacy –skip-gemfile option</a></h3>

<p>“Don’t have to keep all the monuments to old skirmishes around forever.”</p>

<h3 id="remove-skip-puma-option"><a href="https://github.com/rails/rails/pull/42998">Remove –skip-puma option</a></h3>

<p>Since puma is the only option available for the web server, it doesn’t make sense to allow removing it as a configuration option.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210814-20210821">15 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-08-14%7D...main@%7B2021-08-21%7D">here</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/8/19/Rails-6-0-4-1-and-6-1-4-1-have-been-released/" rel="bookmark">Rails 6.0.4.1 and 6.1.4.1 have been released</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">tenderlove</span></span>,
              <span class="published" title="2021-08-19 16:40:25 +0000">August 19, 2021 @  4:40 pm</span>
              
            </p>
          </header>
          <section>

<p>Hi everyone!  Rails versions 6.0.4.1 and 6.1.4.1 have been released!</p>

<p>These releases contain important security fixes, so please update when you can!
This release just contains one security fix which you can read about here:</p>

<ul>
  <li><a href="https://discuss.rubyonrails.org/t/cve-2021-22942-possible-open-redirect-in-host-authorization-middleware/78722">[CVE-2021-22942] Possible Open Redirect in Host Authorization Middleware</a></li>
</ul>



<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/8/13/this-week-in-rails-esm-importmap-and-marginalia/" rel="bookmark">ESM importmap and Marginalia</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2021-08-13 00:00:00 +0000">August 13, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>

<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> here introducing you to upcoming Rails 7 goodies.</p>

<h3 id="esm-importmap-support"><a href="https://github.com/rails/importmap-rails">ESM importmap support</a></h3>

<p>Modern web apps without JavaScript bundling or transpiling are now possible to build in Rails. Exciting new direction of frontend tooling, that most likely Rails 7.0 will aim. Introduced by DHH in <a href="https://world.hey.com/dhh/modern-web-apps-without-javascript-bundling-or-transpiling-a20f2755">this post</a>.</p>

<h3 id="port-marginalia-gem-to-rails"><a href="https://github.com/rails/rails/pull/42240">Port Marginalia gem to Rails</a></h3>

<p>Configurable tags can be automatically added to all SQL queries generated by Active Record. By default the application, controller and action details are added to the query tags, like this:<br />
<em>SELECT * FROM books /*application:MyApp;controller:books;action:index*/</em></p>

<h3 id="add-multi-db-setup-and-reset-tasks"><a href="https://github.com/rails/rails/pull/42938">Add multi db setup and reset tasks</a></h3>

<p>Added support for multiple databases to <em>rails db:setup</em> and <em>rails db:reset</em>. Now those tasks can be run per database, like <em>rails db:setup:primary</em>.</p>

<h3 id="no-spring-in-default-stack"><a href="https://github.com/rails/rails/pull/42997">No Spring in default stack</a></h3>

<p>Faster computers have meant that most apps won’t see a big benefit from Spring on small to moderate size apps.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210808-20210813">16 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-08-08%7D...main@%7B2021-08-13%7D">here.</a> Until next week!</p>


          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/8/8/this-week-in-rails-active-record-goodies-and-more/" rel="bookmark">Active Record goodies and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2021-08-08 00:00:00 +0000">August 8, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>

<p>Hi there, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the latest new about the Rails framework.</p>

<h3 id="allow-entirely-opting-out-of-deprecation-warnings"><a href="https://github.com/rails/rails/pull/42913">Allow entirely opting out of deprecation warnings</a></h3>

<p>Previously if you set <em>app.config.active_support.deprecation = :silence</em>, some work would still be done on each call to <em>ActiveSupport::Deprecation.warn</em>, which had computing cost, but from now on, you can disable it completely.</p>

<h3 id="output-action-cable-javascript-without-transpiling-and-as-esm"><a href="https://github.com/rails/rails/pull/42856">Output Action Cable Javascript without transpiling and as ESM</a></h3>

<p>This PR updates all the Rails Javascript to target ES2017 and ESM, as far as is possible. This makes it easier to use these outputs directly in browsers without bundling, yet still use ESM module.</p>

<h3 id="create-database-via-ui-when-activerecordnodatabaseerror"><a href="https://github.com/rails/rails/pull/39723">Create database via UI when ActiveRecord::NoDatabaseError</a></h3>

<p>This PR adds the possibility to create the database via the UI when database has not been created in development mode.</p>

<h3 id="add-activerecordquerymethodsin_order_of"><a href="https://github.com/rails/rails/pull/42061">Add ActiveRecord::QueryMethods#in_order_of</a></h3>

<p><em>#in_order_of</em> allows you to specify an explicit order that you’d like records
returned in based on a SQL expression, for instance:
<em>Post.in_order_of(:id, [3, 5, 1])</em></p>

<h3 id="add-activerecordrelationstructurally_compatible"><a href="https://github.com/rails/rails/pull/41841">Add ActiveRecord::Relation#structurally_compatible?</a></h3>

<p><em>#structurally_compatible?</em> can be used to check if the relation that you are about to use for <em>#or</em> or <em>#and</em> is structurally compatible with the receiver.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210731-20210807">20 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-07-24%7D...main@%7B2021-07-31%7D">here.</a> Until next week!</p>


          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/7/31/this-week-in-rails-favicons-invalidauthenticitytoken-message-gains-journey-optimizations-and-more/" rel="bookmark">Favicons, InvalidAuthenticityToken message gains, Journey optimizations and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">zzak</span></span>,
              <span class="published" title="2021-07-31 00:00:00 +0000">July 31, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>

<p>Hello, <a href="https://github.com/zzak">zzak</a> here! Congrats on making it through another month and another week of Rails development.</p>

<h3 id="add-favicon-to-internal-routes-faviconico"><a href="https://github.com/rails/rails/pull/42702">Add favicon to internal routes “/favicon.ico”</a></h3>

<p>They finally fixed that pesky <code class="language-plaintext highlighter-rouge">No route matches [GET] "/favicon.ico"</code> error on the default Rails welcome page.</p>

<h3 id="introduce-journeyast-to-avoid-extra-ast-walks"><a href="https://github.com/rails/rails/pull/39935">Introduce Journey::Ast to avoid extra ast walks</a></h3>

<p>This PR started its journey almost exactly a year ago…!</p>

<h3 id="improve-help-for-rake-tasks"><a href="https://github.com/rails/rails/pull/41442">Improve help for Rake tasks</a></h3>

<p>Rails help command now includes the Rake task description which is much more helpful. Give it a try: <code class="language-plaintext highlighter-rouge">bin/rails db:migrate -h</code>!</p>

<h3 id="help-identifying-why-we-have-an-invalidauthenticitytoken-exception"><a href="https://github.com/rails/rails/pull/41822">Help identifying why we have an InvalidAuthenticityToken exception</a></h3>

<p>Unverified CSRF requests now display a helpful error message in the <code class="language-plaintext highlighter-rouge">ActionController::InvalidAuthenticityToken</code> exception.</p>

<h3 id="middlewareremove-is-renamed-middlewaredelete"><a href="https://github.com/rails/rails/pull/42867">“Middleware#remove” is renamed “Middleware#delete!”</a></h3>

<p>Recently “Middleware#remove” was added to mirror the behavior of “Middleware#delete” but raise an exception if the middleware isn’t found. This name makes more sense as “#delete!”.</p>

<h3 id="add-support-for-defining-default-values-as-option-for-activesupportconfigurable-accessors"><a href="https://github.com/rails/rails/pull/42030">Add support for defining default values as option for ActiveSupport::Configurable accessors</a></h3>

<p>This PR adds the ability to specify a default value when using “config_accessor”.</p>

<h3 id="permit-attachments-in-inbound-email-conductor-mail-params"><a href="https://github.com/rails/rails/pull/42395">Permit attachments in inbound email conductor mail params</a></h3>

<p>This PR fixes an issue in actionmailbox when testing inbound email with attachments.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210724-20210731">29 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-07-24%7D...main@%7B2021-07-31%7D">here.</a> Until next week!</p>

          </section>
        </article>


<nav class="pagination">
  
    <a href="page2.php" class="previous">&larr; Previous</a>
  
  
</nav>



      </main>
    </div>
  

    </div>
     </div>


</body>
</html>