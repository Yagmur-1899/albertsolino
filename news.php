<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
</head>
<body class="index">
    <div id="wrapper">
        <nav>
   

    <ul>
      <li><a href="blog.php">Everything</a></li>
      <li><a href="releases.php">Releases</a></li>
      <li><a href="news.php">News</a></li>
    </ul>
  </nav>


      <main>
<!-- Begin Content -->

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
<!-- Begin Post -->
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
<!-- Begin Post -->
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

<!-- End Post -->
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
<!-- Begin Post -->
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
<!-- Begin Post -->
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

<!-- End Post -->
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
<!-- Begin Post -->
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

<!-- End Post -->
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
<!-- Begin Post -->
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

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/7/23/this-week-in-rails-active-record-improvements-and-much-more/" rel="bookmark">Active record improvements and much more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2021-07-23 00:00:00 +0000">July 23, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> here presenting quite a lot of changes from the past week.</p>

<h3 id="disable-schema-dump-per-database"><a href="https://github.com/rails/rails/pull/42804">Disable schema dump per database</a></h3>

<p>Dumping the schema is on by default for all databases in an application. To turn it off for a specific database one can now set <em>schema_dump: false</em> in the database config file.</p>

<h3 id="add-change-tracking-methods-for-belongs_to-associations"><a href="https://github.com/rails/rails/pull/42751">Add change tracking methods for belongs_to associations</a></h3>

<p>Two new methods were added: <em>association_changed?</em> and <em>association_previously_changed?</em> (assuming an association named <em>:association</em>) to Active Record.</p>

<h3 id="raise-error-on-unpermitted-open-redirects"><a href="https://github.com/rails/rails/commit/5e93cff83599833380b4cb3d99c020b5efc7dd96">Raise error on unpermitted open redirects</a></h3>

<p>Add <em>allow_other_host</em> options to <em>redirect_to</em>. One can opt in to this behaviour with <em>ActionController::Base.raise_on_open_redirects = true</em>.</p>

<h3 id="update-capybara-drivers"><a href="https://github.com/rails/rails/pull/42790">Update Capybara drivers</a></h3>

<p>Deprecate <em>poltergeist</em> and <em>webkit</em> (capybara-webkit) driver registration for system testing (they will be removed in Rails 7.1) and add <em>cuprite</em> instead.</p>

<h3 id="fix-dirty-check-for-floatnan-and-bigdecimalnan"><a href="https://github.com/rails/rails/pull/42831">Fix dirty check for Float::NaN and BigDecimal::NaN</a></h3>

<p>Float::NaN and BigDecimal::NaN in Ruby are special values and can’t be compared with <em>== method.</em></p>

<h3 id="make-activemodelerrorsinspect-slimmer-for-readability"><a href="https://github.com/rails/rails/pull/42832">Make ActiveModel::Errors#inspect slimmer for readability</a></h3>

<p>It will now only output the errors inspection omitting the base object.</p>

<h3 id="add-middlewareremove"><a href="https://github.com/rails/rails/pull/42821">Add Middleware#remove</a></h3>

<p>It will raise an error if the middleware is not found.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210717-20210723">24 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-07-17%7D...main@%7B2021-07-23%7D">here.</a> Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/7/19/this-week-in-rails-performance-and-parallel-testing-improvements-and-more/" rel="bookmark">Performance and parallel testing improvements and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2021-07-19 00:00:00 +0000">July 19, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bring you the latest news of the Rails world. It’s been a quiet week, so we don’t have much changes to cover this time.</p>

<h3 id="fix-try-and-try-performance-slowdown-in-ruby-27"><a href="https://github.com/rails/rails/pull/42796">Fix try and try! performance slowdown in Ruby 2.7+</a></h3>

<p>This PR fixes a performance regression in <em>try</em> and <em>try!</em> under ruby 2.7+.</p>

<h3 id="fix-eager_loading-when-ordering-with-hash-syntax"><a href="https://github.com/rails/rails/pull/42782">Fix eager_loading? when ordering with Hash syntax</a></h3>

<p>After this change, <em>eager_loading?</em> is triggered correctly when using order with hash syntax on an outer table, instead of raising an error.</p>

<h3 id="parallelize-tests-only-when-there-are-enough-to-justify-the-parallelization-overhead"><a href="https://github.com/rails/rails/pull/42761">Parallelize tests only when there are enough to justify the parallelization overhead</a></h3>

<p>Parallelizing tests has a cost in terms of database setup and fixture loading. This change makes Rails disable parallelization when the number of tests is below a configurable threshold.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210710-20210717">29 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-07-10%7D...main@%7B2021-07-17%7D">here</a><a href="https://github.com/rails/rails/compare/@%7B2021-06-27%7D...main@%7B2021-07-02%7D">.</a> Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/7/10/this-week-in-rails-rails-6-1-4-and-plenty-of-developer-ux-goodies/" rel="bookmark">Rails 6.1.4 and plenty of developer UX goodies</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">zzak</span></span>,
              <span class="published" title="2021-07-10 00:00:00 +0000">July 10, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://github.com/zzak">zzak</a> again with the changes from the last week in Rails.</p>

<h3 id="rails-614-was-released"><a href="https://weblog.rubyonrails.org/2021/6/24/Rails-6-1-4-has-been-released/">Rails 6.1.4 was released</a></h3>

<p>This release includes many bug fixes so be sure to upgrade! You can read the full summary of changes <a href="https://github.com/rails/rails/releases/tag/v6.1.4">here</a>.</p>

<h3 id="deleting-an-item-from-the-middleware-stack-should-raise-if-the-item-is-not-found"><a href="https://github.com/rails/rails/pull/42655">Deleting an item from the Middleware stack should raise if the item is not found</a></h3>

<p>A bug was fixed when trying to remove a non-existent middleware off the stack.</p>

<h3 id="generators-should-raise-an-error-if-an-attribute-has-an-invalid-index"><a href="https://github.com/rails/rails/pull/42694">Generators should raise an error if an attribute has an invalid index</a></h3>

<p>An error is now raised in bin/rails when trying to generate a model with a misspelled “index” attribute.</p>

<h3 id="config_for-accepts-root-shared-as-an-array"><a href="https://github.com/rails/rails/pull/42707">config_for accepts root shared as an array</a></h3>

<p>A bug was fixed when using config_for with a shared config that is defined as an array.</p>

<h3 id="handle-error-when-file-does-not-exist-at-filepath"><a href="https://github.com/rails/rails/pull/41283">Handle error when file does not exist at filepath</a></h3>

<p>A more helpful error message is given when using <code class="language-plaintext highlighter-rouge">render: file</code> for a non-existent absolute path.</p>

<h3 id="handle-paths-with-spaces-when-editing-credentials"><a href="https://github.com/rails/rails/pull/42728">Handle paths with spaces when editing credentials</a></h3>

<p>This issue identifies a bug with trying to use <code class="language-plaintext highlighter-rouge">bin/rails credentials:edit</code> on Windows.</p>

<h3 id="truncate-more-actioncable-broadcast-messages-to-300-chars"><a href="https://github.com/rails/rails/pull/42726">Truncate more ActionCable broadcast messages to 300 chars</a></h3>

<p>This PR is a follow-up to an older PR that tried to cut down on ActionCable logging noise in development.</p>

<h3 id="verify-foreign-keys-after-loading-fixtures"><a href="https://github.com/rails/rails/pull/42674">Verify foreign keys after loading fixtures</a></h3>

<p>This PR introduces a new feature where referential integrity is applied to associations when loading fixtures.</p>

<p>It only works for SQLite and Postgres for now, if anyone has idea how to make this work in MySQL.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210703-20210710">20 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-07-03%7D...main@%7B2021-07-10%7D">here</a><a href="https://github.com/rails/rails/compare/@%7B2021-06-27%7D...main@%7B2021-07-02%7D">.</a> Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/7/2/this-week-in-rails-perform-destroy_all-in-batches-and-a-lot-more-features/" rel="bookmark">Perform destroy_all in batches and a lot more features</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2021-07-02 00:00:00 +0000">July 2, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello. News about latest changes in Rails delivered to you by <a href="https://twitter.com/morgoth85">Wojtek</a>.</p>

<h3 id="active-record-destroy_all-performs-in-batches"><a href="https://github.com/rails/rails/pull/40445">Active Record destroy_all performs in batches</a></h3>

<p>By default it will load records in batches of 100 and allow to specify the custom batch size.</p>

<h3 id="add-support-for-ordinal-date-values"><a href="https://github.com/rails/rails/pull/41779">Add support for ordinal date values</a></h3>

<p>A valid ordinal value will be converted to an instance of <em>TimeWithZone.</em><br />
In example “21087” value will be parsed to 28-03-2021 date.</p>

<h3 id="add-existence-check-to-foregin-key-migrations"><a href="https://github.com/rails/rails/pull/42616">Add existence check to foregin key migrations</a></h3>

<p>It is now possible to use <em>if_exists / if_not_exist</em> on <em>remove_foreign_key / add_foreign_key</em> in database migrations.</p>

<h3 id="add-possibility-to-configure-active-storage-for-action-mailbox"><a href="https://github.com/rails/rails/pull/42634">Add possibility to configure Active Storage for Action Mailbox</a></h3>

<p>It is now possible to configure Active Storage service for storing email raw source via <em>config.action_mailbox.storage_service.</em></p>

<h3 id="support-strict_loading_by_default-in-active-storage"><a href="https://github.com/rails/rails/pull/42535">Support strict_loading_by_default in Active Storage</a></h3>

<p>Before the patch, Active Storage representation objects did not play nice with strict loading configuration.</p>

<h3 id="replace-uglifier-with-terser"><a href="https://github.com/rails/rails/pull/42622">Replace uglifier with terser</a></h3>

<p>Terser is more up to date with modern javascript features, and the uglifier gem repository recommends using it for minifying ES6+ code.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210627-20210702">32 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-06-27%7D...main@%7B2021-07-02%7D">here.</a> Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/6/27/this-week-in-rails-support-preloads-on-instance-dependent-associations-and-more/" rel="bookmark">Support preloads on instance dependent associations and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2021-06-27 00:00:00 +0000">June 27, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the latest changes in Rails!</p>

<h3 id="timechange-should-pass-the-zone-property-through-if-its-set"><a href="https://github.com/rails/rails/pull/42583">Time#change should pass the zone property through if it’s set</a></h3>

<p>This PR fixes an issue with changing date objects when the zone is set.</p>

<h3 id="fix-number_to_currency-to-avoid-negative-format-when-displaying-zero"><a href="https://github.com/rails/rails/pull/42581">Fix number_to_currency to avoid negative format when displaying zero</a></h3>

<p>This PR fixes number_to_currency to avoid negative format when displaying zero. Before this change, <em>number_to_currency(-0.00456789, precision: 2) _returned _$-0.00</em></p>

<h3 id="support-preloads-on-instance-dependent-associations"><a href="https://github.com/rails/rails/pull/42553">Support preloads on instance dependent associations</a></h3>

<p>From now on instance dependent associations are supporting preloading. To get more details about this change, read the PR descriptions, it explains it really well.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210619-20210627">37 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-06-20%7D...main@%7B2021-06-27%7D">here</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/6/18/this-week-in-rails-rails-6-0-4-lots-of-active-storage-goodies-and-many-quality-of-life-improvements/" rel="bookmark">Rails 6.0.4, Lots of Active Storage goodies, and many Quality-of-Life improvements!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">zzak</span></span>,
              <span class="published" title="2021-06-18 00:00:00 +0000">June 18, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, <a href="https://github.com/zzak">zzak</a> here with the latest changes from the last week to Rails.</p>

<h3 id="rails-604-was-released"><a href="https://weblog.rubyonrails.org/2021/6/15/Rails-6-0-4-has-been-released/">Rails 6.0.4 was released</a></h3>

<p>This release includes many bug fixes so be sure to upgrade! You can read the full summary of changes <a href="https://github.com/rails/rails/releases/tag/v6.0.4">here</a>.</p>

<h3 id="improve-security-of-untyped-bound-values-in-mysql"><a href="https://github.com/rails/rails/pull/42440">Improve security of untyped bound values in MySQL</a></h3>

<p>This solves a potential query manipulation vulnerability with MySQL.</p>

<h3 id="improve-usability-of-multi-db-when-config-is-invalid"><a href="https://github.com/rails/rails/pull/42537">Improve usability of multi-db when config is invalid</a></h3>

<p>A helpful exception is now raised if pool_config is nil when using config.active_record.writing_role(:all).</p>

<h3 id="enhancements-to-active-record-encryption"><a href="https://github.com/rails/rails/pull/42491">Enhancements to Active Record Encryption</a></h3>

<p>After introducing encryption into Active Record, a couple new features and a bug fix were followed!</p>

<h3 id="add-support-for-eager-loading-active-storage-variants"><a href="https://github.com/rails/rails/pull/40842">Add support for eager loading Active Storage variants</a></h3>

<p>This PR removes N+1 queries from Active Storage when using with_all_variant_records and with_attached_* scope.</p>

<h3 id="fix-strict-loading-through-associations"><a href="https://github.com/rails/rails/pull/42494">Fix strict loading through associations</a></h3>

<p>Previously there was a bug when using strict_loading where eager loading wouldn’t propagate through associations.</p>

<h3 id="use-the-current-rails-version-inside-packagejson"><a href="https://github.com/rails/rails/pull/42263">Use the current Rails version inside package.json</a></h3>

<p>Previously when generating a new Rails app, the package.json would hard-code the string “6.0.0” for all npm dependencies. This now uses the Rails version that generated the app.</p>

<h3 id="add-support-for-active-storage-expiring-urls"><a href="https://github.com/rails/rails/pull/42410">Add support for Active Storage expiring URLs</a></h3>

<p>This allows expiring URLs for signed blob ids in Active Storage via the “expires_in” parameter or by setting a default with “config.active_storage.urls_expire_in”.</p>

<h3 id="support-default-cache_control-in-active-storage-for-gcs"><a href="https://github.com/rails/rails/pull/42509">Support default “cache_control” in Active Storage for GCS</a></h3>

<p>This PR adds support for setting the default “cache_control” headers for uploads using Google Cloud Storage service.</p>

<h3 id="use-ffmpeg-scene-detection-for-generating-video-previews"><a href="https://github.com/rails/rails/pull/39096">Use FFmpeg scene detection for generating video previews</a></h3>

<p>By using the built-in features of FFmpeg, Active Storage now generates much better thumbnails for videos. These parameters were also made configurable in a <a href="https://github.com/rails/rails/pull/42471">follow-up PR</a>!</p>

<h3 id="deprecate-purge-and-purge_later-on-active-storage-attachments-association-model"><a href="https://github.com/rails/rails/pull/42506">Deprecate “purge” and “purge_later” on Active Storage attachments association model</a></h3>

<p>You should be calling these methods directly on the attachment and not on the association.</p>

<h3 id="add-modelupdate-that-is-similar-to-modelupdate-but-raises-exceptions"><a href="https://github.com/rails/rails/pull/42423">Add Model.update! that is similar to Model.update but raises exceptions</a></h3>

<p>You may be familiar with the instance method Model#update!, but now you can do that on the class!</p>

<h3 id="performance-regression-in-collectionassocationbuild"><a href="https://github.com/rails/rails/pull/42524">Performance regression in CollectionAssocation#build</a></h3>

<p>This fixes a huge performance bug for inversing associations with a lot of records.</p>

<h3 id="reduce-stat2-calls"><a href="https://github.com/rails/rails/pull/37265">Reduce stat(2) calls</a></h3>

<p>Classic <a href="https://github.com/nobu">nobu</a>. This patch was later optimized in a <a href="https://github.com/rails/rails/pull/42446">follow-up PR</a>.</p>

<h3 id="dont-attach-ujs-form-submission-handlers-to-turbo-forms"><a href="https://github.com/rails/rails/pull/42476">Don’t attach UJS form submission handlers to Turbo forms</a></h3>

<p>This quality-of-life improvement is for apps migrating from RailsUJS to Turbo with both living inside the codebase to easily distinguish which should handle forms.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210612-20210618">28 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-06-12%7D...main@%7B2021-06-19%7D">here</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/6/11/this-week-in-rails-active-storage-audio-improvements-and-more/" rel="bookmark">Active Storage audio improvements and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2021-06-11 00:00:00 +0000">June 11, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> here with the summary of changes from the last week.</p>

<h3 id="add-audio-analyzer-to-active-storage"><a href="https://github.com/rails/rails/pull/42425">Add audio analyzer to Active Storage</a></h3>

<p>It extracts duration and bit rate of audio files and stores it in the record metadata column.</p>

<h3 id="recognize-audio-presence-in-the-video-blobs"><a href="https://github.com/rails/rails/pull/42392">Recognize audio presence in the video blobs</a></h3>

<p>The <em>metadata</em> attribute of video blobs has a new boolean key named <em>audio</em> that is set to <em>true</em> if the file has an audio channel and <em>false</em> if it doesn’t.</p>

<h3 id="add-attributes_for_database-to-active-record"><a href="https://github.com/rails/rails/pull/42409">Add attributes_for_database to Active Record</a></h3>

<p>Returns attributes with values for assignment to the database. It works both for Active Record and Active Model objects.</p>

<h3 id="get-rid-of-cattr_accessor-in-activerecordbase"><a href="https://github.com/rails/rails/pull/42451">Get rid of cattr_accessor in ActiveRecord::Base</a></h3>

<p>More work on improving performance by eliminating class variables. This is a followup to <a href="https://github.com/rails/rails/pull/42442">previous change</a> where detailed benchmark can be found.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210607-20210611">23 people</a> contributed to Rails since last time. All the changes can be checked <a href="https://github.com/rails/rails/compare/@%7B2021-06-07%7D...main@%7B2021-06-11%7D">here</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/5/28/this-week-in-rails-active-record-encrytion-several-performance-optimizations-and-much-more/" rel="bookmark">Active Record Encrytion, several performance optimizations, and much MORE!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">zzak</span></span>,
              <span class="published" title="2021-05-28 00:00:00 +0000">May 28, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://github.com/zzak">zzak</a> here! お久しぶりです! This time I will be recapping the past month or so of Rails. Hang on! There’s a ton of stuff to catch up on!!</p>

<h3 id="active-record-encryption"><a href="https://github.com/rails/rails/pull/41659">Active Record Encryption</a></h3>

<p>Originally extracted from HEY, this feature adds encrypted attributes to Active Record models. You can find out more in the <a href="https://edgeguides.rubyonrails.org/active_record_encryption.html">guide</a>.</p>

<h3 id="optimize-cacheentry-coder"><a href="https://github.com/rails/rails/pull/42025">Optimize Cache::Entry coder</a></h3>

<p>Active Support’s cache has received a significant speed bump that was well overdue.</p>

<h3 id="optimize-active-model-generated-attribute-methods"><a href="https://github.com/rails/rails/pull/42095">Optimize Active Model generated attribute methods</a></h3>

<p>This optimization should reduce memory overhead and speed up boot times.</p>

<h3 id="7x-speed-up-for-activerecordbaselogger"><a href="https://github.com/rails/rails/pull/42237">7x speed up for ActiveRecord::Base.logger</a></h3>

<p>By converting AR::Base.logger to a class_attribute we had significant performance gains.</p>

<h3 id="allow-nesting-locales-for-engines"><a href="https://github.com/rails/rails/pull/41872">Allow nesting locales for Engines</a></h3>

<p>This opens up better organization for larger apps using i18n.
e.g. config/locales/en/models.yml vs. config/locales/models.en.yml</p>

<h3 id="support-range-objects-in-active-job"><a href="https://github.com/rails/rails/pull/42219">Support Range objects in Active Job</a></h3>

<p>This change adds an Active Job serializer for the Range object from Ruby.</p>

<h3 id="add-enumerablesole-to-active-support"><a href="https://github.com/rails/rails/pull/40914">Add Enumerable#sole to Active Support</a></h3>

<p>Based on ActiveRecord::FinderMethods#sole, this method returns the sole item of the enumerable. If there are no items, or more than one item it will raise an exception.</p>

<h3 id="deprecate-enumerablesum-and-arraysum"><a href="https://github.com/rails/rails/pull/42080">Deprecate Enumerable#sum and Array#sum</a></h3>

<p>Since Ruby 2.4 included these methods, Rails can start using the native versions for significant performance increase.</p>

<h3 id="improve-active-record-performance-for-one-and-many"><a href="https://github.com/rails/rails/pull/42143">Improve Active Record performance for #one? and #many?</a></h3>

<p>By limiting the generated count queries, this optimization provides significant performance increase for operations over many rows.</p>

<h3 id="log-a-warning-when-running-sqlite-in-production"><a href="https://github.com/rails/rails/pull/42191">Log a warning when running SQLite in production</a></h3>

<p>A warning is now emitted when trying to use SQLite in production, this can be disabled by setting config.active_record.sqlite3_production_warning to false.</p>

<h3 id="add-disable_joins-option-to-has_one-relation"><a href="https://github.com/rails/rails/pull/42079">Add disable_joins option to has_one relation</a></h3>

<p>This solves a problem with has_one…through relationships whose tables are in separate database clusters.</p>

<h3 id="add-support-for-require-trusted-types-for-and-trusted-types"><a href="https://github.com/rails/rails/pull/42126">Add support for require-trusted-types-for and trusted-types</a></h3>

<p>This feature adds support for these two Content-Security-Policy headers which you can read more about over at <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy">MDN</a>.</p>

<h3 id="remove-and-deprecate-rackruntime"><a href="https://github.com/rails/rails/pull/41935">Remove and deprecate Rack::Runtime</a></h3>

<p>Any apps depending on this middleware can still activate it manually, otherwise a deprecation warning will be sent and replaced with a fake.</p>

<h3 id="allow-access-to-nested-secrets-in-railsapplicationcredentials"><a href="https://github.com/rails/rails/pull/42106">Allow access to nested secrets in Rails.application.credentials</a></h3>

<p>Now Rails.application.credentials.aws.access_key_id will return the same thing as Rails.application.credentials.aws[:access_key_id].</p>

<h3 id="add-actioncontrollerlivesend_stream"><a href="https://github.com/rails/rails/pull/41488">Add ActionController::Live#send_stream</a></h3>

<p>Adds the ability to live stream binary data to the browser like send_data does for static files.</p>

<h3 id="extract-activestoragestreaming"><a href="https://github.com/rails/rails/pull/41440">Extract ActiveStorage::Streaming</a></h3>

<p>This allows you to stream blobs from cloud storage in any controller.</p>

<h3 id="add-from-option-to-activesupporttestcaseassert_no_changes"><a href="https://github.com/rails/rails/pull/42277">Add from: option to ActiveSupport::TestCase#assert_no_changes</a></h3>

<p>This feature provides an optional keyword argument to assert_no_changes to specify the expected initial value.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210501-20210531">61 people</a> contributed to Rails this month. Check out the <a href="https://github.com/rails/rails/issues">open issues</a> to get involved and help out. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/5/2/rails-governance/" rel="bookmark">Rails Governance</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">The Rails Team</span></span>,
              <span class="published" title="2021-05-02 17:45:00 +0000">May 2, 2021 @  5:45 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>As some questions have been raised about how the Rails project’s governance functions, we’d like to clarify how the team is structured and how we operate:</p>

<ul>
  <li>
    <p>Ruby on Rails is an Open Source project run by the Rails Core team. In addition to the Core team we have two additional teams - the Committer team who can merge code changes, as well as the Issues team who can triage issues and merge documentation changes.</p>
  </li>
  <li>
    <p>There are 11 members on the Core team who work for various employers or are independent consultants. We make decisions and work towards consensus as a team when needed. We each strive to make decisions that are best for the Rails framework and community. The members of the Core team are:</p>

    <ul>
      <li>DHH, Basecamp</li>
      <li>Jeremy, Basecamp</li>
      <li>Aaron, Shopify</li>
      <li>Xavier, Independent Consultant</li>
      <li>Rafael, Shopify</li>
      <li>Andrew, Unboxed</li>
      <li>Guillermo, Treasure Data</li>
      <li>Carlos, YNAB</li>
      <li>Matthew, Buildkite</li>
      <li>Kasper, Independent Consultant</li>
      <li>Eileen, GitHub</li>
    </ul>
  </li>
  <li>
    <p>Through that consensus process, no one on the Core team, or their employers, have sole control over the framework or community. There is no individual or subset of individuals who have power to enact policies unilaterally in the Rails community spaces that we operate (for example on issues, pull requests, or the forum).</p>
  </li>
  <li>
    <p>We encourage contributions from everyone and will work to make your experience as welcoming as possible.</p>
  </li>
</ul>

<p>We care deeply about the Rails community. The work we do on the framework is for you. We will continue to work at making Rails a great framework as well as a vibrant, diverse community of users and contributors.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/1/24/this-week-in-rails-defaults-to-main-branch-name-new-webpacker-guide-and-improved-strict-loading/" rel="bookmark">Defaults to &quot;main&quot; branch name, new webpacker guide and improved strict loading</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2021-01-24 00:00:00 +0000">January 24, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> here with the summary of changes from the last days.</p>

<h3 id="renamed-master-branch-to-main-in-the-rails-repository"><a href="https://github.com/rails/rails/commit/077c66d5d6ef3a6f1cc54e4a431bfa5ea6831b97">Renamed master branch to main in the Rails repository</a></h3>

<p>As <a href="https://twitter.com/dhh/status/1350091751789375490">mentioned by DHH</a> and <a href="https://twitter.com/rafaelfranca/status/1350183929060483074">performed by Rafael França</a> the default branch for most of the Rails git repositories is now called “main”.</p>

<h3 id="webpacker-added-to-edge-guides"><a href="https://github.com/rails/rails/pull/40817">Webpacker added to edge guides</a></h3>

<p>The detailed guide how to use <em>webpack</em> build system with Rails via <em>webpacker</em> gem. You can read it on <a href="https://edgeguides.rubyonrails.org/webpacker.html">edge guides</a>.</p>

<h3 id="opting-out-of-strict-loading-on-a-per-record-base"><a href="https://github.com/rails/rails/pull/41181">Opting out of strict loading on a per-record base</a></h3>

<p>This is useful when <a href="https://github.com/rails/rails/pull/37400">strict loading</a> is enabled application wide or on the model level.</p>

<h3 id="improved-strict-loading-violation-error-message"><a href="https://github.com/rails/rails/pull/41114">Improved strict loading violation error message</a></h3>

<p>This change updates the error message to include both the class and the association name which makes it clear what exactly failed.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20210111-20210122">39 people</a> contributed to Rails since last time. Check out the <a href="https://github.com/rails/rails/issues">open issues</a> to get involved and help out. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2021/1/11/this-week-in-rails-hello-2021-sole-record-same-form-multiple-verbs-validator-with-range-rich-text-control/" rel="bookmark">Hello 2021: Sole record, Same form multiple verbs, Validator with range, Rich text control</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">andyatkinson</span></span>,
              <span class="published" title="2021-01-11 00:00:00 +0000">January 11, 2021 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there. <a href="https://andyatkinson.com/">Andy</a> here, with the first newsletter of 2021, highlighting some updates to Ruby on Rails over the last few weeks. Let’s jump right in!</p>

<h3 id="find-and-assert-the-presence-of-exactly-one-record"><a href="https://github.com/rails/rails/pull/40768">Find and assert the presence of exactly one record</a></h3>

<p>Add <em>FinderMethods#sole</em> and <em>#find_sole_by</em> to find and assert the presence of exactly one record.</p>

<h3 id="submit-the-same-form-with-different-http-methods"><a href="https://github.com/rails/rails/pull/41045">Submit the same form with different HTTP methods</a></h3>

<p>This change provides the ability to post the same form with different HTTP methods. For example PUT and a DELETE requests can be made from the same form.</p>

<h3 id="validate-numericality-with-a-range"><a href="https://github.com/rails/rails/pull/41022">Validate numericality with a Range</a></h3>

<p>A Ruby range can now be provided as part of a numericality validator.</p>

<h3 id="improve-action-text-extensibility"><a href="https://github.com/rails/rails/pull/40308">Improve Action Text extensibility</a></h3>

<p>Allow the HTML surrounding rich text to be customized while retaining private control over how the rich text itself is rendered.</p>

<h3 id="consistently-render-button_to"><a href="https://github.com/rails/rails/pull/40747">Consistently render button_to</a></h3>

<p>Change Action View helpers to always render a <em>&lt;button&gt;</em> element.</p>

<h3 id="add-stats-to-redis-cache-store"><a href="https://github.com/rails/rails/pull/40929">Add stats to Redis Cache Store</a></h3>

<p>Add a <em>RedisCacheStore#stats</em> method that is similar to <em>MemCacheStore#stats</em>.</p>

<h3 id="add-option-to-disable-the-link-header"><a href="https://github.com/rails/rails/pull/40882">Add option to disable the Link header</a></h3>

<p>The option <em>config.action_view.preload_links_header</em> was added to allow disabling of the Link header when using <em>stylesheet_link_tag</em> and <em>javascript_include_tag</em>.</p>

<h3 id="fix-respect-getter-overwrites-in-the-model"><a href="https://github.com/rails/rails/pull/40782">Fix: Respect getter overwrites in the model</a></h3>

<p><em>ActiveRecord::AttributeMethods::Query</em> will now respect the getter overrides defined in the model.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201219-20210110">45 people</a> contributed to Rails over the last several weeks. Check out the <a href="https://github.com/rails/rails/issues">open issues</a> to get involved and help out. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/12/20/this-week-in-rails-rails-6-1-benchmark-anywhere-bugfixes-and-more/" rel="bookmark">This week in Rails: benchmark anywhere, bugfixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2020-12-20 00:00:00 +0000">December 20, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there, it is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the latest news about Rails!</p>

<h3 id="rails-61-released-horizontal-sharding-multi-db-improvements-strict-loading-destroy-associations-in-background-error-objects-and-more"><a href="https://weblog.rubyonrails.org/2020/12/9/Rails-6-1-0-release/">Rails 6.1 released! Horizontal Sharding, Multi-DB Improvements, Strict Loading, Destroy Associations in Background, Error Objects, and more!</a></h3>

<p>Rails 6.1 has been released and wow does it have a lot of great stuff! The changes include improvements to multiple databases, adding support for destroying associations in jobs instead of in-memory, turning errors into objects, and so much more.</p>

<h3 id="add-benchmark-method-that-can-be-called-from-anywhere"><a href="https://github.com/rails/rails/pull/40734">Add benchmark method that can be called from anywhere</a></h3>

<p>This PR includes the existing <em>ActiveSupport::Benchmarkable</em> into the <em>Rails</em> module, to make it accessible from anywhere (background jobs etc).</p>

<h3 id="add-configaction_viewimage_loading"><a href="https://github.com/rails/rails/pull/38452">Add config.action_view.image_loading</a></h3>

<p>Browser native support for lazy loading images is now a part of the official HTML standard and this PR adds <em>Rails.application.config.action_view.image_loading</em> to configure sitewide default for the <em>loading</em> html attribute to enable lazy loading sitewide without changing code.</p>

<h3 id="add-configaction_viewimage_decoding"><a href="https://github.com/rails/rails/pull/40839">Add config.action_view.image_decoding</a></h3>

<p>Another <em>image_tag</em> change, which introduces <em>Rails.application.config.action_view.image_decoding</em> to configure the default value of the image_tag :decoding option.</p>

<h3 id="better-handling-of-negative-elements-in-enum"><a href="https://github.com/rails/rails/pull/40679">Better handling of negative elements in enum</a></h3>

<p>Rails gives a warning if an enum method uses the <em>not_</em> prefix as it might conflict with negative scopes. The initial implementation warned even when there was no actual conflict and this change improves that and only warns about negative enums if a positive form that would cause conflicts exists.</p>

<h3 id="do-not-use-submit_tag-auto-disabling-when-disable_with-is-set-to-false"><a href="https://github.com/rails/rails/pull/40168">Do not use submit_tag auto-disabling when disable_with is set to false</a></h3>

<p>If we have <em>data: { disable_with: false }</em> then auto-disabling is turned off, but if we set <em>automatically_disable_submit_tag</em> to false it changes the behaviour of <em>disable_with</em> in an unexpected way,  so explicit usage of <em>disable_with: false</em> starts to enable auto-disabling with false as the value of a disabled button.<br />
With this change auto-disabling is turned off if we have explicit <em>disable_with: false</em> no matter what is set in <em>automatically_disable_submit_tag</em>.</p>

<h3 id="ignore-strict-loading-violations-on-instances-loaded-through-fixtures"><a href="https://github.com/rails/rails/pull/40792">Ignore strict loading violations on instances loaded through fixtures</a></h3>

<p>Rails 6.1 added _strict_loading_by_default _but that causes issues with the fixtures as they are lazy loaded. To get around it, this change ignores the strict loading flag when the fixtures are loaded.</p>

<h3 id="fix-s3-multipart-uploads-when-threshold-is-larger-than-the-file-uploaded"><a href="https://github.com/rails/rails/pull/40793">Fix S3 multipart uploads when threshold is larger than the file uploaded</a></h3>

<p>A bug happened when the file being uploaded to S3 is smaller than the configured multipart threshold, but this PR fixed it.</p>

<h3 id="allow-reload-to-be-default_scoped"><a href="https://github.com/rails/rails/pull/40805">Allow reload to be default_scoped</a></h3>

<p><em>reload</em> was not default_scoped by default because you could be creating a record that does not match your default scope and therefore reload wouldn’t find the record. However, in the case of sharding an application you may want reload to<br />
support default_scope because you’ll always have the correct scope<br />
set. </p>

<h3 id="change-default-queue-name-of-all-the-internal-jobs-to-be-the-job-adapters"><a href="https://github.com/rails/rails/pull/40766">Change default queue name of all the internal jobs to be the job adapter’s</a></h3>

<p>Before this change you needed to configure your job processor to handle all of Rails’ internal job queues, but not anymore!</p>

<h3 id="handle-nil-translation-key"><a href="https://github.com/rails/rails/pull/40788">Handle nil translation key</a></h3>

<p>In Rails 6.0, the translate helper always returned <em>nil</em> when given a <em>nil</em> key, but in Rails 6.1, the translate helper always raised an <em>I18n::ArgumentError</em> when given a <em>nil</em> key. This PR fixes the translate helper to mirror the <em>I18n.translate</em> behaviour when given a <em>nil</em> key, with and without a default.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201204-20201218">45 people</a> contributed to Rails in the past 2 weeks. Check out the <a href="https://github.com/rails/rails/issues">open issues</a> if you want to be one if them next time!. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/12/4/this-week-in-rails-rails-6-1-rc2-and-some-enhancements/" rel="bookmark">Rails 6.1 RC2 and some enhancements</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2020-12-04 00:00:00 +0000">December 4, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> from this side with a small set of changes since the last week.</p>

<h3 id="rails-61-rc2-released"><a href="https://weblog.rubyonrails.org/2020/12/1/Rails-6-1-rc2-release/">Rails 6.1 RC2 released</a></h3>

<p>The second release candidate for Rails 6.1 has been released and brings a more robust experience for those already trying this version.</p>

<h3 id="add-option-for-default_scope-to-run-on-all-queries-"><a href="https://github.com/rails/rails/pull/40720">Add option for “default_scope” to run on all queries </a></h3>

<p>This change allows for applications to optionally run a <em>default_scope</em><br />
on <em>update</em> and <em>delete</em> queries in addition to current behavior on <em>get</em> and <em>insert</em> statements, by adding <em>all_queries: true.</em></p>

<h3 id="add-id-and-field_id-methods-to-formbuilder"><a href="https://github.com/rails/rails/pull/40127">Add “id” and “field_id” methods to FormBuilder</a></h3>

<p>Ease generating consistent DOM ids in given form context.</p>

<h3 id="new-default-for-local-option-on-form_with"><a href="https://github.com/rails/rails/pull/40708">New default for “local” option on “form_with”</a></h3>

<p>With Rails 6.1 version <em>form_with</em> will generate non-remote forms by default.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201129-20201204">17 people</a> contributed to Rails since last time. Check out <a href="https://github.com/rails/rails/compare/@%7B2020-11-29%7D...master@%7B2020-12-04%7D">the detailed list of all changes</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/11/30/this-week-in-rails-new-active-record-and-action-view-capabilities-bug-fixes-and-more/" rel="bookmark">New Active Record and Action View capabilities, bug fixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">andyatkinson</span></span>,
              <span class="published" title="2020-11-30 00:00:00 +0000">November 30, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! <a href="https://github.com/andyatkinson">Andy</a> here, highlighting some of the contributions to Ruby on Rails over the last week. Let’s dive in!</p>

<h3 id="add-whereassociated-to-check-association-presence"><a href="https://github.com/rails/rails/pull/40696">Add where.associated to check association presence</a></h3>

<p>The Changelog covers how to use <em>where.associated</em> to check for the presence of an association. This also mirrors <em>where.missing</em>.</p>

<h3 id="include-stylesheets-js-and-erb-in-stats"><a href="https://github.com/rails/rails/pull/40597">Include stylesheets, JS and ERB in stats</a></h3>

<p>With this change, stats from the <em>app/views</em> and <em>app/assets/stylesheets</em> directories are now included with <em>rails stats</em>.</p>

<h3 id="add-support-for-eager-loading-all-rich-text-associations"><a href="https://github.com/rails/rails/pull/39397">Add support for eager loading all rich text associations</a></h3>

<p>Add the <em>with_all_rich_text</em> method to eager load all rich text associations on a model at once.</p>

<h3 id="bugfix-preserve-application-time-zone-with-travel_to"><a href="https://github.com/rails/rails/pull/40694">Bugfix: Preserve application time zone with travel_to</a></h3>

<p>When parsing a time value as a string with <em>travel_to</em>, preserve the application’s time zone.</p>

<h3 id="transform-hash-into-html-attributes-for-erb"><a href="https://github.com/rails/rails/pull/40657">Transform Hash into HTML attributes for ERB</a></h3>

<p>This change adds a new method to create HTML attributes from a Ruby Hash. Check the Changelog for an example.</p>

<p>We’re thankful for the contributions from <a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201121-20201128">21 people</a> to Rails over the last week. Have a look at the <a href="https://github.com/rails/rails/issues">open issues</a> and become a contributor. Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/11/23/this-week-in-rails-bugfixes-improvements-and-more/" rel="bookmark">Bugfixes, improvements and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2020-11-23 00:00:00 +0000">November 23, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the latest news about Ruby on Rails!</p>

<h3 id="fix-dbschemaload-when-table-definition-contains-partitions"><a href="https://github.com/rails/rails/pull/40651">Fix db:schema:load when table definition contains partitions</a></h3>

<p>This PR fixes a bug with loading the schema to MySQL if the schema contains table definitions with partitions.</p>

<h3 id="add-strict-loading-to-active-storage"><a href="https://github.com/rails/rails/pull/40623">Add strict loading to Active Storage</a></h3>

<p>The <em>strict_loading</em> option has been added to Active Storage, you can enable it like this:</p>

<p><em>has_one_attached :logo, strict_loading: true<br />
has_many_attached :images, strict_loading: true</em></p>

<h3 id="fixed-odd-behavior-of-inverse_of-with-multiple-belongs_to-to-the-same-class"><a href="https://github.com/rails/rails/pull/40643">Fixed odd behavior of inverse_of with multiple belongs_to to the same class</a></h3>

<p>An issue was introduced when foreign key validation was added to automatic_inverse_of and it is fixed by this PR. You can find an example and detailed explanation on the PR itself.</p>

<h3 id="use-ffmpeg-scene-detection-for-video-previews"><a href="https://github.com/rails/rails/pull/39096">Use FFmpeg scene detection for video previews</a></h3>

<p>This PR adds FFmpeg scene detection to Active Storage video previews. There are some test results on the PR to see how it works.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201114-20201121">17 people</a> contributed to Rails since last time, have a look at the <a href="https://github.com/rails/rails/pull/40643">open issues</a> and become one of them! Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/11/13/this-week-in-rails-enhanced-strict-loading-multiple-databases-and-more/" rel="bookmark">Enhanced strict loading, multiple databases and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2020-11-13 00:00:00 +0000">November 13, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> from this side with a summary of the latest changes that will be available in the upcoming Rails 6.1.</p>

<h3 id="rails-61-rc1-released"><a href="https://weblog.rubyonrails.org/2020/11/2/Rails-6-1-rc1-release/">Rails 6.1 RC1 released</a></h3>

<p>Release candidate of Rails 6.1 is ready for testing.</p>

<h3 id="enhance-strict-loading-to-log-violations"><a href="https://github.com/rails/rails/pull/40511">Enhance strict loading to log violations</a></h3>

<p>This change allows for an application to optionally log instead of raise when using <a href="https://github.com/rails/rails/pull/37400"><em>strict_loading</em></a>.</p>

<h3 id="add-connected_to_many-for-multiple-databases"><a href="https://github.com/rails/rails/pull/40510">Add connected_to_many for multiple databases</a></h3>

<p>This would come in especially handy for deeper nesting past 2 databases when declaring connections.</p>

<h3 id="add-request-exclusion-to-host-authorization"><a href="https://github.com/rails/rails/pull/38829">Add request exclusion to host authorization</a></h3>

<p>Host authorization checks can be skipped for specific requests. This allows for health check requests to be permitted for requests with missing or non-matching host headers.</p>

<h3 id="add-server-railtie-block"><a href="https://github.com/rails/rails/commit/868866c1fd7f6c79fd48d90febb1fd02a83380e1">Add server Railtie block</a></h3>

<p>Allow the application or a railtie to load code after the server start (similar to <em>console</em> and <em>tasks</em> blocks).</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201101-20201113">39 people</a> contributed to Rails since last time. Check out <a href="https://github.com/rails/rails/compare/@%7B2020-11-01%7D...master@%7B2020-11-13%7D">the detailed list of all changes</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/11/2/this-week-in-rails-multiple-database-improvements-bugfixes-and-more/" rel="bookmark">Multiple database improvements, bugfixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2020-11-02 00:00:00 +0000">November 2, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey, this is <a href="https://twitter.com/gregmolnar">Greg</a> bringing you the latest news about the Rails framework.</p>

<h3 id="show-outstanding-migrations-on-the-error-page"><a href="https://github.com/rails/rails/pull/40203">Show outstanding migrations on the error page</a></h3>

<p>This PR adds the details of the pending migrations to the pending migrations error message so you will know from the error what’s pending.</p>

<h3 id="add-ability-to-set-per-param-encoding"><a href="https://github.com/rails/rails/pull/40457">Add ability to set per param encoding</a></h3>

<p>Previously you could skip encoding which would encode all parameters on an action as ASCII_8BIT, but after this change you can specify the param_encoding for any one parameter on an action in your controller. An example can be found <a href="https://github.com/rails/rails/pull/40457/files#diff-473b3fd0c8a9ff822bf8f3e3db2a7bcd2270e840468847c7667177282c2f005dR53">here</a>.</p>

<h3 id="fix-resources-being-fetched-twice-when-crossorigin-attribute-is-used"><a href="https://github.com/rails/rails/pull/40426">Fix resources being fetched twice when crossorigin attribute is used</a></h3>

<p>When you load a script or css (by using javascript_include_tag or stylesheet_link_tag respectively) with crossorigin attribute applied, Rails currently causes some browsers to fetch these resources twice. That is because crossorigin in the link header preload directive and on the resource itself need to match in order for browsers to re-use a resource.<br />
This PR changes it so that the link header directives include the same crossorigin values as those that have been passed to the resources themselves, which allows browsers to reuse the preloaded resource.</p>

<h3 id="implement-connecting_to-method"><a href="https://github.com/rails/rails/pull/40486/">Implement <code class="language-plaintext highlighter-rouge">connecting_to</code> method</a></h3>

<p>Sometimes you need to have a different default connection but aren’t calling the connection with a block. An example is booting a console in reading mode. This PR adds the ability for a script to set a specific connection on boot while preserving the behaviour of connected_to for application code.</p>

<h3 id="warn-if-we-cant-read-the-yaml-to-create-database-tasks"><a href="https://github.com/rails/rails/pull/36560">Warn if we can’t read the yaml to create database tasks</a></h3>

<p>For multiple databases Rails attempts to generate the tasks by reading the<br />
database.yml before the Rails application is booted but there are some complex cases when this is not possible and Rails will simply issue a warning saying it couldn’t infer the database tasks from the database.yml.</p>

<h3 id="fix-timewithzone-bug"><a href="https://github.com/rails/rails/pull/40448">Fix TimeWithzone bug</a></h3>

<p>There was a rounding off issue when we were comparing TimeWithZone times with DateTime and this PR fixes that.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201024-20201031">29 people</a> contributed to Rails since last week. Check out <a href="https://github.com/rails/rails/compare/@%7B2020-10-24%7D...master@%7B2020-10-31%7D">the detailed list of all changes</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/10/23/this-week-in-rails-active-record-values_at-and-cache-improvements/" rel="bookmark">Active Record values_at and cache improvements</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2020-10-23 00:00:00 +0000">October 23, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, it’s <a href="https://twitter.com/morgoth85">Wojtek</a> bringing you the latest changes summary from Ruby on Rails codebase.</p>

<h3 id="add-values_at-method-to-active-record"><a href="https://github.com/rails/rails/pull/36481">Add values_at method to Active Record</a></h3>

<p>Simplifies retrieving values of specific attributes on Active Record model instance, ie <em>person.values_at(:name, :age).</em></p>

<h3 id="use-environment-variable-memcache_servers-by-default"><a href="https://github.com/rails/rails/pull/40420">Use environment variable MEMCACHE_SERVERS by default</a></h3>

<p>When no specific configuration is provided, <em>MEMCACHE_SERVERS</em> environment variable will be checked first before falling back to localhost <em>127.0.0.1:11211</em> address in <em>ActiveSupport::Cache::MemCacheStore</em>.</p>

<h3 id="add-store-name-to-cache-instrumentation"><a href="https://github.com/rails/rails/pull/40425">Add store name to cache instrumentation</a></h3>

<p>When subscribing to a “cache” instrumentation events, additional parameter with store name is provided to ease recognizing the context.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201018-20201023">12 people</a> contributed to Rails since the last week. Check out <a href="https://github.com/rails/rails/compare/@%7B2020-10-18%7D...master@%7B2020-10-23%7D">the detailed list of all changes</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/10/19/this-week-in-rails-new-api-docs-site-configurable-cache-coder-bug-fixes-and-more/" rel="bookmark">New API Docs site, configurable cache coder, bug fixes, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">andyatkinson</span></span>,
              <span class="published" title="2020-10-19 00:00:00 +0000">October 19, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! This is <a href="https://andyatkinson.com/">Andy</a> bringing you the latest on what’s shipped this week in Ruby on Rails!</p>

<h3 id="new-api-docs-back-end"><a href="https://github.com/rails/rails/pull/40396">New API docs back-end</a></h3>

<p>The frames-based Rails API docs site has been replaced with CSS and Turbolinks. Deep linking is now supported! Let’s take a moment and remember the humble 1990s era &lt;frame/&gt;! Check it out at <a href="https://edgeapi.rubyonrails.org/">https://edgeapi.rubyonrails.org</a>.</p>

<h3 id="stable-sorting-for-databaseconfigurationsfind_db_config"><a href="https://github.com/rails/rails/pull/40372">Stable sorting for DatabaseConfigurations#find_db_config</a></h3>

<p>Sorting configuration for multiple databases was not guaranteed to be stable. This PR fixes that, and includes a supporting test with more information.</p>

<h3 id="handle-binary-strings-in-active-record-serialized-columns"><a href="https://github.com/rails/rails/pull/40383">Handle binary strings in Active Record serialized columns</a></h3>

<p>When binary data is stored in a serialized column, this change ensures that the original value is preserved. Check out the supporting test for an example.</p>

<h3 id="make-activesupportcache-coder-configurable"><a href="https://github.com/rails/rails/pull/39770">Make ActiveSupport::Cache coder configurable</a></h3>

<p>This PR lays the groundwork to specify a custom coder. The PR author describes a scenario migrating between 2 different cache stores as a potential use case.</p>

<h3 id="include-layout-when-rendering-objects-from-controllers"><a href="https://github.com/rails/rails/pull/39869">Include layout when rendering objects from controllers</a></h3>

<p>Did you ever notice Rails was like “nah”, when trying to render from a controller with a layout? Well, I’ve got some good news for you.</p>

<h3 id="fix-read_attribute_before_type_cast"><a href="https://github.com/rails/rails/pull/40395">Fix <code class="language-plaintext highlighter-rouge">read_attribute_before_type_cast</code></a></h3>

<p>From the author: “With this change, read_attribute_before_type_cast will be able to get the value before typecast even if the attr_name is an attribute_alias.”</p>

<h3 id="fixes-optimizations-and-documentation">Fixes, optimizations and documentation</h3>

<p>And finally, let’s recognize these contributors that <a href="https://github.com/rails/rails/pull/40366">fixed a flaky test</a>, created an <a href="https://github.com/rails/rails/pull/40387">optimization</a> to avoid unnecessary queries and another that avoids a <a href="https://github.com/rails/rails/pull/40379">duplicate record</a>. In addition to that, 5 PRs shipped this week with documentation improvements! Thank you!</p>

<p>Thank you to the <a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201012-20201017">20 people that contributed</a> to Rails this week. If you’d like to be part of that, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>. Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/10/11/this-week-in-rails-a-security-release-bugfixes-and-more/" rel="bookmark">A security release, bugfixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2020-10-11 00:00:00 +0000">October 11, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the latest news about Ruby on Rails!</p>

<h3 id="rails-6034-has-been-released"><a href="https://weblog.rubyonrails.org/2020/10/7/Rails-6-0-3-4-has-been-released/">Rails 6.0.3.4 has been released!</a></h3>

<p>Rails 6.0.3.4 has been released! It is a security release and addresses a possible XSS attack vector in Actionable Exceptions.<br />
You can read more about the issue <a href="https://groups.google.com/g/rubyonrails-security/c/yQzUVfv42jk">here</a> and check the commit with the fix <a href="https://github.com/rails/rails/commit/ddcca86f0ed5064140924c88cc5ad556d5ce32d4">here</a>.</p>

<h3 id="optimize-activerecordrelationinclude-on-an-unloaded-relation"><a href="https://github.com/rails/rails/pull/40323">Optimize ActiveRecord::Relation#include? on an unloaded relation</a></h3>

<p>This PR introduces an <code class="language-plaintext highlighter-rouge">exists?</code> call instead of loading the entire relation into memory and that makes it better performing.</p>

<h3 id="fix-activerecordrelationinclude-in-case-where-offset-is-provided"><a href="https://github.com/rails/rails/pull/40345">Fix ActiveRecord::Relation#include? in case where offset is provided</a></h3>

<p>A follow-up PR for the above improvement, because the original solution broke <code class="language-plaintext highlighter-rouge">includes?</code> when an offset was provided, but this change covers that case and falls back to loading the relation in case an offset is provided.</p>

<h3 id="support-passing-record-to-uniqueness-validators-conditions-option"><a href="https://github.com/rails/rails/pull/39602">Support passing record to uniqueness validator’s :conditions option</a></h3>

<p>With this change, it is possible to build conditions based on the record’s attributes for a uniqueness validation.</p>

<h3 id="allow-for-only-no-store-in-cache-control-header"><a href="https://github.com/rails/rails/pull/39461">Allow for only no-store in cache-control header</a></h3>

<p>This PR allows one to set the default Cache-Control header to reflect the simple no-store directive exclusively and all other cache directives are dropped when that’s set.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20201002-20201011">20 people contributed</a> to Rails the past week! If you want to be part of that, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>! Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/10/3/this-week-in-rails-destroying-associations-asynchronously-interval-datatype-and-more/" rel="bookmark">Destroying associations asynchronously, interval datatype and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2020-10-03 00:00:00 +0000">October 3, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> from this side. We are coming back with newsletter! Here are the changes in Ruby on Rails codebase from the last week.</p>

<h3 id="destroy-associations-via-background-job"><a href="https://github.com/rails/rails/pull/40157">Destroy associations via background job</a></h3>

<p>Destroying associated records can now be done in background job by setting <em>dependent: :destroy_async</em> option.</p>

<h3 id="support-for-postgresql-interval-datatype"><a href="https://github.com/rails/rails/commit/e5a5cc483573f41fa396779057bd83ce389640d8">Support for PostgreSQL interval datatype</a></h3>

<p>Add support for PostgreSQL <em>interval</em> data type with conversion to <em>ActiveSupport::Duration</em> when loading records from database and serialization to ISO 8601 formatted duration string on save.</p>

<h3 id="per-environment-active-storage-config-files"><a href="https://github.com/rails/rails/pull/40294">Per environment Active Storage config files</a></h3>

<p>Active Storage configuration files for specific environment like <em>config/storage/production.yml</em> will take precedence over <em>config/storage.yml.</em><br />
It should ease complex configuration scenarios which may arise when <a href="https://github.com/rails/rails/pull/34935">configuring services per attachment</a>.</p>

<h3 id="base-class-for-active-storage-action-text-and-action-mailbox"><a href="https://github.com/rails/rails/pull/40274">Base class for Active Storage, Action Text and Action Mailbox</a></h3>

<p>Permit applications to hack in custom databases for Active Storage, Action Text and Action Mailbox models by extracting base Active Record class.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20200925-20201002">17 people</a> contributed to Rails since the last week. Check out <a href="https://github.com/rails/rails/compare/@%7B2020-09-25%7D...master@%7B2020-10-02%7D">the detailed list of all changes</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/5/8/this-week-in-rails-may-of-wtfs-railsconf-and-more/" rel="bookmark">May of WTFs, RailsConf and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2020-05-08 00:00:00 +0000">May 8, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>This is <a href="https://twitter.com/gregmolnar">Greg</a> and <a href="https://twitter.com/morgoth85">Wojtek</a> bringing you the latest news about Rails in these crazy times.</p>

<h3 id="a-may-of-wtfs"><a href="https://weblog.rubyonrails.org/2020/5/7/A-May-of-WTFs/">A May of WTFs</a></h3>

<p>Have you ever lost time on some strange Rails issue? Would you like to make it go away, so the others won’t do the same?
It is an initiative running this month to improve Rails, especially for the first time users.
Check the details and help making Rails better!</p>

<h3 id="railsconf---couch-edition"><a href="https://www.railsconf.com/">RailsConf - Couch Edition</a></h3>

<p>This year RailsConf took place online. You can already watch all the videos. Take a look at the official announcement or
jump straight to the playlist <a href="https://www.youtube.com/playlist?list=PLE7tQUdRKcyZ-TzxlxdLvh6tDUfZHqm76">here</a>.</p>

<h3 id="rails-603-has-been-released"><a href="https://weblog.rubyonrails.org/2020/5/6/Rails-6-0-3-has-been-released/">Rails 6.0.3 has been released</a></h3>

<p>This version fixes warnings when used with Ruby 2.7 altogether with many other framework bug fixes.</p>

<h3 id="instrument-layout-rendering"><a href="https://github.com/rails/rails/pull/38999">Instrument layout rendering</a></h3>

<p>With this addition it is possible to listen on more specific action view layout rendering instrumentation.</p>

<h3 id="inspect-time-attributes-with-subsec"><a href="https://github.com/rails/rails/pull/39147">Inspect time attributes with subsec</a></h3>

<p>Before:</p>

<p><code class="language-plaintext highlighter-rouge">#&lt;Knot id: 1, created_at: "2016-05-05 01:29:47"&gt;</code></p>

<p>After:</p>

<p><code class="language-plaintext highlighter-rouge">#&lt;Knot id: 1, created_at: "2016-05-05 01:29:47.116928000"&gt;</code></p>

<h3 id="test-file-patterns-configurable-via-environment-variables"><a href="https://github.com/rails/rails/commit/a0f18e60900fc45eb3524ab3cdfe57be430d6016">Test file patterns configurable via Environment variables</a></h3>

<p>It is now possible to control which test files to execute by setting <em>DEFAULT_TEST</em> or <em>DEFAULT_TEST_EXCLUDE</em> environment variables.</p>

<h3 id="fix-aggregate-functions-to-return-numeric-value-consistently-even-on-custom-attribute-type"><a href="https://github.com/rails/rails/pull/39039">Fix aggregate functions to return numeric value consistently even on custom attribute type</a></h3>

<p>Count and average always returns a numeric value, but <em>sum</em>, <em>maximum</em>, and <em>minimum</em> did not always return a numeric value if aggregated on a custom attribute type.</p>

<h3 id="deprecate-passing-a-column-to-type_cast"><a href="https://github.com/rails/rails/pull/39106">Deprecate passing a column to type_cast</a></h3>

<p>The type information for type casting is entirely separated to type object, so if anyone does passing a column to type_cast in Rails 6, they are likely doing something wrong. See the PR for a more thorough explanation.</p>

<h3 id="deprecate-allowed_index_name_length-and-in_clause_length-in-databaselimits"><a href="https://github.com/rails/rails/pull/39083">Deprecate allowed_index_name_length and in_clause_length in DatabaseLimits</a></h3>

<p>In the past, the SQLite3 adapter relied on <em>allowed_index_name_length</em>, but it is no longer needed so it got deprecated.
<em>in_clause_length</em> also got deprecated in
https://github.com/rails/rails/pull/39057.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20200427-20200508">38 people contributed</a> since our last issue. You can check the <a href="https://github.com/rails/rails/compare/master@%7B2020-04-27%7D...@%7B2020-05-08%7D">full list of changes</a>. Keep safe out there!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/5/7/A-May-of-WTFs/" rel="bookmark">A May of WTFs: Let&#39;s hear about all the potholes, roadblocks, and roundabouts!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dhh</span></span>,
              <span class="published" title="2020-05-07 17:25:00 +0000">May 7, 2020 @  5:25 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>The bar for reporting a bug to the Rails project can be pretty steep. You’re expected to carefully diagnose the problem, preferably propose a solution, include detailed reproduction steps, and all the other homework that makes it possible for a project like Rails to deal with hundreds if not thousands of reports on a yearly basis.</p>

<p>While this is a reasonable process for collecting actionable reports that a small group of contributors can reasonably triage, it’s not a great process at all for learning about all the the potholes, the roadblocks, and the roundabouts that make your journey that much more uncomfortable or take longer. That stuff just gets swallowed up by the sinkhole of grievances (have I exhausted the metaphor yet?! 😂).</p>

<p>So when Avdi took to <a href="https://twitter.com/avdi/status/1257127462766620673">air some of those grievances on Twitter</a>, the natural thing happened that always happens when you feel your work is attacked: The core contributor group got defensive! That’s a mischaracterization! Where are the completed bug reports!? You know the drill, if you’ve ever worked on something, poured your heart into it, and then seen it criticized online. There’s that immediate, knee-jerk reaction of a sting. But it doesn’t have to sting.</p>

<blockquote>
  <p>“Between stimulus and response there is a space. In that space is our power
to choose our response. In our response lies our growth and our freedom” – Victor Frankl</p>
</blockquote>

<p>We’re now choosing that response to be something different than the typical response to a perceived slight. Our response will be that of growth, and its essence is that Avdi’s frustrations are broad frustrations, they’re valid frustrations. They’re perhaps not yet in an actionable form, like we’re used to with perfectly described bug reports, but we can turn them into that! Together!</p>

<p>And even more, we can accept that Avdi’s frustrations are not anywhere near broad enough to cover all the frustrations. So we can ask for more! In a structured way, under a new paradigm of inquiry, and we can make Ruby on Rails better together. That sounds pretty good, no?</p>

<p>So that’s what we’re doing! We started a small group to involve <a href="https://twitter.com/avdi/">Avdi</a>, <a href="https://twitter.com/betsythemuffin">Betsy</a>, and others who’ve expressed grievances or interest in those grievances to work together. And the first project to come out of this group is what we’re calling <a href="https://discuss.rubyonrails.org/c/a-may-of-wtfs/8">A May of WTFs</a>. It’s a new category on the Ruby on Rails discussion forum, and it’s going to be a safe space for those WTFs you weren’t going to turn into formal bug reports. It’s going to be timeboxed to the month of May. And it’s going to run under the championship of Betsy Haibel. So I’ll let her set the terms of engagement:</p>

<blockquote>
  <p>We all lose time to “Rails WTFs.” Something goes weird in our Rails process, 
and we spend four hours frantically reading Stack Overflow before it finally
occurs to us to restart Spring. Or we make one silly typo and it causes the 
autoloader to lose track of an entirely different class.</p>

  <p>It can be hard to write bug reports for a WTF. When it’s difficult to understand
what triggered it an issue, or what fixed it, nailing down a good reproduction
seems impossible. And who wants to go to that effort when they’ve just spent hours
staring at byebug and cursing computers?</p>

  <p>This May, the Rails team is going to be tackling some of these WTFs – which 
means we need you to tell us about them! Send us your strangest Rails 6 stories, 
even if you don’t really understand what triggered them or remember how you fixed it.
Provide as much detail as you can – but don’t worry over what you can’t. 
We’ll be looking through all of this for patterns that will let us improve Rails
(or at least its error messages) for everyone.</p>
</blockquote>

<p>So please, come join us in a <a href="https://discuss.rubyonrails.org/c/a-may-of-wtfs/8">May of WTFs</a>. Help Betsy, Avdi, and everyone else who’s interested in transforming the raw energy of frustrations into gleaming patches to documentation, error messages, or even APIs. We’ll take WTFs as input and produce 💖 as output.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/4/27/this-week-in-rails-security-releases-new-mailing-list-new-features-and-refactoring/" rel="bookmark">This week in Rails - security releases, new mailing list, new features, and refactoring</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2020-04-27 00:00:00 +0000">April 27, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><a href="https://twitter.com/dodecadaniel">Daniel</a> here, holed up in my apartment in New York City trying to stay healthy.
Overwhelmed by all the latest pandemic news? Why not take a break with some
exciting Rails news?</p>

<h3 id="security-fixes"><a href="https://weblog.rubyonrails.org/2020/3/19/Rails-6-0-2-2-and-5-2-4-2-has-been-released/">Security Fixes</a></h3>

<p>Rails 6.0.2.2 and 5.2.4.2 were recently released to fix a XSS vulnerability in
Action View. If you are not running one of these versions, it is time to
upgrade. While you are at it, it is also time to <a href="https://www.ruby-lang.org/en/downloads/releases/">upgrade to Ruby 2.5.8, 2.6.6,
or 2.7.1</a>.</p>

<h3 id="ruby-on-rails-on-discourse"><a href="https://discuss.rubyonrails.org/">Ruby on Rails on Discourse</a></h3>

<p>The Ruby on Rails mailing list has migrated to https://discuss.rubyonrails.org/.
If you would like to suggest changes or new features, discuss documentation, or
ask questions about Rails, this is the place to be.</p>

<h3 id="annotate-html-output-with-template-names"><a href="https://github.com/rails/rails/pull/38848">Annotate HTML output with template names</a></h3>

<p>If you have ever opened your HTML source in the browser and wondered which
templates were rendering which part of the page, this feature is for you.
<code class="language-plaintext highlighter-rouge">config.action_view.annotate_template_file_names</code> adds HTML comments to the
rendered output indicating where each template begins and ends. I am a fan of
this feature, and I also like the clear problem statement in the commit message
and PR description.</p>

<h3 id="quickly-generate-a-rails-app-pointing-to-master"><a href="https://github.com/rails/rails/pull/38631">Quickly generate a Rails app pointing to master</a></h3>

<p>If you are anything like me, you want to try out new Rails features the moment
they are merged. Why wait? Now generating a new Rails app pointing to master is
as simple as <code class="language-plaintext highlighter-rouge">rails new &lt;app_name&gt; --master</code>.</p>

<h3 id="just-simply-improve-the-documentation"><a href="https://github.com/rails/rails/pull/37946">Just simply improve the documentation</a></h3>

<p>Removing words like “just” and “simple” from the documentation might seem like a
small change, but removing these superfluous words can make for a significantly
more welcoming experience to folks who are struggling. 😍</p>

<h3 id="use-index_by-and-index_with-wherever-possible"><a href="https://github.com/rails/rails/pull/38646">Use index_by and index_with wherever possible</a></h3>

<p>I haven’t used <code class="language-plaintext highlighter-rouge">index_by</code> and <code class="language-plaintext highlighter-rouge">index_with</code> before, but seeing this PR makes me
want to try them out. It certainly looks nicer than <code class="language-plaintext highlighter-rouge">map { ... }.to_h</code>. And if
you really like these methods you can enforce that with a new rubocop-rails cop.</p>

<h3 id="and-plenty-of-refactoring"><a href="https://github.com/rails/rails/search?q=Refactor+committer-date%3A%3E2020-03-01+merge%3Afalse&amp;unscoped_q=Refactor+committer-date%3A%3E2020-03-01+merge%3Afalse&amp;type=Commits">And plenty of refactoring</a></h3>

<p>Eileen refactored <a href="https://github.com/rails/rails/pull/38636">invert_predicate</a> and <a href="https://github.com/rails/rails/pull/38719">fetch_attribute</a> to get rid of some
case statements in favor of a more object oriented approach. Aaron refactored
the <a href="https://github.com/rails/rails/pull/38594">PartialRenderer</a>, splitting out classes for rendering single objects and
collections. John improved some things by making <a href="https://github.com/rails/rails/pull/38857">ActionView rendering
instrumentation</a> less DRY (sometimes WET code is better!).</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20200301-20200426">106 people contributed</a> since our last issue. Check out the <a href="https://github.com/rails/rails/compare/master@%7B2020-03-01%7D...@%7B2020-04-26%7D">full list of
changes</a> and Stay healthy out there!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/3/1/this-week-in-rails-horizontal-sharding-gzip-schema-cache-database-rake-tasks/" rel="bookmark">This week in Rails - horizontal sharding, gzip schema cache, database rake tasks</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2020-03-01 00:00:00 +0000">March 1, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Greetings, all! <a href="https://twitter.com/dodecadaniel">Daniel</a> here, together with my pup (🐶 woof!) bringing you the
latest news in Rails.</p>

<h3 id="add-support-for-horizontal-sharding"><a href="https://github.com/rails/rails/pull/38531">Add support for horizontal sharding</a></h3>

<p>The good folks at GitHub have done an incredible amount of work to support
multiple databases in Rails. This week brings horizontal sharding. Rails
applications can now connect to and (manually) switch between multiple shards.</p>

<h3 id="support-gzip-for-the-schema-cache"><a href="https://github.com/rails/rails/pull/38566">Support gzip for the schema cache</a></h3>

<p>Katrina continues to work on the schema cache, this time by adding gzip support
for both the YAML and the Marshal serialization strategies. This can come in
handy when trying to deploy particularly large schemas in constrained
environments.</p>

<h3 id="add-additional-multi-database-rake-tasks"><a href="https://github.com/rails/rails/pull/38566">Add additional multi-database rake tasks</a></h3>

<p>It is now possible to run <code class="language-plaintext highlighter-rouge">rails db:schema:dump</code>, <code class="language-plaintext highlighter-rouge">rails db:schema:load</code>, <code class="language-plaintext highlighter-rouge">rails
db:structure:dump</code>, <code class="language-plaintext highlighter-rouge">rails db:structure:load</code> and <code class="language-plaintext highlighter-rouge">rails db:test:prepare</code> on a
specific database. This was previously only possible for <code class="language-plaintext highlighter-rouge">rails db:create</code>,
<code class="language-plaintext highlighter-rouge">rails db:drop</code>, and <code class="language-plaintext highlighter-rouge">rails db:migrate</code>. Excellent work on your first few
commits to Rails, Kyle!</p>

<h3 id="eliminate-a-hash-allocation-when-rendering-templates"><a href="https://github.com/rails/rails/pull/38570">Eliminate a hash allocation when rendering templates</a></h3>

<p>I included this one for the commit message more than for the code change itself.
The benchmark taught me a bit about Action Controller, Action View, and how to
write a good benchmark.</p>

<p>That’s all for now. <a href="https://contributors.rubyonrails.org/contributors/in-time-window/20200223-20200229">18 people contributed</a> since last time, including some
first-time contributors. Check out the <a href="https://github.com/rails/rails/compare/master@%7B2020-02-23%7D...@%7B2020-02-29%7D">full list of changes</a>.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/2/21/this-week-in-rails-strict-loading-in-active-record-and-more/" rel="bookmark">Strict loading in Active Record and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2020-02-21 00:00:00 +0000">February 21, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, <a href="https://twitter.com/morgoth85">Wojtek</a> from this side with latest changes in Ruby on Rails codebase.</p>

<h3 id="add-strict_loading-mode-to-active-record"><a href="https://github.com/rails/rails/pull/37400">Add strict_loading mode to Active Record</a></h3>

<p>To prevent lazy loading of associations, <em>strict_loading</em> will cascade down from the parent record to all the associations to help you catch any places where you may want to <em>preload</em> instead of lazy loading.</p>

<h3 id="serialize-schema-cache-dump-with-marshal"><a href="https://github.com/rails/rails/pull/38432">Serialize schema cache dump with Marshal</a></h3>

<p>In addition to YAML it is now possible to use Marshal as schema cache dump serializer.</p>

<h3 id="improve-assert_changes-output"><a href="https://github.com/rails/rails/commit/074265a6c19b8f629e3211405e940b069ccd5667">Improve assert_changes output</a></h3>

<p>Provides more specific diffs when comparing complex objects. Co-authored by few contributors.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20200210-20200222">36 people</a> contributed to Rails since last time. Check out <a href="https://github.com/rails/rails/compare/master@%7B2020-02-10%7D...@%7B2020-02-22%7D">the detailed list of all changes</a>. Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/2/9/this-week-in-rails-postgresql-11-partitioned-indexes-support-and-more/" rel="bookmark">This week in Rails - PostgreSQL 11 partitioned indexes support and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2020-02-09 00:00:00 +0000">February 9, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the latest news about Ruby on Rails!</p>

<h3 id="20-contributors-to-rails-in-past-week"><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20200203-20200209">20 contributors to Rails in past week</a></h3>

<p>There have been 20 contributors to Rails past week! </p>

<h3 id="default-hsts-max-age-directive-to-2-years"><a href="https://github.com/rails/rails/pull/38345">Default HSTS max-age directive to 2 years</a></h3>

<p>The new recommendation for the HSTS max-age directive is 2 years, and that’s what Rails defaults to from now on.</p>

<h3 id="add-support-for-partitioned-indexes-in-postgresql-11"><a href="https://github.com/rails/rails/pull/37585">Add support for partitioned indexes in PostgreSQL 11+</a></h3>

<p>This pull request adds support to retrieve partitioned indexes when asking for indexes in a table. </p>

<h3 id="add-a-fallback-database-config-when-loading-schema-cache"><a href="https://github.com/rails/rails/pull/38383">Add a fallback database config when loading schema cache</a></h3>

<p>The schema cache defaults to loading the ‘primary’ database config, however, if an app doesn’t have a db config with a spec name of ‘primary’ the filename lookup will  blow up. This pull request adds a fallback for this case.</p>

<p>That’s it for this week, till next time! </p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/1/19/this-week-in-rails-rack-2-1-released-disallowed-deprecations-and-more/" rel="bookmark">This week in Rails - Rack 2.1 released, disallowed deprecations, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">andrewmcodes</span></span>,
              <span class="published" title="2020-01-19 00:00:00 +0000">January 19, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, this is <a href="https://twitter.com/andrewmcodes">Andrew</a>, bringing you the latest news from the Ruby on Rails world!</p>

<h3 id="18-contributors-to-rails-in-past-week"><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20200112-20200118">18 contributors to Rails in past week</a></h3>

<p>There have been 18 contributors to Rails in the second full week of 2020! </p>

<h3 id="rack-210-and-211-released"><a href="https://github.com/rack/rack/releases/tag/2.1.1">Rack 2.1.0 and 2.1.1 released</a></h3>

<p>These releases add support for the SameSite=None cookie value, new HTTP status codes, bug fixes, and several other exciting changes and additions. Updates to Rails following the release have also begun.</p>

<p>Check out the <a href="https://github.com/rack/rack/blob/master/CHANGELOG.md">Rack changelog</a> to learn more.</p>

<h3 id="introduce-active-support-disallowed-deprecations"><a href="https://github.com/rails/rails/pull/37940">Introduce Active Support Disallowed Deprecations</a></h3>

<p>This addition allows the configuration of rules to match deprecation warnings that should not be allowed and <em>ActiveSupport::Deprecation#disallowed_behavior</em>, which specifies the behavior to be used when a disallowed deprecation warning is matched.</p>

<h3 id="stop-individual-action-cable-streams"><a href="https://github.com/rails/rails/pull/37171">Stop individual Action Cable streams</a></h3>

<p>Channels with multiple subscriptions can now stop following individual streams. Before this change, the only option was to stop all streams.</p>

<h3 id="remove-an-empty-line-from-generated-migration"><a href="https://github.com/rails/rails/pull/38231">Remove an empty line from generated migration</a></h3>

<p>This fix prevents an extra newline from getting added in generated migrations.</p>

<p>That’s it for this week, till next time! </p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/1/11/this-week-in-rails-deprecations-bugfixes-and-improvements/" rel="bookmark">This week in Rails - Deprecations, bugfixes and improvements!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2020-01-11 00:00:00 +0000">January 11, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the latest news from the Ruby on Rails world!</p>

<h3 id="38-contributors-to-rails-in-past-week"><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190101-20191231">38 contributors to Rails in past week</a></h3>

<p>There have been 38 contributors to Rails in the first week of the year! </p>

<h3 id="deprecate-primary-as-a-connection_specification_name-for-activerecordbase"><a href="https://github.com/rails/rails/pull/38190">Deprecate “primary” as a connection_specification_name for ActiveRecord::Base</a></h3>

<p>This PR deprecates the use of the name “primary” as the
<em>connection_specification_name</em> for <em>ActiveRecord::Base</em> in favor of
using “ActiveRecord::Base” to avoid confusion as earlier the classname was used in any other case.</p>

<h3 id="deprecate-using-rangeinclude-to-check-the-inclusion-of-a-value-in-a-date-time-range"><a href="https://github.com/rails/rails/pull/38186">Deprecate using <code class="language-plaintext highlighter-rouge">Range#include?</code> to check the inclusion of a value in a date time range</a></h3>

<p>The usage of the <em>Range#include?</em> method to check the inclusion of an argument in date-time with zone range is deprecated in Ruby and since Rails extends it, the deprecation needs to be carried forward.
As a replacement, it is recommended to use <em>Range#cover?</em></p>

<h3 id="restore-previous-behavior-of-parallel-test-databases"><a href="https://github.com/rails/rails/pull/38179">Restore previous behavior of parallel test databases</a></h3>

<p>Before this bugfix, if an app called <em>establish_connection</em> with no arguments or doesn’t call
<em>connects_to</em> in <em>ApplicationRecord</em> and uses parallel testing
databases, the application could’ve picked up the wrong configuration.</p>

<h3 id="reduce-number-of-created-objects-in-hashas_json"><a href="https://github.com/rails/rails/pull/38197">Reduce number of created objects in Hash#as_json</a></h3>

<p>The improvement is highly coupled to the size of the hash but can be quite a bit for medium sized nested hashes.</p>

<p>That’s it for this week, till next time! </p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2020/1/5/this-week-in-rails-the-2019-edition/" rel="bookmark">This week in Rails - The 2019 edition</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2020-01-05 00:00:00 +0000">January 5, 2020 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, this is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> bringing you first issue of <strong>This week in Rails</strong> of the new year and new decade.<br />
In this issue, we will go over the major changes that happened last year to the Rails codebase.</p>

<p><strong>Happy new year!</strong></p>

<h3 id="494-contributors-to-rails-in-2019"><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190101-20191231">494 contributors to Rails in 2019</a></h3>

<p>There have been 494 contributors to Rails in 2019. Wow, that’s a staggering number! Thank you all for making Rails better.</p>

<h3 id="rails-60-released"><a href="https://weblog.rubyonrails.org/2019/8/15/Rails-6-0-final-release/">Rails 6.0 released</a></h3>

<p>Rails 6 includes headline features such as parallel testing, multi database support, new Zeitwerk autoloader along with new frameworks added to the Rails family.</p>

<h3 id="two-new-frameworks-added-to-rails"><a href="https://github.com/rails/rails/pull/37872">Two new frameworks added to Rails</a></h3>

<p>Action Mailbox and Action Text made their way to the Rails codebase during the Rails 6 release. Action Mailbox will help you accept the incoming emails and Action Text brings rich text content and editing to Rails.</p>

<h3 id="other-releases"><a href="https://weblog.rubyonrails.org/2019/12/18/Rails-5-2-4-1-has-been-released/">Other releases</a></h3>

<p>Apart from Rails 6, 2019 also saw release of Rails 5.2.4 series and <a href="https://weblog.rubyonrails.org/2019/3/28/Rails-5-1-7-has-been-released/">5.1.7.</a></p>

<p>The party is still rocking in 2020. <a href="https://contributors.rubyonrails.org/contributors/in-time-window/20200101-20200105">18 people</a> contributed to Rails in new year so far! Check out <a href="https://github.com/rails/rails/compare/master@%7B2020-01-01%7D...@%7B2020-01-05%7D">the detailed list of all changes</a>.</p>

<p>Happy new year again!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/12/27/this-week-in-rails-ruby-2-7-0-rails-6-0-2-1-and-more/" rel="bookmark">Ruby 2.7.0, Rails 6.0.2.1 and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2019-12-27 00:00:00 +0000">December 27, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, this is <a href="https://twitter.com/morgoth85">Wojtek</a> reporting on last month additions to Rails codebase.</p>

<h3 id="ruby-270-released"><a href="https://www.ruby-lang.org/en/news/2019/12/25/ruby-2-7-0-released/">Ruby 2.7.0 released</a></h3>

<p>The last minor version of Ruby 2.7 before 3.0 release in the next year. Rails codebase is constantly updated to support Ruby 2.7 without any warnings.</p>

<h3 id="rails-602-released"><a href="https://weblog.rubyonrails.org/2019/12/13/Rails-6-0-2-has-been-released/">Rails 6.0.2 released</a></h3>

<p>Followed by security fix releases <a href="https://weblog.rubyonrails.org/2019/12/18/Rails-5-2-4-1-has-been-released/">5.2.4.1</a> and <a href="https://weblog.rubyonrails.org/2019/12/18/Rails-6-0-2-1-has-been-released/">6.0.2.1</a></p>

<h3 id="track-active-storage-variants-in-the-database"><a href="https://github.com/rails/rails/pull/37901">Track Active Storage variants in the database</a></h3>

<p>Optimization and bug fix by avoiding existence checks in the storage service.</p>

<h3 id="conditional-values-in-tag-builder"><a href="https://github.com/rails/rails/pull/37872">Conditional values in Tag Builder</a></h3>

<p>Handy addition to clean up common use case with constructing class names when creating content tags.</p>

<h3 id="add-class_names-view-helper"><a href="https://github.com/rails/rails/pull/37918">Add class_names view helper</a></h3>

<p>As a follow-up to conditional values in <em>Tag Builder</em>, to ease even more constructing class names on views.</p>

<h3 id="deep-merge-of-shared-configuration-in-config_for-method"><a href="https://github.com/rails/rails/pull/37913">Deep merge of shared configuration in config_for method</a></h3>

<p>From now on <em>config_for</em> will deeply merge shared configuration section with environment specific one.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20191202-20191227">76 people</a> contributed to Rails since last time. Check out <a href="https://github.com/rails/rails/compare/master@%7B2019-12-02%7D...@%7B2019-12-27%7D">the detailed list of all changes</a>.<br />
Happy new year!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/12/1/this-week-in-rails-rails-6-0-2-rc1-5-2-4-and-something-different/" rel="bookmark">Rails 6.0.2.rc1, 5.2.4, and something different…</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2019-12-01 00:00:00 +0000">December 1, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey readers! This is <a href="https://twitter.com/kaspth">Kasper</a> bringing you the latest news in Rails. I’m writing from deep winter-like Copenhagen, starting on the last month of the decade.</p>

<p>Speaking of progress, Rails recently crossed 75.000 commits on GitHub. Last time we marked commit progress was over 4 years ago for 50.000. I happened to write that issue too, you can <a href="https://weblog.rubyonrails.org/2015/3/7/this-week-in-rails-50-000-commits-gsoc-opportunity-and-more/">read it here</a>.</p>

<h3 id="rails-602rc1-released"><a href="https://weblog.rubyonrails.org/2019/11/27/Rails-6-0-2-rc1-has-been-released/">Rails 6.0.2.rc1 released</a></h3>

<p>As always, this release is loaded with fixes and improvements. It’s currently set to ship Monday Dec 2 and so far no regressions have been found as far as I know. Final day to test the release candidate on your app, try it out ✌️</p>

<h3 id="rails-524-released"><a href="https://weblog.rubyonrails.org/2019/11/27/Rails-5-2-4-has-been-released/">Rails 5.2.4 released</a></h3>

<p>The final bug fix release of Rails 5.2, now it’ll only get security releases from here on out. Good time to plan a Rails 6 upgrade.</p>

<h3 id="something-different-this-issue"><a href="https://github.com/rails/rails/compare/master@%7B2019-11-16%7D...@%7B2019-12-01%7D">Something different this issue…</a></h3>

<p>For the most part we highlight particular interesting commits in this newsletter, but there’s usually other stuff we don’t get to. Stuff that could help you make sense of Rails itself. This week I’d like to try to remedy that.</p>

<p><a href="https://github.com/rails/rails/compare/master@%7B2019-11-16%7D...@%7B2019-12-01%7D">Here’s all changes</a> since last time. Visit the link and each time you see “Merge pull request #12345”, click ‘em. Feel free to see Files Changes and on particularly interesting files, you can try “View File” and read some surrounding code. This can be overwhelming so go easy. But that’s pretty much a fine way to start reading Rails’ actual code. It’s all Ruby all the way down.</p>

<p>Now, some of the people in the list are on certain Rails teams. You’ll likely interact with some of them if you submit a pull request. Here’s who’s in the current change list, but not the full teams.</p>

<p><a href="https://github.com/rails/rails/commits?author=carlosantoniodasilva">carlosantoniodasilva</a>, <a href="https://github.com/rails/rails/commits?author=eileencodes">eileencodes</a>, <a href="https://github.com/rails/rails/commits?author=georgeclaghorn">georgeclaghorn</a>, <a href="https://github.com/rails/rails/commits?author=kaspth">kaspth</a> (that’s me), <a href="https://github.com/rails/rails/commits?author=rafaelfranca">rafaelfranca</a> are on Rails Core. <a href="https://github.com/rails/rails/commits?author=gmcgibbon">gmcgibbon</a>, <a href="https://github.com/rails/rails/commits?author=jhawthorn">jhawthorn</a>, <a href="https://github.com/rails/rails/commits?author=kamipo">kamipo</a> and <a href="https://github.com/rails/rails/commits?author=y-yagi">y-yagi</a> have commit access. Meanwhile <a href="https://github.com/rails/rails/commits?author=eugeneius">eugeneius</a> and <a href="https://github.com/rails/rails/commits?author=vipulnsward">vipulnsward</a> are on the issues team, so they can triage issues and merge documentation PRs.</p>

<p>That’s it for now, hope it’s useful 🙌</p>

<p>Also <a href="https://contributors.rubyonrails.org/contributors/in-time-window/20191116-20191201">41 people contributed</a> since last time including several first time contributors.</p>

<p>Hope you dig it. See ya next time! 👋🏻</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/11/17/this-week-in-rails-rails-6-0-1-database-connection-improvements-and-more/" rel="bookmark">Rails 6.0.1, database connection improvements, and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2019-11-17 00:00:00 +0000">November 17, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey there! This is <a href="https://twitter.com/dodecadaniel">Daniel</a> bringing you the latest news in Rails. I am writing
from <a href="https://www.rubyconf.org/">RubyConf</a> in Nashville, so come find me and say hello if you are here
too!</p>

<h3 id="rails-601-released"><a href="https://weblog.rubyonrails.org/2019/11/5/Rails-6-0-1-released/">Rails 6.0.1 released</a></h3>

<p>As always, this release is loaded with fixes and improvements. Today seems like
a good day to upgrade, don’t you think?</p>

<h3 id="introduce-role-manager-to-manage-connections"><a href="https://github.com/rails/rails/pull/37622">Introduce role manager to manage connections</a></h3>

<p>I am a big fan of detailed commit messages, and this commit has an impressive
one. This change will help to eventually support sharding in Rails.</p>

<h3 id="disable-logging-for-jobs-with-sensitive-arguments"><a href="https://github.com/rails/rails/pull/37660">Disable logging for jobs with sensitive arguments</a></h3>

<p>Do you have any jobs that include sensitive arguments like passwords? You
probably don’t want to see those arguments showing up in your logs. Now you can
disable argument logging for any job by setting the <code class="language-plaintext highlighter-rouge">log_arguments</code>
configuration option.</p>

<h3 id="use-both-implicit-order-column-and-primary-key-for-ordering"><a href="https://github.com/rails/rails/pull/37626">Use both implicit order column and primary key for ordering</a></h3>

<p>To ensure deterministic results, records are now ordered by both
<code class="language-plaintext highlighter-rouge">implicit_order_column</code> and the primary key, when available. This commit is from
a first-time contributor. Nice work!</p>

<h3 id="remove-duplicated-database-configuration-logic"><a href="https://github.com/rails/rails/pull/37695">Remove duplicated database configuration logic</a></h3>

<p>The Rails codebase is fairly complex. It is always nice to see a commit that
simplifies it, reduces duplication, and improves behavior while removing lines.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20191103-20191116">36 people contributed</a> since last time, including several first-time
contributors. Check out the <a href="https://github.com/rails/rails/compare/master@%7B2019-11-03%7D...@%7B2019-11-16%7D">full list of changes</a>.</p>

<p>Bye for now! 👋🏻</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/11/2/this-week-in-rails-reestablish-previous-connection-duplicate-cached-values-and-run-inline-jobs/" rel="bookmark">Reestablish previous connection, duplicate cached values and run inline jobs</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2019-11-02 00:00:00 +0000">November 2, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! This is <a href="https://twitter.com/repinel">Roque</a> bringing the latest news from the Rails community.</p>

<h3 id="reestablish-connection-to-previous-database-after-migrating"><a href="https://github.com/rails/rails/pull/37601">Reestablish connection to previous database after migrating</a></h3>

<p>The migrate task iterates and establish a connection over each database. That resulted in the last connection being used by subsequent rake tasks. This fix will restore the previous connection before the migrate task had started.</p>

<h3 id="duplicate-the-cached-value-before-writing-to-the-local-cache"><a href="https://github.com/rails/rails/pull/37587">Duplicate the cached value before writing to the local cache</a></h3>

<p>This fixed the following issue:</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>my_string = "foo"
cache.write('key', my_string)
my_string &lt;&lt; "bar"
cache.read('key') # =&gt; "foobar"
</code></pre></div></div>

<h3 id="run-inline-jobs-in-separate-threads"><a href="https://github.com/rails/rails/pull/37568">Run inline jobs in separate threads</a></h3>

<p>Run inline jobs in separate threads so that thread locals (<em>e.g.</em> current attributes) are properly scoped and reset when running jobs inline.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20191026-20191102">17 people</a> contributed to Rails since last time. Check out <a href="https://github.com/rails/rails/compare/master@%7B2019-10-26%7D...@%7B2019-11-02%7D">the detailed list of all changes</a>.<br />
Until next time.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/10/25/this-week-in-rails-permanent-public-urls-for-storage-blobs-and-more/" rel="bookmark">Permanent public URLs for storage blobs and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2019-10-25 00:00:00 +0000">October 25, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello Ruby folks. <a href="https://twitter.com/morgoth85">Wojtek</a> from this side reporting on latest additions to Rails codebase.</p>

<h3 id="add-permanent-urls-for-public-storage-blobs"><a href="https://github.com/rails/rails/pull/36729">Add permanent URLs for public storage blobs</a></h3>

<p>It is now possible to configure Active Storage to hold public/private blobs. Public services will always return a permanent URL.</p>

<h3 id="improve-inversing-associations"><a href="https://github.com/rails/rails/pull/37429">Improve inversing associations</a></h3>

<p>Adds support for inversing belongs_to -&gt; has_many Active Record associations through a config option.</p>

<h3 id="support-for-overrides-in-zeitwerk-mode-inflectors-"><a href="https://github.com/rails/rails/commit/8237c4d33035bd131865f1e73577748892a75f0a">Support for overrides in “zeitwerk” mode inflectors </a></h3>

<p>Helps to define custom autoload inflections independently from Active Support.</p>

<h3 id="support-errors-translation-lookup-on-indexed-attributes"><a href="https://github.com/rails/rails/pull/37447">Support errors translation lookup on indexed attributes</a></h3>

<p>When using indexed errors option, translated messages for them will be looked up by the standardized key.</p>

<h3 id="allow-options-http-verb-in-routing-mapper"><a href="https://github.com/rails/rails/pull/37370">Allow “OPTIONS” HTTP verb in routing mapper</a></h3>

<p>Handy shortcut for defining routes.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20191005-20191025">45 people</a> contributed to Rails since last time. Check out <a href="https://github.com/rails/rails/compare/master@%7B2019-10-05%7D...@%7B2019-10-25%7D">the detailed list of all changes</a>.<br />
Until next time.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/10/6/this-week-in-rails-new-attribute-methods-regex-matching-and-more/" rel="bookmark">New attribute methods, regex matching and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2019-10-06 00:00:00 +0000">October 6, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! Tim here with the latest scoop on Ruby on Rails!</p>

<h3 id="new-_previously_was-attribute-methods"><a href="https://github.com/rails/rails/pull/36836">New *_previously_was attribute methods!</a></h3>

<p>Your models just got a sprinkling of a little extra sugar. For any given attribute that changed, you can now do:</p>

<div class="language-ruby highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="no">Model</span><span class="p">.</span><span class="nf">attribute_previously_was</span> <span class="c1"># =&gt; previous value</span>
</code></pre></div></div>

<h3 id="support-for-matches_regex-in-mysql"><a href="https://github.com/rails/rails/pull/36800">Support for matches_regex in MySQL</a></h3>

<p>Check out this PR for a great example of how you can now perform regular expression matching on your MySQL queries!</p>

<h3 id="preservation-of-join-order-fixed"><a href="https://github.com/rails/rails/pull/36805">Preservation of join order fixed</a></h3>

<p>This fix managed to take down a number of open issues in one go! It addresses a recent regression by ensuring that the order of any user-supplied joins will be preserved as far as Active Record is able to do so.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190929-20191004">28 people</a> contributed to Rails last week, including 3 for the first time. If you’d like to see yourself up there, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>.
Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/9/29/this-week-in-rails-actioncontroller-base-log_at-and-more/" rel="bookmark">ActionController::Base.log_at and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2019-09-29 00:00:00 +0000">September 29, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there, this is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing you the changes in Rails from the past week. Let’s dive in!</p>

<h3 id="reduce-stat2-calls"><a href="https://github.com/rails/rails/pull/37265">Reduce stat(2) calls</a></h3>

<p>This commit adds a slight performance improvement by reducing stat(2) calls in Rails.</p>

<h3 id="serialize-symbols-to-strings-in-immutablestring-serialize-method"><a href="https://github.com/rails/rails/pull/36907">Serialize symbols to strings in ImmutableString serialize method</a></h3>

<p>This PR updates the immutable string class to serialize symbols to strings to mirror this behavior as <em>ActiveModel::Attribute</em> calls this serialize method to determine the return value for <em>changed_in_place?.</em> Prior to this change, this code would wrongly report that “something” had changed.</p>

<h3 id="add-actioncontrollerbaselog_at"><a href="https://github.com/rails/rails/pull/37289">Add ActionController::Base.log_at</a></h3>

<p>This PR makes it possible to set a different log level on a per request basis. </p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code># Use the debug level if a particular cookie is set.  class ApplicationController \&lt; ActionController::Base  log\_at :debug, if: -\&gt; { cookies[:debug] }  end
</code></pre></div></div>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190920-20190928">25 people</a>contributed to Rails last week, if you want to be part of that, check out the <a href="https://github.com/rails/rails/issues">open issues</a> on Github. 
Until next time.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/9/20/this-week-in-rails-delete-multi-entries-from-cache-bugfixes-and-more/" rel="bookmark">Delete multi entries from cache, bugfixes and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2019-09-20 00:00:00 +0000">September 20, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi. This is <a href="https://twitter.com/morgoth85">Wojtek</a>. Rails 6 is with us for some time and we all can see it is a stable and solid release. Thank you one more time to all that tested the pre-releases and helped in ensuring that the final version is in a best possible shape.</p>

<p>Now let’s see some recent additions to Rails.</p>

<h3 id="added-delete_multi-method-to-active-support-store-cache"><a href="https://github.com/rails/rails/pull/36927">Added delete_multi method to Active Support Store Cache</a></h3>

<p>Improves performance for deleting many entries at once when supported by underlying store like <em>Redis.</em></p>

<h3 id="serialize-classes-and-modules-with-active-job"><a href="https://github.com/rails/rails/pull/37159">Serialize classes and modules with Active Job</a></h3>

<p>Classes and modules can now be passed to job as argument without a need for custom serializer.</p>

<h3 id="added-email_address_with_name-method-to-action-mailer"><a href="https://github.com/rails/rails/pull/36454">Added email_address_with_name method to Action Mailer</a></h3>

<p>Properly escapes email addresses with names without worrying if it includes special characters in it.</p>

<h3 id="fixed-range-include-method-for-endless-argument"><a href="https://github.com/rails/rails/pull/36460">Fixed Range include? method for endless argument</a></h3>

<p>Endless range was introduced in Ruby 2.6 and beginless range in upcoming Ruby 2.7.</p>

<h3 id="fixed-active-support-duration-comparison"><a href="https://github.com/rails/rails/pull/37013">Fixed Active Support Duration comparison</a></h3>

<p>Guard against non numeric attributes to avoid faulty comparisons.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190825-20190920">58 people</a> contributed to Rails since the last time. You can check the full list of changes <a href="https://github.com/rails/rails/compare/master@%7B2019-08-25%7D...@%7B2019-09-20%7D">here</a>.
Until next time.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/8/25/this-week-in-rails-rails-6-excitement-connection-pool-reaping-bug-fixes/" rel="bookmark">Rails 6 excitement, connection pool reaping, bug fixes</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2019-08-25 00:00:00 +0000">August 25, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Greetings! <a href="https://twitter.com/dodecadaniel">Daniel</a> here, reporting from
Brooklyn, NY.</p>

<h3 id="rails-6-in-the-wild"><a href="https://weblog.rubyonrails.org/2019/8/15/Rails-6-0-final-release/">Rails 6 in the wild</a></h3>

<p>I know we mentioned this last week, but I am so excited I wanted to mention it
again. Rails 6 has been out for a little over a week and has had over 60,000
downloads. Check it out today!</p>

<h3 id="ensure-connection-reaper-threads-respawn-in-forks"><a href="https://github.com/rails/rails/pull/36998">Ensure connection reaper threads respawn in forks</a></h3>

<p>I didn’t know much about this part of Rails before looking at this PR. The
<a href="https://api.rubyonrails.org/classes/ActiveRecord/ConnectionAdapters/ConnectionPool.html">connection pool</a> synchronizes thread access to database connections. The
<a href="https://api.rubyonrails.org/classes/ActiveRecord/ConnectionAdapters/ConnectionPool/Reaper.html">reaper</a> continuously calls <code class="language-plaintext highlighter-rouge">reap</code> and <code class="language-plaintext highlighter-rouge">flush</code> on the connection pool. I have
just one question: can somebody translate Aaron Patterson’s comment for me?</p>

<h3 id="avoid-reaping-parent-connection-pool-after-fork"><a href="https://github.com/rails/rails/pull/37002">Avoid reaping parent connection pool after fork</a></h3>

<p>This is from the same part of Rails as above. I really enjoyed seeing the
collaboration between Guo Xiang Tan and John Hawthorn in these PRs. Nice work!</p>

<h3 id="fix-memoization-bug-in-active-record"><a href="https://github.com/rails/rails/pull/36985">Fix memoization bug in Active Record</a></h3>

<p>Anmol Arora noticed and fixed an Active Record bug that has been around for
years. Excellent work on your first commit to Rails!</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190818-20190824">29 people</a> contributed to Rails over the past week, including 8 first-timers.
Check out the <a href="https://github.com/rails/rails/compare/master@%7B2019-08-18%7D...@%7B2019-08-24%7D">full list of changes</a>, and if you are interested in helping out
check out the <a href="https://github.com/rails/rails/issues">open issues</a>. Until next time…</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/8/18/this-week-in-rails-rails-6-is-released-sass-rails-6-improved-mysql2-error-and-more/" rel="bookmark">Rails 6 is released, sass-rails 6, improved mysql2 error and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2019-08-18 00:00:00 +0000">August 18, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> bringing the latest news from the Rails community. This week we have some big news. Get ready.</p>

<h3 id="rails-6-is-out"><a href="https://weblog.rubyonrails.org/2019/8/15/Rails-6-0-final-release/">Rails 6 is out!</a></h3>

<p>After two and half years of development from more than 800 people having staggering <a href="https://contributors.rubyonrails.org/releases/6-0-0/commits">7275 commits</a>, Rails 6 is released. Time to upgrade 😁<br />
Check out the <a href="https://guides.rubyonrails.org/6_0_release_notes.html">release notes</a> and <a href="https://guides.rubyonrails.org/upgrading_ruby_on_rails.html">upgrading guide</a> to know more.</p>

<h3 id="support-for-sass-rails-6-"><a href="https://github.com/rails/rails/commit/1953e0e1ace0a1790e8fe5ee0bca159637d67f61">Support for sass-rails 6 </a></h3>

<p>Rails now works with sass-rails 6.0. sass-rails 6 wraps <a href="https://github.com/rails/sass-rails/pull/424">sassc-rails gem</a> under the hood. This new version stops usage of outdated and unsupported ruby-sass gem.</p>

<h3 id="make-prepared-statement-status-thread-and-instance-specific"><a href="https://github.com/rails/rails/pull/36949">Make prepared statement status thread and instance-specific</a></h3>

<p>This fixes a race condition in system tests where prepared<br />
statements can be incorrectly parameterized when multiple<br />
threads observe the mutation of the <strong><em>@prepared_statements</em></strong><br />
instance variable on the connection.</p>

<h3 id="improve-mysql-error-detection"><a href="https://github.com/rails/rails/pull/36932">Improve MySQL error detection</a></h3>

<p>Improve detection of <strong><em>ActiveRecord::StatementTimeout</em></strong> error with mysql2 adapter in the edge case when the query is terminated during file sort.</p>

<h3 id="log-potential-matches-when-asserting-active-job-test-helpers"><a href="https://github.com/rails/rails/pull/36920">Log potential matches when asserting active job test helpers</a></h3>

<p>Adds logging of potential matches when calling <strong><em>assert_enqueued_with</em></strong> and <strong><em>assert_performed_with</em></strong>  to provide more information about test failures.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190810-20190817">25 people</a> contributed to Rails in the last week. Want to see your name on that list? Check out the list of <a href="https://github.com/rails/rails/issues">issues</a> here.</p>

<p>See you next week.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/7/20/this-week-in-rails-active-storage-startless-range-in-queries-sms-links-and-more/" rel="bookmark">Active Storage, startless range in queries, SMS links and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2019-07-20 00:00:00 +0000">July 20, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! This is <a href="https://twitter.com/repinel">Roque</a> bringing the latest news from the Rails community. It’s been awhile so let’s see what has changed since then… Oops, since last week 😜</p>

<h3 id="preserve-existing-attachment-assignment-behavior-for-app-upgraded-to-rails-60"><a href="https://github.com/rails/rails/pull/36716">Preserve existing attachment assignment behavior for app upgraded to Rails 6.0</a></h3>

<p>Assigning a collection of attachments appends to the collection as it did in 5.2. Existing 5.2 apps that rely on this behavior will no longer break when they’re upgraded to 6.0.
For Apps generated on 6.0, assigning replaces the existing attachments in the collection. <code class="language-plaintext highlighter-rouge">#attach</code> should be used to add new attachments to the collection without removing existing ones.</p>

<h3 id="support-startless-ranges-in-queries"><a href="https://github.com/rails/rails/pull/36696">Support startless ranges in queries</a></h3>

<p>Add support to <a href="https://bugs.ruby-lang.org/issues/14799">startless ranges</a> (<em>e.g.</em> <code class="language-plaintext highlighter-rouge">..10</code> and <code class="language-plaintext highlighter-rouge">..Date.today</code>), introduced by <a href="https://www.ruby-lang.org/en/news/2019/05/30/ruby-2-7-0-preview1-released/">Ruby 2.7.0-preview1</a>, to Active Record queries. This enables expression like <code class="language-plaintext highlighter-rouge">Order.where(created_at: ..1.year.ago)</code>.</p>

<h3 id="helper-method-to-create-an-sms-link"><a href="https://github.com/rails/rails/pull/36511">Helper method to create an SMS link</a></h3>

<p>When the users click the SMS link, their messaging app opens with the phone number and optional message body set in the link.</p>

<h3 id="superclass-for-aborted-queries"><a href="https://github.com/rails/rails/pull/36694">Superclass for aborted queries</a></h3>

<p>The class <code class="language-plaintext highlighter-rouge">ActiveRecord::QueryAborted</code> makes it possible, for example, to rescue all possible query timeouts without rescuing other query exceptions.</p>

<h3 id="add---skip-collision-check-option-to-the-rails-generator"><a href="https://github.com/rails/rails/pull/36603">Add <code class="language-plaintext highlighter-rouge">--skip-collision-check</code> option to the Rails generator</a></h3>

<p>This allows the generator for 6.0 to behave like it used to in 5.2, and overwrite files.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190716-20190720">18 people</a> contributed to Rails in the last week. Want to see your name on that list? Check out the list of <a href="https://github.com/rails/rails/issues">issues</a> here.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/7/15/this-week-in-rails-new-contributors-fixing-bugs-in-the-summer/" rel="bookmark">New contributors fixing bugs in the summer</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2019-07-15 00:00:00 +0000">July 15, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey all! This is <a href="https://twitter.com/dodecadaniel">Daniel</a> from Brooklyn, NY bringing you the latest news in Rails.</p>

<h3 id="add-database_exists-method-to-connection-adapters"><a href="https://github.com/rails/rails/pull/36471">Add database_exists? method to connection adapters</a></h3>

<p>The database_exists? method does what you might think—it checks whether a database exists. This will help in resolving some inconsistencies between SQLite and the other database adapters.</p>

<h3 id="share-column-and-table-names-between-connections"><a href="https://github.com/rails/rails/pull/36637">Share column and table names between connections</a></h3>

<p>Sharing is a beautiful thing. Since connection instances are likely to share table and column names, we can store them on the class instead of on each instance. Isn’t that nice?</p>

<h3 id="fix-query-cache-when-using-shared-connections"><a href="https://github.com/rails/rails/pull/36618">Fix query cache when using shared connections</a></h3>

<p>Congratulations to Heinrich on their first commit to Rails!</p>

<h3 id="fix-bug-when-combining-order-with-exist"><a href="https://github.com/rails/rails/pull/36647">Fix bug when combining <code class="language-plaintext highlighter-rouge">order</code> with <code class="language-plaintext highlighter-rouge">exist?</code></a></h3>

<p>Congratulations to Takayuki on their first commit to Rails!</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190707-20190714">21 people</a> contributed to Rails in the last week. Want to see your name on that list? Check out the list of <a href="https://github.com/rails/rails/issues">issues</a> here.</p>

<p>Be well!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/7/6/this-week-in-rails-schema-dump-fix-and-database-task-creation-improvements/" rel="bookmark">Schema dump fix and database task creation improvements!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2019-07-06 00:00:00 +0000">July 6, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there. This is <a href="https://twitter.com/gregmolnar">Greg</a> bringing you latest news from the Rails world. We had a quiet week, so I won’t take long.</p>

<h3 id="fix-schema-dumping-for-enum-and-set-columns-in-mysql"><a href="https://github.com/rails/rails/pull/36604">Fix schema dumping for enum and set columns in MySQL</a></h3>

<p>With this change Active Record will use the <em>sql_type</em> rather than <em>type,</em> in the database dump for <em>enum</em> and <em>set</em> columns to make sure they use the correct type.</p>

<h3 id="warn-if-database-tasks-cant-be-created"><a href="https://github.com/rails/rails/pull/36560">Warn if database tasks can’t be created</a></h3>

<p>With this change, Rails loads the initial database.yml once, and warns if it can’t create tasks. This is important for multiple databases, where the tasks are created for every database, but to create those Rails needs to read the list from database.yml.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190701-20190706">9 people</a> contributed to Rails in the last week, if you want to be one of them, check out the list of <a href="https://github.com/rails/rails/issues">issues</a> here.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/6/30/this-week-in-rails-and-schema-cache-deduplication-plus-getutc-begone/" rel="bookmark">☀️🏖🏄‍♀️ and schema cache deduplication plus getutc begone</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2019-06-30 00:00:00 +0000">June 30, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Ahoy all! 🚢 Step aboard as we cruise through the Rails news this week. Summer has really hit its simmering point for many a Rails contributor: we’re seeing fewer contributions. Take heed! Your trusty captain <a href="https://twitter.com/kaspth">Kasper</a> is here to reassure you that nothing has gone wrong on this ship and that it’s merely summer time seasoning. But also, the engine is on fire? Oh well, it’ll probably burn out soon enough and another wrong has been righted! This is fine. 🔥</p>

<h3 id="schema-cache-deduplicate-structures"><a href="https://github.com/rails/rails/pull/35891">Schema Cache: deduplicate structures</a></h3>

<p>This week has primarily been a strong one for Active Record’s schema cache with no less than 3 improvements. It’s a little known feature but it avoids querying your database for its schema every time a new server starts up (handy if you’re booting up many app servers). You invoke it with…</p>

<h3 id="schema-cache-stop-serializing-and-parsing-columns_hash"><a href="https://github.com/rails/rails/pull/36518">Schema Cache: stop serializing and parsing columns_hash</a></h3>

<p><em>rails schema:cache:dump</em>, check its documentation for more. These 3 changes are around deduplication the memory that the schema cache holds in a running app by doing deduplication. Basically running a <em>uniq</em> on objects and reusing already initialized ones. This technique is uncommon, but effective here, because so many tables share the same columns, e.g. <em>id</em>, <em>created_at</em>, <em>updated_at</em> etc. So the first change…</p>

<h3 id="schema-cache-deduplicate-when-using-init_with"><a href="https://github.com/rails/rails/pull/36529">Schema Cache: deduplicate when using init_with</a></h3>

<p>…ran deduplication for most things in the schema cache. The second change skipped storing the <em>columns_hash</em> in the YML, because it could be derived with <em>columns.index_by(&amp;:name)</em>. Thus saving storing every column object again, but just nested under the name. Neat! Rounding out the features: the deduplication should also be run when parsing YML and the parser invoking <em>init_with</em>. Remedied that, phew! I suggest you do check all three changes out because they show to really re-sculpt a feature over multiple PRs.</p>

<h3 id="active-record-avoid-redundant-timegetutc-when-serializing"><a href="https://github.com/rails/rails/pull/36508">Active Record: avoid redundant time.getutc when serializing</a></h3>

<p>Lastly, rounding out the news: some more speed ups! Currently serializing a <em>Time</em> attribute will run <em>time.getutc</em> in multiple places regardless of whether the time is already UTC, which is fairly expensive. This change checks if the time is already UTC and won’t bother with any needless conversion. ⏱</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190616-20190701">21 people</a> contributed to Rails in the last two weeks. You can see the <a href="https://github.com/rails/rails/compare/master@%7B2019-06-16%7D...@%7B2019-07-01%7D">full list of changes here</a>.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/6/16/this-week-in-rails-direct-upload-mirroring-multiple-databases-overview-and-more/" rel="bookmark">Direct upload mirroring, multiple databases overview and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2019-06-16 00:00:00 +0000">June 16, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there. This is <a href="https://twitter.com/morgoth85">Wojtek</a> bringing you goodies from the Rails world.</p>

<h3 id="document-multiple-databases"><a href="https://github.com/rails/rails/pull/36389">Document multiple databases</a></h3>

<p>Gives a great overview of available multiple database features coming in Rails 6.</p>

<h3 id="mirror-direct-uploads"><a href="https://github.com/rails/rails/pull/36312">Mirror direct uploads</a></h3>

<p>Tells the mirror service to copy the blob from the primary service to any secondary service where it doesn’t already exist.</p>

<h3 id="fix-preloading-on-activerecordrelation"><a href="https://github.com/rails/rails/pull/36429">Fix preloading on ActiveRecord::Relation</a></h3>

<p>Fixes a case where records are duplicated by a join by using a less known <em>Hash</em> method <em>compare_by_identity</em>.</p>

<h3 id="improve-on_rotation-in-messageencryptor"><a href="https://github.com/rails/rails/pull/36270">Improve on_rotation in MessageEncryptor</a></h3>

<p>Allow <em>on_rotation</em> option in <em>MessageEncryptor</em> to be passed in constructor.</p>

<h3 id="make-rescues-layout-responsive"><a href="https://github.com/rails/rails/pull/36306">Make rescues layout responsive</a></h3>

<p>Debugging on small devices got a lot easier by adjusting default errors layout. Check the pull request for sample image.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190519-20190614">51 people</a> contributed to Rails in the last month. You can see the <a href="https://github.com/rails/rails/compare/master@%7B2019-05-19%7D...@%7B2019-06-14%7D">full list of changes here</a>.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/5/18/this-week-in-rails-performance-improvements-large-file-uploads-to-s3-and-more/" rel="bookmark">Performance improvements, large file uploads to S3 and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2019-05-18 00:00:00 +0000">May 18, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello fellow Rubyist!</p>

<p>This is <a href="https://twitter.com/gregmolnar">Greg</a>, bringing the latest news about the Rails framework!</p>

<h3 id="fill-a-trix-editor-easily-in-system-tests"><a href="https://github.com/rails/rails/pull/35885">Fill a Trix editor easily in system tests</a></h3>

<p><em>ActionDispatch::SystemTestCase#fill_in_rich_text_area</em>  can  locate and fill a Trix editor with the given HTML in your system tests.</p>

<h3 id="activerecordrespond_to-performance-improvements"><a href="https://github.com/rails/rails/pull/34197">ActiveRecord#respond_to? performance improvements</a></h3>

<p>The changes introduced by this pull request made <em>ActiveRecord#respond_to?</em>  1.5x faster and it also no longer allocates strings.</p>

<h3 id="permit-uploading-files-larger-than-5-gb-to-s3"><a href="https://github.com/rails/rails/pull/35931">Permit uploading files larger than 5 GB to S3</a></h3>

<p>If you are using S3 with Active Storage, now you can upload large files and the services will transparently switch to streaming.</p>

<h3 id="hashwithindifferentaccessinitialize-performance-improvement"><a href="https://github.com/rails/rails/pull/34642">HashWithIndifferentAccess#initialize performance improvement</a></h3>

<p>With this change, a quite expensive <em>to_hash</em> call is bypassed in the constructor if we are already dealing with a hash.</p>

<h3 id="expose-mailbox_for-method-in-applicationmailbox"><a href="https://github.com/rails/rails/pull/36181">Expose mailbox_for method in ApplicationMailbox</a></h3>

<p>Rails 6 is bringing Action Mailbox and with this change, it will be possible to check which mailbox an email is routed to without processing it.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190410-20190417">40 people</a> contributed to Rails in the last week. If you want to be part of that, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/4/27/this-week-in-rails-rails-6-0-0-rc1-is-here-say-hi-at-railsconf/" rel="bookmark">Rails 6.0.0.rc1 is here, say hi at RailsConf!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2019-04-27 00:00:00 +0000">April 27, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hop aboard fellow traveler! Here’s your friendly conductor <a href="https://twitter.com/kaspth">Kasper</a> revving up to give you a brand spanking new issue for the price of zilch.</p>

<p>We’re just about to roll into RailsConf proper. Several of your trusty editors are going including me, <a href="https://twitter.com/eugeneius">Eugene</a>, <a href="https://twitter.com/imtayadeway">Tim</a>, and <a href="https://twitter.com/vipulnsward">Vipul</a>! Many people who are <a href="https://rubyonrails.org/community/">Rails committers and core</a> will be there too. Feel free to say hi if you spot us — we don’t byte a bit 😄</p>

<h3 id="rails-600rc1-is-out"><a href="https://weblog.rubyonrails.org/2019/4/24/Rails-6-0-rc1-released/">Rails 6.0.0.rc1 is out!</a></h3>

<p>Rails 6 is almost out the door. The first release candidate came out this week. This is the best time to get bug fixes in because we on the Rails core team will prioritize bugs found in rc1 and then ship an rc2 shortly. If no bugs are found after roughly 2-3 weeks, the real 6.0.0 is cut.</p>

<h3 id="model-errors-as-objects"><a href="https://github.com/rails/rails/pull/32313">Model errors as objects</a></h3>

<p>Now that 6.0.0.rc1 is out <a href="https://github.com/rails/rails/commit/9834be65655e8552d25633b7376ab0654a23875d">Rails 6.1 development</a> has started too. And the first feature has already landed! Active Model validations has long had errors that were plain hashes, but in 6.1 they’ll be objects!</p>

<h3 id="check-zeitwerk-compatibility"><a href="https://github.com/rails/rails/commit/afc17e5ea21759df5b9ef2ac9421b02154a09b9b">Check Zeitwerk compatibility</a></h3>

<p>Rails 6’s new autoloader Zeitwerk got a new command to check if your app is compatible. Simply run <em>bin/rails zeitwerk:check</em> and it’ll print out potential problems.</p>

<h3 id="reuse-retry-logic-for-old-jobs"><a href="https://github.com/rails/rails/pull/36057">Reuse retry logic for old jobs</a></h3>

<p>One of the benefits of GitHub being on the latest Rails was seen this week as they could test 6.0. GitHub found a potential regression in Active Job rectified it. The fix is Le Git!</p>

<h3 id="10-faster-active-record-attribute-access"><a href="https://github.com/rails/rails/pull/36049">10% faster Active Record attribute access</a></h3>

<p>Due to some nifty code rearrangement accessing attributes of an Active Record model became 10% faster albeit with a slight maintenance cost. An additional <a href="https://github.com/rails/rails/pull/36052">20% speed boost</a> on <em>id</em> was also squeezed in.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190419-20190427">34 people</a> contributed to Rails in the last week. You can see the <a href="https://github.com/rails/rails/compare/master@%7B2019-04-19%7D...@%7B2019-04-27%7D">full list of changes here</a>.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/4/19/this-week-in-rails-performance-improvements-collection-cache-versioning-and-more/" rel="bookmark">Performance improvements, collection cache versioning and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2019-04-19 00:00:00 +0000">April 19, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello. This is <a href="https://twitter.com/morgoth85">Wojtek</a> reporting on recent changes from Rails world.</p>

<h3 id="collection-cache-versioning"><a href="https://github.com/rails/rails/pull/34378">Collection cache versioning</a></h3>

<p>Add <em>cache_version</em> on relation to support recyclable cache keys via the versioned entries in <em>ActiveSupport::Cache</em>. This also means that <em>cache_key</em> will now return a stable key that does not include the max timestamp or count any more.</p>

<h3 id="speed-up-dirty-tracking"><a href="https://github.com/rails/rails/pull/35933">Speed up dirty tracking</a></h3>

<p>Reports 2x ~ 30x faster execution time compared to original implementation.</p>

<h3 id="add-dirty-methods-for-store-accessors"><a href="https://github.com/rails/rails/pull/19333">Add dirty methods for store accessors</a></h3>

<p>It is now possible to use methods defined by Dirty module on store accessors.</p>

<h3 id="add-after_save_commit-callback-shortcut"><a href="https://github.com/rails/rails/pull/35804">Add after_save_commit callback shortcut</a></h3>

<p>Adds shortcut for very common case:</p>
<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>after_commit :hook, on: [ :create, :update ]
</code></pre></div></div>

<h3 id="notes-tags-registration"><a href="https://github.com/rails/rails/pull/35906">Notes tags registration</a></h3>

<p>It is now possible to register custom tags that will be included on <em>bin/rails notes</em> command.</p>

<h3 id="add-dbprepare-rake-task"><a href="https://github.com/rails/rails/pull/35768">Add db:prepare rake task</a></h3>

<p>Based on state of database it runs <em>setup</em> or <em>migrate</em> tasks.</p>

<h3 id="add-detach_from-to-activesupportsubscriber"><a href="https://github.com/rails/rails/pull/35691">Add detach_from to ActiveSupport::Subscriber</a></h3>

<p>It is now possible to opt-out from listening on chosen events.</p>

<h3 id="factorize-binupdate-in-binsetup"><a href="https://github.com/rails/rails/pull/33139">Factorize bin/update in bin/setup</a></h3>

<p>Replaced two files with one. From now on <em>bin/setup</em> should be idempotent in the project, thus should run fine on the first time setup and after any update.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190331-20190419">71 people</a> contributed to Rails in the last 3 weeks. You can see the <a href="https://github.com/rails/rails/compare/master@%7B2019-03-31%7D...@%7B2019-04-19%7D">full list of changes here</a>.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/4/2/this-week-in-rails-new-versions-of-rails-optimizer-hints-rofl-and-more/" rel="bookmark">New versions of Rails, optimizer hints, ROFL, and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2019-04-02 00:00:00 +0000">April 2, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! This is <a href="https://twitter.com/dodecadaniel">Daniel</a> reporting from
Brooklyn, NY.</p>

<h3 id="new-versions-of-rails-released"><a href="https://weblog.rubyonrails.org/2019/3/28/Rails-5-2-3-has-been-released/">New versions of Rails released</a></h3>

<p><a href="https://weblog.rubyonrails.org/2019/3/28/Rails-5-2-3-has-been-released/">Rails 5.2.3</a> and <a href="https://weblog.rubyonrails.org/2019/3/28/Rails-5-1-7-has-been-released/">Rails 5.1.7</a> were released last week. Check out
the CHANGELOG and upgrade today!</p>

<h3 id="optimizer-hints-and-annotations"><a href="https://github.com/rails/rails/pull/35615">Optimizer Hints and Annotations</a></h3>

<p>These two related PRs were opened within a couple hours of each other. The new
<a href="https://github.com/rails/rails/pull/35615"><code class="language-plaintext highlighter-rouge">optimizer_hints</code></a> method offers a simple way to
include optimizer hints in your queries. The new <a href="https://github.com/rails/rails/pull/35617"><code class="language-plaintext highlighter-rouge">annotate</code></a>
method offers a simple way to annotate your queries with comments.</p>

<h3 id="the-best-pr-that-i-saw-this-year"><a href="https://github.com/rails/rails/pull/34405/#issuecomment-437004244">The best PR that I saw this year!</a></h3>

<p>This PR elegantly ensures that <code class="language-plaintext highlighter-rouge">ActiveSupport::SafeBuffer</code>’s <code class="language-plaintext highlighter-rouge">sub</code>, <code class="language-plaintext highlighter-rouge">sub!</code>,
<code class="language-plaintext highlighter-rouge">gsub</code>, and <code class="language-plaintext highlighter-rouge">gsub!</code> methods set back references. I learned a lot about Ruby by
reading through this code and the review comments.</p>

<h3 id="stop-rofl"><a href="https://github.com/rails/rails/pull/35664">Stop ROFL</a></h3>

<p>I always enjoy removing code that is no longer needed. It must be especially fun
to remove code that includes the comment “I will explain the roflscale so that
others will not rm this code.”</p>

<h3 id="use-weak-references-in-the-descendants-tracker"><a href="https://github.com/rails/rails/pull/31442">Use weak references in the descendants tracker</a></h3>

<p>Nobody wants a memory leak. Keeping track of these references allows us to
garbage collect anonymous subclasses.</p>

<h3 id="advancing-to-dates-before-1001-03-07"><a href="https://github.com/rails/rails/pull/35659">Advancing to dates before 1001-03-07</a></h3>

<p>I am constantly plagued by bugs related to time. This PR reminds me how
complicated time really is.</p>

<h3 id="allow-disabling-of-console-sandbox"><a href="https://github.com/rails/rails/pull/35723">Allow disabling of console sandbox</a></h3>

<p>Has anybody else ever opened a production console session and fogotten to close
it? ✋ Ever done it with the <code class="language-plaintext highlighter-rouge">--sandbox</code> flag and caused your database to run
out of memory? 😭 Thanks, Rails, for protecting me against myself.</p>

<h3 id="improved-error-messages-from-views"><a href="https://github.com/rails/rails/pull/35308">Improved error messages from views</a></h3>

<p>Thinking about contributing to Rails? Check out this PR from a first-time
contributor for inspiration.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190315-20190330">55 people</a> contributed to Rails in the last 2 weeks, including 6
first-time contributors. You can see the <a href="https://github.com/rails/rails/compare/master@%7B2019-03-15%7D...@%7B2019-03-30%7D">full list of changes here</a>.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/3/15/this-week-in-rails-security-fixes-bulk-insert-and-upsert-seeds-replanting/" rel="bookmark">Security fixes, bulk insert and upsert, seeds replanting</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2019-03-15 00:00:00 +0000">March 15, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello. This is <a href="https://twitter.com/morgoth85">Wojtek</a> here bringing you the exciting updates from Rails.</p>

<h3 id="security-fix-releases-of-rails"><a href="https://weblog.rubyonrails.org/2019/3/13/Rails-4-2-5-1-5-1-6-2-have-been-released/">Security fix releases of Rails</a></h3>

<p>Rails 4.2.11.1, 5.0.7.2, 5.1.6.2, 5.2.2.1, and 6.0.0.beta3 have been released containing important security fixes. Note that with 6.0 release only Rails 6.x.y and Rails 5.2.x are guaranteed to receive both major and minor security fixes by Rails core.</p>

<h3 id="active-record-adds-insert_all-and-upsert_all-methods"><a href="https://github.com/rails/rails/pull/35077">Active Record adds “insert_all” and “upsert_all” methods</a></h3>

<p>It’s now possible to insert many records at once within one SQL statement. You can check summary of this feature in Josef’s <a href="https://medium.com/@retrorubies/upcoming-rails-6-bulk-insert-upsert-feature-2d642419557d">blog post</a>.</p>

<h3 id="rails-command-dbseedreplant-added"><a href="https://github.com/rails/rails/pull/34779">Rails command “db:seed:replant” added</a></h3>

<p>Bring back clean state of database seeds with this simple command without redoing the database structure.</p>

<h3 id="active-support-adds-enumerable-including-method"><a href="https://github.com/rails/rails/commit/bfaa3091c3c32b5980a614ef0f7b39cbf83f6db3">Active Support adds Enumerable “including” method</a></h3>

<p>Self-explained by an example:</p>
<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>[ 1, 2, 3 ].including(4, 5) =&gt; [ 1, 2, 3, 4, 5 ]
</code></pre></div></div>
<p>For parity, method <code class="language-plaintext highlighter-rouge">without</code> was renamed to <code class="language-plaintext highlighter-rouge">excluding</code>.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190303-20190315">54 people</a> contributed to Rails in the last 2 weeks. You can see the <a href="https://github.com/rails/rails/compare/master@%7B2019-03-03%7D...@%7B2019-03-15%7D">full list of changes here</a>.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/3/3/this-week-in-rails-reselect-negative-enum-scopes-and-more/" rel="bookmark">reselect, negative enum scopes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2019-03-03 00:00:00 +0000">March 3, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Why hello there! <a href="https://twitter.com/imtayadeway">Tim</a> here bringing you all the latest and greatest from This Week In Rails.</p>

<h3 id="negative-scopes-for-enum-values"><a href="https://github.com/rails/rails/pull/35381">Negative scopes for enum values</a></h3>

<p>Some sugar around enum values allows you to make negative scopes such as</p>

<div class="language-ruby highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="no">Post</span><span class="p">.</span><span class="nf">not_drafted</span> <span class="c1"># =&gt; where.not(status: :drafted)</span>
</code></pre></div></div>

<h3 id="new-method-reselect"><a href="https://github.com/rails/rails/pull/33611">New method: reselect</a></h3>

<p>Allows you to change a previously set select statement in the same manner to rewhere and reorder, e.g.</p>

<div class="language-ruby highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="no">Post</span><span class="p">.</span><span class="nf">select</span><span class="p">(</span><span class="ss">:title</span><span class="p">,</span> <span class="ss">:body</span><span class="p">).</span><span class="nf">reselect</span><span class="p">(</span><span class="ss">:created_at</span><span class="p">)</span>
</code></pre></div></div>

<h3 id="size-fixed-when-using-select-distinct"><a href="https://github.com/rails/rails/pull/35361">#size fixed when using SELECT DISTINCT</a></h3>

<p><code class="language-plaintext highlighter-rouge">#size_</code> would ignore the DISTINCT in the select, giving a different result to <code class="language-plaintext highlighter-rouge">#count</code>. This is now fixed!</p>

<h3 id="active-storages-_blob-loading-fixed"><a href="https://github.com/rails/rails/pull/35412">Active Storage’s _blob loading fixed</a></h3>

<p>If you attached a <code class="language-plaintext highlighter-rouge">has_one_attachment</code> attachment, you may have found that the attachment’s <code class="language-plaintext highlighter-rouge">_blob</code> method would have returned <code class="language-plaintext highlighter-rouge">nil</code>. This was fixed by assigning the blob when the attachment is assigned.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190224-20190302">22 people</a> contributed to Rails since our last issue; you can see the <a href="https://github.com/rails/rails/compare/master@%7B2019-02-24%7D...@%7B2019-03-02%7D">full list of changes here</a>.</p>

<p>Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/1/28/this-week-in-rails-active-record-bug-fixes-faster-date-advance-and-more/" rel="bookmark">Active Record bug fixes, faster Date#advance, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">eugeneius</span></span>,
              <span class="published" title="2019-01-28 00:00:00 +0000">January 28, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/eugeneius">Eugene</a>, with a selection of interesting improvements to Rails merged in the past week.</p>

<h3 id="dont-load-app-environment-when-editing-credentials"><a href="https://github.com/rails/rails/pull/34789">Don’t load app environment when editing credentials</a></h3>

<p>Support for <a href="https://github.com/rails/rails/pull/33521">per-environment credentials</a> is coming in Rails 6.0, but adding a new environment wasn’t always easy: if your application accessed credentials during boot, the <code class="language-plaintext highlighter-rouge">credentials:edit</code> command would fail to run, which would in turn prevent you from adding the missing credentials. Oops!</p>

<h3 id="all-queries-should-return-correct-results-even-if-they-include-large-numbers"><a href="https://github.com/rails/rails/pull/30000">All queries should return correct results even if they include large numbers</a></h3>

<p>When prepared statements are enabled, querying an integer column with an out-of-range value causes an error in the underlying database driver. To work around this issue, Active Record used to refuse to run the query and always return a negative result, e.g. <code class="language-plaintext highlighter-rouge">ActiveRecord::RecordNotFound</code>.</p>

<p>This approach worked for simple queries, but gave incorrect results for more complex ones. Out-of-range values are now converted to “impossible” predicates instead (e.g. <code class="language-plaintext highlighter-rouge">WHERE 1=0</code>), which allows the query to run without an error while still producing the correct result.</p>

<p>Speaking of large numbers: this pull request, opened 18 months ago, was number 30,000 on the Rails repository. 🎈</p>

<h3 id="fix-year-value-when-casting-a-multi-parameter-time-hash"><a href="https://github.com/rails/rails/pull/34990">Fix year value when casting a multi-parameter time hash</a></h3>

<p>Values stored in <code class="language-plaintext highlighter-rouge">TIME</code> columns in the database are mapped to <code class="language-plaintext highlighter-rouge">Time</code> objects in Ruby. The latter includes date parts, where the former doesn’t; to deal with this discrepancy, a default date of January 1st, 2000 is always assigned.</p>

<p>When a multi-parameter time value—as generated by the <code class="language-plaintext highlighter-rouge">time_select</code> helper—was assigned to an attribute, its year would be set to 1970 instead, producing a different result depending on where the value came from.</p>

<p>With this fix, time attributes have fully joined us in the 21st century. 🖖</p>

<h3 id="faster-and-more-memory-efficient-dateadvance"><a href="https://github.com/rails/rails/pull/34972">Faster and more memory-efficient <code class="language-plaintext highlighter-rouge">Date#advance</code></a></h3>

<p>This method was copying its options hash unnecessarily. Now that it doesn’t, it’s both faster and allocates less memory.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20190122-20190127">28 people</a> contributed to Rails since our last issue; you can see the <a href="https://github.com/rails/rails/compare/master@%7B2019-01-22%7D...@%7B2019-01-27%7D">full list of changes here</a>.</p>

<p>Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2019/1/22/this-week-in-rails-rails-6-0-0-beta1-and-more/" rel="bookmark">Rails 6.0.0 beta1, and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2019-01-22 00:00:00 +0000">January 22, 2019 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><a href="https://twitter.com/dodecadaniel">Daniel</a> here, writing from chilly NYC to bring you the latest Rails news.</p>

<h3 id="rails-600-beta1"><a href="https://weblog.rubyonrails.org/2019/1/18/Rails-6-0-Action-Mailbox-Action-Text-Multiple-DBs-Parallel-Testing/">Rails 6.0.0 beta1</a></h3>

<p>Many thanks to everyone who helped get this amazing release together. It includes <a href="https://github.com/rails/rails/pull/34873">Action Text</a> and <a href="https://github.com/rails/rails/pull/34786">Action Mailbox</a>, both recently merged into Rails. Try it out today!</p>

<h3 id="new-command-to-change-databases"><a href="https://github.com/rails/rails/pull/34832">New command to change databases</a></h3>

<p>Have you ever created a new Rails app without specifying the database system upfront, then realized you need to switch over from SQLite to PostgreSQL? That change is now as simple as running: <code class="language-plaintext highlighter-rouge">bin/rails db:system:change --to=postgresql</code></p>

<h3 id="improved-multi-db-errors"><a href="https://github.com/rails/rails/pull/34753">Improved multi-db errors</a></h3>

<p>I think we can all appreciate helpful error messages. Many thanks to Eileen for helping us out, and for all of the incredible work to support multiple databases.</p>

<h3 id="action-cable-testing"><a href="https://github.com/rails/rails/pull/34845">Action Cable Testing</a></h3>

<p>The test helpers from the <a href="https://github.com/palkan/action-cable-testing">action-cable-testing</a> gem are now fully merged into Rails. Testing your cables has never been easier.</p>

<h3 id="endless-ranges-in-where-conditions"><a href="https://github.com/rails/rails/pull/34906/">Endless ranges in where conditions</a></h3>

<p>Ruby 2.6 introduced endless ranges. In Rails 6 we will be able to use them in where conditions: <code class="language-plaintext highlighter-rouge">features.where(awesomeness: 10..)</code></p>

<h3 id="dont-watch-your-parents"><a href="https://github.com/rails/rails/pull/33822">Don’t watch your parents</a></h3>

<p>Before this change, if a directory to be watched was not present in the project, Rails would watch that directory’s parent directory instead. In some cases this could lead to watching the entire Rails root directory.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20181215-20190121">72 people</a> contributed to Rails over the past month. There are still plenty of <a href="https://github.com/rails/rails/issues">open issues</a> that could use your help. Will we see your name on the list next week?<a href="https://github.com/rails/rails/issues"><br />
</a></p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/12/20/timeline-for-the-release-of-Rails-6-0/" rel="bookmark">Timeline for the release of Rails 6.0</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dhh</span></span>,
              <span class="published" title="2018-12-20 00:00:00 +0000">December 20, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>We’ve made enough progress towards the vision for Rails 6.0 that it makes sense to share our aspirational timeline for release. “Aspirational” being the key word, more so than “release” 😄. Software rarely ships on time, and we’ve had plenty of aspirational release dates that came and went in the past. But if optimism isn’t part of the fun of open source, then where would we be?</p>

<p>So. This is the timeline as we currently hope to see it:</p>

<ul>
  <li><strong>January 15: Beta 1</strong>. We’ll merge the two new frameworks, Action Mailbox and Action Text, for this release.</li>
  <li><strong>February 1: Beta 2</strong>. We’ll make sure any other major improvements are included by then.</li>
  <li><strong>March 1: Release Candidate 1</strong>. We go feature complete by here.</li>
  <li><strong>April 1: Release Candidate 2</strong>. This should really be ready to ship, only new blockers will hold us back.</li>
  <li><strong>April 30: Final release</strong>. Ship and celebrate the release of Rails 6.0 at RailsConf 2019!</li>
</ul>

<p>It always looks so nice and neat when laid out like that, right? Like some serious engineers did some serious engineering to figure this out. And not just a bunch of software writers plotting down their hopes and dreams. But yeah, it’s really the engineering part we went for (no it wasn’t).</p>

<p>Worth noting: Rails 6.0 will require Ruby 2.5+! So you can get ready by making sure you’re already running this version of Ruby. Also note that following the release of Rails 6.0, only Rails 6.x.y and Rails 5.2.x are guaranteed to receive both major and minor security fixes by Rails core. (As always, we may still choose to provide fixes further back, but there’s no guarantee).</p>

<p>As always, please help us make this a reality by running rails/master for new apps and existing ones, if you sport that High Adventure gene (aka no risk of getting fired if you hit a bug). Basecamp 3 is already running rails/master in production, so you know the main branch is at least in pretty good working order!</p>

<p>Our release manager for Rails 6.0 will be Rafael França with backup from Kasper Timm Hansen 🙏</p>

<p>To Rails Six Oh And Beyond! 🚀🚂</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/12/16/this-week-in-rails-george-joins-rails-core-and-action-mailbox-introduced/" rel="bookmark">George joins Rails Core and Action Mailbox introduced</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2018-12-16 00:00:00 +0000">December 16, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello. This is <a href="https://twitter.com/morgoth85">Wojtek</a> with a short list of news from Rails world.</p>

<h3 id="george-joins-rails-core"><a href="https://weblog.rubyonrails.org/2018/12/13/george-joins-rails-core/">George joins Rails Core</a></h3>

<p>George Claghorn is now a member of the <a href="https://rubyonrails.org/community/#core">Rails core team</a>. Welcome George!</p>

<h3 id="introducing-action-mailbox-for-rails-6"><a href="https://weblog.rubyonrails.org/2018/12/13/introducing-action-mailbox-for-rails-6/">Introducing Action Mailbox for Rails 6</a></h3>

<p>Action Mailbox is the brand new framework coming to Rails 6 extracted from Basecamp.</p>

<h3 id="add-activerecordbaseconnected_to"><a href="https://github.com/rails/rails/pull/34680">Add ActiveRecord::Base.connected_to?</a></h3>

<p>Another handy method added to support multiple databases.</p>

<h3 id="fix-numericality-equality-validation-on-floats"><a href="https://github.com/rails/rails/pull/32852">Fix numericality equality validation on floats</a></h3>

<p>By casting values to <em>BigDecimal</em> comparision on validation is now more precise.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20181208-20181215">19 people</a><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20181125-20181201"></a> contributed to Rails last week making lot of <a href="https://github.com/rails/rails/compare/master@%7B2018-12-08%7D...@%7B2018-12-15%7D">improvements</a>.<br />
Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/12/13/introducing-action-mailbox-for-rails-6/" rel="bookmark">Introducing Action Mailbox for Rails 6</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dhh</span></span>,
              <span class="published" title="2018-12-13 00:00:00 +0000">December 13, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><a href="https://github.com/rails/actionmailbox">Action Mailbox</a> is the second brand new framework coming to Rails 6 (the first was <a href="https://github.com/rails/actiontext">Action Text</a>). It serves to <a href="https://github.com/rails/actionmailbox/blob/master/lib/action_mailbox/base.rb#L6">route incoming emails</a> to controller-like mailboxes for processing in Rails. It ships with ingresses for <a href="https://github.com/rails/actionmailbox/blob/master/app/controllers/action_mailbox/ingresses/amazon/inbound_emails_controller.rb">Amazon SES</a>, <a href="https://github.com/rails/actionmailbox/blob/master/app/controllers/action_mailbox/ingresses/mailgun/inbound_emails_controller.rb">Mailgun</a>, <a href="https://github.com/rails/actionmailbox/blob/master/app/controllers/action_mailbox/ingresses/mandrill/inbound_emails_controller.rb">Mandrill</a>, and <a href="https://github.com/rails/actionmailbox/blob/master/app/controllers/action_mailbox/ingresses/sendgrid/inbound_emails_controller.rb">SendGrid</a>. You can also handle inbound mails directly via the <a href="https://github.com/rails/actionmailbox/blob/master/app/controllers/action_mailbox/ingresses/postfix/inbound_emails_controller.rb">Postfix ingress</a>.</p>

<p>The inbound emails are turned into <a href="https://github.com/rails/actionmailbox/blob/master/app/models/action_mailbox/inbound_email.rb">InboundEmail</a> records using Active Record and feature lifecycle tracking, storage of the original email on cloud storage via Active Storage, and responsible data handling with <a href="https://github.com/rails/actionmailbox/blob/master/app/models/action_mailbox/inbound_email/incineratable.rb">on-by-default incineration</a>. These inbound emails are routed asynchronously using Active Job to one or several dedicated mailboxes, which are capable of interacting directly with the rest of your domain model.</p>

<p>The framework was, like Action Text and Active Storage, extracted from <a href="https://basecamp.com">Basecamp 3</a>. We’ve been using a related approach to route everything from forwarded emails to email replies to messages and discussions. After extracting the ideas into Action Mailbox, we reintegrated the framework into Basecamp, and we’ve been running the code we’re sharing today for over a month in production.</p>

<p>Yes, Rails already had an anemic way of <a href="https://guides.rubyonrails.org/action_mailer_basics.html#receiving-emails">receiving emails using Action Mailer</a>, but it was poorly flushed out, lacked cohesion with the task of sending emails, and offered no help on integrating with popular inbound email processing platforms. Action Mailbox supersedes the receiving part of Action Mailer, which will be deprecated in due course.</p>

<p>Rails 6 is getting closer, but it’s still a ways off – we’re hoping to start the beta process in early 2019. Action Mailbox is already in pretty decent shape, though, and you can even use it with Rails 5.2 applications, if you fancy dancing on the wild side. Just be prepared for things changing as we work our way through community review and towards merging it into <a href="http://github.com/rails/rails/">rails/rails</a>.</p>

<p>The Action Mailbox framework is based off ideas hatched by Jeremy Daer, and this particular implementation was done as a collaboration between yours truly and George Claghorn.</p>

<p>As part of the introduction of Action Mailbox, I plan to record a video showing off the basics in the near future. But the code is ready and somewhat documented for anyone to dive into already. So why sit on a good thing!</p>

<p>Between Action Text and Action Mailbox, Rails 6 is already shaping up to be one of the biggest releases in the history of the framework. And we’re not even done yet! Our plan is tentatively to have a release candidate version ready for <a href="https://railsconf.com">RailsConf 2019 in Minneapolis</a>. Please help us make that promise a reality by trying out Action Mailbox!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/12/13/george-joins-rails-core/" rel="bookmark">George joins Rails Core!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dhh</span></span>,
              <span class="published" title="2018-12-13 00:00:00 +0000">December 13, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>We couldn’t be happier to welcome <a href="https://github.com/georgeclaghorn">George Claghorn</a> to <a href="http://rubyonrails.org/community/#core">Rails core</a>. George has been the co-creator of both <a href="https://edgeguides.rubyonrails.org/active_storage_overview.html">Active Storage</a> and <a href="https://weblog.rubyonrails.org/2018/12/13/introducing-action-mailbox-for-rails-6/">Action Mailbox</a>.</p>

<p>His <a href="https://contributors.rubyonrails.org/contributors/george-claghorn/commits">work on Rails</a> has not just included bringing these exciting new frameworks into the Rails work, but also continuing to lead maintenance and process community feedback and improvements.</p>

<p>George is our first deaf person on the team ❤️🎉👏</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/12/10/this-week-in-rails-new-rails-version-early-new-ruby-version-fixes-and-more/" rel="bookmark">New Rails version, early new Ruby version fixes, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2018-12-10 00:00:00 +0000">December 10, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, hello! This is <a href="https://twitter.com/imtayadeway">Tim</a> here bringing you all the latest right from the Rails Edge.</p>

<p>In the northern hemisphere, daylight is getting scarce, driving <a href="https://twitter.com/imtayadeway/status/1070362790903218177">certain</a> <a href="https://twitter.com/tenderlove/status/1070827980509786113">folks</a> in the Pacific Northwest to drastic measures. But the holiday season is upon us! We got an early pressie in the form of a new Rails release this week. Ans we can all look forward to Ruby release day!</p>

<p>On with the show….</p>

<h3 id="rails-522-has-been-released"><a href="https://weblog.rubyonrails.org/2018/12/4/Rails-5-2-2-has-been-released/">Rails 5.2.2 has been released!</a></h3>

<p>This week saw the release of a new patch version of Rails! Too numerous to list here, check out the official blog post for the full changelog.</p>

<h3 id="this-weeks-contributors"><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20181202-20181207">This Week’s Contributors</a></h3>

<p>This week 23 people gave back to Rails. For 7 of these folks it was their first time contributing! If you’d like to see yourself in a future edition of this newsletter, or alternatively just want to give back in a purely altruistic gesture, a great place to start can be checking out the list of <a href="https://github.com/rails/rails/issues">open issues</a>.</p>

<h3 id="ruby-260-fixes"><a href="">Ruby 2.6.0 fixes</a></h3>

<p>As you may know, the release of Ruby 2.6.0 is right around the corner! We are very grateful to <a href="https://github.com/rails/rails/pull/34601">the</a> <a href="https://github.com/rails/rails/pull/34612">folks</a> who are already testing Rails on the release candidates and submitting patches ahead of time.</p>

<h3 id="non-primary-mouse-button-clicks-no-longer-trigger-click-events"><a href="https://github.com/rails/rails/pull/34573">Non-primary mouse button clicks no longer trigger click events</a></h3>

<p>This PR addresses an issue where certain browsers will fire a click event for non-primary mouse button clicks where others will not. They will all now behave uniformly thanks to this fix!</p>

<h3 id="unpermitted-params-log-message-now-colorized"><a href="https://github.com/rails/rails/pull/34617">Unpermitted params log message now colorized</a></h3>

<p>More colorized log messages for improved readability!</p>

<h3 id="delete_all-on-collection-proxy-returns-count"><a href="https://github.com/rails/rails/pull/34609">#delete_all on collection proxy returns count</a></h3>

<p>This makes <code class="language-plaintext highlighter-rouge">#delete_all</code> behave uniformly across relations and collection proxies by returning the count of affected rows.</p>

<h3 id="test-helpers-docs-added-to-guides"><a href="https://github.com/rails/rails/pull/34563">Test helpers docs added to guides</a></h3>

<p>This PR documents some good practices for breaking test helpers out into separate files. Check it out!</p>

<h3 id="activejobbaseenqueue-to-return-false-on-failure"><a href="https://github.com/rails/rails/pull/33992">ActiveJob::Base#enqueue to return false on failure</a></h3>

<p>This makes the enqueue mechanism more consistent with the <code class="language-plaintext highlighter-rouge">ActiveSupport::Callbacks</code> design where if the callback chain is halted, it will return <code class="language-plaintext highlighter-rouge">false</code>. You can now use this feedback to determine if your job was in fact enqueued. Hurrah!</p>

<p>As always, there were way too many things to cover in full this week, but you can read about them all <a href="https://github.com/rails/rails/compare/master@%7B2018-12-02%7D...@%7B2018-12-07%7D">here</a>. That’s all folks!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/12/2/this-week-in-rails-safety-checks-to-prevent-database-writes-cache-performance-boost-and-more/" rel="bookmark">Safety checks to prevent database writes, cache performance boost and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kirshatrov</span></span>,
              <span class="published" title="2018-12-02 00:00:00 +0000">December 2, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Cheers for the first day of December! This is <a href="https://twitter.com/kirshatrov">Kir</a> bringing you the latest news from the Rails world.</p>

<h3 id="use-raw-time-string-from-db-to-generate-activerecordcache_version"><a href="https://github.com/rails/rails/pull/33835">Use raw time string from DB to generate ActiveRecord#cache_version</a></h3>

<p>The PR skips unnecessary attribute casting when generating cache version, which gives a great performance boost for apps that rely on caching.</p>

<h3 id="add-ability-to-block-writes-to-a-database"><a href="https://github.com/rails/rails/pull/34505">Add ability to block writes to a database</a></h3>

<p>A brand new <em>while_preventing_writes</em> method on Active Record connection allows you to add safety checks for code that’s not supposed to write to a database.</p>

<h3 id="bump-the-minimum-version-of-postgresql-to-93"><a href="https://github.com/rails/rails/pull/34520">Bump the minimum version of PostgreSQL to 9.3</a></h3>

<p>PostgreSQL 9.1 and 9.2 have been declared EOL more than a year ago.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20181125-20181201">28 people</a>contributed to Rails last week. If you want to be part of that, check out the <a href="https://github.com/rails/rails/issues">issues list</a>.<br />
Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/11/25/this-week-in-rails-parallel-tests-on-windows-query-cache-with-multiple-databases-and-more/" rel="bookmark">Parallel tests on Windows, query cache with multiple databases and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">GregMolnar</span></span>,
              <span class="published" title="2018-11-25 00:00:00 +0000">November 25, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello fellow Rubyists. This is <a href="https://twitter.com/GregMolnar">Greg</a> bringing you the latest updates from Rails.</p>

<h3 id="fix-parallel-tests-on-windows"><a href="https://github.com/rails/rails/pull/34410">Fix parallel tests on Windows</a></h3>

<p>This pull request fixes an issue with running tests in parallel on Windows.</p>

<h3 id="allow-using-queue-prefix-with-a-default-queue-name"><a href="https://github.com/rails/rails/pull/34376">Allow using queue prefix with a default queue name</a></h3>

<p>In Active Job, now if you define a <em>queue_name_prefix</em> it will be applied to the queue name set by <em>default_queue_name</em> as well.</p>

<h3 id="fix-query-cache-for-multiple-connections"><a href="https://github.com/rails/rails/pull/34491">Fix query cache for multiple connections</a></h3>

<p>Active Records query cache now supports multiple database connections.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20181116-20181125">30 people</a>contributed to Rails last week. If you want to be part of that, check out the <a href="https://github.com/rails/rails/issues">issues list</a>.
Until next time.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/11/16/this-week-in-rails-more-multi-database-goodies-and-decaffeinated-rails/" rel="bookmark">More multi database goodies and decaffeinated Rails</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2018-11-16 00:00:00 +0000">November 16, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello fellow Rubyists. This is <a href="https://twitter.com/morgoth85">Wojtek</a> bringing you the latest updates from Rails.</p>

<h3 id="note-about-cve-gems-version-bumps"><a href="https://github.com/rails/rails/pull/34392">Note about CVE gems version bumps</a></h3>

<p>Usually it is enough to update vulnerable gem within the application without a need to force it in the Rails codebase.</p>

<h3 id="multi-database-support-for-schema-cache-dump--clear"><a href="https://github.com/rails/rails/pull/34181">Multi database support for schema cache dump &amp; clear</a></h3>

<p>More goodies coming for multiple databases.</p>

<h3 id="add-if_not_exists-option-to-create_table"><a href="https://github.com/rails/rails/pull/31382">Add if_not_exists option to create_table</a></h3>

<p>It is now possible to silently skip adding a table if it already exists during a migration.</p>

<h3 id="add-support-for-unlogged-postgresql-tables"><a href="https://github.com/rails/rails/pull/34221">Add support for unlogged PostgreSQL tables</a></h3>

<p>If you ever wanted to create unlogged tables, now you can.</p>

<h3 id="convert-coffeescript-to-javascript"><a href="https://github.com/rails/rails/pull/34177">Convert CoffeeScript to JavaScript</a></h3>

<p>So Rails is having fewer sips of coffee these days and of course never indulged in those dark blends of Java 😄.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20181101-20181116">37 people</a> contributed to Rails within latest two weeks. Check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-11-01%7D...@%7B2018-11-16%7D">full list of changes</a>.</p>

<p>Special wishes to all RubyConf attendees ❤️. Until next time.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/11/2/this-week-in-rails-webpacker-action-text-multiple-database-improvements-and-more/" rel="bookmark">Webpacker, Action Text, Multiple database improvements, and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2018-11-02 00:00:00 +0000">November 2, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Boo! It’s <a href="https://twitter.com/dodecadaniel">Daniel</a> here, bringing you news about Rails for October. 🎃</p>

<h3 id="make-webpacker-the-default-javascript-compiler-for-rails-6"><a href="https://github.com/rails/rails/pull/33079">Make Webpacker the default JavaScript compiler for Rails 6</a></h3>

<p>Less than two years ago Rails introduced the Webpacker gem, making it easy to manage JavaScript with webpack. We started October strong by merging a whole bunch of commits by a number of people to make Webpacker the default for Rails 6.</p>

<h3 id="introducing-action-text"><a href="https://weblog.rubyonrails.org/2018/10/3/introducing-action-text-for-rails-6/">Introducing Action Text</a></h3>

<p>Combining the powers of Active Storage, Webpacker, and Trix, Action Text brings rich text content and editing to Rails. Check it out!</p>

<h3 id="improvements-for-multiple-databases"><a href="https://github.com/rails/rails/pull/34052">Improvements for multiple databases</a></h3>

<p>In <a href="https://github.com/rails/rails/pull/34052">part 4</a> of the series, Eileen adds <em>connects_to</em> and <em>connected_to</em>. Stay tuned for the next episode!<br />
 We also got multi-db support for <em>db:migrate:status</em>. I like the approach of <a href="https://github.com/rails/rails/pull/34081">making the change easy</a>, then <a href="https://github.com/rails/rails/pull/34137">making the change</a>.</p>

<h3 id="support-default-expression-and-expression-indexes-for-mysql"><a href="https://github.com/rails/rails/pull/34307">Support default expression and expression indexes for MySQL</a></h3>

<p>With the release of MySQL 8.0.13, we can now support functions and expressions as default values, and functional key parts that index expression values rather than column or column prefix values.</p>

<h3 id="add-guides-section-on-verbose-query-logs"><a href="https://github.com/rails/rails/pull/34257">Add guides section on verbose query logs</a></h3>

<p>Why spend time tracking down which line of your code is triggering a database query when Active Record can just tell you? Well you might do just that if you don’t know about the <em>verbose_query_logs</em> option. Luckily we now have a section in our guides describing the option in detail.</p>

<h3 id="document-deep_interpolation-parameter-for-bulk-lookups"><a href="https://github.com/rails/rails/pull/34309">Document deep_interpolation parameter for bulk lookups</a></h3>

<p>This is a fun option I didn’t know existed. There is something mildly foreboding about the name <em>deep_interpolation</em>, I think. Anyway, our I18n guide now documents it.</p>

<h3 id="show-allocations--for-template-and-partial-rendering"><a href="https://github.com/rails/rails/pull/34136">Show allocations  for template and partial rendering</a></h3>

<table>
  <tbody>
    <tr>
      <td>_Completed 200 OK in 858ms (Views: 848.4ms</td>
      <td>ActiveRecord: 0.4ms</td>
      <td>_ <strong><em>Allocations: 1539564</em></strong> <em>)</em> 🙂</td>
    </tr>
  </tbody>
</table>

<h3 id="-fix-autoloading-issue-with-active-storage"><a href="https://github.com/rails/rails/pull/34253"> Fix autoloading issue with Active Storage</a></h3>

<p>This brave soul wandered into <em>dependencies.rb</em> and made it to the other side. Bravo!</p>

<h3 id="preparing-rails-for-winter"><a href="https://github.com/rails/rails/pull/32031">Preparing Rails for winter</a></h3>

<p>As the weather gets colder here in New York, I am glad I don’t need to be reminded of how freezing I am whenever I look through the Rails codebase.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20181001-20181031">77 people</a> contributed to Rails since our last issue. There are also 77 partitions for the number 12. Spooky coincidence? I think so.</p>

<p>Check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-10-01%7D...@%7B2018-10-31%7D">full list of changes</a>.  If you are interested in contributing, we have plenty of <a href="https://github.com/rails/rails/issues">open issues</a>. I hope to see your name on the list next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/10/3/introducing-action-text-for-rails-6/" rel="bookmark">Introducing Action Text for Rails 6</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dhh</span></span>,
              <span class="published" title="2018-10-03 00:00:00 +0000">October 3, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><a href="https://github.com/rails/actiontext">Action Text</a> is a brand new framework coming to Rails 6 that’s going to make creating, editing, and displaying rich text content in your applications super easy. It’s an integration between <a href="https://trix-editor.org">the Trix editor</a>, Active Storage-backed file and image processing, and a text-processing flow that ties it all together. With Action Text, you really shouldn’t ever have to impoverish your users with a vanilla textarea ever again!</p>

<p>Rails 6 is still a long ways off – we’re hoping to start the beta process in early 2019 – but Action Text is already in pretty decent shape. Yes, this is an alpha preview, and we haven’t even merged it into <a href="http://github.com/rails/rails/">rails/rails</a> yet, but it’s a release that’s been extracted from the code we’ve been using to power rich text editing in <a href="https://basecamp.com">Basecamp 3</a> for several years now.</p>

<p>The Trix editor itself just turned 1.0, and is the product of endless craftwork by Sam Stephenson and Javan Makhmali. Both of whom also worked on Action Text to extract our Basecamp wrapping into this reusable package.</p>

<p>As part of this introduction, I’ve recorded <a href="https://youtu.be/HJZ9TnKrt7Q">a brief video showing how Action Text works</a> with a sample application. Do check it out, and if you’re interested, now is a great time to get involved helping to shape a major new framework in Rails.</p>

<p>Rails 6 really is shaping up to be a major release. Besides Action Text, we’ve been cooking several other new frameworks in Basecamp 3 that we hope to extract. On top of all the wonderful work coming from others in the community, like <a href="https://speakerdeck.com/eileencodes/railsconf-2018-the-future-of-rails-6-scalable-by-default">the multi-db and parallel testing extractions</a> that the team at GitHub are responsible for. This is a great time to be in Rails!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/9/30/this-week-in-rails-multi-env-credentials-support-action-cable-channel-unit-testing-and-more/" rel="bookmark">Multi env credentials support, Action Cable channel unit testing and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2018-09-30 00:00:00 +0000">September 30, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> from Pune, India bringing you the latest news from the Rails world.</p>

<h3 id="multi-environment-support-for-credentials"><a href="https://github.com/rails/rails/pull/33521">Multi environment support for credentials</a></h3>

<p>Now it is possible to have credentials for each environment. If the file for current environment exists it will take precedence over <strong><em>config/credentials.yml.enc.</em></strong> For eg. production environment looks for<br />
<strong><em>config/credentials/production.yml.enc</em></strong> first.</p>

<h3 id="support-for-unit-testing-action-cable-channels"><a href="https://github.com/rails/rails/pull/33969">Support for unit testing Action Cable channels</a></h3>

<p>This change introduced <strong><em>ActionCable::Channel::TestCase</em></strong>  which provides an ability to unit test channel classes.</p>

<h3 id="raise-error-when-using-recyclable-cache-keys-using-a-store-which-does-not-support-it"><a href="https://github.com/rails/rails/pull/33932">Raise error when using recyclable cache keys using a store which does not support it</a></h3>

<p>Some cache stores do not support recyclable cache keys. This can lead to generating the cache entries which never invalidate.</p>

<p>This change adds a check to ensure that if recyclable cache keys are being used then the cache store needs to show that it supports this versioning scheme. </p>

<h3 id="improvements-to-migration-paths-of-multiple-databases"><a href="https://github.com/rails/rails/pull/33994">Improvements to migration paths of multiple databases</a></h3>

<p>This change adds an option to specify the migrations paths while generating the models.</p>

<p><strong><em>bin/rails g model Room capacity:integer –migrations-paths=db/kingston_migrate</em></strong></p>

<p>Additionally, a <a href="https://github.com/rails/rails/pull/34021">shortcut database option</a> is added which uses the database configuration for the current environment.</p>

<h3 id="eagerly-define-attribute-methods-in-production"><a href="https://github.com/rails/rails/pull/33959">Eagerly define attribute methods in production</a></h3>

<p>The attribute methods for a model are currently defined lazily the first time that model is instantiated, even when <strong><em>config.eager_load</em></strong> is true.</p>

<p>Now they are defined while the app is booted to save the database round trip costs. There is related discussion and a pull request to do this change <a href="https://github.com/rails/rails/pull/33985">only when schema cache exists</a>.</p>

<h3 id="ignore-psqlrc-files-when-executing-psql-commands-within-rails"><a href="https://github.com/rails/rails/pull/33906">Ignore psqlrc files when executing psql commands within Rails</a></h3>

<p><strong><em>.psqlrc</em></strong> files can affect the execution of commands that can hold up execution by blocking or cause side effects.</p>

<p>Rails ignores it now by using <strong><em>-X</em></strong> option.</p>

<p>It is also <a href="https://github.com/rails/rails/pull/34001/">ignored while loading structure.sql</a> file for PostgreSQL databases by Rails.</p>

<h3 id="add-a-way-to-check-for-subset-of-arguments-when-performing-jobs"><a href="https://github.com/rails/rails/pull/33995">Add a way to check for subset of arguments when performing jobs</a></h3>

<p>The arguments need to match exactly what the job get passed when calling <strong>assert_performed_with</strong> / <strong>assert_enqueued_with</strong>. </p>

<p>This change makes it possible to only check if a subset of arguments were passed to the job. Handy when you have too many arguments for the job.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20180916-20180930">50 people</a> contributed to Rails over the past two weeks. Check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-09-16%7D...@%7B2018-09-30%7D">full list of changes</a>. If you are interested in helping out, we have plenty of <a href="https://github.com/rails/rails/issues">open issues</a>. I hope to see your name on the list next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/9/16/this-week-in-rails-performance-improvements-configuration-options-and-more/" rel="bookmark">Performance improvements, configuration options, and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2018-09-16 00:00:00 +0000">September 16, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Greetings! <a href="https://twitter.com/dodecadaniel">Daniel</a> here, reporting from Brooklyn, NY.</p>

<h3 id="use-faster-globs-for-template-resolving"><a href="https://github.com/rails/rails/pull/33860">Use faster globs for template resolving</a></h3>

<p>Resolving templates used to get pretty slow as the number of view paths, handlers, and formats increased. Replacing 1682 system calls with 14 sounds pretty great to me!</p>

<h3 id="do-less-work-and-use-less-memory"><a href="https://github.com/rails/rails/pull/33821">Do less work and use less memory</a></h3>

<p><a href="https://github.com/rails/rails/pull/33821">2.4% faster</a>, <a href="https://github.com/rails/rails/pull/33817">1.7% faster</a>, <a href="https://github.com/rails/rails/pull/33805">1.58% faster</a>. Many thanks to Richard for working hard so our applications don’t need to!</p>

<h3 id="improve-performance-of-integermultiple_of"><a href="https://github.com/rails/rails/pull/33854">Improve performance of Integer#multiple_of?</a></h3>

<p>With a few clever tweaks, it has never been easier to find out if 4611686018427387903 is a multiple of 42.</p>

<h3 id="default-to-utf8mb4-for-mysql"><a href="https://github.com/rails/rails/pull/33608">Default to utf8mb4 for MySQL</a></h3>

<p>The previous default character set did not support supplemental characters like emoji. The 4-Byte utf8mb4 has you covered. 👍 </p>

<h3 id="introduce-model-level-configuration-for-filtering-sensitive-attributes"><a href="https://github.com/rails/rails/pull/33756">Introduce model-level configuration for filtering sensitive attributes</a></h3>

<p>Nobody wants sensitive data to show up in logs. The new <em>filter_attributes</em> setting allows you to filter out sensitive attributes when calling a model’s <em>inspect</em> method.</p>

<h3 id="introduce-configurable-prefix-for-active-storage-routes"><a href="https://github.com/rails/rails/pull/33883">Introduce configurable prefix for Active Storage routes</a></h3>

<p>By default the Active Storage routes begin with <br />
<em>/rails/active_storage</em>. If that doesn’t suit you, you can now use any scope you like by setting <em>config.active_storage.routes_prefix</em> in your application config.</p>

<h3 id="include-an-id-in-action-cables-redis-configuration"><a href="https://github.com/rails/rails/pull/33798">Include an id in Action Cable’s Redis configuration</a></h3>

<p>Action Cable now passes an id to Redis, which can help you distinguish between Action Cable’s connection and any other connections you might have.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20180902-20180915">44 people</a> contributed to Rails over the past two weeks. Check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-09-02%7D...@%7B2018-09-15%7D">full list of changes</a>. If you are interested in helping out, we have plenty of <a href="https://github.com/rails/rails/issues">open issues</a>. I hope to see your name on the list next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/9/2/this-week-in-rails-read-replica-database-configurations-faster-parameter-filtering-and-more/" rel="bookmark">Read replica database configurations, faster parameter filtering, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">eugeneius</span></span>,
              <span class="published" title="2018-09-02 00:00:00 +0000">September 2, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/eugeneius">Eugene</a>, bringing you the highlights from the last week of activity in the <a href="https://github.com/rails/rails">Rails codebase</a>.</p>

<h3 id="add-hooks-to-active-job-on-retries-and-discards"><a href="https://github.com/rails/rails/pull/33751">Add hooks to Active Job on retries and discards</a></h3>

<p>Your application can now subscribe to be notified whenever a job is retried or discarded. Neat!</p>

<h3 id="support-read-replica-database-configurations"><a href="https://github.com/rails/rails/pull/33770">Support read replica database configurations</a></h3>

<p>Database configurations can now be flagged as “replicas”, indicating that the database they connect to is read-only.</p>

<p>For now this just means they’re ignored by database tasks like <code class="language-plaintext highlighter-rouge">db:create</code>, but the comments on the pull request mention some other features that could be built on top of this change.</p>

<h3 id="reduce-allocations-during-parameter-filtering"><a href="https://github.com/rails/rails/pull/33758">Reduce allocations during parameter filtering</a></h3>

<p>Initially this patch looked like a micro-optimisation, but the author produced a benchmark which demonstrated saving 1% of both memory and time on a real world Rails app.</p>

<h3 id="find-inverse-associations-with-plural-names"><a href="https://github.com/rails/rails/pull/33729">Find inverse associations with plural names</a></h3>

<p>Previously, inverse associations would only be detected when they matched the model name exactly. Now, the case where they use the plural form of the model name will work too.</p>

<h3 id="clear-mutation-tracker-after-yielding-in-around-callbacks"><a href="https://github.com/rails/rails/pull/33689">Clear mutation tracker after yielding in around callbacks</a></h3>

<p>This change ensures that a record’s view of the database is up to date immediately after an around callback yields, just as it would be in an after callback.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20180826-20180901">21 people</a> contributed to Rails this week; feel free to check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-08-25%7D...@%7B2018-09-01%7D">full list of changes</a>. If you want help out, maybe look for an interesting <a href="https://github.com/rails/rails/issues">open issue</a>?</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/8/26/this-week-in-rails-action-cable-testing-utilities-bugfixes-and-more/" rel="bookmark">Action Cable testing utilities, bugfixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2018-08-26 00:00:00 +0000">August 26, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy Sunday! This is <a href="https://twitter.com/gregmolnar">Greg</a> bringing you the latest news about Rails.</p>

<h3 id="the-initializers-rake-task-is-moved-to-railscommand"><a href="https://github.com/rails/rails/pull/33631">The initializers Rake task is moved to Rails::Command</a></h3>

<p>Another Rake task is moved to Rails::Command, so in Rails 6 you will need to call <em>bin/rails initializers</em> instead of <em>bin/rake initializers.</em></p>

<h3 id="improve-active-job-test-helpers"><a href="https://github.com/rails/rails/pull/33635">Improve Active Job test helpers</a></h3>

<p>This change adds a <em>queue</em> option to <em>perform_enqueued_jobs</em>, and if it is set, only the specified <em>queue</em> will be performed.</p>

<h3 id="fix-rails-routes--c-"><a href="https://github.com/rails/rails/pull/33662">Fix <code class="language-plaintext highlighter-rouge">rails routes -c</code> </a></h3>

<p>This PR fixes the issue of <em>rails routes -c UserPermissionsController</em> did not output routes for the corresponding controller, because its name consists of multiple words. </p>

<h3 id="action-cable-testing"><a href="https://github.com/rails/rails/pull/33659">Action Cable testing</a></h3>

<p>This PR is basically a merge of the <em>actioncable-testing</em> gem into Rails, to provide testing utilities for Action Cable.</p>

<h3 id="fail-more-gracefully-from-active-storage-missing-file-exceptions"><a href="https://github.com/rails/rails/pull/33666">Fail more gracefully from Active Storage missing file exceptions</a></h3>

<p>This PR translates service-specific missing object exceptions into one generic <em>ActiveStorage::FileNotFoundError,</em> so the application can fail more gracefully when a missing file is accessed.</p>

<h3 id="omit-begincommit-statements-for-empty-transactions"><a href="https://github.com/rails/rails/pull/32647">Omit BEGIN/COMMIT statements for empty transactions</a></h3>

<p>With this change, if a transaction is opened and closed without any queries being run, the BEGIN and COMMIT statements are omitted to remove the overhead, and make workarounds like <em>save if changed?</em> unnecessary.</p>

<h3 id="support-multiple-submit-buttons-in-active-storage-forms"><a href="https://github.com/rails/rails/pull/33413">Support multiple submit buttons in Active Storage forms</a></h3>

<p>Often times forms have more than one submit button enabling different actions, but before this change, Active Storage used the first submit button of the form, rather than the one the user actually clicked.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20180818-20180825">28 people</a> contributed to Rails this week. If you also want help out, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>!
Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/8/18/this-week-in-rails-cookies-with-purpose-array-extract-and-more/" rel="bookmark">Cookies with purpose, Array extract! and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2018-08-18 00:00:00 +0000">August 18, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Welcome in this week news edition from Rails world. This is <a href="https://twitter.com/morgoth85">Wojtek</a> bringing you summary of latest activities.</p>

<h3 id="once-webpacker-is-the-default-in-railsmaster-well-be-unveiling-the-alpha-version-of-a-brand-new-exciting-framework-for-rails-60-"><a href="https://twitter.com/dhh/status/1028355448808792064">Once Webpacker is the default in rails/master, we’ll be unveiling the alpha version of a brand-new exciting framework for Rails 6.0 😄.</a></h3>

<p>If you can’t wait, help us testing Webpacker integration so it can be <a href="https://github.com/rails/rails/pull/33079">merged</a> and mystery revealed.</p>

<h3 id="add-purpose-metadata-to-cookies"><a href="https://github.com/rails/rails/pull/32937">Add Purpose Metadata to Cookies</a></h3>

<p>Adds <em>purpose</em> metadata to cookies so that the value of one cookie cannot be copied and used as the value of another cookie.</p>

<h3 id="add-arrayextract-"><a href="https://github.com/rails/rails/pull/33137">Add Array#extract! </a></h3>

<p>The method removes and returns the elements for which the block returns a true value.</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>numbers = [1, 2, 3, 4]
odd_numbers = numbers.extract!(&amp;:odd?) # =&gt; [1, 3]
numbers # =&gt; [2, 4]
</code></pre></div></div>

<h3 id="replace-rake-devcache-with-rails-command"><a href="https://github.com/rails/rails/pull/33559">Replace rake dev:cache with Rails command</a></h3>

<p>Rake task is now deprecated in favor of “<em>rails dev:cache”</em></p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20180812-20180818">24 people</a> contributed to Rails this week. You can see all the changes <a href="https://github.com/rails/rails/compare/master@%7B2018-8-12%7D...master@%7B2018-08-18%7D">here</a>.<br />
Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/8/11/this-week-in-rails-rails-5-2-1-skip-caching-nil-entries-and-more/" rel="bookmark">Rails 5.2.1, skip caching nil entries and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2018-08-11 00:00:00 +0000">August 11, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Namaste everyone! This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> bringing you the latest news from the Rails world with some rain and chai from Pune.</p>

<h3 id="rails-521-is-out-in-the-wild"><a href="https://weblog.rubyonrails.org/2018/8/7/Rails-5-2-1-has-been-released/">Rails 5.2.1 is out in the wild</a></h3>

<p>Rails 5.2.1 is <a href="https://weblog.rubyonrails.org/2018/8/7/Rails-5-2-1-has-been-released/">released</a>. Give it a try and check out all the awesome features.</p>

<h3 id="better-error-handling-of-active-storage-adapters"><a href="https://github.com/rails/rails/pull/33540">Better error handling of Active Storage adapters</a></h3>

<p>Now, the Active Storage service adapter names can be lower case or upper case. Also, a nice error message is printed if the service adapter class can’t be loaded.</p>

<h3 id="support-for-skipping-caching-of-nil-entries"><a href="https://github.com/rails/rails/pull/25437">Support for skipping caching of nil entries</a></h3>

<p>While caching data from external services, sometimes we may get <em>nil</em> values. Most probably we don’t want to cache them. Here is an option <em>skip_nil: true/false</em> to skip caching of such entries.</p>

<h3 id="fix-the-issue-of-build-not-getting-called-on-extension-for-has_many-association"><a href="https://github.com/rails/rails/pull/33454">Fix the issue of build not getting called on extension for has_many association</a></h3>

<p>Earlier, the extended <em>build</em> method was not called properly for the <em>has_many</em> association which was being accepted by using <em>accepts_nested_attributes_for</em>.</p>

<p>This issue is fixed now.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20180805-20180811">19 people</a> contributed to Rails this week. Four of them contributed for the first time! Do you also want to join them? There might be some <a href="https://github.com/rails/rails/issues">open issues</a> you can try tackling?</p>

<p>See all the changes  from last week <a href="https://github.com/rails/rails/compare/master@%7B2018-8-5%7D...master@%7B2018-08-11%7D">here</a> and stay tuned for next week. 👋</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/8/4/this-week-in-rails-rails-5-2-1-rc1-faster-parallel-testing-and-more/" rel="bookmark">Rails 5.2.1.rc1, faster parallel testing and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2018-08-04 00:00:00 +0000">August 4, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a>, with the latest news about Ruby on Rails!</p>

<h3 id="help-test-rails-521rc1"><a href="https://weblog.rubyonrails.org/2018/7/30/Rails-5-2-1-rc1-has-been-released/">Help test Rails 5.2.1.rc1</a></h3>

<p>Help us test this release candidate to have a solid and stable <code class="language-plaintext highlighter-rouge">5.2.1</code>.</p>

<h3 id="faster-parallel-testing"><a href="https://github.com/rails/rails/pull/33479">Faster parallel testing</a></h3>

<p>Instead of running database migrations for each set of tests, Rails will load the schema to improve performance.</p>

<h3 id="raises-exception-when-respond_to-is-called-multiple-times"><a href="https://github.com/rails/rails/pull/33446">Raises exception when <code class="language-plaintext highlighter-rouge">respond_to</code> is called multiple times</a></h3>

<p>An exception will be raised when <code class="language-plaintext highlighter-rouge">respond_to</code> is called multiple times in an incompatible way. For example, when the <code class="language-plaintext highlighter-rouge">Content-Type</code> values do not match.</p>

<h3 id="set-a-default-content-type-for-the-method-head"><a href="https://github.com/rails/rails/pull/28937">Set a default <code class="language-plaintext highlighter-rouge">Content-Type</code> for the method head</a></h3>

<p>The method <code class="language-plaintext highlighter-rouge">head</code> will have <code class="language-plaintext highlighter-rouge">Content-Type</code> as <code class="language-plaintext highlighter-rouge">text/html</code> when one is not provided.</p>

<h3 id="fix-the-ip-address-logged-by-rails"><a href="https://github.com/rails/rails/pull/33489">Fix the IP address logged by Rails</a></h3>

<p>It will now log the remote IP address of clients behind a proxy instead of the IP of the proxy itself.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20180729-20180804">23 people</a> contributed to Rails this week. You can see all the changes <a href="https://github.com/rails/rails/compare/master@%7B2018-07-29%7D...@%7B2018-08-04%7D">here</a>. There might be some <a href="https://github.com/rails/rails/issues">open issues</a> you can try tackling?</p>

<p>Stay tuned!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/7/29/this-week-in-rails-better-instrumentation-enhanced-postgres-helpers-and-more/" rel="bookmark">Better instrumentation, enhanced Postgres helpers and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kirshatrov</span></span>,
              <span class="published" title="2018-07-29 00:00:00 +0000">July 29, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello from London! The heatwave is finally over and we can get back to 🌧. This is <a href="https://twitter.com/kirshatrov">Kir</a>, bringing you the latest Rails updates.</p>

<h3 id="add-cpu-time-idle-time-and-allocations-features-to-log-subscriber-events"><a href="https://github.com/rails/rails/pull/33449">Add cpu time, idle time, and allocations features to log subscriber events</a></h3>

<p>The change makes it much easier to instrument CPU time and object allocations with <em>ActiveSupport::Notifications</em> events.</p>

<h3 id="prefer-rails-command-over-binrails"><a href="https://github.com/rails/rails/pull/33229">Prefer rails command over bin/rails</a></h3>

<p>In some files we recommended using <em>rails</em>, in others <em>bin/rails</em>. The inconsistency is now fixed <a href="https://emojipedia.org/party-popper/">🎉</a></p>

<p>Why prefer <em>rails</em> as the recommended executable? It does all the heavy lifting of dispatching to the app appropriate Rails version, so that’s why users don’t need to target <em>bin/rails</em> manually.</p>

<h3 id="postgresql-10-new-relkind-for-partitioned-tables"><a href="https://github.com/rails/rails/pull/31336">PostgreSQL 10 new relkind for partitioned tables</a></h3>

<p>The PR brings support for Postgres’ partitioned tables to <em>create_table</em> helper.</p>

<h3 id="add-strict-argument-checking-to-active-record-callbacks"><a href="https://github.com/rails/rails/pull/30919">Add strict argument checking to Active Record callbacks</a></h3>

<p>Callbacks like <em>before_save</em> will now raise when they receive unsupported arguments.</p>

<p><a href="https://contributors.rubyonrails.org/contributors/in-time-window/20180721-20180729">26 people</a> contributed to Rails this week. You can see all the changes <a href="https://github.com/rails/rails/compare/master@%7B2018-07-21%7D...@%7B2018-07-29%7D">here</a>. There might be some <a href="https://github.com/rails/rails/issues">open issues</a> you can try tackling?</p>

<p>Stay tuned!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/7/13/this-week-in-rails-attaching-files-on-save-rails-notes-and-more/" rel="bookmark">Attaching files on save, Rails notes and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2018-07-13 00:00:00 +0000">July 13, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello Ruby fans. This is <a href="https://twitter.com/morgoth85">Wojtek</a> bringing you latest news from World Cup fields.<br />
I mean Ruby on Rails codebase…</p>

<h3 id="support-readonly-option-in-sqlite3"><a href="https://github.com/rails/rails/pull/33242">Support readonly option in SQLite3</a></h3>

<p>To ensure no modifications are allowed on SQLite3 database you can now pass “readonly” option.</p>

<h3 id="support-_html-suffix-for-array-in-translations"><a href="https://github.com/rails/rails/pull/32361">Support “_html” suffix for array in translations</a></h3>

<p>Now in HTML safe translation key, you can use array of values that will not be escaped in the view.</p>

<h3 id="change-rails-notes-to-use-rails-command"><a href="https://github.com/rails/rails/pull/33220">Change “rails notes” to use Rails command</a></h3>

<p>Previously it was using Rake task under the hood. Now it’s a pure command. Old “rails notes ANNOTATION=custom” becomes “rails notes –annotations custom”. Old syntax will continue to work outputting a deprecation message.</p>

<h3 id="store-newly-uploaded-files-on-save-rather-than-assignment"><a href="https://github.com/rails/rails/pull/33303">Store newly-uploaded files on save rather than assignment</a></h3>

<p>Active Storage will now store attachables assigned to a record after the record is saved rather than immediately. This will help in supporting validations before persisting the file.</p>

<h3 id="allow-to-explicitly-specify-whether-to-output-railss-log-to-stdout-"><a href="https://github.com/rails/rails/pull/28266">Allow to explicitly specify whether to output Rails’s log to stdout </a></h3>

<p>New option “–log-to-stdout” was added to “rails server” command. Enabled by default in development when not daemonized (as it was before).</p>

<p><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180701-20180713">25 people</a> contributed to Rails this past 2 weeks when not watching World Cup. You can see all the changes <a href="https://github.com/rails/rails/compare/master@%7B2018-07-01%7D...@%7B2018-07-15%7D">here</a>.</p>

<p>Let’s wish ourselves a great final game on Sunday. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/7/1/this-week-in-rails-redis-cache-store-expiry-faster-record-instantation-and-more/" rel="bookmark">Redis cache store expiry, faster record instantation and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2018-07-01 00:00:00 +0000">July 1, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey there, detective! Here’s <a href="https://twitter.com/kaspth">Kasper</a> fumbling through his own trenchcoat for his notebook to give you what went down on the <a href="https://github.com/rails/rails/">Rails codebase</a> this week.</p>

<h3 id="redis-cache-store-incrementdecrement-expiry"><a href="https://github.com/rails/rails/pull/33254">Redis cache store: increment/decrement expiry</a></h3>

<p>If you’ve been looking to expire a key, either when incrementing or decrementing it, with Rails 5.2s Redis cache store. Just pass _expires_in _to make the key sleep with the fishes.</p>

<h3 id="guides-digging-almost-too-deep"><a href="https://github.com/rails/rails/pull/33244">Guides digging almost too deep</a></h3>

<p>The Rails guides are vast and deep. There’s so many that the digging deeper section almost dug its own grave. But splitting out into another section is a saving grace. Why not look through <a href="http://guides.rubyonrails.org">the current guides</a>?</p>

<h3 id="has_secure_password-takes-an-attribute"><a href="https://github.com/rails/rails/pull/26764">has_secure_password takes an attribute</a></h3>

<p>For many years <em>has_secure_password</em> only allowed a default <em>password</em> attribute. But now you can stash whatever you want in there.</p>

<h3 id="reduce-record-instantiation-allocations"><a href="https://github.com/rails/rails/pull/33223">Reduce record instantiation allocations</a></h3>

<p>Instantiating a list of Active Record objects is now faster and allocates less. If the array has the same instances that is. It’s made possible by not looking up the same STI column each time through the loop. </p>

<h3 id="os-x-ditched-for-macos"><a href="https://github.com/rails/rails/commit/96d2c228e31e5fe9b3159c5c52051c589d3c384f">OS X ditched for macOS</a></h3>

<p>In lighter documentation news the old Mac OS X spelling has been replaced by macOS where applicable.</p>

<h3 id="multiple-exceptions-for-retry_ondiscard_on"><a href="https://github.com/rails/rails/commit/3110caecbebdad7300daaf26bfdff39efda99e25">Multiple exceptions for retry_on/discard_on</a></h3>

<p>Rails 5.1s syntactic sugar for <em>retry_job</em>, <em>retry_on</em> and <em>discard_on</em> that is, only took one exception so you’d have to duplicate exception blocks or spread a retry on multiple lines. No longer! Get your high in a single line of sugar.</p>

<p><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180624-20180701">20 people</a> contributed to Rails this past week. There might be some <a href="https://github.com/rails/rails/issues">open issues</a> you can try tackling?</p>

<p>See you next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/6/23/this-week-in-rails-custom-year-names-plus-improvements-and-bug-fixes/" rel="bookmark">Custom year names, plus improvements and bug fixes</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2018-06-23 00:00:00 +0000">June 23, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, this is Claudio with a quick recap of what changed this week in the <a href="https://github.com/rails/rails/">source code of Ruby on Rails</a>.</p>

<h3 id="add-year_format-option-to-date_select-tag"><a href="https://github.com/rails/rails/pull/32190">Add <code class="language-plaintext highlighter-rouge">year_format</code> option to date_select tag</a></h3>

<p>In Japan, 2000 A.D. is Heisei 12 in Wareki. Other countries like Israel and Thailand also have their own calendars.</p>

<p><em>date_select</em> now takes a lambda option <em>year_format</em> that can be used to customize year names, e.g.: <em>year_format: -&gt;year { “Heisei #{year - 1988}”</em>.</p>

<h3 id="support-more-http-cache-controls"><a href="https://github.com/rails/rails/pull/33134">Support more HTTP cache controls</a></h3>

<p>Add support for the <em>stale-while-revalidate</em> and <em>stale-if-error</em> extensions to the <em>Cache-Control</em> response header. Supporting them will make it easier to utilize reverse proxies and CDNs from Rails without resorting to hacks.</p>

<h3 id="reduce-memory-allocation-when-using-pluck"><a href="https://github.com/rails/rails/pull/33074">Reduce Memory Allocation when using <code class="language-plaintext highlighter-rouge">pluck</code></a></h3>

<p>This PR optimises <em>ActiveRecord::Result#cast_values</em> to avoid creating temporary arrays, reducing the number of objects allocated to 1 per row retrieved. <br />
Benchmark show that the new version is up to 1.5x faster.</p>

<h3 id="permit-configuring-the-default-service-url-expiry"><a href="https://github.com/rails/rails/commit/b21f50d8ae36d9b50b673579e17bccbe55363b34">Permit configuring the default service URL expiry</a></h3>

<p>You can now specify the default expiry of URLs generated by Active Storage by setting <em>config.active_storage.service_urls_expire_in</em>. The default is 5 minutes.</p>

<h3 id="fix-touch-to-behave-consistently"><a href="https://github.com/rails/rails/pull/33107">Fix <code class="language-plaintext highlighter-rouge">touch</code> to behave consistently</a></h3>

<p>The <em>touch</em> option recently added to <em>increment!</em> in Active Record was not updating update_at/on attributes when passed attribute names. The behavior has now been fixed.</p>

<h3 id="fix-result-of-transform_values-in-acparameters"><a href="https://github.com/rails/rails/pull/33076">Fix result of transform_values in AC::Parameters</a></h3>

<p>This method (and <em>transform_values!</em>) was not consistently returning an instance of ActionController::Parameters. This PR (from a first-time contributor!) fixes it.</p>

<p>18 people contributed to Rails this past week, including 2 first-time contributors. Check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>!</p>

<p>Among other news, a <a href="https://blog.heroku.com/rails-asset-pipeline-vulnerability">security vulnerability</a> was disclosed this week so update Sprockets to the latest version if you haven’t yet.</p>

<p>Oh, and my <a href="https://www.youtube.com/watch?v=-_w4uqoVSpw">talk about Active Storage</a> at RailsConf 2018 is finally on YouTube. 🤗 Have a great weekend!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/6/16/this-week-in-rails-faster-record-deletion-customized-error-messages-bug-fixes-and-more/" rel="bookmark">Faster record deletion, customized error messages, bug fixes, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dodecadaniel</span></span>,
              <span class="published" title="2018-06-16 00:00:00 +0000">June 16, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Greetings, all! This is <a href="https://twitter.com/dodecadaniel">Daniel</a>, with the latest news about Ruby on Rails.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180610-20180616">This Week’s Contributors</a></h3>

<p>14 people contributed to Rails this past week, including 4 first-time contributors. Many thanks to all!</p>

<p>Are you looking to get involved? Check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>!</p>

<h3 id="faster-dependent-destroying"><a href="https://github.com/rails/rails/pull/29939">Faster dependent destroying</a></h3>

<p>Has GDPR got you deleting users and all their “likes”? The <code class="language-plaintext highlighter-rouge">dependent: destroy</code> option has been updated to use a linear algorithm, rather than a quadratic one. I like that!</p>

<h3 id="allow-suffixing-store-attributes"><a href="https://github.com/rails/rails/pull/29373">Allow suffixing store attributes</a></h3>

<p>Back in March we added the option to use prefixes for your store attributes. Well now you can use suffixes as well. Say goodbye to clashing method names!</p>

<h3 id="flexible-error-message-customization"><a href="https://github.com/rails/rails/pull/32956">Flexible error message customization</a></h3>

<p>Ever find yourself wanting to override the default Active Model error message format for a particular model or attribute, rather than for the whole language? Well now you can!</p>

<h3 id="eager-loading-in-development"><a href="https://github.com/rails/rails/pull/33118">Eager loading in development</a></h3>

<p>In Rails 5.1 and 5.2 setting <code class="language-plaintext highlighter-rouge">config.eager_load = true</code> in development could cause the server to lock up. As I’m sure you could guess, we were eager to get this merged.</p>

<h3 id="fix-round-trip-problem-with-params"><a href="https://github.com/rails/rails/pull/33093">Fix round trip problem with params</a></h3>

<p>Parsing nested params is not easy, but your controller tests may depend on it. Luckily we were able to handle it with Rack and a little bit of tender love.</p>

<p>But wait, there’s more! If you are eager for more Ruby on Rails news, check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-06-10%7D...@%7B2018-06-16%7D">full list of commits from the past week</a>. Otherwise, see you next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/6/9/this-week-in-rails-improvements-bug-fixes-and-more/" rel="bookmark">Improvements, bug fixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2018-06-09 00:00:00 +0000">June 9, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/gregmolnar">Greg</a>, with the latest news about Ruby on Rails!</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180602-20180608">This Week’s Contributors</a></h3>

<p>13 awesome people contributed to Rails this past week!<br />
If you’d like to be included here, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="raise-exception-when-column-is-already-defined"><a href="https://github.com/rails/rails/pull/33029">Raise exception when column is already defined</a></h3>

<p>With this change, migrations will raise an exception when defining an already defined column.</p>

<h3 id="align-timezoneat-method-signature-with-that-of-timeat"><a href="https://github.com/rails/rails/pull/33020">Align Time.zone.at method signature with that of Time::at</a></h3>

<p><em>ActiveSupport::TimeZone#at</em> now accepts an optional second argument, containing (fractional) microseconds, just like Ruby’s <em>Time::at</em> does.</p>

<h3 id="avoid-allocating-column-names-where-possible"><a href="https://github.com/rails/rails/pull/33051">Avoid allocating column names where possible</a></h3>

<p>When requesting columns names from database adapters, <em>ActiveRecord:Result</em> used to dup/freeze column names. This change prefers using <em>fstrings,</em> which cuts down on repeat allocations.</p>

<h3 id="parent-record-should-not-get-saved-with-duplicate-children-records"><a href="https://github.com/rails/rails/pull/32952">Parent record should not get saved with duplicate children records</a></h3>

<p>Before this fix a duplicated child relations validation error didn’t propagate to the parent record, but now it is all fixed.</p>

<p>As always, there were many more changes to the Rails codebase than we can cover here - if you’re interested, you can check out <a href="https://github.com/rails/rails/compare/master@%7B2018-06-02%7D...@%7B2018-06-08%7D">the full listing of commits from this past weeks</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/5/27/this-week-in-rails-enumerable-index_with-transaction-fixes-and-more/" rel="bookmark">Enumerable#index_with, transaction fixes, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">eugeneius</span></span>,
              <span class="published" title="2018-05-27 00:00:00 +0000">May 27, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/eugeneius">Eugene</a>, with a roundup of the last two weeks of activity in the Rails world. Let’s get started!</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180513-20180526">This Week’s Contributors</a></h3>

<p>In the last two weeks, Rails saw contributions from 29 people, including 10 first-time contributors. Thank you all!</p>

<p>If you’d like to be included here, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="add-enumerableindex_with"><a href="https://github.com/rails/rails/pull/32523">Add <code class="language-plaintext highlighter-rouge">Enumerable#index_with</code></a></h3>

<p>This new method converts an enumerable to a hash, where the keys are the enumerable’s elements and the values are determined by the provided block or argument.</p>

<h3 id="action-mailer-now-eager-loads-the-mail-gem"><a href="https://github.com/rails/rails/pull/32808">Action Mailer now eager loads the mail gem</a></h3>

<p>Loading the mail gem during boot avoids burdening the first request with the responsibility, and conveniently sidesteps a deadlock that the author encountered in their application.</p>

<h3 id="allow-range-and-rangecover-on-range"><a href="https://github.com/rails/rails/pull/32938">Allow <code class="language-plaintext highlighter-rouge">Range#===</code> and <code class="language-plaintext highlighter-rouge">Range#cover?</code> on <code class="language-plaintext highlighter-rouge">Range</code></a></h3>

<p>Active Support extends <code class="language-plaintext highlighter-rouge">Range#===</code> to match other ranges, but a change to the native Ruby implementation broke it. This patch ensures that the behaviour will work on Ruby 2.6, and also adds it to <code class="language-plaintext highlighter-rouge">Range#cover?</code> for good measure.</p>

<h3 id="speed-up-xor_byte_strings-by-70"><a href="https://github.com/rails/rails/pull/32931">Speed up <code class="language-plaintext highlighter-rouge">xor_byte_strings</code> by 70%</a></h3>

<p>The benchmark included with this performance patch shows that it saves a cool 5 microseconds whenever Rails generates a CSRF token. 🐎</p>

<h3 id="roll-back-parent-transaction-when-children-fail-to-save"><a href="https://github.com/rails/rails/pull/32796">Roll back parent transaction when children fail to save</a></h3>

<p>If a record’s associations contains valid but unsaveable data, it will now correctly fail to save and roll back its transaction.</p>

<h3 id="finalize-transaction-record-state-after-real-transaction"><a href="https://github.com/rails/rails/pull/32911">Finalize transaction record state after real transaction</a></h3>

<p>When a record was saved multiple times in the same transaction, its previous state wasn’t always immediately restored if the transaction was later rolled back.</p>

<h3 id="disable-foreign-keys-during-alter_table-for-sqlite3-adapter"><a href="https://github.com/rails/rails/pull/32865">Disable foreign keys during <code class="language-plaintext highlighter-rouge">alter_table</code> for SQLite3 adapter</a></h3>

<p>Tables that are referenced by foreign keys can now be successfully altered when using the SQLite3 adapter.</p>

<p>In related news, <a href="https://github.com/rails/rails/pull/32923">Rails 6.0 will require a minimum SQLite version of 3.8.0</a>.</p>

<p>As always, there were many more changes to the Rails codebase than we can cover here - if you’re interested, you can check out <a href="https://github.com/rails/rails/compare/master@%7B2018-05-13%7D...@%7B2018-05-26%7D">the full listing of commits from the last two weeks</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/5/12/this-week-in-rails-google-cloud-storage-streaming-downloads-performance-improvements-and-more/" rel="bookmark">Google Cloud Storage streaming downloads, performance improvements and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2018-05-12 00:00:00 +0000">May 12, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing you the latest news from the Rails world. I will cover the highlights from the last two weeks. Let’s get started!</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180428-20180512">This Week’s Contributors</a></h3>

<p>39 people contributed to Rails in the last two weeks, including 9 for the first time! A big thank you to all of you!</p>

<p>If you’d like to see yourself on that board, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>, or get involved in the <a href="https://groups.google.com/d/forum/rubyonrails-core">core discussion list</a>.</p>

<h3 id="support-streaming-downloads-from-google-cloud-storage"><a href="https://github.com/rails/rails/pull/32788">Support streaming downloads from Google Cloud Storage</a></h3>

<p>Active Storage now supports streaming downloads from Google Cloud Storage. You will need version <code class="language-plaintext highlighter-rouge">1.11</code> or greater of the gem <code class="language-plaintext highlighter-rouge">google-cloud-storage</code>.</p>

<h3 id="add-option-identify-to-activestorageblob"><a href="https://github.com/rails/rails/pull/32833">Add option <code class="language-plaintext highlighter-rouge">identify</code> to ActiveStorage::Blob</a></h3>

<p>This allows control over the content type identification performed by Active Storage. For instance, if <code class="language-plaintext highlighter-rouge">identify</code> is <code class="language-plaintext highlighter-rouge">false</code>, then you can provide your own <code class="language-plaintext highlighter-rouge">content_type</code> value.</p>

<h3 id="improve-the-performance-of-activesupportinflectorordinal"><a href="https://github.com/rails/rails/commit/0c54fc460e52d2b9aa02e1e27a090dbe7ee98829">Improve the performance of <code class="language-plaintext highlighter-rouge">ActiveSupport::Inflector.ordinal</code></a></h3>

<p>Big performance improvement for ordinal generation! The power of benchmarks-oriented solutions.</p>

<h3 id="use-did_you_mean-for-spelling-suggestions"><a href="https://github.com/rails/rails/pull/32289">Use <code class="language-plaintext highlighter-rouge">did_you_mean</code> for spelling suggestions</a></h3>

<p>Now that Rails requires Ruby <code class="language-plaintext highlighter-rouge">2.3</code> or greater, Rails will use the gem <code class="language-plaintext highlighter-rouge">did_you_mean</code> for spelling suggestions. The gem is shipped with Ruby, and automatically required when the Ruby process starts.</p>

<h3 id="fix-logic-on-disabling-commit-callbacks"><a href="https://github.com/rails/rails/pull/32807">Fix logic on disabling commit callbacks</a></h3>

<p>Callbacks were being called unexpectedly when errors occur due to a small issue with precedence of logical operators.</p>

<h3 id="reset-content_length-between-test-requests"><a href="https://github.com/rails/rails/pull/32773">Reset <code class="language-plaintext highlighter-rouge">CONTENT_LENGTH</code> between test requests</a></h3>

<p>If a <code class="language-plaintext highlighter-rouge">POST</code> request was followed by a <code class="language-plaintext highlighter-rouge">GET</code> request in a controller test, then the <code class="language-plaintext highlighter-rouge">rack.input</code> and <code class="language-plaintext highlighter-rouge">RAW_POST_DATA</code> headers from the first request would be reset but the <code class="language-plaintext highlighter-rouge">CONTENT_LENGTH</code> header would leak to the second request.</p>

<p>As always there were many more changes to the Rails codebase than we can cover here. But you can read all about them <a href="https://github.com/rails/rails/compare/master@%7B2018-04-28%7D...@%7B2018-05-12%7D">here</a>! Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/4/29/this-week-in-rails-arel-merged-to-active-record-faster-image-processing-and-more/" rel="bookmark">Arel merged to Active Record, faster image processing and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kirshatrov</span></span>,
              <span class="published" title="2018-04-29 00:00:00 +0000">April 29, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello 🌧 from London! This is <a href="http://twitter.com/kirshatrov">Kir</a>, bringing you the latest Rails updates in this episode of the newsletter.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180421-20180427">This Week’s Contributors</a></h3>

<p>28 people contributed to Rails in the last week, including 3 for the first time! A big thank you to all of you!</p>

<p>If you’d like to see yourself on that board, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>, or get involved in the <a href="https://groups.google.com/d/forum/rubyonrails-core">core discussion list</a>.</p>

<h3 id="use-imageprocessing-gem-for-active-storage-variants"><a href="https://github.com/rails/rails/pull/32471">Use ImageProcessing gem for Active Storage variants</a></h3>

<p>ImageProcessing gem provides a wrapper around MiniMagic and ruby-vips, allowing you to change backends on the fly and benefit from libvips being up to 10x faster than ImageMagick.</p>

<h3 id="update-rails_welcomepng-to-reflect-a-more-diverse-population"><a href="https://github.com/rails/rails/pull/32735">Update ‘rails_welcome.png’ to reflect a more diverse population</a></h3>

<p>The Getting Started picture that you can see in new Rails apps was updated with a more diverse population.</p>

<h3 id="support-active-storage-attachment-in-presence-validator"><a href="https://github.com/rails/rails/pull/31956">Support Active Storage attachment in presence validator</a></h3>

<p><code class="language-plaintext highlighter-rouge">assert_presence_of</code> now works with ActiveStorage attachments.</p>

<h3 id="merge-arel-to-active-record"><a href="https://github.com/rails/rails/pull/32097">Merge Arel to Active Record</a></h3>

<p>To simplify release management, Arel library hosted in rails/arel has been merged to ActiveRecord, and is now located in rails/rails.</p>

<p>As always there were many more changes to the Rails codebase than we can cover here. But you can read all about them <a href="https://github.com/rails/rails/compare/master@%7B2018-04-21%7D...@%7B2018-04-27%7D">here</a>! Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/4/22/this-week-in-rails-railsconf-2018-edition/" rel="bookmark">RailsConf 2018 Edition</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2018-04-22 00:00:00 +0000">April 22, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello 🌨 from Pittsburgh! RailsConf was amazing: more than a thousand attendees showing that Rails is more alive and welcoming than ever.</p>

<p>All the presentations will be available on YouTube in about a month. For now, you can take a sneak peek by browsing the slide decks: from <a href="https://speakerdeck.com/eileencodes/railsconf-2018-the-future-of-rails-6-scalable-by-default">Rails 6</a> to <a href="https://speakerdeck.com/claudiob/active-storage">Active Storage</a>, from <a href="https://speakerdeck.com/derekprior/up-and-down-again-a-migrations-tale">Migrations</a> to <a href="https://speakerdeck.com/tmikeschu/stop-testing-start-storytelling-railsconf-2018">Testing</a>, from <a href="https://speakerdeck.com/jnraine/ten-years-of-rails-upgrades">Upgrades</a> to <a href="https://speakerdeck.com/saarons/api-how-lendinghome-approaches-legacy-technologies">API</a>, from <a href="https://speakerdeck.com/vaidehijoshi/re-graphing-the-mental-model-of-the-rails-router-1">Router</a> to <a href="https://speakerdeck.com/dinahshi/your-first-contribution-and-beyond">Contributing</a>, from <a href="https://speakerdeck.com/qrush/the-graphql-way-a-new-path-for-json-apis">GraphQL</a> to <a href="https://speakerdeck.com/a_matsuda/turbo-boosting-real-world-applications">Performance</a>, from <a href="https://speakerdeck.com/justinweiss/building-a-collaborative-text-editor">Collaboration</a> to <a href="https://speakerdeck.com/lauramosher/harry-the-hedgehog-learns-you-a-communication">Communication</a>, from <a href="https://speakerdeck.com/stellacotton/so-youve-got-yourself-a-kafka-event-powered-rails-services">Kafka</a> to <a href="https://speakerdeck.com/genslein/postgres-10-performance-and-you">PostgreSQL</a>, from <a href="https://speakerdeck.com/tegon/warden-the-building-block-behind-devise">Warden</a> to <a href="https://speakerdeck.com/palkan/railsconf-2018-access-denied-the-missing-guide-to-authorization-in-rails">Authorization</a>, from <a href="https://speakerdeck.com/michaelherold/whats-in-a-price-how-to-price-your-products-and-services">Economy</a> to <a href="https://speakerdeck.com/wonderwoman13/draw-a-crowd-the-contextual-camouflage-story">Art</a>, from <a href="https://speakerdeck.com/rofreg/the-doctor-is-in-using-checkups-to-find-bugs-in-production">Bugs</a> to <a href="https://speakerdeck.com/presidentbeef/the-evolution-of-rails-security">Security</a>, from <a href="https://speakerdeck.com/dazuma/containerizing-rails-techniques-pitfalls-and-best-practices">Containers</a> to <a href="https://speakerdeck.com/xdite/blitzbuilding-product-with-rails">Crypto</a>, from <a href="https://speakerdeck.com/toomuchpete/the-code-free-developer-interview">Interviews</a> to <a href="https://speakerdeck.com/geoffreylitt/ruby-a-family-history-railsconf-2018">History</a>, from <a href="https://speakerdeck.com/sinthetix/leveling-up-a-heroic-team">Teams</a> to <a href="https://speakerdeck.com/awood45/broken-apis-break-trust-tips-for-creating-and-updating-apis">Trust</a>, from <a href="https://speakerdeck.com/edouardchin/upgrading-rails-at-scale-railsconf-2018">Shopify</a> to <a href="https://speakerdeck.com/talsafran/github-and-rails-10-years-together">GitHub</a>, from <a href="https://speakerdeck.com/lazyatom/heres-to-the-crazy-ones">Engines</a> to <a href="https://speakerdeck.com/andrewglass1/human-powered-rails-automated-crowdsourcing-in-your-rails-app">Crowdsourcing</a>, from <a href="https://speakerdeck.com/olivierlacan/the-life-and-death-of-a-rails-app">Mortality</a> to <a href="https://speakerdeck.com/erniemiller/stating-the-obvious">Life</a>, there was really something for everyone!</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180414-20180420">This Week’s Contributors</a></h3>

<p>37 people contributed to Rails in the last week, including 9 for the first time! A big thank you to all of you!</p>

<p>If you’d like to see yourself on that board, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>, or get involved in the <a href="https://groups.google.com/d/forum/rubyonrails-core">core discussion list</a>.</p>

<h3 id="inclusive-language-in-documentation-examples"><a href="https://github.com/rails/rails/pull/32582">Inclusive Language in Documentation Examples</a></h3>

<p>A couple of changes to make the docs more inclusive of trans and non-binary individuals. Hurray! 💗🌈🏳️‍🌈</p>

<h3 id="add-the-nonce-true-option-for-javascript_include_tag-helper"><a href="https://github.com/rails/rails/pull/32607">Add the <code class="language-plaintext highlighter-rouge">nonce: true</code> option for <code class="language-plaintext highlighter-rouge">javascript_include_tag</code> helper</a></h3>

<p>Works the same way as <em>javascript_tag nonce: true</em> to support automatic nonce generation for Content Security Policy.</p>

<h3 id="improve-performance-of-translation-helper"><a href="https://github.com/rails/rails/pull/32326">Improve performance of translation helper</a></h3>

<p>A PR that is worth reading to learn how to benchmark a possible performance improvement using the right tools.</p>

<h3 id="dont-pass-splat-keyword-arguments-as-a-single-hash"><a href="https://github.com/rails/rails/pull/32612">Don’t pass splat keyword arguments as a single Hash</a></h3>

<p>Looking ahead at Ruby 2.6, which will raise a warning when a method is called with <em>(*args)</em>. Declaring the arguments makes for more readable code.</p>

<h3 id="fix-exception-in-astimezoneall-when-any-tzinfo-data-is-missing"><a href="https://github.com/rails/rails/pull/32613">Fix exception in AS::Timezone.all when any tzinfo data is missing</a></h3>

<p>Time zones change every year, even <a href="https://www.iana.org/time-zones">multiple times a year</a>. <em>ActiveSupport::Timezone.all</em> won’t raise an error even when a time zone is missing from TZInfo.</p>

<h3 id="output-only-one-nonce-in-csp-header-per-request"><a href="https://github.com/rails/rails/pull/32602">Output only one nonce in CSP header per request</a></h3>

<p>Nonces from old requests were saved, causing the header to grow infinitely after every request.</p>

<h3 id="avoid-blocking-the-server-in-delete_matched"><a href="https://github.com/rails/rails/commit/ef2af628a9ec1cc4e7b6997a021dd3f85cfe4665">Avoid blocking the server in <code class="language-plaintext highlighter-rouge">#delete_matched</code></a></h3>

<p>A fix to the newly added redis-cache-store feature of Rails 5.2. Calling <em>delete_matched</em> will no longer block the Redis server.</p>

<p>Coming back home after an amazing event like RailsConf is always tough. Can’t wait to see you all next year at RailsConf 2019 in Minneapolis from April 30th to May 2nd. Hopefully it won’t snow! 🤞– <a href="http://claudiob.github.io">Claudio</a></p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/4/15/this-week-in-rails-rails-5-2-0-performance-optimizations-space-saving-compression-and-more/" rel="bookmark">Rails 5.2.0, performance optimizations, space-saving compression and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2018-04-15 00:00:00 +0000">April 15, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>And now a Rails 🌩 News Flash 🌩! (Hint: we’ve got some big news this week, if you hadn’t heard). We take you now, live, to our reporter on the scene, <a href="https://twitter.com/imtayadeway">Tim</a>, for all the latest and greatest this week.</p>

<h3 id="rails-520-is-out"><a href="http://weblog.rubyonrails.org/2018/4/9/Rails-5-2-0-final/">Rails 5.2.0 is out!</a></h3>

<p>5.2.0 is officially among us, a little bit ahead of <a href="http://railsconf.com/">RailsConf</a> this year. If you can’t wait until then to find out everything that this new release brings, do go read the original <a href="http://weblog.rubyonrails.org/2018/4/9/Rails-5-2-0-final/">blog post</a> that accompanied the release for all the details!</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180401-20180413">This Week’s Contributors</a></h3>

<p>48 people contributed to Rails in the last two weeks, including an incredible 11 for the first time! A big thank you to all of you!</p>

<p>If you’d like to see yourself on that board, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>, or get involved in the <a href="https://groups.google.com/d/forum/rubyonrails-core">core discussion list</a>.</p>

<h3 id="api-controliers-now-get-a-set-of-default-headers"><a href="https://github.com/rails/rails/pull/32484">API controlIers now get a set of default headers</a></h3>

<p>Though you may not need all these headers, there are specific instances where you may want them to enhance security, so it makes sense to have this configured on by default.</p>

<h3 id="an-optimization-for-the-query-cache-middleware"><a href="https://github.com/rails/rails/pull/32414">An optimization for the Query Cache middleware</a></h3>

<p>This nice little optimization eliminated some array allocations, that you may benefit from if you have a large number of connection pools.</p>

<h3 id="avoid-generating-full-changes-hash-on-every-save"><a href="https://github.com/rails/rails/pull/32497">Avoid generating full changes hash on every save</a></h3>

<p>By asking the mutation tracker for the list of changed attributes, some work can be skipped when generating the changes hash. This may be most noticeable for serialized attributes, for which calling <code class="language-plaintext highlighter-rouge">#original_value</code> can be significantly more expensive.</p>

<h3 id="fix-activesupportcache-compression"><a href="https://github.com/rails/rails/pull/32539">Fix ActiveSupport::Cache compression</a></h3>

<p>A regression was found whereby compressed items in the cache store were taking up more space than their original, uncompressed versions. That is now fixed thanks to the great detective work shown in this PR!</p>

<p>As always there were many more changes to the Rails codebase than we can cover here. But you can read all about them <a href="https://github.com/rails/rails/compare/master@%7B2018-04-01%7D...@%7B2018-04-13%7D">here</a>! Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/3/31/this-week-in-rails-new-rails-bug-fix-releases-closer-to-multi-dbs-and-more/" rel="bookmark">New Rails bug fix releases, closer to multi dbs and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2018-03-31 00:00:00 +0000">March 31, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey there, esteemed readers of Rails’ public repo tea leaves. It’s <a href="https://twitter.com/kaspth">Kasper</a> bringing you the latest hot cup to steel transcendence from.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180324-20180331">This Week’s Contributors</a></h3>

<p>Here goes a hey-o to the 16 contributors this week! You can make the list no doubt, try finding an <a href="https://github.com/rails/rails/issues">open issue</a>.</p>

<h3 id="rails-507-and-516-are-out"><a href="http://weblog.rubyonrails.org/2018/3/29/Rails-5-0-7-and-5-1-6-have-been-released/">Rails 5.0.7 and 5.1.6 are out</a></h3>

<p>New bug fix releases are out, so you can upgrade your apps today.</p>

<h3 id="easy-multi-databases-basic-rake-tasks"><a href="https://github.com/rails/rails/pull/32274">Easy Multi databases: basic rake tasks</a></h3>

<p>For applications with multiple databases you always had to create your own rake tasks. No more! One of the stepping stones for Rails 6.0 to have multi db support out of the box is in.</p>

<h3 id="compare-dates-with-before-and-after"><a href="https://github.com/rails/rails/pull/32185">Compare dates with before? and after?</a></h3>

<p>To compare two dates and/or times we’d use the standard &lt; and &gt; operators. Now date arithmetic is a little easier with <em>today.before?(tomorrow)</em> and <em>today.after?(yesterday)</em>. Thus joining <em>today.between?(yesterday, tomorrow)</em>. Your app now has no excuse not to show up on time!</p>

<h3 id="allow-prefixing-store-attributes"><a href="https://github.com/rails/rails/pull/32306">Allow prefixing store attributes</a></h3>

<p>In the vein of <em>delegate :name, to: :person, prefix: true</em> adding <em>person_name</em>, your store attributes now houses the same trick to squash duplicate accessors. Also sports specific prefixes to really clear the path of method name clashing.</p>

<h3 id="favor-app-wide-configforce_ssl-for-https"><a href="https://github.com/rails/rails/pull/32277">Favor app-wide config.force_ssl for HTTPS</a></h3>

<p>Rails has long had a way to incrementally force users onto HTTPS, a controller level force_ssl! Times have changed and Rails 6.0 deprecates that option in favor of the app-wide config.force_ssl so every endpoint will use HTTPS.</p>

<p>There were many more changes to Rails’ codebase, which you can check out <a href="https://github.com/rails/rails/compare/master@%7B2018-03-24%7D...@%7B2018-03-31%7D">here</a>.<br />
Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/3/24/this-week-in-rails-rails-5-2-0-rc2-aws-authentication-options-and-more/" rel="bookmark">Rails 5.2.0.RC2, AWS authentication options and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">morgoth85</span></span>,
              <span class="published" title="2018-03-24 00:00:00 +0000">March 24, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello fellow Rubyists, this is <a href="https://twitter.com/morgoth85">Wojtek</a> bringing you the polished set of latest Rails news.<br />
We do like to “polish” things here in Poland ;-)</p>

<h3 id="rails-520rc2-released"><a href="http://weblog.rubyonrails.org/2018/3/20/Rails-5-2-RC2/">Rails 5.2.0.RC2 released</a></h3>

<p>Aiming for 5.2.0 final version to be released before the RailsConf in April. Help us test it, to have a solid and stable release.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180318-20180324">This Week’s Contributors</a></h3>

<p>Big thanks to 16 people who contributed to Rails this week! If you’d like to join them, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>.</p>

<h3 id="allow-full-use-of-the-aws-s3-sdk-authentication-options"><a href="https://github.com/rails/rails/commit/c1600009b2bbb3b67db20ddb14fef34d4cfa82bc">Allow full use of the AWS S3 SDK authentication options</a></h3>

<p>It’s now possible to use environment variables and IAM roles to authenticate to AWS in Active Storage.</p>

<h3 id="support-mysql2-gem-version-05"><a href="https://github.com/rails/rails/commit/9f5477af93d18e9644903f89bce4ffde13cc376e">Support mysql2 gem version 0.5</a></h3>

<p>New version of mysql2 gem brings some bugfixes and features but also some backward incompatibilites. Check them out in <a href="https://github.com/brianmario/mysql2/releases/tag/0.5.0">changelog</a>.</p>

<h3 id="memoize-the-result-of-calculating-path-to-translation"><a href="https://github.com/rails/rails/commit/05eaa07627376626902bd7acde35406edf1bb2f2">Memoize the result of calculating path to translation</a></h3>

<p>Speeds up usage of <strong>I18n.translate</strong>. Benchmark included in the comments.</p>

<h3 id="use-ascii-8bit-paths-in-actiondispatchstatic"><a href="https://github.com/rails/rails/commit/2ef145883348e92c9e6393ece9b6967e3a5a80c7">Use ASCII-8BIT paths in ActionDispatch::Static</a></h3>

<p>Fixes encoding incompatibilites between Rack and Rails middlewares.</p>

<h3 id="remove-support-for-qu-gem-from-active-job"><a href="https://github.com/rails/rails/commit/6ef720791d6532a107f4777edfe1d708b6b9c068">Remove support for Qu gem from Active Job</a></h3>

<p>Qu gem wasn’t compatible since Rails 5.1. Development was stopped in 2014 and maintainers have confirmed its demise.</p>

<p>There were many more changes to Rails’ codebase, which you can check out <a href="https://github.com/rails/rails/compare/master@%7B2018-03-18%7D...@%7B2018-03-24%7D">here</a>.<br />
Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/3/18/this-week-in-rails-time-column-improvements-and-bugfixes/" rel="bookmark">Time column improvements and bugfixes!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2018-03-18 00:00:00 +0000">March 18, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/gregmolnar">Greg</a> bringing you the latest news from the Rails world.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180310-20180317">This Week’s Contributors</a></h3>

<p>15 people contributed to Rails this week! If you’d like to join them, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="time-column-improvements"><a href="https://github.com/rails/rails/pull/32220">Time column improvements</a></h3>

<p>This commit applies precision when assigning values to time columns, fixes issues with time columns not being normalised on SQLite and ensures that the date component from a time is stripped for MySQL and PostgreSQL.</p>

<h3 id="rediscachestore-configuration-fix"><a href="https://github.com/rails/rails/pull/32233">RedisCacheStore configuration fix</a></h3>

<p>When RedisCacheStore is initialised it  should take a redis instance but it didn’t before this patch.</p>

<h3 id="fix-multiline-expression-indexes-for-postgresql"><a href="https://github.com/rails/rails/pull/31621">Fix multiline expression indexes for postgresql</a></h3>

<p>This commit fixes an issue with Active Record’s PostgreSQL adapter when an index is defined by an expression.</p>

<p>That’s it for this week. Many more changes were introduced to Rails than were featured here, check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-03-10%7D...@%7B2018-03-17%7D">full week of commit activity</a> to learn more!</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/2/17/this-week-in-rails-rails-5-1-5-parallel-testing-and-more/" rel="bookmark">Rails 5.1.5, parallel testing and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2018-02-17 00:00:00 +0000">February 17, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing you the latest news from the Rails world.</p>

<h3 id="rails-515-released-"><a href="http://weblog.rubyonrails.org/2018/2/14/Rails-5-1-5-has-been-released/">Rails 5.1.5 released 🎉</a></h3>

<p>Release 5.1.5 is out, but you can still help the community by testing 5.2.0.rc1 to ensure it is solid.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180210-20180217">This Week’s Contributors</a></h3>

<p>26 people contributed to Rails the past week! If you’d like to join them, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="on-writing-software-well-pilot-episode"><a href="https://www.youtube.com/watch?v=H5i1gdwe1Ls">On writing software well: pilot episode</a></h3>

<p>This is first of a serie of episodes recently released by DHH. Check out the full list on <a href="https://www.youtube.com/channel/UCUkM9uMpWatT7gVWShgtKFw">YouTube</a>.</p>

<h3 id="parallel-testing"><a href="https://github.com/rails/rails/pull/31900">Parallel testing</a></h3>

<p>In Rails 6.0.0, new application will run tests in parallel by default. The number of parallel workers is customizable, and which one will have its own temporary database.
I recommend reading the awesome <a href="https://github.com/rails/rails/pull/31900#issue-167225859">pull request description</a>.
Good job!</p>

<h3 id="custom-serializers-for-active-job-arguments"><a href="https://github.com/rails/rails/pull/30941">Custom serializers for Active Job arguments</a></h3>

<p>This brings more flexibility on how arguments are passed to jobs.
Arguments can be serialized using a simple interface described <a href="https://github.com/rails/rails/pull/30941#issue-147799895">here</a>.</p>

<h3 id="add-create_or_find_by"><a href="https://github.com/rails/rails/pull/31989">Add <code class="language-plaintext highlighter-rouge">#create_or_find_by</code></a></h3>

<p>This is similar to <code class="language-plaintext highlighter-rouge">#find_or_create_by</code>, but avoids querying the table first before attempting to insert a row.
The new approach relies on unique constraints to try inserting a row first, and selecting later. This is very helpful to high throughput application that could have data changes between a <code class="language-plaintext highlighter-rouge">SELECT</code> and a <code class="language-plaintext highlighter-rouge">INSERT</code>.</p>

<h3 id="add-support-for-connection-pooling-on-redis-cache-store"><a href="https://github.com/rails/rails/pull/31866">Add support for connection pooling on Redis cache store</a></h3>

<p>This will keep the number of Redis connections under control.</p>

<p>That’s it for this week. Many more changes were introduced to Rails than were featured here, check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-02-10%7D...@%7B2018-02-17%7D">full week of commit activity</a> to learn more!</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/2/4/this-week-in-rails-rails-5-2-0-and-5-1-5-release-candidates-marshaling-performance-and-more/" rel="bookmark">Rails 5.2.0 and 5.1.5 release candidates, marshaling performance and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2018-02-04 00:00:00 +0000">February 4, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey there, news attenuated people of planet Rails! It’s your trusty prudent editor / local dimwit <a href="https://twitter.com/kaspth">Kasper</a> here with This Week in Rails. As always we both cover and cower at the highlight reel of Rails’ past week.</p>

<p>Lets slow our roll a bit to pursue what’s meaningful not merely what’s expedient!</p>

<h3 id="help-test-rails-520rc1-and-515rc1"><a href="http://weblog.rubyonrails.org/2018/1/30/Rails-5-2-RC1-Active-Storage-Redis-Cache-Store-HTTP2-Early-Hints-Credentials/">Help test Rails 5.2.0.rc1 and 5.1.5.rc1</a></h3>

<p>This week came the release candidate of the next Rails release. Bundle it, run your tests, boot a server — maybe even try it a bit in production. That’ll really help ensure 5.2.0 is solid gold.</p>

<p>If you’re not 5.2 ready yet, Rails <a href="http://weblog.rubyonrails.org/2018/2/1/Rails-5-1-5-rc1-has-been-released/">5.1.5.rc1</a> is also ready to test.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180126-20180204">This Week’s Contributors</a></h3>

<p>29 contributors crossed the tangled weave of the web this week to get their commits lobbed straight on to Rails’ master branch. That master branch, by the way, is now <a href="https://github.com/rails/rails/commit/1c383df324fdf0b68b3f54a649eb7d2a4f55bcb7">targeting Rails 6.0</a>.</p>

<h3 id="disable-csp-by-default"><a href="https://github.com/rails/rails/commit/39c4a5c40b3abde1d3dee76a3ccdd326f77f60b0">Disable CSP by default</a></h3>

<p>Rails 5.2 ships with a DSL to declare Content Security Policies. The default policy interfered with Rails’ UJS and required some extra that the team didn’t have time for to do now. So the aim is to have a default security policy in place for Rails 6.0.</p>

<h3 id="active-record-recovers-marshaling-performance"><a href="https://github.com/rails/rails/pull/31827">Active Record: recovers marshaling performance</a></h3>

<p>Loading and dumping marshaled Active Record instances is now back to the speeds they were at in Rails 4.2. Peachy keen.</p>

<h3 id="x-request-id-respects-apaches--signs"><a href="https://github.com/rails/rails/pull/31815">X-Request-Id respects Apache’s @-signs</a></h3>

<p>Apache X-Request-Id headers can contain @-signs. While I don’t wanna speak out of school, I do feel quite comfortable yelling: WHY SHOULD THEY HAVE ALL THE FUN! So now we can flaunt that ability too. don’t @ me, though.</p>

<p>That’s it for this week. Many more changes were introduced to Rails than were featured here, check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-01-26%7D...@%7B2018-02-04%7D">full week of commit activity</a> to learn more!</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/1/28/this-week-in-rails-faster-fixtures-postgresql-foreign-tables-and-more/" rel="bookmark">Faster fixtures, PostgreSQL foreign tables and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2018-01-28 00:00:00 +0000">January 28, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a>, bringing you the latest edition of This Week in Rails, covering highlights from the Rails community, as well as changes recently made to the framework. Let’s dive in!</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20180122-20180126">This Week’s Contributors</a></h3>

<p>This week there were 22 contributors to Rails including contributions from 4 first-timers. Thanks!</p>

<h3 id="multi-statement-query-for-inserting-fixtures"><a href="https://github.com/rails/rails/pull/31422">Multi-statement query for inserting fixtures</a></h3>

<p>This change constructs a single query for inserting fixtures from different tables. This change reduced the time to load around 700 fixtures from 15 seconds to 8 seconds! 🏎</p>

<h3 id="custom-handling-of-exceptions-that-are-discarded"><a href="https://github.com/rails/rails/pull/30622">Custom handling of exceptions that are discarded</a></h3>

<p>This change allows a job that is discarded to be handled by a custom handler. The <strong><em>retry_on</em></strong> already provides the ability for a custom handler and now same has been added to <strong><em>discard_on</em></strong> handler.</p>

<h3 id="support-for-postgresql-foreign-tables"><a href="https://github.com/rails/rails/pull/31549/">Support for PostgreSQL foreign tables</a></h3>

<p>With this change, it will be possible to work with models backed by foreign tables present in external PostgreSQL servers.</p>

<p>That’s it for this week. Many more changes were introduced to Rails than were featured here, check out the <a href="https://github.com/rails/rails/compare/master@%7B2018-01-22%7D...@%7B2018-01-26%7D">full week of commit activity</a> to learn more!</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2018/1/8/this-week-in-rails-happy-new-year-ruby-2-5-bugfixes-and-more/" rel="bookmark">Happy New Year! Ruby 2.5, bugfixes, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2018-01-08 00:00:00 +0000">January 8, 2018 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy New Year, Rubyists on Rails! This is <a href="https://twitter.com/imtayadeway">Tim</a> here bringing you all the latest in Rails from the Holiday and New Year period. We hope you got to unwind during this time of year (if that is your thing) and are well rested for all that 2018 has to bring. Rails, on the other hand, saw a flurry of activity including many, many bug fixes. So, without further ado…..</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20171217-20180106">This Week’s Contributors</a></h3>

<p>Since our last issue, 36 people gave the gift of Pull Request 🎁 to Rails. 6 of those contributed for the very first time! A big thank you to everyone who contributed during a time that is typically reserved for performing upgrades and fixes to extended family members’ devices.</p>

<h3 id="ruby-250-added-to-rails-ci-matrix"><a href="https://github.com/rails/rails/pull/31570">Ruby 2.5.0 added to Rails CI matrix</a></h3>

<p>Ruby 2.5.0 was released on December 25 2017, bringing many exciting changes. Rails has been confirmed to work with this new Ruby as it has been officially added to its testing matrix.</p>

<h3 id="railsconf-2018-cfp-is-now-open"><a href="https://cfp.rubycentral.org/events/railsconf2018/">RailsConf 2018 CFP is now open</a></h3>

<p>RailsConf is calling for proposals for its 2018 conference which will be held in Pittsburgh. The deadline is January 19th, so now’s the time to get that proposal in!</p>

<h3 id="add-bulk-alter-support-for-postgresql"><a href="https://github.com/rails/rails/pull/31331">Add bulk ALTER support for PostgreSQL</a></h3>

<p>Bulk ALTER support has existed for MySQL’s adapter for many years. This change adds support for the PostgreSQL adapter, meaning that multiple column changes can now be aggregated into a single statement.</p>

<h3 id="add-support-for-combined-minimagick-transformations"><a href="https://github.com/rails/rails/pull/31544">Add support for combined MiniMagick transformations</a></h3>

<p>This change added support for MiniMagick’s <a href="http://www.rubydoc.info/github/minimagick/minimagick#Combine_options">combine_options</a>, allowing Active Storage to apply changes like center-weighted cropping that combine multiple options into a single step.</p>

<h3 id="fix-infinity-value-in-postgresql-range-type"><a href="https://github.com/rails/rails/pull/31617">Fix infinity value in PostgreSQL range type</a></h3>

<p>This fixed an issue whereby an infinity value would not be serialized correctly in a PostgreSQL range type column.</p>

<h3 id="fix-foreign-key-replacement-in-inverse-association"><a href="https://github.com/rails/rails/pull/31575">Fix foreign key replacement in inverse association</a></h3>

<p>This fixes an issue where foreign keys would not get updated correctly when an object changed the target of its <code class="language-plaintext highlighter-rouge">belongs_to</code> relationship.</p>

<h3 id="force-attachment-as-content-disposition-for-some-content-types"><a href="https://github.com/rails/rails/pull/31639">Force :attachment as content disposition for some content types</a></h3>

<p>The default behavior for <code class="language-plaintext highlighter-rouge">ActiveStorage::Blob#service_url</code> is to use an <code class="language-plaintext highlighter-rouge">:inline</code> value for <code class="language-plaintext highlighter-rouge">disposition</code>. There are certain distinct content types, however, for which this does not make sense. This change identifies those cases and prevents them from inheriting this default behavior.</p>

<h3 id="fix-validation-callbacks-on-multiple-contexts"><a href="https://github.com/rails/rails/pull/31483">Fix validation callbacks on multiple contexts</a></h3>

<p>This fixed an issue where callbacks would not fire correctly when multiple contexts were passed to <code class="language-plaintext highlighter-rouge">valid?</code> , <code class="language-plaintext highlighter-rouge">save</code> , etc..</p>

<h3 id="support-added-for-multiple-encodings-in-stringblank"><a href="https://github.com/rails/rails/pull/31049">Support added for multiple encodings in String#blank?</a></h3>

<p>Previously, if you called <code class="language-plaintext highlighter-rouge">String#blank?</code> on, for example, an UTF-16LE-encoded string, it would raise an <code class="language-plaintext highlighter-rouge">Encoding::CompatibilityError</code> exception. It will now return the right thing!</p>

<h3 id="fix-assert_changes-to-always-assert-on-change"><a href="https://github.com/rails/rails/pull/31011">Fix assert_changes to always assert on change</a></h3>

<p>If you had called <code class="language-plaintext highlighter-rouge">assert_changes</code> with a <code class="language-plaintext highlighter-rouge">to</code> argument, you may have been surprised to find that it was sufficient to match only the resultant value for it to pass, even if nothing changed. This revision fixes that by failing in the event that nothing changed, as would be expected.</p>

<h3 id="consistently-raise-missingattributeerror-for-missing-attributes"><a href="https://github.com/rails/rails/pull/29018">Consistently raise MissingAttributeError for missing attributes</a></h3>

<p>Normally if you <code class="language-plaintext highlighter-rouge">select</code> a subset of a record’s attributes and then try to reference an unselected attribute, you will get a <code class="language-plaintext highlighter-rouge">MissingAttributeError</code>. However, if you then <code class="language-plaintext highlighter-rouge">save</code>‘d the record and called that same attribute, you may be surprised to get <code class="language-plaintext highlighter-rouge">nil</code> instead. This revision fixes that by always raising an error.</p>

<p>That’s it for this week! Even though this was a bumper issue, there were as always many, many more changes I wanted to talk about that I could not list. But you can check them all out <a href="https://github.com/rails/rails/compare/master@%7B2017-12-17%7D...@%7B2018-01-06%7D">here</a>! Until next time….</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/12/16/this-week-in-rails-new-security-headers-and-many-improvements/" rel="bookmark">This Week in Rails: New security headers and many improvements</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2017-12-16 00:00:00 +0000">December 16, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://github.com/kirs">Kir</a> and <a href="https://twitter.com/gregmolnar">Greg</a> bringing you the latest news from the Rails world.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20171202-20171216">This Week’s Contributors</a></h3>

<p>57 people contributed to Rails the past 2 weeks! If you’d like to join them, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="new-security-headers-added"><a href="https://github.com/rails/rails/commit/5d7b70f4336d42eabfc403e9f6efceb88b3eff44">New security headers added</a></h3>

<p><em>X-Download-Options</em> and <em>X-Permitted-Cross-Domain-Policies</em> are now in the default header list.</p>

<h3 id="fix-an-edge-case-in-rails-dbcreate"><a href="https://github.com/rails/rails/pull/31311">Fix an edge case in rails db:create</a></h3>

<p>Previously, when the schema cache was present and the database was not created yet, <em>rails db:create</em> would get a connection failure.</p>

<h3 id="streamingtemplaterenderer-failed-to-forward-i18nlocale"><a href="https://github.com/rails/rails/pull/30361">StreamingTemplateRenderer failed to forward I18n.locale</a></h3>

<p>This commit fixes an issue when you use <code class="language-plaintext highlighter-rouge">render stream: true</code> and your current locale is not forwarded to the renderer.</p>

<h3 id="quote-colum_names-when-building-select"><a href="https://github.com/rails/rails/pull/31403">Quote colum_names when building select</a></h3>

<p>This PR makes sure the column names are quoted to avoid SQL syntax errors when there is a from clause used, and there are ignored columns set.</p>

<h3 id="cleanup-variants-in-active-storage-"><a href="https://github.com/rails/rails/pull/31319">Cleanup variants in Active Storage </a></h3>

<p>Active Storage will now destroy variants together with main blob when it’s deleted.</p>

<h3 id="custom-server-in-system-tests"><a href="https://github.com/rails/rails/pull/31384">Custom server in system tests</a></h3>

<p>With this PR, Rails won’t override your custom capybara server configuration, so for example you can use Unicorn instead of Puma .</p>

<h3 id="provide-instant-feedback-when-booting"><a href="https://github.com/rails/rails/pull/31434">Provide instant feedback when booting</a></h3>

<p>From now on when you call <code class="language-plaintext highlighter-rouge">rails s</code> or <code class="language-plaintext highlighter-rouge">rails console</code> there is an instant feedback in the console to show Rails is booting.</p>

<h3 id="optimizing-information_schema-query-for-foreign_keys"><a href="https://github.com/rails/rails/pull/31425">Optimizing information_schema query for foreign_keys</a></h3>

<p>By using CONSTRAINT_SCHEMA key for information_schema.referential_constraints there are performance improvements for Active Record.</p>

<h3 id="initial-support-for-running-rails-on-fips-certified-systems"><a href="https://github.com/rails/rails/pull/31289">Initial support for running Rails on FIPS-certified systems</a></h3>

<p>This PR enables to set the hash function used by Rails from MD5 to FIPS supported ones by changing the <code class="language-plaintext highlighter-rouge">active_support.use_fips_approved_hash_function</code> configuration.</p>

<h3 id="log-the-original-call-site-for-an-active-record-query"><a href="https://github.com/rails/rails/pull/26815">Log the original call site for an Active Record query</a></h3>

<p>This change allows you to enable the logging of what line of application code is triggering SQL queries.</p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-12-02%7D...@%7B2017-12-09%7D">commits</a>. If you’d like to join them, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/12/3/this-week-in-rails-rails-5-2-beta-new-postgresql-features-preload-link-and-more/" rel="bookmark">This Week in Rails: Rails 5.2 beta, new PostgreSQL features, preload link and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2017-12-03 00:00:00 +0000">December 3, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing you the latest news from the Rails world.</p>

<h3 id="rails-520-beta-released-"><a href="http://weblog.rubyonrails.org/2017/11/27/Rails-5-2-Active-Storage-Redis-Cache-Store-HTTP2-Early-Hints-Credentials/">Rails 5.2.0 beta released 🎉</a></h3>

<p>This release includes <a href="https://github.com/rails/rails/blob/d3893ec38ec61282c2598b01a298124356d6b35a/activestorage/README.md">Active Storage</a>, a new framework provided by Rails to make it easier to upload and process files.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20171127-20171202">This Week’s Contributors</a></h3>

<p>24 people contributed to Rails the past week! If you’d like to join them, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="add-support-for-postgresql-operator-classes-to-add_index"><a href="https://github.com/rails/rails/pull/19090">Add support for PostgreSQL operator classes to <code class="language-plaintext highlighter-rouge">add_index</code></a></h3>

<p>The operator classes identify database operators to be used by the index for the columns. You can assign the same operator to all columns, or not.
It currently only supports PostgreSQL.</p>

<h3 id="add-ability-to-create-postgresql-foreign-keys-without-validation"><a href="https://github.com/rails/rails/pull/27756/">Add ability to create PostgreSQL foreign keys without validation</a></h3>

<p>Normally, PostgresSQL verifies that all rows in a table satisfy its foreign keys constraints. With this option, you can create these constraints without the overhead of checking if they are valid.</p>

<h3 id="add-preload_link_tag-helper"><a href="https://github.com/rails/rails/pull/31251">Add <code class="language-plaintext highlighter-rouge">preload_link_tag</code> helper</a></h3>

<p>The helper creates a link tag with the <a href="https://w3c.github.io/preload/"><code class="language-plaintext highlighter-rouge">preload</code></a> keyword that allows you to basically define resources that pages will need very soon after loading. In addition, Rails will send <a href="http://eileencodes.com/posts/http2-early-hints/">HTTP2 Early Hints if the proxy server supports it</a>, helping the fetch process.</p>

<h3 id="prevent-active-record-scopes-with-reserved-names"><a href="https://github.com/rails/rails/pull/31179">Prevent Active Record scopes with reserved names</a></h3>

<p>An error will be raised when defining scopes with names already defined by <code class="language-plaintext highlighter-rouge">ActiveRecord::Relation</code> instance methods.</p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-11-27%7D...@%7B2017-12-02%7D">commits</a>. If you’d like to join them, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/11/26/this-week-in-rails-expiring-counters-flush-db-connections-connection-fork-safety-and-more/" rel="bookmark">This Week in Rails: expiring counters, flush db connections, connection fork safety and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2017-11-26 00:00:00 +0000">November 26, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi! <a href="https://twitter.com/_cha1tanya">Prathamesh</a> here! Let’s see what we have in store today from the Rails world.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20171119-20171126">This Week’s Contributors</a></h3>

<p>This week we had 25 contributors. 8 of them were first time contributors!!!! 🎉</p>

<h3 id="support-expiring-counters-for-memcached-store"><a href="https://github.com/rails/rails/commit/b22ee64b5b30c6d5039c292235e10b24b1057f6d">Support expiring counters for Memcached Store</a></h3>

<p>This change adds supports for passing <strong>expires_in</strong> options to the <strong>#increment</strong> and <strong>#decrement</strong> methods of the Memcached  store.</p>

<h3 id="flush-idle-database-connections-automatically"><a href="https://github.com/rails/rails/pull/31221">Flush idle database connections automatically</a></h3>

<p>A new configuration to flush the idle database connections after a specified period. Defaults to 300 seconds. This change will ensure that you don’t have idle database connections hanging around in your connection pool.</p>

<h3 id="improve-active-record-connection-fork-safety"><a href="https://github.com/rails/rails/pull/31173">Improve Active Record connection fork safety</a></h3>

<p>This change ensures that forked children don’t send quit/shutdown/goodbye messages to the server on connections that belonged to their parent. It will prevent the <a href="https://github.com/rails/rails/pull/31173">connection leakage</a>that might happen when connections are not closed when workers are forked from parent process.</p>

<h3 id="generate-ids-by-default-for-form_with-helper"><a href="https://github.com/rails/rails/commit/d3893ec38ec61282c2598b01a298124356d6b35a">Generate ids by default for form_with helper</a></h3>

<p>When <strong>form_with</strong> was introduced the auto generation of <em>ids</em> was disabled. Labels don’t play well in such cases when the inputs don’t have ids and it also made it harder to test the forms. This change enables the auto-generation of ids by default and allows to disable it using a config.</p>

<h3 id="pass-informative-arguments-to-all-calls-of-activerecordrecordnotfound-error"><a href="https://github.com/rails/rails/pull/31184">Pass informative arguments to all calls of ActiveRecord::RecordNotFound error</a></h3>

<p><strong>ActiveRecord::RecordNotFoundError</strong> accepts arguments such as <strong>primary_key,</strong>  <strong>model_name</strong> and the arguments besides the error message. This change makes all the calls to this error uniform by passing these arguments wherever they were missing.</p>

<h3 id="make-secure_compare-method-not-leak-length-information"><a href="https://github.com/rails/rails/pull/24510/files">Make secure_compare method not leak length information</a></h3>

<p>This change makes sure that even in case of variable length strings, the <strong>ActiveSupport::SecurityUtils.secure_compare</strong> doesn’t leak the length information.</p>

<p>That’s all we’ve got for this week, but do check out the <a href="https://github.com/rails/rails/compare/master@%7B2017-11-19%7D...@%7B2017-11-26%7D">full list of changes</a> yourself. Over and out! See you next week ✌️</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/11/4/this-week-in-rails-better-source-code-formatting-improved-ajax-api-and-more/" rel="bookmark">This Week in Rails: Better Source Code Formatting, Improved Ajax API and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2017-11-04 00:00:00 +0000">November 4, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi! <a href="https://twitter.com/imtayadeway">Tim</a> here! About to bring you the latest in all things Rails….</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20171030-20171103">This Week’s Contributors</a></h3>

<p>This week we had 12 contributors, including 1 for the very first time! Huge thanks to all of you!</p>

<h3 id="make-beforesend-optional-in-railsajax"><a href="https://github.com/rails/rails/pull/31002">Make beforeSend optional in Rails.ajax</a></h3>

<p><code class="language-plaintext highlighter-rouge">Rails.ajax</code> requires a beforeSend parameter but for some this means having to supply a no-op function. It can now be omitted entirely, thanks to this enhancement!</p>

<h3 id="prevent-source-line-wrapping-in-rescue-layout"><a href="https://github.com/rails/rails/pull/31013">Prevent source line wrapping in rescue layout</a></h3>

<p>You may be used to seeing source extracts in development mode when encountering runtime errors. Long lines currently get wrapped, but this change aids readability by letting you scroll instead.</p>

<p>That’s all we’ve got for this week, but do check out the <a href="https://github.com/rails/rails/compare/master@%7B2017-10-30%7D...@%7B2017-11-03%7D">full list of changes</a> yourself. Wishing you all a Happy Friday, many Friday Hugs, and not too many Hallowe’en candy hangovers! Over and out!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/10/29/this-week-in-rails-5-1-deprecations-removed-systemtestcase-load-hook-and-more/" rel="bookmark">This Week in Rails: 5.1 deprecations removed, SystemTestCase load hook and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2017-10-29 00:00:00 +0000">October 29, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey there, it’s <a href="https://twitter.com/kaspth">Kasper</a>, bringing you the latest edition of This Week in Rails!</p>

<h3 id="remove-rails-51-deprecations-from-the-code"><a href="https://github.com/rails/rails/pull/30945">Remove Rails 5.1 deprecations from the code</a></h3>

<p>All the code that was deprecated in Rails 5.1 is now removed in one fell swoop by the Rails 5.2 release manager — now you know how these removals are handled too, so please don’t send individual removal PRs.</p>

<p>Psssst: it also brings us another step closer to the first 5.2 beta.</p>

<h3 id="add-systemtestcase-load-hook"><a href="https://github.com/rails/rails/pull/31003">Add SystemTestCase load hook</a></h3>

<p>Allows gems or app code to hook in when <br />
<em>ActionDispatch::SystemTestCase</em> has been fully loaded.</p>

<h3 id="add-allow_other_host-option-to-redirect_back"><a href="https://github.com/rails/rails/pull/30850">Add allow_other_host option to redirect_back</a></h3>

<p>When passed false, the new <em>allow_other_host</em> option will restrict <em>redirect_back</em> links to just the current host, so users will only stay on your site.</p>

<p>It’s not on by default, so users can enjoy a trip off-world on another host.</p>

<p>That’s it for this now! As always, there isn’t enough time to cover every change if you’d like check out the <a href="https://github.com/rails/rails/compare/master@%7B2017-10-21%7D...@%7B2017-10-29%7D">full list of changes</a> yourself.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/10/21/this-week-in-rails-phantomjs-replaced-with-chrome-headless-bugfixes-and-more/" rel="bookmark">This Week in Rails: PhantomJS replaced with Chrome headless, bugfixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kirshatrov</span></span>,
              <span class="published" title="2017-10-21 00:00:00 +0000">October 21, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! It’s <a href="https://twitter.com/kirshatrov">Kir</a>, bringing you a new edition of This Week in Rails!</p>

<h3 id="replace-phantomjs-with-seleniumchrome-headless"><a href="https://github.com/rails/rails/pull/30930">Replace PhantomJS with Selenium/Chrome headless</a></h3>

<p>PhantomJS has been abandoned. At the same time Chrome provides native support for headless mode that is now the recommended way.</p>

<h3 id="allow-symbol-list-for-ignored_columns"><a href="https://github.com/rails/rails/pull/30629/files">Allow symbol list for ignored_columns</a></h3>

<p>This PR fixes a bug when assigning symbols to <em>ignored_columns</em> in Active Record was ignored. Now the accessor accepts both strings and symbols.</p>

<h3 id="fix-ajax-callbacks-in-ujs"><a href="https://github.com/rails/rails/pull/29127">Fix ajax callbacks in UJS</a></h3>

<p>Previously, returning false from the <em>ajax:beforeSend</em> callback didn’t cancel the request as it was expected.</p>

<p>That’s it for this now! As always, there isn’t enough time to cover every change if you’d like check out the <a href="https://github.com/rails/rails/compare/master@%7B2017-10-14%7D...@%7B2017-10-21%7D">full list of changes</a> yourself.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/10/14/this-week-in-rails-redis-4-0-support-fixes-and-more/" rel="bookmark">This Week in Rails: Redis 4.0 support, fixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2017-10-14 00:00:00 +0000">October 14, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing you the latest news from the Rails world.</p>

<h3 id="redis-rb-40-support"><a href="https://github.com/rails/rails/pull/30748">redis-rb 4.0 support</a></h3>

<p>Adds support to Redis greater or equal to <code class="language-plaintext highlighter-rouge">3.3</code>, and less than <code class="language-plaintext highlighter-rouge">5</code>.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20171007-20171014">This Week’s Contributors</a></h3>

<p>25 people contributed to Rails the past week! If you’d like to join them, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="introduce-blob-representation-to-active-storage"><a href="https://github.com/rails/rails/pull/30868">Introduce blob representation to Active Storage</a></h3>

<p>Returns an <code class="language-plaintext highlighter-rouge">ActiveStorage::Preview</code> instance to preview a blob, or an <code class="language-plaintext highlighter-rouge">ActiveStorage::Variant</code> instance for an image.</p>

<h3 id="safer-redirect_back-method"><a href="https://github.com/rails/rails/pull/30850">Safer <code class="language-plaintext highlighter-rouge">redirect_back</code> method</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">allow_other_host</code> can now block redirects to a different host. The option is <code class="language-plaintext highlighter-rouge">true</code> by default to make it backward compatible.</p>

<h3 id="fix-active-support-cache-clean-up"><a href="https://github.com/rails/rails/pull/30789">Fix Active Support cache clean up</a></h3>

<p>Rails was using the stored keys to remove files, instead of the filenames.</p>

<h3 id="fix-active-job-to-yield-error-when-rescheduling-fails"><a href="https://github.com/rails/rails/pull/30750">Fix Active Job to yield error when rescheduling fails</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">retry_on</code> method now yields the actual error to the block instead of the exception class.</p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-10-07%7D...@%7B2017-10-14%7D">commits</a>. If you’d like to join them, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/10/8/this-week-in-rails-http-2-early-hints-friendly-error-message-and-more/" rel="bookmark">This Week in Rails: HTTP/2 Early hints, friendly error message and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2017-10-08 00:00:00 +0000">October 8, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! It’s <a href="https://twitter.com/_cha1tanya">Prathamesh</a> from Pune, enjoying rain 🌧, sipping ☕️ coffee  and bringing you latest news from the Rails world. Let’s get started!</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170930-20171006">This Week’s Contributors</a></h3>

<p>13 people contributed to Rails the past week! If you’d like to join them, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="http2-early-hints-support-for-rails"><a href="https://github.com/rails/rails/pull/30744">HTTP2 early hints support for Rails</a></h3>

<p>Early Hints is a new HTTP status code that allows your application to send links to assets that you would like to load early. The <a href="https://tools.ietf.org/html/draft-ietf-httpbis-early-hints-04">spec</a> is still in draft but Rails is ready to support it along with <a href="https://github.com/puma/puma/pull/1403">Puma</a>. Check <a href="http://eileencodes.com/posts/http2-early-hints/">this blog post</a> to know more about this feature.</p>

<h3 id="friendly-error-message-when-unsubscribing-from-non-existent-action-cable-subscription"><a href="https://github.com/rails/rails/pull/30702">Friendly error message when unsubscribing from non-existent Action Cable subscription</a></h3>

<p>If for some reason the frontend code tries to unsubscribe from a non existing Action Cable subscription, then a friendly error message will be displayed:</p>

<p><strong><em>Unable to find subscription with identifier: {“channel”:”SomeChannel”}.</em></strong></p>

<p>Earlier, it used to show:</p>

<p><strong><em>NoMethodError - undefined method `unsubscribe_from_channel’ for nil:NilClass</em></strong></p>

<p>Feel free to check out the <a href="https://github.com/rails/rails/compare/master@%7B2017-09-30%7D...@%7B2017-10-06%7D">full list of changes</a>.</p>

<p>Thanks to the 13 people contributed to Rails last week. If you’d like to join them, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>. Until next week 👋 </p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/9/29/this-week-in-rails-getting-closer-to-rails-5-2-beta/" rel="bookmark">This Week in Rails: getting closer to Rails 5.2 beta</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudio</span></span>,
              <span class="published" title="2017-09-29 00:00:00 +0000">September 29, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! It’s <a href="https://www.meetup.com/laruby">Claudio</a> from sunny Los Angeles. Step by step we are getting closer to the first beta of Rails 5.2. Check out the changes that occurred in Ra-Ra-Rails-land last week.</p>

<h3 id="rails-4210-released"><a href="http://weblog.rubyonrails.org/2017/9/27/Rails-4-2-10-released/">Rails 4.2.10 released</a></h3>

<p>Unless more regressions are found this will likely be the last release for Rails 4.2.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170923-20170929">This Week’s Contributors</a></h3>

<p>28 people contributed to Rails the past week! If you’d like to join them, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="preview-pdfs-and-videos"><a href="https://github.com/rails/rails/pull/30667">Preview PDFs and videos</a></h3>

<p>If you use Active Storage, you can now easily provide image previews for PDF files and videos!</p>

<h3 id="add-key-rotation-to-messageencryptor-and-messageverifier-and-simplify-the-cookies-middleware"><a href="https://github.com/rails/rails/pull/29716">Add Key Rotation to MessageEncryptor and MessageVerifier and simplify the Cookies middleware</a></h3>

<p>This PR introduces ActiveSupport::KeyRotator which provides an interface for easily rotating between different encryption ciphers or message digests, salts, and secrets.</p>

<h3 id="implement-change_table_comment-and-change_column_comment-for-mysql"><a href="https://github.com/rails/rails/pull/30677">Implement change_table_comment and change_column_comment for MySQL</a></h3>

<p>The two methods were only implemented for PostgreSQL.</p>

<h3 id="ensure-hwiatransform_keys-returns-hwia"><a href="https://github.com/rails/rails/pull/30728">Ensure HWIA#transform_keys returns HWIA</a></h3>

<p>Makes #transform_keys coherent with other methods of HashWithIndifferentAccess such as #transform_values, #select and #reject.</p>

<h3 id="treat-set-as-an-array-in-relationwhere"><a href="https://github.com/rails/rails/commit/9cf7e3494f">Treat Set as an Array in Relation#where</a></h3>

<p>You can now safely use Set in your Active Record query, e.g.: </p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>User.where(id: Set.new([1, 2]))
</code></pre></div></div>

<p>Feel free to check out the <a href="https://github.com/rails/rails/compare/master@%7B2017-09-23%7D...@%7B2017-09-29%7D">full list of changes</a>.</p>

<p>Thanks to the 28 people contributed to Rails last week. If you’d like to join them, check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/9/23/this-week-in-rails-new-credentials-configuration-bugfixes-and-more/" rel="bookmark">This Week in Rails: New credentials configuration, bugfixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">GregMolnar</span></span>,
              <span class="published" title="2017-09-23 00:00:00 +0000">September 23, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! It’s <a href="https://twitter.com/GregMolnar">Greg</a>, bringing you a double-edition of This Week in Rails!</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170910-20170922">This Week’s Contributors</a></h3>

<p>28 people contributed to Rails the past two weeks! If you’d like to join them, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="rails-4210rc1-released"><a href="http://weblog.rubyonrails.org/2017/9/20/Rails-4-2-10-rc1-released/">Rails 4.2.10.rc1 released</a></h3>

<p>Although Rails 4.2 is not officially supported anymore, this release fixes some regressions introduced by the previous one. If no new regressions found, the final should be released mid next week.</p>

<h3 id="introducing-configcredentialsymlenc-"><a href="https://github.com/rails/rails/pull/30067">Introducing config/credentials.yml.enc </a></h3>

<p>Rails 5.2 will introduce a new credentials configuration file to store encrypted data like API keys and the secret key base. This will eventually replace Rails.application.secrets and the encrypted secrets introduced in Rails 5.1.</p>

<h3 id="add-with_attached_-scope"><a href="https://github.com/rails/rails/pull/30629/files">Add with_attached_* scope</a></h3>

<p>To avoid N+1 queries when using Active Storage, this PR added <em>with_attached_* scope</em> to the <em>has_one_attached</em> macro.</p>

<h3 id="activerecordassociationspreloader-memoization-improvement"><a href="https://github.com/rails/rails/pull/30564">ActiveRecord::Associations::Preloader memoization improvement</a></h3>

<p>With this change the association pre-loader became slightly faster.</p>

<h3 id="implement-change_table_comment-and-change_column_comment-for-mysql"><a href="https://github.com/rails/rails/pull/30677">Implement change_table_comment and change_column_comment for MySQL</a></h3>

<p><em>change_table_comment</em> and <em>change_column_comment</em> are implemented for the MySQL adapter as well now.</p>

<h3 id="fix-active-storage-direct-upload-in-firefox"><a href="https://github.com/rails/rails/pull/30568">Fix Active Storage direct upload in Firefox</a></h3>

<p>Direct upload in Firefox was not working because it can’t handle click events on <em>input[type=submit]</em>, but this PR fixed the problem.</p>

<h3 id="capybara-puma-server-configuration-fix"><a href="https://github.com/rails/rails/pull/30638">Capybara puma server configuration fix</a></h3>

<p>This PR fixes an issue when the config/puma.rb configuration is loaded for system tests.</p>

<p>That’s it for this now! As always, there isn’t enough time to cover every change if you’d like check out the <a href="https://github.com/rails/rails/compare/master@%7B2017-09-09%7D...@%7B2017-09-22%7D">full list of changes</a> yourself.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/9/3/this-week-in-rails-engine-screenshots-method-redefinitions-and-more/" rel="bookmark">This Week in Rails: engine screenshots, method redefinitions and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2017-09-03 00:00:00 +0000">September 3, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Oh, hello there! I’m <a href="https://twitter.com/imtayadeway">Tim</a>, and if you’re reading this that means you’ve got Rails fever! It’s time for your weekly dose of This Week in Rails….</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170826-20170902">This Week’s Contributors</a></h3>

<p>This week 21 people contributed to Rails, including 4 for the first time! If you’d like to join them and perhaps get a slot in next week’s edition, why not check out the list of <a href="https://github.com/rails/rails/issues">open issues</a>?</p>

<h3 id="support-multiple-version-arguments-for-gems-in-generators"><a href="https://github.com/rails/rails/pull/30323">Support multiple version arguments for gems in generators</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">gem</code> method can now support multiple version constraints, just like in <a href="http://guides.rubygems.org/patterns/#pessimistic-version-constraint">rubygems</a>!</p>

<h3 id="make-take_failed_screenshot-work-within-engine"><a href="https://github.com/rails/rails/pull/30421">Make <code class="language-plaintext highlighter-rouge">take_failed_screenshot</code> work within engine</a></h3>

<p>This method used to get the tmp directory relative to <code class="language-plaintext highlighter-rouge">Rails.root</code>, which in an engine points to the dummy application, where no such directory exists. This was fixed by using the path relative to the current directory instead.</p>

<h3 id="clarify-intentions-around-method-redefinitions"><a href="https://github.com/rails/rails/pull/29233">Clarify intentions around method redefinitions</a></h3>

<p>This fixed a race condition in <code class="language-plaintext highlighter-rouge">class_attribute</code>, which in redefining an attribute had to remove it first and then redefine it. If another thread was trying to access that attribute in the middle of that, it would raise a <code class="language-plaintext highlighter-rouge">NameError</code>. Thankfully no more!</p>

<p>….and that’s a wrap! As always, there is never enough time or space to cover every change this week, but we value each and every one. If you’d like to know more you can check out the <a href="https://github.com/rails/rails/compare/master@%7B2017-08-27%7D...@%7B2017-09-02%7D">full list of changes</a> yourself. See you next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/8/28/this-week-in-rails-image-alt-text-gone-restart-cache-command-fixes-and-more/" rel="bookmark">Image alt text gone, restart/cache command fixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2017-08-28 00:00:00 +0000">August 28, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! <br />
This is <a href="https://www.bigbinary.com/team/vipul">Vipul</a> from Rainy Pune ☔ , cozying up with a ☕, bringing you a recap of the changes  that made it to Rails this week. <br />
If you too want to contribute to Rails, head over to the <a href="https://github.com/rails/rails/issues">issues</a> to help us out!</p>

<h3 id="do-not-generate-default-alt-text-in-image-tags"><a href="https://github.com/rails/rails/commit/9a74c7b99bf0ac901f86bb38372a68e157cf9c73">Do not generate default alt text in image tags</a></h3>

<p>Previously Rails auto-generated alt text for an image from the file name if it was not provided with an <code class="language-plaintext highlighter-rouge">image_tag</code>.
This generation could be distracting and fatiguing for screen reader users if not considered properly.</p>

<p>After this change, if authors leave images without alt text, Rails will not pre fill it anymore, leaving screen readers to prompt authors to fix the issue.</p>

<h3 id="prevent-extra-set-time-zone-in-configure_connection"><a href="https://github.com/rails/rails/pull/28413">Prevent extra “SET time zone” in configure_connection</a></h3>

<p>Previously Rails would end up setting database connection timezone twice, once if passed via configuration in <code class="language-plaintext highlighter-rouge">configure_connection</code> and secondly while setting default timezone.</p>

<p>This change removes setting timezone on database twice if timezone is already passed via configuration variables.</p>

<h3 id="add-transactiontimeout-for-mysql-error-code-1205"><a href="https://github.com/rails/rails/pull/30360">Add TransactionTimeout for MySQL error code 1205</a></h3>

<p>This PR adds TransactionTimeout error to the MySQL adapter, which handles the error: <br />
<code class="language-plaintext highlighter-rouge">Lock wait timeout exceeded; try restarting transaction (MySQL error 1205)</code></p>

<h3 id="encode-content-disposition-filenames-according-to-rfc-2231--in-active-storage-"><a href="https://github.com/rails/rails/commit/63395aba5a96cf7f915ac97c2ac1c42f58a9a850">Encode Content-Disposition filenames according to RFC 2231  in Active Storage </a></h3>

<p>Before this change, urls for files with non-english names would create issues in Active Storage.</p>

<p>This change fixes encoding <code class="language-plaintext highlighter-rouge">Content-Disposition</code> for filenames to RFC 2231, to fix this issue.</p>

<h3 id="cookie-expiry-enforced-server-side-for-signedencrypted-cookies"><a href="https://github.com/rails/rails/pull/30121">Cookie expiry enforced server-side for signed/encrypted cookies</a></h3>

<p>For signed/encrypted cookies with ``:expires` like</p>

<div class="language-ruby highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="n">cookies</span><span class="p">.</span><span class="nf">signed</span><span class="p">[</span><span class="ss">:user_name</span><span class="p">]</span> <span class="o">=</span> <span class="p">{</span> <span class="ss">value: </span><span class="s2">"bob"</span><span class="p">,</span> <span class="ss">expires: </span><span class="mi">2</span><span class="p">.</span><span class="nf">hours</span> <span class="p">}</span>
</code></pre></div></div>

<p>Rails now embeds the expiry within the written cookie payload. This way Rails isn’t reliant on clients to honor the expiry, but can verify it independently server-side.</p>

<h3 id="make-restart-and-devcache-tasks-work-when-customizing-pid-file-path"><a href="https://github.com/rails/rails/commit/2904ee23bfc1a442b801f0d35e8e49d51a6d47b6">Make <code class="language-plaintext highlighter-rouge">restart</code> and <code class="language-plaintext highlighter-rouge">dev:cache</code> tasks work when customizing pid file path</a></h3>

<p>Previously <code class="language-plaintext highlighter-rouge">rails dev:cache</code> failed to restart the Rails server when it was started with a custom pid file path. <br />
With this change, restart no longer fails for a custom pid file and successfully restarts Rails server on <code class="language-plaintext highlighter-rouge">dev:cache</code> changes.</p>

<h3 id="fix-cant-modify-frozen-string-error-in-display_image-"><a href="https://github.com/rails/rails/commit/1fe777ef778ee8de88094cef2ff85363648ade51">Fix <code class="language-plaintext highlighter-rouge">can't modify frozen String</code> error in <code class="language-plaintext highlighter-rouge">display_image</code> </a></h3>

<p>This change does a quick fix for an error with <code class="language-plaintext highlighter-rouge">display_image</code> in System tests, which is used for screenshots, that used to raise an error when trying to modify a frozen string.</p>

<h3 id="fixes-inverse_of-association-option-not-working-with-eager_loading-"><a href="https://github.com/rails/rails/commit/1a723c65bbe91ad969b67416233d20eff6d2a46a">Fixes :inverse_of association option not working with eager_loading </a></h3>

<p>Previously calling an <code class="language-plaintext highlighter-rouge">eager_load</code> on <code class="language-plaintext highlighter-rouge">:inverse_of</code> association failed.
This was a regression from Rails 5.1 release. </p>

<p>This change, fixes the regression.</p>

<p>That’s all for this week! Feel free to check the full <a href="https://github.com/rails/rails/compare/master@%7B2017-08-20%7D...@%7B2017-08-26%7D">list of commits</a> if you are interested. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/8/19/this-week-in-rails-better-docs-better-performance-better-rails/" rel="bookmark">Better docs, better performance, better Rails!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2017-08-19 00:00:00 +0000">August 19, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://www.youtube.com/watch?v=9CWjFtCbrrM">Claudio</a> with a recap of the main commits that made it into rails/rails this week. If you too want to contribute to Rails, <a href="https://github.com/rails/rails/issues/30296">this outstanding Active Record issue</a> is a great place to start.</p>

<h3 id="temporarily-point-to-a-fork-of-sdoc"><a href="https://github.com/rails/rails/pull/30199">Temporarily point to a fork of SDoc</a></h3>

<p>A work in progress to improve the documentation of Rails with a nicer theme, better SEO and faster generation time. Can you spot the difference between <a href="http://api.rubyonrails.org">the current</a> and <a href="http://edgeapi.rubyonrails.org">the future version</a>?</p>

<h3 id="minor-tweaks-in-active-storage-documentation"><a href="https://github.com/rails/rails/commit/ae87217382a4f1f2bdfcdcb8ca6d486ec96e8d6c">Minor tweaks in Active Storage documentation</a></h3>

<p>Two weeks ago, <a href="https://github.com/rails/rails/pull/30020">Active Storage made it into rails/rails</a>. This week its documentation has been improved to make it ready to ship with Rails 5.2.</p>

<h3 id="faster-and-more-readable-implementation-of-hashdeep_merge"><a href="https://github.com/rails/rails/pull/30275">Faster and more readable implementation of Hash#deep_merge</a></h3>

<p>If you want to learn how to use benchmarks to prove that a commit can improve the performance of Rails, this is a great example.</p>

<h3 id="eager-load-controller-actions-to-reduce-response-time-of-the-first-request"><a href="https://github.com/rails/rails/pull/29559">Eager-load controller actions to reduce response time of the first request</a></h3>

<p>The list of available actions for a controller is now eagerly loaded  to reduce response time of the first request and the memory footprint when running on forking server like Unicorn.</p>

<h3 id="load-parameters-configurations-on-action_controller-only-once"><a href="https://github.com/rails/rails/pull/30045">Load Parameters configurations on :action_controller only once</a></h3>

<p>This PR fixes a <a href="https://github.com/rails/rails/issues/30025">regression</a> introduced in 5.1.3 by which UnpermittedParameters were not raised as expected.</p>

<h3 id="check-scope-input-in-uniqueness-validator"><a href="https://github.com/rails/rails/pull/30214">Check :scope input in Uniqueness validator</a></h3>

<p>Without this patch, calling something like <em>validates_uniqueness_of :code, scope: [archived: false]</em> would cause <em>NoMethodError</em> with a trace into AR internals.</p>

<h3 id="add-binary-helper-method-to-fixtures"><a href="https://github.com/rails/rails/pull/30073">Add <code class="language-plaintext highlighter-rouge">binary</code> helper method to fixtures</a></h3>

<p>You can now more easily use binary data as fixtures.</p>

<h3 id="add---skip-yarn-option-to-the-plugin-generator"><a href="https://github.com/rails/rails/pull/30238">Add <code class="language-plaintext highlighter-rouge">--skip-yarn</code> option to the plugin generator</a></h3>

<p>Don’t include yarn in your engines if you don’t need it.</p>

<h3 id="allow-serialize-with-a-custom-coder-on-json-and-array-columns"><a href="https://github.com/rails/rails/pull/30229">Allow <code class="language-plaintext highlighter-rouge">serialize</code> with a custom coder on <code class="language-plaintext highlighter-rouge">json</code> and <code class="language-plaintext highlighter-rouge">array</code> columns</a></h3>

<p>Better control on how to store your data.</p>

<h3 id="bump-thor-and-blade"><a href="https://github.com/rails/rails/pull/30288">Bump <code class="language-plaintext highlighter-rouge">thor</code> and <code class="language-plaintext highlighter-rouge">blade</code></a></h3>

<p>Thor 0.20 has <a href="https://github.com/erikhuda/thor/blob/master/CHANGELOG.md#0200">new features</a> you might want to look at.</p>

<p>That’s all for this week! Feel free to check the full <a href="https://github.com/rails/rails/compare/master@%7B2017-08-13%7D...@%7B2017-08-19%7D">list of commits</a> if you are interested. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/8/15/three-new-committers/" rel="bookmark">Three new committers: George, Javan, Ryuta</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dhh</span></span>,
              <span class="published" title="2017-08-15 23:45:00 +0000">August 15, 2017 @ 11:45 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>We’re happy to announce three new members of the Rails committers team: George, Javan, and Ryuta 🎉!</p>

<ul>
  <li>
    <p><a href="https://twitter.com/georgeclaghorn">George Claghorn</a>: George has been an integral part in creating our new Active Storage framework. He wrote a substantial part of the framework itself by extracting hard-won lessons from his work at Basecamp on moving our storage to the cloud. George also managed the stand-alone rails/activestorage repository with issue and PR processing prior to its merge into the framework proper. George works at Basecamp and lives in Philadelphia.</p>
  </li>
  <li>
    <p><a href="https://twitter.com/javan">Javan Makhmali</a>: Javan has written the majority of the JavaScript needed for Action Cable and Active Storage, as well as being a significant contributor to Webpacker. He’s also the co-author of Trix and other JavaScript libraries and frameworks originating at Basecamp. Javan lives in Ann Arbor.</p>
  </li>
  <li>
    <p><a href="https://twitter.com/kamipo">Ryuta Kamizono</a>: Ryuta is a <a href="http://contributors.rubyonrails.org/contributors/ryuta-kamizono/commits">top 20 all-time Rails contributor</a> with work going back to 2013. He’s got his fingerprints all over the framework, but have in particular been helping with Active Record. Ryuta lives in Tokyo.</p>
  </li>
</ul>

<p>As a reminder, the committer team works together with the core team by assisting with pull-requests processing and making changes to the framework, but does not have the keys to make final releases or set policy. All members of the core team came up through working on this team.</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/7/30/this-week-in-rails-new-releases-bugfixes-and-more-than-30000-issues-prs/" rel="bookmark">New releases, bugfixes and more than 30000 issues/PRs!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">prathamesh</span></span>,
              <span class="published" title="2017-07-30 00:00:00 +0000">July 30, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> with the latest news from the Rails world.</p>

<h3 id="rails-513rc2-and-505rc2-released"><a href="http://weblog.rubyonrails.org/2017/7/25/Rails-5-0-5-rc2-and-5-1-3-rc2-have-been-released/">Rails 5.1.3.rc2 and 5.0.5.rc2 released</a></h3>

<p>Two new release candidates has been released this week, if there are no regressions found, the final releases are coming next week! We said it last week as well 😁</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170723-20170730">This Week’s Rails contributors!</a></h3>

<p>27 people helped to make Rails better this week with 7 of them for the first time! If you want to be one of them, checkout the <a href="https://github.com/rails/issues">issues</a> list, help is always welcomed!</p>

<h3 id="rails-crosses-30000-issuesprs-on-github"><a href="https://github.com/rails/rails/pull/30000">Rails crosses 30000 issues/PRs on GitHub</a></h3>

<p>As of this writing the count is increased to <a href="https://github.com/rails/rails/pull/30004">30004</a>. 28805 of all of these issues and PRs have been processed already! That’s pretty awesome 🎉</p>

<h3 id="let-arel-manage-the-bind-params"><a href="https://github.com/rails/rails/commit/213796fb4936dce1da2f0c097a054e1af5c25c2c">Let Arel manage the bind params</a></h3>

<p>Active Record no longer manages the bind parameters required for queries. Now Arel handles it on it’s own and returns the AST and bind params together. </p>

<h3 id="add-missing-support-for-modulo-operations-on-durations"><a href="https://github.com/rails/rails/commit/a54e13bd2e8fb4d6aa0aebe59271699a2d62567b">Add missing support for modulo operations on durations</a></h3>

<p>Rails 5.1 introduced <strong>ActiveSupport::Duration::Scalar</strong> class as a wrapper around a numeric value as a way of ensuring a duration was the outcome of an expression. However the implementation was missing support for modulo operations. This is now fixed.</p>

<h3 id="fix-division-where-the-denominator-is-duration"><a href="https://github.com/rails/rails/pull/29971">Fix division where the denominator is duration</a></h3>

<p>This fixes a regression where result of division by duration was not returning <strong>Numeric</strong> result. It is now restored to the previous behavior of Rails 5.1.1 and prior.</p>

<p>That’s all for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-07-23%7D...@%7B2017-07-30%7D">commits</a> if you are interested. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/7/22/this-week-in-rails-new-releases-bugfixes-and-more/" rel="bookmark">New releases, bugfixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2017-07-22 00:00:00 +0000">July 22, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/gregmolnar">Greg</a> with the latest news from the Rails world.</p>

<h3 id="rails-513rc1-and-505rc1-released"><a href="http://weblog.rubyonrails.org/2017/7/19/Rails-5-1-3-rc1-and-5-0-5-rc1-released/">Rails 5.1.3.rc1 and 5.0.5.rc1 released</a></h3>

<p>Two new release candidates has been released this week, if there are no regressions found, the final releases are coming next week!</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170715-20170722">This Week’s Rails contributors!</a></h3>

<p>28 people helped to make Rails better this week. If you want to be one of them, checkout the <a href="https://github.com/rails/rails/issues">issues</a> list, help is always welcomed!</p>

<h3 id="add-bootsnap-to-default-gemfile"><a href="https://github.com/rails/rails/pull/29313">Add bootsnap to default Gemfile</a></h3>

<p>The <a href="https://github.com/Shopify/bootsnap">bootsnap</a> gem helps to boot a Rails application faster, and the gem is now part of the Rails default Gemfile.</p>

<h3 id="allow-to-pass-a-connection-to-the-dbconsole-command"><a href="https://github.com/rails/rails/pull/29358">Allow to pass a connection to the <code class="language-plaintext highlighter-rouge">dbconsole</code> command</a></h3>

<p>With this change the dbconsole command can except a connection parameter, so if you are using a 3 level database connection configuration you can specify the connection you want to use.</p>

<h3 id="fix-where-with-a-custom-table-name"><a href="https://github.com/rails/rails/pull/29796">Fix <code class="language-plaintext highlighter-rouge">where</code> with a custom table name</a></h3>

<p>With this week the select clause will use the custom table name if you have a table alias set up.</p>

<h3 id="scrub-the-invalid-parameter-value-before-using-it-in-the-error"><a href="https://github.com/rails/rails/pull/29793">Scrub the invalid parameter value before using it in the error</a></h3>

<p>When Rack::Utils::InvalidParameterError is raised the exception message now scrubs the parameter value to make it possible to use it in error messages.</p>

<h3 id="make-rails-yarninstall-ignore-dev-dependencies"><a href="https://github.com/rails/rails/pull/29851">Make <code class="language-plaintext highlighter-rouge">rails yarn:install</code> ignore dev dependencies</a></h3>

<p>With this change rails yarn:install won’t install the development dependencies, so in deployment when the assets are precompiled they are ignored. bin/yarn still installs everything in your development environment.</p>

<p>That’s all for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-07-07%7D...@%7B2017-07-15%7D">commits</a> if you are interested. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/7/15/this-week-in-rails-active-storage-telling-secrets-and-time-travelling/" rel="bookmark">This Week in Rails: Active Storage, telling secrets and time travelling!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2017-07-15 00:00:00 +0000">July 15, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing you the latest news from the Rails world.</p>

<p>It’s been two weeks, so let’s begin!</p>

<h2 id="featured">Featured</h2>

<h3 id="active-storage-is-coming-to-rails-52"><a href="https://twitter.com/dhh/status/882965074767474688">Active Storage is coming to Rails 5.2</a></h3>

<p>A brand-new framework for managing user uploads is coming to Rails ecosystem.
The <a href="https://github.com/rails/activestorage#todos">TODO</a> list is full of ideas, and it’s a great opportunity to send a PR and improve the library.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170707-20170715">This Week’s Rails contributors!</a></h3>

<p>We had 24 people who helped make the Rails better this week. Two of them contributed for the first time ever! If you would like to help out, check the issues list.</p>

<h2 id="new">New</h2>

<h3 id="rails-secretsshow-will-tell-secrets"><a href="https://github.com/rails/rails/pull/29695"><code class="language-plaintext highlighter-rouge">rails secrets:show</code> will tell secrets!</a></h3>

<p>The command will the decrypt encrypted secrets and display them in your console if you have the key file.</p>

<h3 id="protect-from-forgery-by-default"><a href="https://github.com/rails/rails/pull/29742">Protect from forgery by default</a></h3>

<p>You no longer need to enable the <a href="http://guides.rubyonrails.org/security.html#cross-site-request-forgery-csrf">CSRF</a> protection when creating new apps. They will be more secure by default.</p>

<h3 id="add-time-helper-method-freeze_time"><a href="https://github.com/rails/rails/pull/29681">Add time helper method <code class="language-plaintext highlighter-rouge">freeze_time</code></a></h3>

<p>The new helper method will <code class="language-plaintext highlighter-rouge">travel_to Time.now</code> freezing time. You can call it with a block or not.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="prevent-invalid-postgresql-uuids"><a href="https://github.com/rails/rails/pull/29715">Prevent invalid PostgreSQL UUIDs</a></h3>

<p>The UUID validation was allowing mismatched curly braces.
The fix requires both a leading and a trailing curly brace, or neither.</p>

<h3 id="fix-long-action-cable-channel-names-for-postgresql"><a href="https://github.com/rails/rails/pull/29297">Fix long Action Cable channel names for PostgreSQL</a></h3>

<p>Action Cable will hash channel names with SHA-1 if they reach the limit of 63 bytes.</p>

<h2 id="improved">Improved</h2>

<h3 id="change-sqlite-3-boolean-serialization-to-use-1-and-0"><a href="https://github.com/rails/rails/pull/29699">Change SQLite 3 boolean serialization to use <code class="language-plaintext highlighter-rouge">1</code> and <code class="language-plaintext highlighter-rouge">0</code></a></h3>

<p>This change in serialization requires a migration of stored boolean data to use <code class="language-plaintext highlighter-rouge">1</code> and <code class="language-plaintext highlighter-rouge">0</code> , instead of <code class="language-plaintext highlighter-rouge">'t'</code> and <code class="language-plaintext highlighter-rouge">'f'</code>.
You can use this change by enabling the configuration:
<code class="language-plaintext highlighter-rouge">ActiveRecord::ConnectionAdapters::SQLite3Adapter.represent_boolean_as_integer = true</code></p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-07-07%7D...@%7B2017-07-15%7D">commits</a> if you are interested. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/6/24/this-week-in-rails-5-1-2-rc1-released-and-faster-fixtures/" rel="bookmark">This Week in Rails: 5.1.2.rc1 released and faster fixtures</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kirs</span></span>,
              <span class="published" title="2017-06-24 00:00:00 +0000">June 24, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! This is <a href="http://github.com/kirs">Kir</a> from chilling Ottawa, bringing you another edition of This Week in Rails. Let’s dive in.</p>

<h2 id="featured">Featured</h2>

<h3 id="-this-weeks-rails-contributors-"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170617-20170623">🎉 This Week’s Rails contributors! 🎉</a></h3>

<p>We had 21 awesome people who helped make Rails better this week, with one first-time contributor! Would you like to help as well? Head over to the 👉 <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h2 id="new">New</h2>

<h3 id="-rails-429rc2-504-and-512rc1-have-been-released-"><a href="http://weblog.rubyonrails.org/2017/6/20/Rails-5-1-2-rc1-has-been-released/">🎉 Rails 4.2.9.rc2, 5.0.4 and 5.1.2rc1 have been released 🎉</a></h3>

<p>It’s your chance to help us discover bugs in 4.2.9 and 5.1.2 release candidates. Also, Rails 4.2.9 will be the last release in 4.2 series, so it’s time to upgrade if your app is still running on Rails 4.</p>

<h2 id="perf">Perf</h2>

<h3 id="use-bulk-insert-to-insert-fixtures"><a href="https://github.com/rails/rails/pull/29504">Use bulk INSERT to insert fixtures</a></h3>

<p>Inserting fixtures in test environment became significantly faster by using one bulk INSERT query instead of many single INSERTs.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="current_page-helper-now-works-from-within-a-rails-engine"><a href="https://github.com/rails/rails/pull/29503">current_page? helper now works from within a Rails Engine</a></h3>

<p>Due a bug related to a trailing slash, <em>current_page?</em> helper always returned false while it was supposed to return true when it was called from a Rails Engine route.</p>

<h3 id="keep-inner-join-when-merging-relations"><a href="https://github.com/rails/rails/pull/27063">Keep INNER JOIN when merging relations</a></h3>

<p>Now you can safely merge two ActiveRecord relations both having a JOIN. Previously, that would to query with LEFT OUTER JOIN instead of INNER JOIN.</p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check all the <a href="https://github.com/rails/rails/compare/master@%7B2017-06-17%7D...@%7B2017-06-23%7D">commits</a> from this week.</p>

<p>Until next week! 👋👋</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/6/17/this-week-in-rails-mailer-configuration-perf-improvement-and-bug-fixes/" rel="bookmark">This Week in Rails: mailer configuration, perf improvement, and bug fixes!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">andatki</span></span>,
              <span class="published" title="2017-06-17 00:00:00 +0000">June 17, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! This is <a href="https://twitter.com/andatki">Andy</a>, bringing you another edition of This Week in Rails. Let’s dive in.</p>

<h2 id="featured">Featured</h2>

<h3 id="-this-weeks-rails-contributors-"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170610-20170616">🎉 This Week’s Rails contributors! 🎉</a></h3>

<p>We had 23 awesome people who helped make Rails better this week, with 4 first-time contributors! Would you like to help as well? Head over to the 👉 <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h2 id="new">New</h2>

<h3 id="allow-mailers-to-configure-their-delivery-job"><a href="https://github.com/rails/rails/pull/29457">Allow mailers to configure their delivery job</a></h3>

<p>In some situations, a user may want to configure the delivery job in order to have better control over errors. This adds an option to make that possible.</p>

<h2 id="perf">Perf</h2>

<h3 id="improve-performance-of-mass-assignments"><a href="https://github.com/rails/rails/pull/29447">Improve performance of mass assignments</a></h3>

<p>This change makes a small improvement to the performance of initializing an ActiveModel instance. The other interesting thing I learned about was the “magic comment” <code class="language-plaintext highlighter-rouge"># frozen_string_literal: true</code>. Check the PR for details.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="dont-map-id-to-primary-key-in-raw_write_attribute"><a href="https://github.com/rails/rails/pull/29464">Don’t map id to primary key in raw_write_attribute</a></h3>

<p>The hash provided to update_columns is turned into an UPDATE query. Passing an id key resulted in an update to the id column, even if the model uses a different primary key. This fixes that!</p>

<h2 id="docs">Docs</h2>

<h3 id="docs-for-delegate_missing_to"><a href="https://github.com/rails/rails/pull/29268">Docs for #delegate_missing_to</a></h3>

<p>A newer feature, now with documentation explaining how and when to use <code class="language-plaintext highlighter-rouge">delegate</code>, and <code class="language-plaintext highlighter-rouge">delegate_missing_to</code>.</p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check all the <a href="https://github.com/rails/rails/compare/master@%7B2017-06-11%7D...@%7B2017-06-16%7D">commits</a> from this week.</p>

<p>Until next week! 👋👋</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/6/11/this-week-in-rails-default-option-for-mattr_accessor-write_multi-and-more/" rel="bookmark">This Week in Rails: default option for mattr_accessor, write_multi and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">prathamesh</span></span>,
              <span class="published" title="2017-06-11 00:00:00 +0000">June 11, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! <a href="https://twitter.com/_cha1tanya">Prathamesh</a> here bringing you the latest news from the Rails world. Let’s get started 🚅</p>

<h2 id="featured">Featured</h2>

<h3 id="-this-weeks-rails-contributors-"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170604-20170611">🎉 This Week’s Rails contributors! 🎉</a></h3>

<p>We had 21 awesome people who helped make Rails better this week. Two of them contributed for the first time ever!
Would you like to help as well? Head over to the 👉 <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h2 id="new">New</h2>

<h3 id="-mattr_accessor-gets-the-default-option-"><a href="https://github.com/rails/rails/pull/29294">💪 mattr_accessor gets the <code class="language-plaintext highlighter-rouge">default</code> option 💪</a></h3>

<p>Followup to adding the <strong>default</strong> option to the <strong>class_attribute</strong> macro, it is now added to <strong>mattr_accessor</strong> family of methods as well.</p>

<p>It can be used as follows:</p>

<p><strong><em>mattr_accessor :always_write_cookie, default: false</em></strong></p>

<h3 id="-write-multiple-cache-entries-at-once-with-write_multi-"><a href="https://github.com/rails/rails/pull/29366">💪 Write multiple cache entries at once with write_multi 💪</a></h3>

<p>A new method <strong>write_multi</strong> has been added to the cache stores which writes multiple cache entries at once.</p>

<p>For eg.</p>

<p><strong><em>Rails.cache.write_multi foo: ‘bar’, baz: ‘qux’</em></strong> The default implementation just calls <strong>write_entry</strong> one by one for each entry but specific cache stores can override this behavior as per their ability of doing bulk writes.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="️-generate-field-ids-in-collection_check_boxes-and-collection_radio_buttons-️"><a href="https://github.com/rails/rails/pull/29412">⚡️ Generate field ids in <code class="language-plaintext highlighter-rouge">collection_check_boxes</code> and <code class="language-plaintext highlighter-rouge">collection_radio_buttons</code> ⚡️</a></h3>

<p>This change fixes an issue with collection checkboxes and radio boxes where clicking on the labels was not selecting the options because the input elements did not have proper id attribute with respect to their labels.</p>

<h3 id="-fix-partial-cache-logging-getting-attributed-to-wrong-partials-"><a href="https://github.com/rails/rails/commit/8240636beda7b2b487217be1d945eb0d36145c4d">✨ Fix partial cache logging getting attributed to wrong partials ✨</a></h3>

<p>This commit fixes an issue with the cache hit/miss log markers being applied to wrong partials.</p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check all the <a href="https://github.com/rails/rails/compare/master@%7B2017-06-04%7D...@%7B2017-06-11%7D">commits</a> from this week.</p>

<p>Until next week! 👋👋</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/6/3/this-week-in-rails-class_attribute-default-mini_racer-and-more/" rel="bookmark">This Week in Rails: class_attribute default, mini_racer and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2017-06-03 00:00:00 +0000">June 3, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing you the latest news from the Rails world.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170527-20170603">This Week’s Rails contributors!</a></h3>

<p>We had 32 people who helped make Rails better this week.
Three of them contributed for the first time ever!
If you would like to help out, check the <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h3 id="allow-a-default-value-to-be-declared-for-class_attribute"><a href="https://github.com/rails/rails/pull/29270">Allow a default value to be declared for <code class="language-plaintext highlighter-rouge">class_attribute</code></a></h3>

<p>Rails will now make it easier to set default values to class attributes like <code class="language-plaintext highlighter-rouge">class_attribute :timeout, default: 5</code></p>

<h3 id="replace-therubyracer-with-mini_racer"><a href="https://github.com/rails/rails/pull/29285">Replace therubyracer with mini_racer</a></h3>

<p>New apps generated with JavaScript and Sprockets support will use <code class="language-plaintext highlighter-rouge">mini_racer</code> for the Ruby platform. A faster and more reliable interpreter.</p>

<h2 id="new">New</h2>

<h3 id="add-previous-and-next-day-of-week-api-to-active-support"><a href="https://github.com/rails/rails/pull/26600">Add previous and next day of week API to Active Support</a></h3>

<p>The methods <code class="language-plaintext highlighter-rouge">prev_occurring</code> and <code class="language-plaintext highlighter-rouge">next_occurring</code> expect a day of the week and return the appropriate value based on the <code class="language-plaintext highlighter-rouge">DateTime</code>, e.g. <code class="language-plaintext highlighter-rouge">DateTime.now.prev_occurring(:monday)</code>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-number_to_human-round-calculation"><a href="https://github.com/rails/rails/pull/26628">Fix <code class="language-plaintext highlighter-rouge">number_to_human</code> round calculation</a></h3>

<p>This fix a regression introduced in Rails 5, where a case like <code class="language-plaintext highlighter-rouge">number_to_human(1_000_000, units: { unit: 'meter', thousand: 'kilometer' })</code> would return <code class="language-plaintext highlighter-rouge">"1"</code> instead of <code class="language-plaintext highlighter-rouge">"1000 kilometer"</code>.</p>

<h3 id="fix-pluralization-of-uncountable-expressions-when-given-a-locale"><a href="https://github.com/rails/rails/commit/7c45146b15e682de11251180eaa4e75ac50e07cd">Fix pluralization of uncountable expressions when given a locale</a></h3>

<p>Previously, methods like <code class="language-plaintext highlighter-rouge">pluralize</code> and <code class="language-plaintext highlighter-rouge">singularize</code> would only use the English uncountable rules rather then the ones for the locale that was passed.</p>

<h3 id="rename-primary-key-index-from-rename_table"><a href="https://github.com/rails/rails/pull/29248">Rename primary key index from <code class="language-plaintext highlighter-rouge">rename_table</code></a></h3>

<p>Formerly, <code class="language-plaintext highlighter-rouge">rename_table</code> would only rename primary key index if the column’s data type was sequential. Tables with primary keys with types like UUID would still keep the old name.</p>

<h2 id="improved">Improved</h2>

<h3 id="allow-additional-options-for-poltergeist-or-capybara-webkit-in-system-tests"><a href="https://github.com/rails/rails/pull/29315">Allow additional options for poltergeist or capybara-webkit in System Tests</a></h3>

<p>If using <code class="language-plaintext highlighter-rouge">poltergeist</code> or <code class="language-plaintext highlighter-rouge">capybara-webkit</code>, <code class="language-plaintext highlighter-rouge">driven_by</code> will register it as the driver and set additional options passed via <code class="language-plaintext highlighter-rouge">:options</code> param.</p>

<p>Please refer to drivers documentation to learn what options can be passed.</p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-05-27%7D...@%7B2017-06-03%7D">commits</a> if you are interested.
Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/5/28/this-week-in-rails-as-currentattributes-aead-and-more/" rel="bookmark">This Week in Rails: ActiveSupport::CurrentAttributes, AEAD and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2017-05-28 00:00:00 +0000">May 28, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there!</p>

<p>This is <a href="https://www.bigbinary.com/team/vipul">Vipul</a> bringing you all the latest news about Rails from the hopefully ending <a href="https://weather.com/weather/today/l/Pune+India+INXX0102:1:IN">summer</a> here in <a href="https://www.wikiwand.com/en/Pune">Pune</a>🔥</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170520-20170527">This Week’s Rails contributors!</a></h3>

<p>We had 36 people who helped make Rails better this week. <br />
Six of them contributed for the first time ever! <br />
If you would like to help out, check the <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h2 id="new">New</h2>

<h3 id="activesupportcurrentattributes-provides-a-thread-isolated-attributes-singleton"><a href="https://github.com/rails/rails/commit/24a864437e845febe91e3646ca008e8dc7f76b56">ActiveSupport::CurrentAttributes provides a thread-isolated attributes singleton</a></h3>

<p>If you’ve used <em>current_user</em> from <em>Devise,</em> you’ve already come across what <em>CurrentAttributes</em> partly provides, but wait there’s more!</p>

<p>Using <em>CurrentAttributes</em> you can start using per request variables that are accessible across the whole system like Models, Controllers, Views, during a Rails request cycle.</p>

<p>For example you can start using attributes like current_user, account, etc, and much more that your system might need without passing them all around to different methods.</p>

<h3 id="aead-encrypted-cookies-and-sessions-"><a href="https://github.com/rails/rails/pull/28132">AEAD encrypted cookies and sessions </a></h3>

<p>Encrypted cookies <a href="https://tools.ietf.org/html/rfc5288">now use</a> <a href="https://crypto.stanford.edu/RealWorldCrypto/slides/gueron.pdf">AES-GCM</a> which couples authentication and encryption in one faster step and produces shorter ciphertexts.</p>

<p>Older cookies encrypted using AES in CBC HMAC mode will be seamlessly upgraded when this new mode is enabled via the <em>action_dispatch.use_authenticated_cookie_encryption</em> configuration value.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="make-secretsedit-run-secretssetup-if-it-hasnt-already"><a href="https://github.com/rails/rails/pull/29195">Make <code class="language-plaintext highlighter-rouge">secrets:edit</code> run <code class="language-plaintext highlighter-rouge">secrets:setup</code> if it hasn’t already.</a></h3>

<p>On a new app, if you did <em>rails secrets:edit</em> before you’ve called <em>rails secrets:setup</em>, Rails would throw an error.</p>

<p>With this addition, Rails takes care of doing that for you if not already done.</p>

<h3 id="fix-regression-in-numericality-validator"><a href="https://github.com/rails/rails/commit/d83b8e65102d625c9024cd9a2727a10b0ef83b79">Fix regression in Numericality validator</a></h3>

<p>This change fixes a regression in <em>Numericality</em> validator where extra decimal places on a user input for a decimal column were ignored by numerically validations, for example when comparing <em>9.18</em> vs <em>9.179. </em></p>

<h2 id="improved">Improved</h2>

<h3 id="active-record-initialization-optimizations"><a href="https://github.com/rails/rails/pull/29215">Active Record initialization optimizations</a></h3>

<p>Rails had a performance regression from 4.2x to 5.0 where initialization of records slowed down by factor of 2x in some cases.</p>

<p>This change optimizes initializations to improve by a factor of <strong>2x for STI models</strong> and <strong>1.3x for non-STI models</strong></p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-05-12%7D...@%7B2017-05-19%7D">commits</a> if you are interested.<br />
Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/5/20/this-week-in-rails-recycled-cache-keys-and-more-copy/" rel="bookmark">This Week in Rails: Recycled cache keys and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2017-05-20 00:00:00 +0000">May 20, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! This is <a href="https://twitter.com/gregmolnar">Greg</a> with the latest news about Rails!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170512-20170519">This Week’s Rails contributors!</a></h3>

<p>22 person worked on making Rails better this week. Big thanks to them! <br />
If you want to be a part of that, check the <a href="https://github.com/rails/rails/issues">issues list</a>!</p>

<h2 id="new">New</h2>

<h3 id="recyclable-cache-keys"><a href="https://github.com/rails/rails/pull/29092">Recyclable cache keys</a></h3>

<p>With this change Rails, will be able to recycle the cache keys and if you have big volume cache write, your cache space will be better utilised.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="allow-irb-options-to-be-passed-from-rails-console-command"><a href="https://github.com/rails/rails/pull/29010/files">Allow irb options to be passed from <code class="language-plaintext highlighter-rouge">rails console</code> command</a></h3>

<p>Pre Rails 5, the rails console accepted irb options, but a change in Rails 5 break that feature. Now it is fixed, so you can pass the options like this:  <strong>rails c – –simple-prompt</strong>.</p>

<h2 id="improved">Improved</h2>

<h3 id="respect-schemadumperignore_tables-in-databases-structure-dump"><a href="https://github.com/rails/rails/pull/29077">Respect <code class="language-plaintext highlighter-rouge">SchemaDumper.ignore_tables</code> in databases structure dump</a></h3>

<p>This change makes Active Record respect the ignored tables if you configured any.</p>

<h3 id="dont-cache-locally-if-unless_exist-was-passed"><a href="https://github.com/rails/rails/pull/29083">Don’t cache locally if unless_exist was passed</a></h3>

<p>If your cache backend supports the <strong>unless_exist</strong> option, you can configure Rails to delete the local cache and read the correct value from the backend.</p>

<p>That’s it for this week, as always, we couldn’t cover all of the changes, but feel free to check the <a href="https://github.com/rails/rails/compare/master@%7B2017-05-12%7D...@%7B2017-05-19%7D">commits</a> if you are interested.<br />
Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/4/15/this-week-in-rails-hooks-fixtures-fetch_values-database-connections-and-more/" rel="bookmark">This Week in Rails: hooks, fixtures, fetch_values, database connections and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">andatki</span></span>,
              <span class="published" title="2017-04-15 00:00:00 +0000">April 15, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there! This is <a href="https://twitter.com/andatki">Andy</a> with another edition of This Week in Rails. This week we’re covering two weeks worth of changes, so let’s dive right in.</p>

<h2 id="new">New</h2>

<h3 id="hooks-for-action_controller_base-and-action_controller_api-"><a href="https://github.com/rails/rails/pull/28402">Hooks for <code class="language-plaintext highlighter-rouge">action_controller_base</code> and <code class="language-plaintext highlighter-rouge">action_controller_api</code> </a></h3>

<p>This change breaks out two Action Controller hooks, where there was one before. <code class="language-plaintext highlighter-rouge">action_controller_base</code> and <code class="language-plaintext highlighter-rouge">action_controller_api</code>. These can be used to load less code at boot time.</p>

<h3 id="fixture-accessor-with-no-arguments"><a href="https://github.com/rails/rails/pull/28692">Fixture accessor with no arguments</a></h3>

<p>Do you need to load all the fixtures of a particular type? Calling a fixture accessor method with no arguments returns all fixtures.</p>

<h3 id="-implement-fetch_values-for-hashwithindifferentaccess"><a href="https://github.com/rails/rails/pull/28316"> Implement <code class="language-plaintext highlighter-rouge">fetch_values</code> for <code class="language-plaintext highlighter-rouge">HashWithIndifferentAccess</code></a></h3>

<p>Add <code class="language-plaintext highlighter-rouge">fetch_values</code> for <code class="language-plaintext highlighter-rouge">HashWithIndifferentAccess</code> in Rails, added to Ruby in 2.3.0. Support was added conditionally by using <code class="language-plaintext highlighter-rouge">method_defined?</code>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="clear-active-connections-after-initialization"><a href="https://github.com/rails/rails/pull/28057">Clear active connections after initialization</a></h3>

<p>If your app uses a lot of database connections, this one is worth a look. The author said that after deploying this change, they reduced their peak open database connection count by 13%.</p>

<h3 id="fix-mistake-in-js-response-parser"><a href="https://github.com/rails/rails/pull/28748">Fix mistake in JS response parser</a></h3>

<p>This change restores the ability to accept ecmascript for parsing. The author also declares that the JS response should not modify the DOM. Take a look!</p>

<h2 id="improved">Improved</h2>

<h3 id="doc-improvement-for-before_destroy"><a href="https://github.com/rails/rails/pull/28680">Doc improvement for <code class="language-plaintext highlighter-rouge">before_destroy</code></a></h3>

<p>Did you know that <code class="language-plaintext highlighter-rouge">before_destroy</code> hooks should be set *before* <code class="language-plaintext highlighter-rouge">dependent: destroy</code> for it to work correctly? This documents that.</p>

<h3 id="dont-freeze-input-strings"><a href="https://github.com/rails/rails/pull/28729">Don’t freeze input strings</a></h3>

<p>Check this out if you’re curious about changes around frozen strings and usages of Immutable String (Matz said “All String literals are immutable (frozen) on Ruby 3”).</p>

<p>Whew! That covers just some of the changes in the first couple of weeks of April. Many other great <a href="https://github.com/rails/rails/compare/master@%7B2017-04-01%7D...@%7B2017-04-14%7D">pull requests</a> are available to browse, from <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170401-20170414">27 contributors</a> including 5 first-timers. Nice work!</p>

<p>Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/4/1/this-week-in-rails-j-smoked-42-designated-drivers-and-more/" rel="bookmark">This Week in Rails: -j smoked, 42, designated drivers and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2017-04-01 00:00:00 +0000">April 1, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Yo folks! Your noble editor <a href="https://twitter.com/kaspth">Kasper</a> here with the latest and greatest from Rails.</p>

<p>Check the fine print 📰</p>

<h2 id="featured">Featured</h2>

<h3 id="remove-rails-new-javascript"><a href="https://github.com/rails/rails/pull/28546">Remove rails new –javascript</a></h3>

<p>The <em>–javascript</em> option for new Rails apps could install any gem ending in <em>-rails.</em> From now you’ll have to add jquery-rails to your Gemfile manually.</p>

<h3 id="properly-sourced-fourty_two"><a href="https://github.com/rails/rails/pull/28598">Properly sourced fourty_two</a></h3>

<p>The new documentation now has <em>the answer to life the universe and everything.</em></p>

<h2 id="new">New</h2>

<h3 id="per-subclass-system-testing-driver-overrides"><a href="https://github.com/rails/rails/pull/28586">Per subclass system testing driver overrides</a></h3>

<p>Your system testing test case subclasses all have a designated driver. Now you can designate another driver in case the test case calls for it.</p>

<h3 id="reverse_merge-aliased-to-with_defaults"><a href="https://github.com/rails/rails/pull/28603">reverse_merge aliased to with_defaults</a></h3>

<p>One for the aesthetics department: <em>with_defaults</em> has emerged as an alias for_reverse_merge_. So now_options.with_defaults(creator: @current_user)_makes your intent clearer.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fixed-rails-ujsjs-module-support"><a href="https://github.com/rails/rails/pull/28617">Fixed rails-ujs.js module support</a></h3>

<p>Once Rails 5.1 ships proper you’ll be able to require rails-ujs from your JS again.</p>

<p>There were many other great <a href="https://github.com/rails/rails/compare/master@%7B2017-03-25%7D...@%7B2017-04-01%7D">pull requests</a> this week from <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170325-20170401">45 contributors</a>, including 8 first-timers. Thank you all!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/3/24/this-week-in-rails-5-1-0-rc1-gsoc-and-more/" rel="bookmark">This Week in Rails: 5.1.0.rc1, GSoC and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2017-03-24 00:00:00 +0000">March 24, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing the latest from the last two weeks.</p>

<p>The last couple of weeks have been very busy with the releasing of <a href="http://weblog.rubyonrails.org/2017/3/20/Rails-5-1-rc1/">Rails 5.1.0.rc1</a> and the starting of <a href="https://github.com/rails/rails/commit/6c08d480f13d3332c878ca8a120a03fcd78f7ba2">Rails 5.2</a> 🎉</p>

<p>Congratulations to all involved!!</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-510rc1-has-been-released"><a href="http://weblog.rubyonrails.org/2017/3/20/Rails-5-1-rc1/">Rails 5.1.0.rc1 has been released!</a></h3>

<p>Please check it out and help the community by reporting issues before 5.1 is released.</p>

<p>If you are already using encrypted secrets, make sure to run <a href="https://gist.github.com/kaspth/bc37989c2f39a5642112f28b1d93f343">this script</a> to upgrade your app.</p>

<h3 id="google-summer-of-code-2017"><a href="http://weblog.rubyonrails.org/2017/3/22/google-summer-of-code-2017-application-period/">Google Summer of Code 2017</a></h3>

<p>Are you a student, or know someone who would love to contribute to Rails? Our GSoC students application is now open! Check out <a href="https://github.com/railsgsoc/ideas/wiki/2017-Ideas">our ideas page</a> and join us on the <a href="https://groups.google.com/forum/#!forum/rubyonrails-gsoc">mailing list</a> for discussion.</p>

<h3 id="the-railsconf-2017-schedule-is-live"><a href="http://railsconf.com/schedule">The RailsConf 2017 schedule is live!</a></h3>

<p>Have you also been waiting for this? No more. The schedule is live and looks awesome!</p>

<h2 id="new">New</h2>

<h3 id="add-default-option-to-belongs_to"><a href="https://github.com/rails/rails/pull/28453">Add default option to belongs_to</a></h3>

<p>The <em>:default</em> option adds a <em>before_validation</em> callback that initializes the association with the given lambda’s return value:<br />
<em>belongs_to :person, default: -&gt; {​ Current.person }​</em></p>

<h3 id="add-support-to-duplicable-rational-and-complex"><a href="https://github.com/rails/rails/pull/28544">Add support to duplicable Rational and Complex</a></h3>

<p>This is a work ahead of the upcoming <a href="https://github.com/ruby/ruby/commit/31ef3124a9db534abcc3e323f5d3cb696eda3bf5">Ruby changes</a>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="allow-timeto_time-on-frozen-objects"><a href="https://github.com/rails/rails/pull/28147">Allow Time#to_time on frozen objects</a></h3>

<p>This fixes an issue with frozen that has been around since Rails 4.</p>

<h3 id="allow-order-to-be-given-expressions-as-hash-keys"><a href="https://github.com/rails/rails/pull/28191">Allow order to be given expressions as hash keys</a></h3>

<p>The Active Record <em>order</em> method is no longer restricted to attribute names. It now accepts expressions like:<br />
<em>Post.order(“LENGTH(title)” =&gt; :asc).last</em></p>

<p>There were many other great <a href="https://github.com/rails/rails/compare/master@%7B2017-03-12%7D...@%7B2017-03-24%7D">pull requests</a> this week from <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170312-20170324">45 contributors</a>, including 8 first-timers. Thank you all!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/3/12/this-week-in-rails-looots-of-fixes-after-the-release-and-more/" rel="bookmark">This Week in Rails: looots of fixes after the release and more.</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2017-03-12 00:00:00 +0000">March 12, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello!</p>

<p>This is <a href="https://www.bigbinary.com/team/vipul">Vipul</a> reporting from Delhi today, on this colourful <a href="https://en.wikipedia.org/wiki/Holi">Holi</a> weekend 💥<br />
 <br />
Lets take a look at what’s the latest news from the world of Ruby on Rails !<br />
So many fixes and much more.</p>

<h2 id="featured">Featured</h2>

<h3 id="google-summer-of-code-2017"><a href="http://weblog.rubyonrails.org/2017/3/2/google-summer-of-code-2017/">Google Summer of Code 2017</a></h3>

<p>We’re very happy to announce that Ruby on Rails has been accepted as an organization for the Google Summer of Code (GSoC) 2017 edition!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="make-sure-local-cache-is-cleared-even-if-its-throwing-error"><a href="https://github.com/rails/rails/pull/28373">Make sure local cache is cleared even if it’s throwing error</a></h3>

<p>When an error was thrown from the middleware chain, it was sometimes not getting caught by <code class="language-plaintext highlighter-rouge">LocalCache::Middleware</code>.</p>

<p>This change, makes sure that we safely catch the errors and local cache is successfully cleared.</p>

<h3 id="fix-rake-dbschemaload-with-subdirectories"><a href="https://github.com/rails/rails/pull/28287">Fix <code class="language-plaintext highlighter-rouge">rake db:schema:load</code> with subdirectories</a></h3>

<p>Previously <code class="language-plaintext highlighter-rouge">db:schema:load</code> didn’t work with migrations based out of subdirectories.</p>

<p>This change starts using <code class="language-plaintext highlighter-rouge">Migrator.migration_files</code> in
<code class="language-plaintext highlighter-rouge">assume_migrated_upto_version</code> to fix the issue.</p>

<h3 id="fix-malformed-asset_url-in-actioncontrollerrenderer"><a href="https://github.com/rails/rails/pull/28250">Fix malformed asset_url in ActionController::Renderer</a></h3>

<p>This change fixes an issue with malformed asset_url when rendering a template with <code class="language-plaintext highlighter-rouge">ActionController::Renderer</code>.</p>

<h3 id="fix-select-with-block-doesnt-return-newly-built-records-in-has_many-association"><a href="https://github.com/rails/rails/pull/28354">Fix select with block doesn’t return newly built records in <code class="language-plaintext highlighter-rouge">has_many</code> association</a></h3>

<p>The select method in <code class="language-plaintext highlighter-rouge">QueryMethods</code> is also an enumerable method. Ideally, enumerable methods with block should delegate to records on
<code class="language-plaintext highlighter-rouge">CollectionProxy</code> and not the scope.</p>

<p>This change fixes this behaviour that select with block doesn’t return newly built records in <code class="language-plaintext highlighter-rouge">has_many</code> association.</p>

<h3 id="update-titlelize-regex-to-allow-apostrophes"><a href="https://github.com/rails/rails/commit/48b37f127fb44b787ae6c0710982d7949b14454f">Update <code class="language-plaintext highlighter-rouge">titlelize</code> regex to allow apostrophes</a></h3>

<p>In a previous fix the regex in <code class="language-plaintext highlighter-rouge">titlelize</code> was updated to not match apostrophes to better reflect the nature of the transformation.</p>

<p>Unfortunately this had the side effect of breaking capitalization on the first word of a sub-string, eg:</p>

<div class="language-ruby highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="o">&gt;&gt;</span> <span class="s2">"This was 'fake news'"</span><span class="p">.</span><span class="nf">titleize</span>
<span class="o">=&gt;</span> <span class="s2">"This Was 'fake News'"</span>
</code></pre></div></div>

<p>This change fixes this behaviour by extending the look-behind to check for word character apart from an apostrophe.</p>

<h3 id="fix-deserialize-with-json-array"><a href="https://github.com/rails/rails/commit/6ec2e8ac220024c6e8159c81dbe76ef8e812ed6f">Fix <code class="language-plaintext highlighter-rouge">deserialize</code> with JSON array</a></h3>

<p>JSON array data was being returned in a stringified form, due to broken deserialization.</p>

<p>This change fixes deserialization behaviour.</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="deprecate-migratorschema_migrations_table_name"><a href="https://github.com/rails/rails/pull/28351">Deprecate <code class="language-plaintext highlighter-rouge">Migrator.schema_migrations_table_name</code></a></h3>

<p><code class="language-plaintext highlighter-rouge">SchemaMigration</code> model was extracted and <code class="language-plaintext highlighter-rouge">SchemaMigration.table_name</code> was being used instead in places where <code class="language-plaintext highlighter-rouge">Migrator.schema_migrations_table_name</code> was being used previously.</p>

<p><code class="language-plaintext highlighter-rouge">Migrator.schema_migrations_table_name</code> is now deprecated in favour of <code class="language-plaintext highlighter-rouge">SchemaMigration.table_name</code>.</p>

<h2 id="improved">Improved</h2>

<h3 id="added-reverse_mergereverse_merge-to-acparameters"><a href="https://github.com/rails/rails/pull/28355">Added <code class="language-plaintext highlighter-rouge">reverse_merge</code>/<code class="language-plaintext highlighter-rouge">reverse_merge!</code> to AC::Parameters</a></h3>

<p>This change adds the <code class="language-plaintext highlighter-rouge">reverse_merge</code> and <code class="language-plaintext highlighter-rouge">reverse_merge!</code> methods to <code class="language-plaintext highlighter-rouge">ActionController::Parameters</code>, similar to their corresponding Hash methods.</p>

<h3 id="do-not-take-screenshot-if-driver-does-not-support-screenshot"><a href="https://github.com/rails/rails/pull/28264">Do not take screenshot if driver does not support screenshot</a></h3>

<p><code class="language-plaintext highlighter-rouge">Capybara::RackTest::Driver</code> does not support taking screenshots. If we call
<code class="language-plaintext highlighter-rouge">#save_screenshot</code> on <code class="language-plaintext highlighter-rouge">Capybara::RackTest::Driver</code> , it will raise an error.</p>

<p>To prevent errors, if a driver in Systems test does not support screenshot, we do not call it after this change.</p>

<p>There were many other great <a href="https://github.com/rails/rails/compare/master@%7B2017-02-26%7D...@%7B2017-03-04%7D">pull requests</a> this week from <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170226-20170304">20 contributors</a>, including 4 first-timers. Thank you all!</p>

<p>Outside of code changes, we had many more good news this and the previous week.</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/3/4/this-week-in-rails-5-0-2-released-stronger-encrypted-secrets-and-more/" rel="bookmark">This Week in Rails: 5.0.2 released, stronger Encrypted Secrets and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudio</span></span>,
              <span class="published" title="2017-03-04 00:00:00 +0000">March 4, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello!</p>

<p>It’s <a href="http://railsconf.com/2017/program#session-125">Claudio</a> from sunny Los Angeles bringing you the latest news from the world of Ruby on Rails. So many improvements this week so… let’s get to it!</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-502-has-been-released"><a href="http://weblog.rubyonrails.org/2017/3/1/Rails-5-0-2-has-been-released/">Rails 5.0.2 has been released!</a></h3>

<p>Go on and update your Rails 5 app to the latest release!<br />
v5.0.2 is fully backward-compatible with v5.0.1 and v5.0.0.</p>

<h3 id="google-summer-of-code-2017"><a href="http://weblog.rubyonrails.org/2017/3/2/google-summer-of-code-2017/">Google Summer of Code 2017</a></h3>

<p>We’re very happy to announce that Ruby on Rails has been accepted as an organization for the Google Summer of Code (GSoC) 2017 edition!</p>

<h2 id="improved">Improved</h2>

<h3 id="update-secrets-to-use-modern-crypto"><a href="https://github.com/rails/rails/pull/28139">Update secrets to use modern crypto</a></h3>

<p>As announced last week, Rails 5.1 will include encrypted secrets. Thanks to this PR, the secrets will use a stronger cryptographic algorithm for enhanced security.</p>

<h2 id="new">New</h2>

<h3 id="add-iso8601-and-rfc3339-parsing-to-timezones"><a href="https://github.com/rails/rails/pull/28272">Add iso8601 and rfc3339 parsing to timezones</a></h3>

<p><em>ActiveSupport::TimeZone</em> now has a new <em>rfc3339</em> method to get an RFC 3339 timestamp in a specific time zone.</p>

<h3 id="use-webpacker-10-in-new-applications"><a href="https://github.com/rails/rails/pull/28212">Use webpacker 1.0 in new applications</a></h3>

<p>In case you missed it, <a href="https://github.com/rails/webpacker">rails/webpacker</a> is out of beta development and has recently released v1.0.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="only-load-systemtestcase-if-puma-is-defined"><a href="https://github.com/rails/rails/pull/28160">Only load SystemTestCase if Puma is defined</a></h3>

<p>System test cases (Capybara) are one of the new features in Rails 5.1. Since they only support Puma, they are skipped if Puma is not present.</p>

<h3 id="do-not-evaluate-if-arguments-when-on-is-not-satisfied-for-transaction-callbacks"><a href="https://github.com/rails/rails/pull/28063">Do not evaluate :if arguments when :on is not satisfied for transaction callbacks</a></h3>

<p>Understanding when callbacks are run can be tricky. This PR smartly avoids running them as soon as one of the preconditions is not met.</p>

<h3 id="update-datetimechange-to-support-usec-and-nsec"><a href="https://github.com/rails/rails/pull/28242">Update DateTime#change to support usec and nsec</a></h3>

<p>If you need to change a timestamp by a matter of microseconds and nanoseconds, now you can do it!</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="soft-deprecate-the-hashwithindifferentaccess-constant"><a href="https://github.com/rails/rails/pull/28157">Soft-deprecate the HashWithIndifferentAccess constant</a></h3>

<p>If you use <em>HashWithIndifferentAccess</em> in your code, you might want to look at using <em>ActiveSupport::HashWithIndifferentAccess</em>  instead.</p>

<h3 id="deprecate-implicit-coercion-of-activesupportduration"><a href="https://github.com/rails/rails/pull/28204">Deprecate implicit coercion of ActiveSupport::Duration</a></h3>

<p>A snippet of code like <em>2 * 1.day</em> will display a warning, inviting you not to coerce a Duration into a Numeric since it can be confusing, because adding/subtracting a value from a date treats integers as a day and not a second.</p>

<p>There were many other great <a href="https://github.com/rails/rails/compare/master@%7B2017-02-26%7D...@%7B2017-03-04%7D">pull requests</a> this week from <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170226-20170304">35 contributors</a>, including 12 first-timers. Thank you all!</p>

<p>Outside of code changes, we had many more good news this week.</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/2/25/this-week-in-rails-5-1-0-beta1-release-encrypted-secrets-system-tests-and-more/" rel="bookmark">This Week in Rails: 5.1.0.beta1 release, Encrypted Secrets, System Tests and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2017-02-25 00:00:00 +0000">February 25, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi everyone,</p>

<p><a href="https://twitter.com/gregmolnar">Greg</a> here with the latest from the world of Rails. It was a busy week with new releases and many improvements!</p>

<h2 id="featured">Featured</h2>

<h3 id="new-rails-releases"><a href="http://weblog.rubyonrails.org/2017/2/23/Rails-5-1-beta1/">New Rails releases</a></h3>

<p>The first beta release for <a href="http://weblog.rubyonrails.org/2017/2/23/Rails-5-1-beta1/">5.1.0</a> is out with some love towards JavaScript, System Tests, Encrypted Secrets and more! <br />
There is also a new stable release for <a href="http://weblog.rubyonrails.org/2017/2/21/Rails-4-2-8-has-been-released/">4.2.8</a> and a release candidate for <a href="http://weblog.rubyonrails.org/2017/2/25/Rails-5-0-2-rc1-has-been-released/">5.0.2</a></p>

<h3 id="eileen-joins-rails-core"><a href="http://weblog.rubyonrails.org/2017/2/22/Eileen-joins-Rails-core/">Eileen joins Rails core</a></h3>

<p>We’re proud to welcome Eileen M. Uchitelle to Rails core!</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170219-20170225">This week’s Rails Contributors</a></h3>

<p>33 developers contributed to Rails this week. If you want to be part of this team, look at the <a href="https://github.com/rails/rails/issues">issues list</a> and make a contribution!</p>

<h2 id="new">New</h2>

<h3 id="custom-url-helpers-and-polymorphic-mapping"><a href="https://github.com/rails/rails/pull/23138">Custom url helpers and polymorphic mapping</a></h3>

<p>This pull request introduces support for custom url helpers and defining custom polymorphic mappings in routes.rb</p>

<h3 id="capybara-integration-with-rails-aka-system-tests"><a href="https://github.com/rails/rails/pull/26703">Capybara Integration with Rails (AKA System Tests)</a></h3>

<p>Rails has a built in integration with Capybara now which makes writing system tests easier, since all the setup is handled by Rails. For more details read the write-up on the pull request.</p>

<h3 id="encrypted-secrets-support"><a href="https://github.com/rails/rails/pull/28038">Encrypted secrets support</a></h3>

<p>Rails introduces secrets encryption which is inspired by the <a href="https://github.com/ahoward/sekrets">Sekrets</a> gem.<br />
It worth noting here that, some <a href="https://github.com/rails/rails/pull/28139">improvements to the crypto</a> is on the way too.</p>

<h2 id="improved">Improved</h2>

<h3 id="include-jobid-in-all-active-job-info-logs"><a href="https://github.com/rails/rails/pull/28112">Include JobID in all Active Job info logs</a></h3>

<p>Earlier the JobID wasn’t logged when a job started or ended performing, but that’s not the case anymore, making debugging of job related issues easier.</p>

<h3 id="add-missing-gzip-footer-check-in-activesupportgzipdecompress"><a href="https://github.com/rails/rails/pull/28158">Add missing gzip footer check in ActiveSupport::Gzip.decompress</a></h3>

<p>From now on ActiveSupport::Gzip.decompress checks the CRC in the gzip footer.</p>

<h3 id="allow-3-level-configs-to-group-database-connections-by-environment"><a href="https://github.com/rails/rails/pull/28095">Allow 3-level configs to group database connections by environment</a></h3>

<p>If you have multiple database connection per environment, you can group your config by the environment. <a href="https://github.com/rails/rails/pull/28095#issuecomment-281449457">Check this comment</a> for an example.</p>

<h3 id="delegate-to-scope-rather-than-merge-for-collection-proxy"><a href="https://github.com/rails/rails/pull/25877">Delegate to <code class="language-plaintext highlighter-rouge">scope</code> rather than <code class="language-plaintext highlighter-rouge">merge!</code> for collection proxy</a></h3>

<p>A performance improvement by not using merge! when it is not necessary.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="preload-to_datetime-before-freezing-a-timewithzone-instance"><a href="https://github.com/rails/rails/pull/28104">Preload to_datetime before freezing a TimeWithZone instance</a></h3>

<p>After freezing an ActiveSupport::TimeWithZone instance, it is not possible to call to_datetime because the value is cached in an instance variable. To avoid this issue, the instance variable is preloaded before the freeze occurs.</p>

<h3 id="hashwithindifferentaccesscompat-nil-issue-fix"><a href="https://github.com/rails/rails/pull/28138">HashWithIndifferentAccess#compat nil issue fix</a></h3>

<p>HashWithIndifferentAccess#compact returned nil earlier when the hash didn’t contain nil values in it. This PR fixed the problem.</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="deprecate-using-quoted_id-in-quoting--type-casting"><a href="https://github.com/rails/rails/pull/27962">Deprecate using <code class="language-plaintext highlighter-rouge">quoted_id</code> in quoting / type casting</a></h3>

<p>Originally quoted_id was used in legacy quoting mechanism. Now we use type casting mechanism for that hence quoted_id is deprecated.</p>

<p>That’s it from This Week in Rails. There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2017-02-12%7D...@%7B2017-02-19%7D">check them out</a>! </p>

<p>Until next week 👣</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/2/18/this-week-in-rails-freeze-strings-related-to-caching-query-optimization-for-postgres-and-more/" rel="bookmark">This Week in Rails: Freeze strings related to caching, query optimization for Postgres and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">prathamesh</span></span>,
              <span class="published" title="2017-02-18 00:00:00 +0000">February 18, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey everyone 👋</p>

<p><a href="https://twitter.com/_cha1tanya">Prathamesh</a> here with the latest from the world of Rails.</p>

<h2 id="featured">Featured</h2>

<h3 id="️this-weeks-rails-contributors-️"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170212-20170219">⚡️This week’s Rails contributors ⚡️</a></h3>

<p>This week was full of improvements and bug fixes. We have 24 awesome people contributing to Rails with 3 first-timers!</p>

<h2 id="improved">Improved</h2>

<h3 id="freeze-fragment-caching-related-strings"><a href="https://github.com/rails/rails/pull/27926">Freeze fragment caching related strings</a></h3>

<p>This change freezes the common strings used for fragment caching reducing the string allocations every time a read/write operation is performed on the fragment cache. The patch showed proper object allocation benchmarks showing a noticeable improvement, so it was accepted.</p>

<h3 id="optimize-query-for-finding-primary-keys-of-a-postgres-table"><a href="https://github.com/rails/rails/pull/27961">Optimize query for finding primary keys of a Postgres table</a></h3>

<p>This change simplifies and optimizes the query used to determine the primary keys of a PostgreSQL table improving the overall setup time.</p>

<h2 id="fixes">Fixes</h2>

<h3 id="fix-generator-command-for-namespaced-rails-engines"><a href="https://github.com/rails/rails/pull/27605">Fix generator command for namespaced Rails engines</a></h3>

<p>This change fixes the default generators to create proper namespaced resources for a namespaced Rails engine. For e.g. if we have a namespaced engine <strong><em>bukkits-admin</em></strong> , then</p>

<p><strong><em>bin/rails g scaffold User name:string age:integer</em></strong></p>

<p>will now correctly create</p>

<p><strong><em>admin/app/controllers/bukkits/admin/users_controller.rb.</em></strong></p>

<h3 id="remove_index-method-can-remove-expression-indexes-now"><a href="https://github.com/rails/rails/pull/26655">remove_index method can remove expression indexes now</a></h3>

<p>Now, <strong><em>remove_index</em></strong> method can also be used to remove expression indexes apart from simple column indexes.</p>

<p>That’s it from This Week in Rails. There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2017-02-12%7D...@%7B2017-02-19%7D">check them out</a>! </p>

<p>See ya next week 👣</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/2/11/this-week-in-rails-ruby-2-4-on-rails-4-2/" rel="bookmark">This Week in Rails: Ruby 2.4 on Rails 4.2</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2017-02-11 00:00:00 +0000">February 11, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! This is <a href="https://twitter.com/imtayadeway">Tim</a> , bringing you another edition of This Week in Rails.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170204-20170211">This week’s Rails contributors</a></h3>

<p>This week saw contributions from 26 contributors, including 4 for the first time! What a fantastic bunch!</p>

<h3 id="rails-428rc1-has-been-released"><a href="http://weblog.rubyonrails.org/2017/2/10/Rails-4-2-8-rc1-has-been-released/">Rails 4.2.8.rc1 has been released!</a></h3>

<p>If you’re using Rails 4.2, you may want to get a head start by trying out the release candidate for the latest patch release. It’s the first Rails 4 release to support Ruby 2.4, so see if you can give it a try to help us iron out any kinks!</p>

<h2 id="improved">Improved</h2>

<h3 id="deprecate-locking-of-dirty-records"><a href="https://github.com/rails/rails/pull/25873">Deprecate locking of dirty records</a></h3>

<p><code class="language-plaintext highlighter-rouge">ActiveRecord::Base#lock!</code> and <code class="language-plaintext highlighter-rouge">#with_lock</code> reload the record before doing the actual locking. If there were any unsaved changes, they will be discarded without any warning. When this work is completed in Rails 5.2, an exception will be raised when trying to lock a dirty object. Until then, support for this has been deprecated, so keep an eye out for warnings like these!</p>

<h3 id="remove-support-for-strings-in-callback-conditions"><a href="https://github.com/rails/rails/pull/27608">Remove support for strings in callback conditions</a></h3>

<p>If you’ve seen deprecation notices concerning strings used in <code class="language-plaintext highlighter-rouge">if</code> and <code class="language-plaintext highlighter-rouge">unless</code> conditions in callbacks, listen up! Support for these have now been officially removed. Time to update, if you haven’t already!</p>

<h2 id="fixes">Fixes</h2>

<h3 id="allow-activerecordbaseas_json-to-accept-a-frozen-hash"><a href="https://github.com/rails/rails/pull/27945">Allow ActiveRecord::Base.as_json to accept a frozen Hash</a></h3>

<p>As you may know, <code class="language-plaintext highlighter-rouge">ActiveRecord::Base.as_json</code> takes an (optional) options hash. That hash is modified internally, but Rails is nice enough to clone it first so that it doesn’t change the thing you passed to it. If your thing was frozen however, it would cause it to blow up! How can this be so, I hear you ask. Well, when you <code class="language-plaintext highlighter-rouge">clone</code> an object, you also clone its frozen-ness. <code class="language-plaintext highlighter-rouge">dup</code> , on the other hand, does not do this, which turned out to be the solution. Case closed!</p>

<p>That’s it from This Week in Rails. There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2017-02-04%7D...@%7B2017-02-11%7D">check them out</a>!</p>

<p>See you next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/2/4/this-week-in-rails-fresh-code-to-fight-the-winter-doldrums/" rel="bookmark">This Week in Rails: Fresh code to fight the Winter doldrums</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">andatki</span></span>,
              <span class="published" title="2017-02-04 00:00:00 +0000">February 4, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! This is your host <a href="https://twitter.com/andatki">Andy</a>, bringing you another edition of This Week in Rails.</p>

<p>I’m in a cold Northern climate ❄️️ and we’re in the middle of Winter right now. To me, it’s the best time of the year to stay inside and dive into some new code. Let’s take a look at some of the latest changes made to Ruby on Rails in the past week.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170128-20170203">This Week’s Rails Contributors</a></h3>

<p>We had 31 contributors this week. There are lots of PRs for bug fixes which are nice to see. Many thanks to all of the contributors!</p>

<h2 id="new">New</h2>

<h3 id="add-warnings-option-to-test-runner"><a href="https://github.com/rails/rails/pull/27784">Add warnings option to test runner</a></h3>

<p>This change provides an option to enable Ruby’s warnings in tests.</p>

<h2 id="improved">Improved</h2>

<h3 id="refactor-active-record-reflections"><a href="https://github.com/rails/rails/pull/27851">Refactor Active Record reflections</a></h3>

<p>This PR refactors reflections such that we can iterate over each reflection and ask the reflection object what scopes should be applied to the query we are currently building.</p>

<h3 id="report-the-attribute-on-activerecordserializationtypemismatch"><a href="https://github.com/rails/rails/pull/27773">Report the attribute on ActiveRecord::SerializationTypeMismatch</a></h3>

<p>When a <em>ActiveRecord::SerializationTypeMismatch</em> error occurs, we will now know which attribute caused the error.</p>

<h3 id="simplify-query-in-column_definitions-for-postgres"><a href="https://github.com/rails/rails/pull/27743">Simplify query in column_definitions() for Postgres</a></h3>

<p>This patch updates how column_definitions() for Postgres is calculated. The author has a nice usage of the EXPLAIN tool, to show that the new implementation is more efficient.</p>

<h2 id="fixes">Fixes</h2>

<h3 id="reload-through_record-that-has-been-destroyed"><a href="https://github.com/rails/rails/commit/e09da8bf7853f8f4f1ebb5c52f9b688a32b4dfaa">Reload <code class="language-plaintext highlighter-rouge">through_record</code> that has been destroyed</a></h3>

<p>For <em>has_one :through</em> associations, if <em>through_proxy</em> is not reset, setting a new record causes the runtime error <em>Can’t modify frozen hash</em>.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from This Week in Rails. There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2017-01-29%7D...@%7B2017-02-03%7D">check them out</a>!</p>

<p>Catch you next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/1/28/this-week-in-rails-mailer-preprocessing-and-new-erb-handler/" rel="bookmark">This Week in Rails: Mailer preprocessing and new ERB handler</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2017-01-28 00:00:00 +0000">January 28, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Steampunk! It’s all the rage with the kids these days.</p>

<p>Honestly, I was going to work this better into the lead but then I ran out of… ssssstea… 🤓</p>

<p>Anyway friendo! Here’s what <a href="https://twitter.com/kaspth">Kasper</a> dug up from this week in Rails.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170121-201701282000">This Week’s Rails Contributors</a></h3>

<p>This week we got 33 committers: welcome or hello again! Either way, you all seem to be on the right track 😉</p>

<h3 id="action-mailer-preprocessing"><a href="https://github.com/rails/rails/pull/27825">Action Mailer Preprocessing</a></h3>

<p>Incoming! Mailers can now use <em>params</em> allowing for easier preprocessing with <em>before_action</em> akin to Action Controller. To enable call mailers like this: <em>InvitationMailer.with(invitee: person).account_invitation.deliver_later</em></p>

<p>See the pull request for a considerable A/B example.</p>

<h3 id="rails-uses-erubi-for-erb-handling"><a href="https://github.com/rails/rails/pull/27757">Rails uses Erubi for ERB handling</a></h3>

<p>For many years Rails has used Erubis to handle ERB templates, but it’s been deprecated in favor of <a href="https://github.com/jeremyevans/erubi">Erubi</a>. Being 1/6 shorter to type is far from the only thing Erubi has going for it, so dip into the pull request for the full list 😄</p>

<h2 id="one-more-thing">One more thing</h2>

<p>Steampunk! It’s hip, it’s wholesome and for the whole family.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2017-01-20%7D...@%7B2017-01-28%7D">check them out!</a></p>

<p>See ya!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/1/23/actionpack-page_caching-1-1-and-actionpack-action_caching-1-2-released/" rel="bookmark">New Action Pack caching gems released</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">pixeltrix</span></span>,
              <span class="published" title="2017-01-23 00:00:00 +0000">January 23, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi everyone,</p>

<p>I’m happy to announce that new versions of the caching gems extracted from Rails 4.0 have been released.</p>

<h2 id="action-pack-page-caching-v110">Action Pack Page Caching (v1.1.0)</h2>

<h3 id="changes-since-102">CHANGES since 1.0.2</h3>

<ul>
  <li>Support for Rails 5.0</li>
  <li>Support for setting <code class="language-plaintext highlighter-rouge">page_cache_directory</code> at the controller instance level</li>
  <li>Support for setting <code class="language-plaintext highlighter-rouge">page_cache_directory</code> using a proc, symbol or callable object</li>
</ul>

<p>To see the full list of changes, <a href="https://github.com/rails/actionpack-page_caching/compare/v1.0.2...v1.1.0">check out all the commits on GitHub</a>.</p>

<p><strong>SHA-1</strong></p>

<p>If you’d like to verify that your gem is the same as the one I’ve uploaded, please use this SHA-1 hash.</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>$ shasum actionpack-page_caching-1.1.0.gem
b9626f7afeb1d69267d1fd6b7255a30be7c33d29  actionpack-page_caching-1.1.0.gem
</code></pre></div></div>

<h2 id="action-pack-action-caching-v120">Action Pack Action Caching (v1.2.0)</h2>

<h3 id="changes-since-111">CHANGES since 1.1.1</h3>

<ul>
  <li>Support for Rails 5.0</li>
  <li>Respect <code class="language-plaintext highlighter-rouge">Accept</code> header when caching actions</li>
  <li>Standardise behavior of options <code class="language-plaintext highlighter-rouge">:layout</code> and <code class="language-plaintext highlighter-rouge">:cache_path</code> when passed a proc, symbol or callable object</li>
</ul>

<p>To see the full list of changes, <a href="https://github.com/rails/actionpack-action_caching/compare/v1.1.1...v1.2.0">check out all the commits on GitHub</a>.</p>

<p><strong>SHA-1</strong></p>

<p>If you’d like to verify that your gem is the same as the one I’ve uploaded, please use this SHA-1 hash.</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>$ shasum actionpack-action_caching-1.2.0.gem
308c3acf35c0bdbf15e5c63b64aeda0ec817a269  actionpack-action_caching-1.2.0.gem
</code></pre></div></div>

<p>Many thanks to the numerous people who have contributed PRs and reported bugs.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/1/20/this-week-in-rails-db-adapters-git-action-cable-and-more/" rel="bookmark">This Week in Rails: DB adapters, Git, Action Cable and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2017-01-20 00:00:00 +0000">January 20, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing the latest news from the Rails community.</p>

<p>Remember, today is the last day to submit your RailsConf proposal. You have until 11:59 p.m. MST!</p>

<p>Now, let’s get started!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170114-20170120">This Week’s Rails Contributors</a></h3>

<p>This week 33 people contributed to Rails. We also got 4 first time contributors. Welcome aboard folks and keep it going!</p>

<h3 id="sql-server-adapter-released-for-rails-5"><a href="https://github.com/rails/rails/pull/27695">SQL Server adapter released for Rails 5</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">5.0.x</code> version of the adapter is only for the latest <code class="language-plaintext highlighter-rouge">5.0</code> version of Rails. If you need the adapter for an older version of Rails, just install the latest version of the adapter that matches your Rails version (<code class="language-plaintext highlighter-rouge">3.2.x</code> to <code class="language-plaintext highlighter-rouge">4.1.x</code>).</p>

<h3 id="git-repo-in-new-rails-projects"><a href="https://github.com/rails/rails/pull/27632">Git repo in new Rails projects</a></h3>

<p>New projects will now be generated with a Git repo by default. Please use the option <code class="language-plaintext highlighter-rouge">--skip-git</code> if you choose to skip it.</p>

<h3 id="foreign-key-support-for-sqlite"><a href="https://github.com/rails/rails/pull/24743">Foreign Key Support for SQLite</a></h3>

<p>Adds foreign key support for SQLite <code class="language-plaintext highlighter-rouge">3.6.19</code> (or greater) in create statements.</p>

<h2 id="improved">Improved</h2>

<h3 id="improve-the-asnumericwithformatto_s-memory-allocation"><a href="https://github.com/rails/rails/pull/27736">Improve the <code class="language-plaintext highlighter-rouge">AS::NumericWithFormat#to_s</code> memory allocation</a></h3>

<p>Thanks to some good profiling, <code class="language-plaintext highlighter-rouge">ActiveSupport::NumericWithFormat#to_s</code> should behave better and not allocate too many objects. 🔎</p>

<h2 id="fixed">Fixed</h2>

<h3 id="add-channel-prefix-support-to-action-cable-redis-adapter"><a href="https://github.com/rails/rails/pull/27425">Add channel prefix support to Action Cable Redis adapter</a></h3>

<p>Without channel prefix in Redis, apps using the same Redis server could have their communication compromised. You can now set the option <code class="language-plaintext highlighter-rouge">channel_prefix</code> in your <code class="language-plaintext highlighter-rouge">cable.yml</code> file. Please check the <a href="https://github.com/rails/rails/pull/27425">PR</a> for details.</p>

<h3 id="make-all-rails-commands-work-in-engines"><a href="https://github.com/rails/rails/pull/27601">Make all Rails commands work in engines</a></h3>

<p>The following commands are now working in engines: <code class="language-plaintext highlighter-rouge">server</code>, <code class="language-plaintext highlighter-rouge">console</code>, <code class="language-plaintext highlighter-rouge">dbconsole</code> and <code class="language-plaintext highlighter-rouge">runner</code>.</p>

<h3 id="generate-migrations-at-custom-path"><a href="https://github.com/rails/rails/pull/27674">Generate migrations at custom path</a></h3>

<p>New database migrations will be generated at the path set by <code class="language-plaintext highlighter-rouge">config.paths["db/migrate"]</code> if the option is defined.</p>

<h3 id="fix-moduleparent_name-on-a-frozen-module"><a href="https://github.com/rails/rails/pull/27713">Fix <code class="language-plaintext highlighter-rouge">Module#parent_name</code> on a frozen module</a></h3>

<p>The method would throw a runtime error when called for a frozen module.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2017-01-14%7D...@%7B2017-01-20%7D">check them out!</a></p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/1/13/this-week-in-rails-time-duration-fixes-and-more/" rel="bookmark">This Week in Rails: Time, Duration fixes and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2017-01-13 00:00:00 +0000">January 13, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy new year (yet again) ! And a <strong><em>Friday the 13th</em></strong> 👻</p>

<p>This is <a href="https://twitter.com/vipulnsward">Vipul</a>, bringing you the latest from just the second week of the year, which is shaping to be really <a href="https://github.com/rails/rails/compare/master@%7B2016-12-31%7D...@%7B2017-01-13%7D">busy</a>.</p>

<p>Thanks to all the <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20170107-20170113">27 contributors</a>, in particular to the 4 people who contributed for the first time. Keep up the good work!</p>

<p>Here are the most relevant changes to Rails master for this week.</p>

<h2 id="improved">Improved</h2>

<h3 id="constant-look-up-would-no-longer-fall-back-to-top-level-constant-since-ruby-25"><a href="https://github.com/rails/rails/commit/3d91649654ff5570d0cf26f96ec9f82f31fe32f6">Constant look-up would no longer fall back to top-level constant since Ruby 2.5</a></h3>

<p>Since <a href="https://github.com/ruby/ruby/commit/44a2576f798b07139adde2d279e48fdbe71a0148">top-level constant lookup</a> has been removed on Ruby 2.5, Rails takes care of relevant changes on its side, so that we rely on properly scoped constants, instead of relying on fallback lookup.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-pool_from_any_process-to-use-most-recent-specification"><a href="https://github.com/rails/rails/commit/e15a23fa355ed29d70c2ec573cd7b2418f7ac8db">Fix pool_from_any_process to use most recent specification</a></h3>

<p>If a process is forked more than once, the Active Record connection pool was grabbing the oldest connection specification for a process, and not the most recent one.</p>

<p>This issue is not seen for single processes, but if you are forking the process multiple times, the wrong specification will be returned and incorrect connection will be used.</p>

<p>This change fixes the issue by reversing the list of specification names so we can grab the most recent one rather than the oldest.</p>

<h3 id="make-time-travel-work-with-subclasses-of-timedatedatetime"><a href="https://github.com/rails/rails/pull/27616">Make time travel work with subclasses of Time/Date/Datetime</a></h3>

<p>Previously when using time travel methods, travel_to, etc, and calling <code class="language-plaintext highlighter-rouge">now</code> on a subclass of e.g. <code class="language-plaintext highlighter-rouge">Time</code>, it would return an instance of <code class="language-plaintext highlighter-rouge">Time</code> instead of returning an instance of the subclass.</p>

<p>This change fixes the way we return the instance, so that we always return using the correct class.</p>

<h3 id="fix-inconsistent-parsing-of-durations-with-both-months-and-years"><a href="https://github.com/rails/rails/pull/27610">Fix inconsistent parsing of Durations with both months and years</a></h3>

<p>Previously the following code may fail or succeed depending on the current time.</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>ActiveSupport::Duration.parse(2.months.iso8601) == 2.months  
ActiveSupport::Duration.parse(3.years.iso8601) == 3.years
</code></pre></div></div>

<p>This change fixes the inconsistent parsing so that this comparison no longer fails.</p>

<h2 id="removed">Removed</h2>

<h3 id="deprecate-reflection-class_name-option-to-accept-a-class"><a href="https://github.com/rails/rails/commit/8312a0d22212798864f142b5a94805e0baa6c562">Deprecate reflection class_name option to accept a class</a></h3>

<p>The idea of <code class="language-plaintext highlighter-rouge">class_name</code> as an option of reflection is that passing a string would allow us to lazy autoload the class.</p>

<p>Using the class directly, with something like</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>belongs_to :client, class_name: Customer
</code></pre></div></div>

<p>is eagerloading models more than necessary and creating possible circular dependencies.</p>

<p>This option is now deprecated, pass strings of the class names instead.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from <a href="https://twitter.com/vipulnsward">Vipul</a> . I hope you enjoyed this issue. </p>

<p>If you haven’t already, start working on those RailsConf proposals, you have only 6 days left to <a href="http://cfp.railsconf.com/events/railsconf2017">submit a good talk</a>!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2017/1/6/this-week-in-rails-starting-the-year-with-over-100-commits/" rel="bookmark">This Week in Rails: Starting the year with over 100 commits</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2017-01-06 00:00:00 +0000">January 6, 2017 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy new year! How was your holiday break? Did you receive nice presents?
In case you missed it, Ruby 2.4.0 was released on Christmas day so if you haven’t done it yet… <code class="language-plaintext highlighter-rouge">rbenv install 2.4.0</code> right now!</p>

<p>The first week of 2017 has seen <a href="https://github.com/rails/rails/compare/master@%7B2016-12-31%7D...@%7B2017-01-06%7D">more than 100 commits to rails/rails</a>. 
Congratulations to all the <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161231-20170106">32 contributors</a>, in particular to the 8 people who contributed for the first time. Keep up the good work!</p>

<p>Here are the most relevant changes to rails master for this week.</p>

<h2 id="new">New</h2>

<h3 id="allow-to-set-custom-content-type-for-email-attachments"><a href="https://github.com/rails/rails/pull/27227">Allow to set custom content type for email attachments</a></h3>

<p>With Action Mailer it’s now easy to specify the content type of your attachments. E.g.: <code class="language-plaintext highlighter-rouge">mail(body: "\&lt;h1\&gt;Hello\&lt;/h1\&gt;", content_type: "text/html")</code>.</p>

<h3 id="added-option-to-activerecordcountercache-methods"><a href="https://github.com/rails/rails/commit/bf77e641ce807857fcf804250c4f8ce817ae66be">Added option to ActiveRecord::CounterCache methods</a></h3>

<p>You can now ask Active Record to update specific timestamp columns when incrementing, decrementing, resetting, or updating counter caches.</p>

<h3 id="default-railsenv-to-development-when-missing"><a href="https://github.com/rails/rails/pull/27399">Default Rails.env to development when missing</a></h3>

<p>If your app does not set <code class="language-plaintext highlighter-rouge">RAILS_ENV</code> or <code class="language-plaintext highlighter-rouge">RACK_ENV</code> then the value of <code class="language-plaintext highlighter-rouge">Rails.env</code> will fall back to <code class="language-plaintext highlighter-rouge">development</code> rather than just being an empty string.</p>

<h2 id="improved">Improved</h2>

<h3 id="improve-arraysum-with-ruby-refinements"><a href="https://github.com/rails/rails/pull/27363">Improve Array#sum with Ruby refinements</a></h3>

<p>Array#sum was defined in Rails with a monkey-patch. Ruby 2.0 introduced refinements for better encapsulation. This is the first PR where they are being used in rails/rails.</p>

<h3 id="ensure-rails-42-works-with-ruby-24"><a href="https://github.com/rails/rails/pull/27473">Ensure Rails 4.2 works with Ruby 2.4</a></h3>

<p>Some tests and code have been fixed and backported to 4-2-stable so that running Rails 4.2 on Ruby 2.4 will not raise any error. </p>

<h3 id="change-return-value-of-duplicable"><a href="https://github.com/rails/rails/pull/27293">Change return value of <code class="language-plaintext highlighter-rouge">duplicable?</code></a></h3>

<p>In Ruby 2.4, NilClass, FalseClass, TrueClass, Symbol and Numeric all support <code class="language-plaintext highlighter-rouge">dup</code>. For consistency, <code class="language-plaintext highlighter-rouge">duplicable?</code> will now return <code class="language-plaintext highlighter-rouge">true</code> for all these classes.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="serialize-json-attribute-value-nil-as-sql-null"><a href="https://github.com/rails/rails/pull/25670">Serialize JSON attribute value nil as SQL NULL</a></h3>

<p>The way in which a <code class="language-plaintext highlighter-rouge">nil</code> JSON payload is stored in a database was inadvertently changed in Rails 5.0. This fix maps <code class="language-plaintext highlighter-rouge">nil</code> to SQL <code class="language-plaintext highlighter-rouge">NULL</code>, exactly as how it was in Rails 4.x.</p>

<h3 id="fix-generator-command-for-nested-namespaced-rails-engines"><a href="https://github.com/rails/rails/pull/27550">Fix generator command for nested namespaced rails engines</a></h3>

<p>If the name of your Rails engine has a hyphen then this PR (fixing the path of namespaced controllers) is for you! </p>

<h3 id="update-cookies-helper-on-all-http-requests"><a href="https://github.com/rails/rails/pull/27586">Update <code class="language-plaintext highlighter-rouge">cookies</code> helper on all HTTP requests</a></h3>

<p>This fixes a regression by which cookies were only updated on GET requests. Now we will update the helper for all requests.</p>

<h2 id="removed">Removed</h2>

<h3 id="remove-support-for-mysql"><a href="https://github.com/rails/rails/pull/27435">Remove support for MySQL</a></h3>

<p>MySQL 5.0 reached “end of life” more than five years ago. Rails now requires at least version 5.1.10.</p>

<h3 id="remove-previously-deprecated-code"><a href="https://github.com/rails/rails/commit/e229580b4b1d4001b5a9450e0a50e0c33a779fe1">Remove previously deprecated code</a></h3>

<p>By now, you should have already dropped any reference to Rake’s <code class="language-plaintext highlighter-rouge">db:test:clone</code>, Configuration’s <code class="language-plaintext highlighter-rouge">serve_static_files</code> and <code class="language-plaintext highlighter-rouge">static_cache_control</code> and ActiveRecord’s <code class="language-plaintext highlighter-rouge">uniq</code>, <code class="language-plaintext highlighter-rouge">uniq!</code>, <code class="language-plaintext highlighter-rouge">uniq_value</code>, <code class="language-plaintext highlighter-rouge">insert_sql</code>, <code class="language-plaintext highlighter-rouge">update_sql</code>, <code class="language-plaintext highlighter-rouge">delete_sql</code>.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from <a href="https://github.com/claudiob">Claudio</a>. I hope you enjoyed this issue. And now… let me go back to writing my RailsConf proposal… I only have 14 days left to <a href="http://cfp.railsconf.com/events/railsconf2017">submit a good talk</a>!</p>

<p>See you all in Phoenix at the end of April!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/12/10/this-week-in-rails-yarn-webpack-bigint-pks-and-more/" rel="bookmark">This Week in Rails: yarn, webpack, BIGINT PKs and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-12-10 00:00:00 +0000">December 10, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone, this is <a href="https://twitter.com/chancancode">Godfrey</a> reporting from Portland, OR. This week has been a mix bag for me – on one hand, Portland had a pretty miserable week due to <a href="http://www.oregonlive.com/weather/index.ssf/2016/12/portland_winter_weather_decemb.html">the storm</a>; on the other hand, a lot of exciting changes landed in Rails. Does that make things even? I guess we’ll go through the changes and you can decide for yourself!</p>

<h2 id="featured">Featured</h2>

<h3 id="yarn-is-good-yarn-works"><a href="https://github.com/rails/rails/pull/27300">“Yarn is good. Yarn works.”</a></h3>

<p>Last week, we mentioned that <a href="https://github.com/rails/rails/pull/26836">Rails 5.1 is gaining a <strong>–yarn</strong>  option</a>. This option is now promoted to be the default: every new Rails app will be set up to use yarn out-of-the-box. It’s also worth noting that yarn packages <a href="https://github.com/rails/rails/pull/27245">are now installed into the <strong>vendor/node_modules</strong> directory</a>.</p>

<h3 id="basic-webpack-integration"><a href="https://github.com/rails/rails/pull/27288">Basic webpack integration</a></h3>

<p>While we are talking about JavaScript, the asset bundling side of things is also getting some love. Rails 5.1 will gain first-class support for webpack via the <strong>–webpack</strong> option. This is still a pretty early spike, so definitely try it out and <a href="https://github.com/rails/webpacker#work-left-to-do">help improve it</a>.</p>

<h3 id="change-default-primary-keys-to-bigints"><a href="https://github.com/rails/rails/pull/26266">Change default primary keys to BIGINTs</a></h3>

<p><a href="https://twitter.com/schneems/status/731167572096253952">Friends don’t let friends use INT as a primary key</a> – your app might hit Webscale™ before you know it, resulting in much sadness when your primary key column overflows. To help put you on the right path, Rails 5.1 will default to using BIGINTs for primary key columns in MySQL and PostgreSQL.</p>

<h2 id="new">New</h2>

<h3 id="introduce-activerecordnotnullviolation-error"><a href="https://github.com/rails/rails/pull/25451">Introduce <code class="language-plaintext highlighter-rouge">ActiveRecord::NotNullViolation</code> error</a></h3>

<p>As of this pull request, if your model failed to save due to a NOT NULL constraint, Rails will raise a <strong>NotNullViolation</strong> error (instead of a generic <strong>StatementInvalid</strong> error) so you could rescue the error and handle it appropriately.</p>

<h2 id="improved">Improved</h2>

<h3 id="speeding-up-rspec-integration-tests-by-40"><a href="https://github.com/rails/rails/pull/27271">Speeding up RSpec integration tests by 40%</a></h3>

<p>This patch fixes an issue where templates are needlessly recompiled between integration test, resulting in a significant speedup.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="idempotent-after_commit-callbacks"><a href="https://github.com/rails/rails/pull/27248">Idempotent <code class="language-plaintext highlighter-rouge">after_commit</code> callbacks</a></h3>

<p>Previously, certain race conditions could cause your <strong>after_commit</strong> callbacks to fire more often than expected. This patch attempts to more accurately track the work that actually happened in the database to ensure your hooks are triggered only when appropriate.</p>

<h3 id="allow-variales-named-block-in-templates"><a href="https://github.com/rails/rails/pull/27303">Allow variales named <code class="language-plaintext highlighter-rouge">block</code> in templates</a></h3>

<p>Have you tried using variables named <strong>block</strong>  in your templates? If you did, you might have seen a pretty strange error from Rails. Not anymore! With this patch, you would be able to do that without issues.</p>

<h3 id="exclude-singleton-classes-from-subclasses-and-descendants"><a href="https://github.com/rails/rails/commit/4e73ffa9b45904492815f8f67d4695ef719e0350">Exclude singleton classes from <code class="language-plaintext highlighter-rouge">subclasses</code> and <code class="language-plaintext highlighter-rouge">descendants</code></a></h3>

<p><a href="https://bugs.ruby-lang.org/issues/11360">A change in Ruby 2.3.0</a>unexpectedly changed the behavior of Active Support’s <strong>Class#subclasses</strong> and <strong>Class#descendants</strong>  methods to include singleton classes. This patch restores the previous behavior and made things consistent across different versions of Ruby (again).</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, so please feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-11-19%7D...@%7B2016-11-25%7D">check them out</a> yourself!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/12/3/this-week-in-rails-jquery-no-longer-part-of-rails-and-more/" rel="bookmark">This Week in Rails: jQuery no longer part of Rails and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-12-03 00:00:00 +0000">December 3, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone!</p>

<p><a href="https://twitter.com/_cha1tanya">Prathamesh</a> and <a href="https://twitter.com/gregmolnar">Greg</a> here, bringing you all the latest from This Week in Rails…..<br />
Which is actually “Past 2 weeks in Rails” because we missed to send last week’s issue due to illness. But we are back now, so let’s see what happened in the Rails world since the last issue.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161119-20161202">This week’s Rails contributors</a></h3>

<p>The past 2 weeks 38 awesome people contributed to Rails. Want to be part of the show? Head to the <a href="https://github.com/rails/rails/issues">issues</a> list and make a contribution!</p>

<h3 id="jquery-is-no-longer-a-dependency-of-rails"><a href="https://github.com/rails/rails/pull/27113">jQuery is no longer a dependency of Rails</a></h3>

<p>The Rails javascript helpers has been rewritten in a new gem called <em>rails-ujs</em> and they use vanilla javascript, so jQuery is not a dependency of Rails anymore.</p>

<h3 id="rails-501rc1-has-been-released"><a href="http://weblog.rubyonrails.org/2016/11/30/Rails-5-0-1-rc1-has-been-released/">Rails 5.0.1.rc1 has been released!</a></h3>

<p>The first release candidate for 5.0.1 has been released and if no issues found, the final will be release on the 6th of December.</p>

<h2 id="improved">Improved</h2>

<h3 id="form_with-helper-to-unify-form_tag-and-form_for"><a href="https://github.com/rails/rails/pull/26976">form_with helper to unify form_tag and form_for</a></h3>

<p>The <em>form_for</em> and <em>form_tag</em> helpers serve a very similar use-case so they been unified with the new <em>form_with</em> helper.</p>

<h3 id="make-the-second-argument-to-attribute-optional"><a href="https://github.com/rails/rails/commit/1bdc395d956f789b6612796ac6f130cde90d3066">Make the second argument to attribute optional</a></h3>

<p>A default for the <em>cast_type</em> option of the attribute method has been added to enable calling this method with just the attribute name.</p>

<h3 id="active-record-connections-improvement"><a href="https://github.com/rails/rails/pull/27108">Active Record connections improvement</a></h3>

<p>Active Record distributed the connection to previously blocked threads on when it cleared the reloadable connections, but with this change the same happens on disconnect too.</p>

<h3 id="use-gen_random_uuid-for-postgresql--94"><a href="https://github.com/rails/rails/pull/25395">Use gen_random_uuid() for PostgreSQL &gt;= 9.4</a></h3>

<p>With this change, Active Record uses the recommended UUID function depending on the underlying PostgreSQL server’s version, while maintaining uuid_generate_v4() in older migrations.</p>

<h2 id="new">New</h2>

<h3 id="add-yarn-support-in-new-apps-using-yarn-option-by-liceth--pull-request-26836--railsrails--github"><a href="https://github.com/rails/rails/pull/26836">Add Yarn support in new apps using –yarn option by Liceth · Pull Request #26836 · rails/rails · GitHub</a></h3>

<p>yarn, the javascript package manager is supported in Rails now! You can pass the –yarn option when you generate a new rails app and Rails will create the necessary config files and run yarn install after bundle install automatically.</p>

<h3 id="introduce-reload_-reader-for-singular-associations"><a href="https://github.com/rails/rails/pull/27133">Introduce <code class="language-plaintext highlighter-rouge">reload\_</code> reader for singular associations</a></h3>

<p>This patch introduced _Model#reload_<association>_ to bring back force reloading of the association reader.</association></p>

<h2 id="fixed">Fixed</h2>

<h3 id="update_all-and-delete_all-is-fixed-when-chained-with-left_joins"><a href="https://github.com/rails/rails/pull/27193">update_all and delete_all is fixed when chained with left_joins</a></h3>

<p>These batch methods didn’t use the left outer joins before, but with this fix they behave properly now.</p>

<h3 id="fix-a-force-ssl-redirection-bug"><a href="https://github.com/rails/rails/pull/27140">Fix a force ssl redirection bug</a></h3>

<p>This PR fixes a bug with the force ssl redirection when the session_store is disabled.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-11-19%7D...@%7B2016-11-25%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/11/18/this-week-in-rails-active-support-deprecations-and-more/" rel="bookmark">This Week in Rails: Active Support deprecations and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2016-11-18 00:00:00 +0000">November 18, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone!</p>

<p><a href="https://twitter.com/imtayadeway">Tim</a> here bringing you all the latest from This Week in Rails…..</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161112-20161118">This Week’s Rails Contributors</a></h3>

<p>This week 29 lovely people contributed to Rails, including an incredible 9 for the time! Why not put yourself in the next installment of This Week in Rails by tackling one of the <a href="https://github.com/rails/rails/issues">open issues</a> out there?</p>

<h2 id="improved">Improved</h2>

<h3 id="remove-active-support-deprecations"><a href="https://github.com/rails/rails/pull/27035">Remove Active Support deprecations</a></h3>

<p>In preparation for the 5.1 release, methods marked as deprecated in 5.0 are being removed. If you’ve been seeing any of these warnings, you need to get on ‘em now! Notably, this PR waves goodbye to ‘alias_method_chain’ , which was made obsolete by Ruby 2.0+’s ‘Module#prepend’</p>

<h2 id="fixed">Fixed</h2>

<h3 id="support-acparameters-for-pg-hstore"><a href="https://github.com/rails/rails/pull/27058">Support AC::Parameters for PG HStore</a></h3>

<p>As of Rails 5, Active Record determines that a value needs to be serialized if it is a ‘Hash’ object. If passed an ‘ActionController::Parameters’ object instead (which no longer inherits from ‘Hash’ ), serialization would break. This change restores the original behavior.</p>

<h3 id="fix-json-encoding-of-infinity-and-nan-values"><a href="https://github.com/rails/rails/pull/26933">Fix JSON encoding of “Infinity” and “NaN” values</a></h3>

<p>If ‘as_json’ returns “Infinity” or “NaN” for any value, it causes ‘JSON.generate’ to 💥 because these values are not allowed in JSON. Instead of being treated as primitives, ‘as_json’ is called on these values recursively, so that they are properly serialized as “null”. Phew!</p>

<h3 id="fix-incorrect-output-from-rails-routes-when-using-singular-resources"><a href="https://github.com/rails/rails/pull/27089">Fix incorrect output from rails routes when using singular resources</a></h3>

<p>‘rails routes’ was showing some incorrect output if you had singular resources defined. Specifically, routes for the # ‘show’ action would appear under the “edit” helper, which is clearly wrong. Thanks to the rjigging of the order in which they appear in this PR, your routes should now be correct!</p>

<h3 id="correctly-count-new-records-when-calling-uniq-on-associations"><a href="https://github.com/rails/rails/pull/26980">Correctly count new records when calling uniq on associations</a></h3>

<p>If ‘CollectionProxy’ has more than one new record, a call to ‘uniq’ would yield the wrong result. This was because this method was aliased to ‘distinct’ , which is really a different concept. The original behavior was restored thanks to this reversion.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-11-12%7D...@%7B2016-11-18%7D">check them out</a>!</p>

<p>Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/11/11/this-week-in-rails-better-statistics-query-caching-fixes-and-more/" rel="bookmark">This Week in Rails: connection statistics, query caching fixes and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2016-11-11 00:00:00 +0000">November 11, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone!</p>

<p>And welcome to our special edition from, live from <a href="http://rubyconf.org/">RubyConf</a> in Cincinnati 😎.</p>

<p>This is <a href="https://twitter.com/vipulnsward">Vipul</a> along with <a href="https://twitter.com/imtayadeway">Tim</a> and <a href="https://twitter.com/_cha1tanya">Prathamesh</a> teaming together to bring you all the latest news from the Rails community. 
Lets get started!</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161105-20161111">Rails Contributors</a></h3>

<p>This week 20 people contributed to Rails. We also got 3 first time contributors.
Thanks all for your amazing contributions ❤️</p>

<p>If you too are looking to help out, head over to our <a href="https://github.com/rails/rails/issues">issues</a>.</p>

<h2 id="improved">Improved</h2>

<h3 id="active-record-connection-pool-adds-a-stat-method"><a href="https://github.com/rails/rails/pull/26988">Active Record connection pool adds a stat method</a></h3>

<p><code class="language-plaintext highlighter-rouge">ActiveRecord::Base.connection_pool</code> now has a <code class="language-plaintext highlighter-rouge">stat</code> method that returns statistics about the current status of a connection pool. For Example:</p>

<div class="language-ruby highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="o">&gt;&gt;</span> <span class="no">ActiveRecord</span><span class="o">::</span><span class="no">Base</span><span class="p">.</span><span class="nf">connection_pool</span><span class="p">.</span><span class="nf">stat</span>
<span class="o">=&gt;</span> <span class="p">{</span> <span class="ss">max: </span><span class="mi">25</span><span class="p">,</span> <span class="ss">total: </span><span class="mi">1</span><span class="p">,</span> <span class="ss">busy: </span><span class="mi">1</span><span class="p">,</span> <span class="ss">dead: </span><span class="mi">0</span><span class="p">,</span> <span class="ss">idle: </span><span class="mi">0</span><span class="p">,</span> <span class="ss">num_waiting: </span><span class="mi">0</span><span class="p">,</span> <span class="ss">checkout_timeout: </span><span class="mi">5</span> <span class="p">}</span>
</code></pre></div></div>

<h3 id="avoid-unscopeorder-when-limit-is-passed-for-a-count-query"><a href="https://github.com/rails/rails/pull/26972">Avoid <code class="language-plaintext highlighter-rouge">unscope(:order)</code> when limit is passed for a count query</a></h3>

<p>If a <code class="language-plaintext highlighter-rouge">limit</code> is passed, record fetching order is very important for performance.</p>

<p>This fix makes changes so that we don’t unscope and remove the <code class="language-plaintext highlighter-rouge">order</code> from a count query when a <code class="language-plaintext highlighter-rouge">limit</code> clause is passed to it.</p>

<h3 id="jruby-dependencies-are-now-resolved-for-the-latest-version"><a href="https://github.com/rails/rails/pull/26990">JRuby dependencies are now resolved for the latest version</a></h3>

<p>As part of the ongoing effort of making Rails 5 compatible with JRuby, the test suite got updates for the JRuby version it runs on, to make it satisfy the dependencies required for the tests.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="clear-query-cache-during-checkin-instead-of-an-execution-callback"><a href="https://github.com/rails/rails/pull/26909">Clear query cache during checkin, instead of an execution callback</a></h3>

<p>Previously <code class="language-plaintext highlighter-rouge">ActiveRecord::QueryCache</code> using the new Rails executor may result in dirty query caches across threads. </p>

<p>Releasing a connection in one thread may return it to the pool with cache still enabled and dirty, and the executor lost track of the connection so it may clear another, and another thread may pick up the dirty cache and never turn it off.</p>

<p>This fix makes changes so that query cache does not persist while a connection moves through the pool and is assigned to a new thread.</p>

<h3 id="configure-query-caching-per-thread-on-the-connection-pool"><a href="https://github.com/rails/rails/pull/26978">Configure query caching (per thread) on the connection pool</a></h3>

<p>If the result of <code class="language-plaintext highlighter-rouge">ActiveRecord::Base.connection</code> is different across different threads, enabling the query cache in one thread will have been leaked, which could change the state of another.</p>

<p>This addresses the issue by making query caching local to the current thread.</p>

<h2 id="one-more-thing-">One More Thing ™</h2>

<h3 id="bona-fide-system-testing-in-rails-51"><a href="https://twitter.com/dhh/status/796782788263321600">Bona fide system testing in Rails 5.1</a></h3>

<p>From DHH on Twitter:</p>

<blockquote class="twitter-tweet" data-cards="hidden" data-lang="en">
  <p lang="en" dir="ltr">System tests have finally taken strong hold at <a href="https://twitter.com/basecamp">@Basecamp</a>. Can&#39;t wait for us to level-up <a href="https://twitter.com/rails">@Rails</a> with great defaults for it in 5.1! <a href="https://t.co/eptnu8OcAc">pic.twitter.com/eptnu8OcAc</a></p>
  &mdash; DHH (@dhh) <a href="https://twitter.com/dhh/status/796782788263321600">November 10, 2016</a>
</blockquote>

<p>The <a href="https://github.com/rails/rails/pull/26703">work being done</a> is soon to be bundled into a new gem inside of Rails, that will hopefully be part of Rails 5.1!</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-11-05%7D...@%7B2016-11-11%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/11/4/this-week-in-rails-better-active-record-methods-and-more/" rel="bookmark">This Week in Rails: better Active Record methods and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2016-11-04 00:00:00 +0000">November 4, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing latest news from the Rails community. Stay tuned!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161029-20161104">This Week’s Rails Contributors</a></h3>

<p>This week 22 people contributed to Rails. We also got 6 first time contributors. Welcome aboard folks and keep it going!</p>

<h2 id="improved">Improved</h2>

<h3 id="deprecate-the-behavior-of-activerecorddirty-in-callbacks"><a href="https://github.com/rails/rails/pull/25337">Deprecate the behavior of <code class="language-plaintext highlighter-rouge">ActiveRecord::Dirty</code> in callbacks</a></h3>

<p>The behavior of <code class="language-plaintext highlighter-rouge">Dirty</code> methods inside of <code class="language-plaintext highlighter-rouge">after_(create|update|save)</code> callbacks will be changing in the next version of Rails. <a href="https://github.com/rails/rails/pull/25337#issuecomment-225166796">Click here</a> to check out the API details.</p>

<h3 id="allow-active-record-slice-to-take-an-array-of-methods"><a href="https://github.com/rails/rails/pull/26838">Allow Active Record <code class="language-plaintext highlighter-rouge">slice</code> to take an array of methods</a></h3>

<p>No more having to expand an array with <code class="language-plaintext highlighter-rouge">*</code> when passing it to the <code class="language-plaintext highlighter-rouge">slice</code> method of a model. Something like <code class="language-plaintext highlighter-rouge">user.slice(keys)</code> will Just Work™.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-the-issue-with-duration-of-time-varying-for-dst-changes"><a href="https://github.com/rails/rails/commit/8931916f4a1c1d8e70c06063ba63928c5c7eab1e">Fix the issue with duration of time varying for DST changes</a></h3>

<p>Previously, <code class="language-plaintext highlighter-rouge">ActiveSupport::Duration.parse</code> would try to be consistent across DST boundaries, and either the duration would be shorter or longer depending on the time of year.
Now it uses an absolute reference point in UTC that is not subject to DST transitions.</p>

<h3 id="remove-active-record-tasks-from-bin-scripts-if-it-is-skipped"><a href="https://github.com/rails/rails/pull/26950">Remove Active Record tasks from bin scripts if it is skipped</a></h3>

<p><code class="language-plaintext highlighter-rouge">bin/setup</code> and <code class="language-plaintext highlighter-rouge">bin/update</code> will no longer include <code class="language-plaintext highlighter-rouge">db:setup</code> and <code class="language-plaintext highlighter-rouge">db:migrate</code> if Active Record is skipped in the application.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-10-29%7D...@%7B2016-11-04%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/10/28/this-week-in-rails-scary-monsters-and-nice-css-sprites/" rel="bookmark">👻 🎃 This Week in Rails: Scary Monsters and Nice CSS Sprites!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-10-28 00:00:00 +0000">October 28, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Boo! Hey ghouls and goblins, <a href="https://twitter.com/andatki">Andy</a> here. This is going to be loaded with groan-inducing Halloween-themed puns. If you weren’t turned off already by the Skrillex reference, please keep reading!</p>

<p>Let’s take a look at 👻 Frankenstein fixes, 💀 dead code, and 👿  devilishly-detailed documentation changes…carved out this week! 🎃</p>

<p><img src="https://camo.githubusercontent.com/d780c2320a942b6a37d784fc46df6ee60517bc47/68747470733a2f2f636c2e6c792f31483432335a334e307032342f707265766965772d636861742d494d475f303030392e6a7067" alt="" />
<em>Ruby on Rails Pumpkin, carved by <a href="https://github.com/JackTLi">Jack</a>, <a href="https://github.com/Thadeaus">Graham</a>, <a href="https://github.com/zacharyreynochiasson">Zachary</a> and <a href="http://github.com/mblagden">Matt</a> at Shopify.</em></p>

<h2 id="featured">Featured</h2>

<h3 id="rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">Rails Contributors</a></h3>

<p>We had 22 Ruby on Rails contributors this week, including a first-time contributor. Thanks!</p>

<h2 id="improved">Improved</h2>

<h3 id="permit-loads-while-queries-are-running"><a href="https://github.com/rails/rails/commit/007e50d8e5a900547471b6c4ec79d9d217682c5d">Permit loads while queries are running</a></h3>

<p>A query may wait on a database-level lock, which could lead to a deadlock between threads. No one likes deadlocks. They are the stuff of developers’ nightmares! 💀</p>

<h3 id="remove-unnecessary-respond_toindexes-checks"><a href="https://github.com/rails/rails/pull/26688">Remove unnecessary <code class="language-plaintext highlighter-rouge">respond_to?(:indexes)</code> checks</a></h3>

<p>All database adapters have implemented the <code class="language-plaintext highlighter-rouge">indexes</code> method and support was removed. Some concerns were raised (from the dead? 💀), but the contributor demonstrated the requirement for database adapters to support <code class="language-plaintext highlighter-rouge">indexes</code> in early versions.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="clear-the-correct-query-cache"><a href="https://github.com/rails/rails/commit/fa7efca553e325b2aabb087a4eddf4560c356094">Clear the correct query cache</a></h3>

<p>The correct query cache was not being cleared. The author mentioned that this bug was happening in Sidekiq as well. Check out the details!</p>

<h3 id="fix-habtm-associations"><a href="https://github.com/rails/rails/commit/94821b4bd10464d52b471380c49f85fac43a8ab7">Fix HABTM associations</a></h3>

<p>Use constants, strings, and symbols to express your HABTM associations. Check out the commit for more details.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it for this week. Check out all the changes <a href="https://github.com/rails/rails/compare/master@%7B2016-10-14%7D...@%7B2016-10-21%7D">here</a>. May your bucket (or the buckets of your children) be filled with sweet Halloween treats! 🍬</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/10/21/this-week-in-rails-greener-jruby-optimistier-locking-and-more/" rel="bookmark">This Week in Rails: greener JRuby, optimistier locking and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2016-10-21 00:00:00 +0000">October 21, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey peeps, <a href="https://twitter.com/kaspth">Kasper</a> here.</p>

<p>It’s that time of the week again, when that newsletter you read while frantically checking <a href="http://downforeveryoneorjustme.com">http://downforeveryoneorjustme.com</a> is here.</p>

<p>Oh, you think we’re down, cupcake? I’m afraid that’s just you buddy, we’re fired up and ready to go!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161014-20161021">This weeks Contributors</a></h3>

<p>Did you know you can contribute to Rails? Oh, I’m not kidding! It’s totally open source and everything.</p>

<p>In fact check the next item if you’re looking to join the list, codeslinger!</p>

<h3 id="jruby-turns-rails-green-with-envy"><a href="https://twitter.com/headius/status/788857979655323648">JRuby turns Rails green with envy</a></h3>

<p>Before RubyConf the JRuby team would like to get the whole Rails test suite passing and green.</p>

<p>Already <a href="https://github.com/rails/rails/pull/26854">some</a> <a href="https://github.com/rails/rails/pull/26829">fixes</a> have been <a href="https://github.com/rails/rails/pull/26860">committed</a>. Check out the linked tweet and see if there’s something you can help with.</p>

<h2 id="improved">Improved</h2>

<h3 id="optimistic-locking-unlocks-overriding"><a href="https://github.com/rails/rails/pull/26050">Optimistic locking unlocks overriding</a></h3>

<p>If you’d been a good sport and optimistically tried to set the lock column value, you’d be sorry. Now you would be happy because it’s fixed!</p>

<h3 id="allow-any-key-in-renderer-environment-hash"><a href="https://github.com/rails/rails/pull/26786">Allow any key in Renderer environment hash</a></h3>

<p>Since Rails 5 you’ve been able to render templates outside of your controller actions. Now you can pass in arbitrary keys when performing that kind of rendering.</p>

<h3 id="publicize-process-in-controller-tests"><a href="https://github.com/rails/rails/pull/26793">Publicize process in controller tests</a></h3>

<p>In your <code class="language-plaintext highlighter-rouge">ActionDispatch::IntegrationTest</code> controller tests you can use the <code class="language-plaintext highlighter-rouge">get</code> etc. request shorthands which would just pipe through to a private <code class="language-plaintext highlighter-rouge">process</code> method.</p>

<p>Now that method is public so you can better see the documentation on it.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="prevent-test-framework-from-loading-in-production"><a href="https://github.com/rails/rails/commit/797f1dd63c68eb44c1af358d377cfef271e685c5">Prevent test framework from loading in production</a></h3>

<p>Some <a href="https://github.com/rails/rails/commit/69e5547162af5ce9537230239b66a6887699e7c1">dingus</a> accidentally caused minitest to be loaded in the production environment.</p>

<p>Luckily that’s fixed now!</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it for this week, as usual there were more changes than what we can fit, feel free to check them yourself <a href="https://github.com/rails/rails/compare/master@%7B2016-10-14%7D...@%7B2016-10-21%7D">here</a>. Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/10/14/this-week-in-rails-onward-we-go/" rel="bookmark">This Week in Rails: onward, we go!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2016-10-14 00:00:00 +0000">October 14, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy Friday from sunny Los Angeles!</p>

<p><a href="http://claudiob.github.io">Claudio</a> here with the latest news from the rails/rails repository.
Here’s a recap of the commits and pull requests merged into master this week.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161008-20161014">This week’s Rails contributors</a></h3>

<p>14 programmers contributed to Rails this week, two of the them for the first time. If you haven’t contributed yet, I hope you will join the list next week.</p>

<h2 id="improved">Improved</h2>

<h3 id="actioncable-now-permits-same-origin-connections-by-default"><a href="https://github.com/rails/rails/pull/26568">ActionCable now permits same-origin connections by default</a></h3>

<p>Same-origin connections are now <a href="https://github.com/rails/rails/commit/dae404473409fcab0e07976aec626df670e52282">permitted by default</a>. If you want to stick with the old behavior, you can set <code class="language-plaintext highlighter-rouge">config.action_cable.allow_same_origin_as_host = false</code> </p>

<h3 id="explain-why-autosave-disables-inverse_of"><a href="https://github.com/rails/rails/pull/26730">explain why autosave= disables inverse_of</a></h3>

<p><code class="language-plaintext highlighter-rouge">autosave</code> and <code class="language-plaintext highlighter-rouge">inverse_of</code> do not get along together, since they may for example cause double saves.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="work-around-readclose-race"><a href="https://github.com/rails/rails/pull/26714">Work around read/close race</a></h3>

<p>If one thread calls <code class="language-plaintext highlighter-rouge">close</code> on an IO at the same time that another calls <code class="language-plaintext highlighter-rouge">read</code>, segfaults might have occurred. This has now been fixed!</p>

<h2 id="gone">Gone</h2>

<h3 id="fixnum-and-bignum-are-deprecated-in-ruby-trunk"><a href="https://github.com/rails/rails/pull/26732">Fixnum and Bignum are deprecated in Ruby trunk</a></h3>

<p>A small upgrade to the Rails codebase to have it ready for the upcoming release of Ruby 2.4 which has <a href="https://bugs.ruby-lang.org/issues/12739">deprecated Fixnum and Bignum</a>.</p>

<h3 id="remove-deprecations-in-active-model-action-view-and-active-job"><a href="https://github.com/rails/rails/pull/26755">Remove deprecations in Active Model, Action View and Active Job</a></h3>

<p>And <a href="https://github.com/rails/rails/pull/26746">in Action Pack</a> too. Methods that were deprecated in Rails 5.0 will be gone once Rails 5.1 ships.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it for this week, as usual there were more changes than what we can fit, feel free to check them yourself <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161008-20161014">here</a>. Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/10/8/this-week-in-rails-getting-ready-for-ruby-2-4/" rel="bookmark">This Week in Rails: Getting Ready For Ruby 2.4</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-10-08 00:00:00 +0000">October 8, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><img src="https://camo.githubusercontent.com/7fba9a5c5bb3ee7cb8d9930206b36e2a79faf9a1/68747470733a2f2f7777772e64726f70626f782e636f6d2f732f6b626b6f67366472336d746f7379332f7261696c732d726574726f2d776176652e6a70673f7261773d31" alt="You are reading This Week In Rails!" /></p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20161001-20161007">This week’s Rails contributors</a></h3>

<p>The content for this week’s newsletter is sponsored by the 19 individuals who authored them!</p>

<h3 id="fixnum-and-bignum-are-deprecated-in-ruby-24"><a href="https://github.com/rails/rails/pull/26732">Fixnum and Bignum are deprecated in Ruby 2.4</a></h3>

<p>One of the notable changes in the <a href="https://www.ruby-lang.org/en/news/2016/09/08/ruby-2-4-0-preview2-released/">upcoming Ruby 2.4 release</a> is the unification of <code class="language-plaintext highlighter-rouge">Fixnum</code> and <code class="language-plaintext highlighter-rouge">Bignum</code> into a single <code class="language-plaintext highlighter-rouge">Integer</code> class. Following that change, the legacy classes were <a href="https://bugs.ruby-lang.org/issues/12739">deprecated</a> recently.</p>

<p>This pull request avoids triggering those deprecation warnings with a feature detection. If you maintain code that references those constants, you might want to adopt this pattern in your projects too!</p>

<h3 id="remove-json-gem-dependency"><a href="https://github.com/rails/rails/pull/26729">Remove json gem dependency</a></h3>

<p>Related to the unification of the integer classes: native extensions that references the <code class="language-plaintext highlighter-rouge">rb_cFixum</code> and <code class="language-plaintext highlighter-rouge">rb_cBignum</code> C constants need to be updated as well.</p>

<p>The popular json gem is one of those native extensions. Fortunately, all modern versions of Ruby bundles the json library. If your are targeting Ruby 1.9 and above, you could simply <a href="https://github.com/rdoc/rdoc/pull/412">remove the json gem as a dependency</a>.</p>

<h2 id="improved">Improved</h2>

<h3 id="avoid-bumping-the-class-serial"><a href="https://github.com/rails/rails/pull/26684">Avoid bumping the class serial</a></h3>

<p>Back in May, a <a href="https://github.com/rails/rails/issues/25068">regression</a> was reported that Rails 5 invalidated Ruby’s <code class="language-plaintext highlighter-rouge">class_serial</code> on each request. This internal counter is used to invalidate the class-level <a href="https://tenderlovemaking.com/2015/12/23/inline-caching-in-mri.html">method caches</a>.</p>

<p>The issue was tracked down to the use of <code class="language-plaintext highlighter-rouge">instance_exec</code>. While <a href="https://github.com/rspec/rspec-core/issues/2194#issuecomment-200597089">there is hope</a> that this restriction could be relaxed inside Ruby itself, this patch at least temporarily fixes the problem on Rails’ side.</p>

<h3 id="speed-up-timezonenow"><a href="https://github.com/rails/rails/pull/26359">Speed up Time.zone.now</a></h3>

<p>Once upon a time, <code class="language-plaintext highlighter-rouge">Time.zone.now</code> could be quite a bit slower than the stock <code class="language-plaintext highlighter-rouge">Time.now</code> (allegedly up to 25 times slower). This pull request significantly closes the gap.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="avoid-compiling-ruby-keywords-into-template-locals"><a href="https://github.com/rails/rails/pull/26672">Avoid compiling ruby keywords into template locals</a></h3>

<p>Have you tried rendering a partial while injecting local variables called “class” or “module”? It wouldn’t work, and it will give you a pretty bizarre error.</p>

<p>This pull requests avoids the error by skipping over invalid local
variable names, while still allowing them to be accessed via
<code class="language-plaintext highlighter-rouge">local_assigns</code>.</p>

<p>You can read more about this issue, as well as the story behind this pull request in <a href="http://www.peterschilling.org/blackhole/babys-first-rails-commit/">Peter’s blog post</a>.</p>

<h2 id="gone">Gone</h2>

<h3 id="remove-undocumented-action-cable-faye-mode"><a href="https://github.com/rails/rails/pull/26676">Remove undocumented Action Cable “faye mode”</a></h3>

<p>Did you know that there was an undocumented “faye mode” for Action Cable?</p>

<p>No? Good. Because it’s now gone!</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it for this week, as usual there were more changes than what we can fit, feel free to check them yourself <a href="https://github.com/rails/rails/compare/master@%7B2016-09-24%7D...@%7B2016-09-30%7D">here</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/9/30/this-week-in-rails-cable-got-buffer-callbacks-stripped-and-more/" rel="bookmark">This Week in Rails: cable got buffer, callbacks stripped, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2016-09-30 00:00:00 +0000">September 30, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Cadet, you’re at the new frontier! Orbiting the red planet just yonder, you ponder and wonder:</p>

<p><em>Do Martians drink their Martinis on the rocks?</em></p>

<p>All <a href="https://twitter.com/kaspth">this crew member</a> knows is that he prefers his scoops on the Rails — good news, everyone: We’re setting course for such a delivery!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-multiplanetary-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160924-20160930">This Week’s Multiplanetary Contributors</a></h3>

<p>22 contribunauts came aboard the contributor list this week with their precious commits harvested for the good of all. You’ve earned this heart of gold: 💛</p>

<h3 id="action-cable-buffers-socket-writes"><a href="https://github.com/rails/rails/pull/26646">Action Cable buffers socket writes</a></h3>

<p>Quoting the description:</p>

<p><em>Sockets can sometimes block, leading to reduced system throughput as threads get tied up.</em></p>

<p>Switching to incremental writing allows Action Cable to spread out writes such that a blocked socket can’t block writes to other sockets.</p>

<h3 id="callbacks-leaves-less-backtrace-lines"><a href="https://github.com/rails/rails/pull/26147">Callbacks leaves less backtrace lines</a></h3>

<p>Callbacks — <em>before_action</em> and friends — moved forward by going back this week: back to the backtrace and removing traces of itself. Try that, McFly!</p>

<p>Check the description for an example, it’s quite easier to see in action.</p>

<h2 id="improved">Improved</h2>

<h3 id="rails-test-runner-supports-after_run-hooks"><a href="https://github.com/rails/rails/pull/26515">Rails’ test runner supports <em>after_run</em> hooks</a></h3>

<p>The Rails test runner switched to using minitest’s <em>autorun</em> across the board, as such it gained support for <em>Minitest.after_run</em> hooks.</p>

<p><em>autorun</em> also guards against running tests twice, which could happen in some cases. But that’s now fixed too.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="dont-leak-activemodelerrors-default_proc"><a href="https://github.com/rails/rails/pull/26640">Don’t leak <em>ActiveModel::Errors</em> <em>default_proc</em></a></h3>

<p>Previously when serializing <em>ActiveModel::Errors</em> via <em>to_hash</em> or <em>as_json</em> for instance, the <em>default_proc</em> would hide in the engine compartment and spring out when the crew was out of orbit.</p>

<p>No more of those alien capers on this ship!</p>

<h3 id="make-as-option-also-set-request-format"><a href="https://github.com/rails/rails/pull/26573">Make :as option also set request format</a></h3>

<p>In Rails 5 you can make an <em>as</em> of your test requests, <em>as: :json</em> that is.</p>

<p>After adding the option to <em>ActionController::TestCase</em> last week, we’ve opened the pod bay doors once ensuring the <em>format</em> is just right_._</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s it for this week, as usual there were more changes than what we can fit, feel free to check them yourself <a href="https://github.com/rails/rails/compare/master@%7B2016-09-24%7D...@%7B2016-09-30%7D">here</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/9/18/this-week-in-rails-your-golden-ticket-to-the-chocolate-factory/" rel="bookmark">This Week in Rails: 🍫 Your Golden Ticket to the Chocolate Factory 🍫</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">jonatack</span></span>,
              <span class="published" title="2016-09-18 00:00:00 +0000">September 18, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><a href="https://twitter.com/jonatack">Jon</a> here welcoming you to This Week in Rails!</p>

<p>Today we’ll be touring the wondrous <strong>Ruby on Rails chocolate factory</strong> to see how its marvelous candy, consumed by web apps and developers everywhere, is made and tested.</p>

<p>Golden tickets in hand? Let’s go!</p>

<h2 id="welcome-">Welcome! 🎩</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160910-20160916">This Week’s Rails Contributors</a></h3>

<p>This week, <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160910-20160916">26 fabulous oompa-loompas</a> concocted improvements to make your favorite candy even more delicious – including one for the first time!</p>

<h3 id="fix-bundler-warnings-about-insecure-github-sources"><a href="https://github.com/rails/rails/commit/12d5c21">Fix Bundler warnings about insecure github sources</a></h3>

<p>If you upgrade to bundler 1.13 and use <strong>github</strong> options to specify gem sources in your Gemfile, you’ll see warnings when running bundle commands.</p>

<p>To fix, you can run <strong>bundle config github.https true</strong> on the command line.</p>

<p>Or if you don’t control the environment the Gemfile will execute in, you can add this to the Gemfile, like Rails now does:</p>

<p><strong>git_source(:github) |repo_name| do<br />
  “https://github.com/#{​repo_name}​.git”<br />
end</strong></p>

<p>Backported to 5-0-stable.</p>

<h2 id="improving-the-chocolate-">Improving the chocolate 🍩🍫</h2>

<h3 id="puma-docs-disconnect-connections-before-preloading"><a href="https://github.com/rails/rails/pull/26314">Puma docs: Disconnect connections before preloading</a></h3>

<p>This pull request added documentation for <strong>config/puma.rb</strong> to recommend closing database connections if preloading an application that uses Active Record. See the discussions in the <a href="https://github.com/rails/rails/pull/26314">pull request</a> and in <a href="https://github.com/puma/puma/issues/1001">puma/puma#1001</a> for more.</p>

<h3 id="improve-assert_response-helper"><a href="https://github.com/rails/rails/pull/26477">Improve assert_response helper</a></h3>

<p>To improve productivity when writing tests, if an <strong>assert_response</strong> test fails, Rails nows outputs the actual response body if it’s not too large (less than or equal to 500 chars).</p>

<h2 id="fixing-bugs-in-the-candy-">Fixing bugs in the candy 🍬</h2>

<h3 id="clear-attribute-changes-after-touching"><a href="https://github.com/rails/rails/pull/26497">Clear attribute changes after touching</a></h3>

<p>Following-up on a very good <a href="https://github.com/rails/rails/issues/26496">bug report</a>, this PR fixed a Rails 5 regression so that calling <strong>ActiveRecord#touch</strong> when using optimistic locking once again leaves the model in a non-dirty state with no attribute changes.</p>

<h3 id="prevent-mutation-of-constants"><a href="https://github.com/rails/rails/pull/26442">Prevent mutation of constants</a></h3>

<p>Tests using <strong>ActionDispatch::IntegrationTest</strong> were failing when run after any controller test that modified <strong>request.session_options</strong>. It turned out that  <strong>ActionController::TestSession::DEFAULT_OPTIONS</strong> was being mutated, and as a result, <strong>Rack::Session::Abstract::Persisted::DEFAULT_OPTIONS</strong> also, which made integration tests inherit that value and fail.</p>

<p>This pull request dup’ed the AC default options constant to prevent mutation, and a <a href="https://github.com/rack/rack/pull/1110">pull request to Rack</a> was merged to freeze the Rack default options constant and avoid the issue in the future.</p>

<h3 id="force-correct-namespace-with-transactionmanager"><a href="https://github.com/rails/rails/commit/f62451a">Force correct namespace with TransactionManager</a></h3>

<p>This pull request fixed <a href="https://github.com/rails/rails/issues/26441">issue #26441</a>: “NameError: uninitialized constant AR::ConnectionAdapters::DatabaseStatements::TransactionManager when calling reset_transaction”.</p>

<h2 id="how-to-contribute-some-examples-from-this-week-">How to contribute? Some examples from this week 🍰</h2>

<h3 id="fix-warnings-in-the-test-suite"><a href="https://github.com/rails/rails/pull/26484">Fix warnings in the test suite</a></h3>

<p>Running the Rails test suite can be a great way to uncover minor issues to fix. This pull request addressed 2 warnings in the test suite that arose simply from not wrapping a method argument in parentheses.</p>

<h3 id="add-missing-tests"><a href="https://github.com/rails/rails/pull/26459">Add missing tests</a></h3>

<p>Noticing that there were no tests for when <strong>ActiveRecord::Enum#enum</strong> was called with a specific suffix, this contributor added some.</p>

<h3 id="improve-the-rails-guides"><a href="https://github.com/rails/rails/pull/26478">Improve the Rails Guides</a></h3>

<p>Better documentation is always welcome. After seeing <a href="https://github.com/rails/rails/issues/26286">issue #26286</a>, this contributor helpfully improved the documentation for the <strong>render partial ‘as’</strong> option.</p>

<h3 id="add-a-bug-report-template"><a href="https://github.com/rails/rails/pull/26488">Add a bug report template</a></h3>

<p>The commit message says it all: <em>“I created this for testing migrations in isolation and thought it would be helpful to others in the future to avoid having to dig through the Rails migration tests.”</em></p>

<h3 id="remove-duplicate-code"><a href="https://github.com/rails/rails/pull/26462">Remove duplicate code</a></h3>

<p>This <strong>elsif</strong> branch was a duplicate of the <strong>else</strong> branch just after it. You’ll never believe what happened next 😮.</p>

<h2 id="how-to-inherit-a-world-of-unlimited-imagination-">How to inherit a world of unlimited imagination 🍭</h2>

<p>That’s it for today’s tour, but the true journey has only just begun.</p>

<p>Starting today, choose any file in the <a href="https://github.com/rails/rails">Rails codebase</a> and read it.</p>

<p>Pick an <a href="https://github.com/rails/rails/issues/">open issue</a> on the master branch, and try to reproduce the bug using the <a href="https://github.com/rails/rails/tree/master/guides/bug_report_templates">Rails bug report templates</a>.</p>

<p>Go through the <a href="http://edgeguides.rubyonrails.org/contributing_to_ruby_on_rails.html">Contributing to Ruby on Rails Guide</a>. Set up your Rails test environment.</p>

<p>Pick an <a href="https://github.com/rails/rails/pulls">open pull request</a> and test it or review it.</p>

<p>You’ll be surprised what baby steps like these can lead to!</p>

<p>Enjoy the wonderful chocolate – and see you next week.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/9/10/this-week-in-rails-ruby-2-4-compat-attachments-in-preview-emails-fixture_file_upload-and-more/" rel="bookmark">This Week in Rails: Ruby 2.4 compat, attachments in preview emails, fixture_file_upload and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">prathamesh</span></span>,
              <span class="published" title="2016-09-10 00:00:00 +0000">September 10, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Howdy everyone!</p>

<p>This is <a href="https://twitter.com/_cha1tanya/">Prathamesh</a> bringing you the changes from this week in Rails!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160903-20160909">This Week’s Rails Contributors</a></h3>

<p>This week we had 22 awesome people making Rails better. We also had 3 people contributing for the first time. </p>

<h3 id="one-more-step-towards-ruby-24-compatibility"><a href="https://github.com/rails/rails/pull/25758">One more step towards Ruby 2.4 compatibility</a></h3>

<p><a href="https://www.ruby-lang.org/en/news/2016/09/08/ruby-2-4-0-preview2-released/">Ruby 2.4 is coming!</a> If you have already tried it with Rails 5, a <a href="https://github.com/rails/rails/issues/25185"><strong><em>key must be 32 bits</em></strong></a> error was raised due to a <a href="https://github.com/ruby/ruby/commit/ce635262f53b760284d56bb1027baebaaec175d1">breaking change</a> in Ruby 2.4 related to openssl cipher key lengths. It is now fixed, while keeping backward compatibility with any existing signed data. 🎉</p>

<h2 id="improved">Improved</h2>

<h3 id="allow-download-of-email-attachments-in-the-mailer-previews"><a href="https://github.com/rails/rails/pull/26371">Allow download of email attachments in the Mailer Previews</a></h3>

<p>Now we can download email attachments in mailer previews similar to real-world emails thanks to this change.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="make-fixture_file_upload-work-in-integration-tests"><a href="https://github.com/rails/rails/pull/26384">Make fixture_file_upload work in integration tests</a></h3>

<p>This change makes sure that the  <strong><em>fixture_file_upload</em></strong>   test helper works properly in integration tests. In case you missed it, integration tests are the default way of testing controllers in Rails 5.</p>

<h3 id="use-proper-test-adapter-for-active-jobs-inheriting-from-applicationjob"><a href="https://github.com/rails/rails/pull/26391">Use proper test adapter for Active Jobs inheriting from ApplicationJob</a></h3>

<p>Rails 5 introduced <strong><em>ApplicationJob</em></strong> as the default base class for Active Job classes. When testing these classes, the proper test adapter was not being invoked due to looking for <em>subclasses</em> of <strong><em>ActiveJob::Base</em></strong> instead of its <em>descendants</em>. This change fixes it.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>Although I enjoyed reviewing all the commits from the last week, there were as usual too many to mention exhaustively. But do check them out yourself <a href="https://github.com/rails/rails/compare/master@%7B2016-09-03%7D...@%7B2016-09-09%7D">here</a>!
 
Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/9/3/this-week-in-rails-speedier-times-explicit-public-assets-and-more/" rel="bookmark">This Week in Rails: Speedier Times, Explicit Public Assets and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2016-09-03 00:00:00 +0000">September 3, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Oh, hello there!</p>

<p>This is <a href="https://twitter.com/imtayadeway">Tim</a> here bringing you your latest installment of This Week in Rails. We had another corker this week chock full of great updates - read on for the full details!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160827-20160902">This Week’s Rails Contributors</a></h3>

<p>This week saw 99 commits from 27 fantabulous people contributed to Rails, including an amazing 5 first-timers! If you’d like to see your name up there next week, why not take a gander at the <a href="https://github.com/rails/rails/issues">issues board</a>, or you may even consider the next item for inspiration….</p>

<h3 id="documentation-galore"><a href="https://github.com/rails/rails/pulls?q=is%3Apr+is%3Amerged+base%3Amaster+merged%3A%222016-08-27+..+2016-09-02%22+sort%3Acreated-desc+label%3Adocs">Documentation Galore</a></h3>

<p>This week saw a whopping 11 documentation PRs successfully merged. Improvements to the documentation are not only gratefully received, but are a great way to start getting involved.</p>

<h2 id="improved">Improved</h2>

<h3 id="make-public-asset-use-explicit"><a href="https://github.com/rails/rails/pull/26226">Make public asset use explicit</a></h3>

<p>When calling <code class="language-plaintext highlighter-rouge">asset_path</code> with an invalid file name, this method would simply pass the string that you gave it back to you. This revision adds a configurable flag called <code class="language-plaintext highlighter-rouge">unknown_asset_fallback</code> which when set to <code class="language-plaintext highlighter-rouge">false</code> will raise an error if the asset is not found. Setting it to <code class="language-plaintext highlighter-rouge">true</code> will preserve the current behavior, but will indicate that it is being deprecated.</p>

<h3 id="dont-unnecessarily-load-a-belongs_to-when-saving"><a href="https://github.com/rails/rails/pull/23498">Don’t unnecessarily load a belongs_to when saving</a></h3>

<p>This change prevents an already-loaded model from being reloaded if its id gets assigned to another model in a <code class="language-plaintext highlighter-rouge">belongs_to</code> association and then saved.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-performance-regression-in-timewithzoneto_time"><a href="https://github.com/rails/rails/pull/25880">Fix performance regression in TimeWithZone#to_time</a></h3>

<p>Up until Rails 4.0.0.beta1, <code class="language-plaintext highlighter-rouge">TimeWithZone#to_time</code> could return a cached instance attribute. Since that release it has been coercing the value to a <code class="language-plaintext highlighter-rouge">Time</code> on each call. This revision reverts the old behavior, which, according to the author’s benchmarks, is over 5 times faster.</p>

<h3 id="allow-send_file-to-declare-a-charset"><a href="https://github.com/rails/rails/pull/26317">Allow send_file to declare a charset</a></h3>

<p>Previously, calling <code class="language-plaintext highlighter-rouge">send_file</code> with <code class="language-plaintext highlighter-rouge">type: "text/calendar; charset=utf-8"</code> , would result in the charset’s being deleted - a bug that was fixed in this PR.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>Although I enjoyed reviewing all the commits from the last week, there were as usual too many to mention exhaustively. But do check them out yourself <a href="https://github.com/rails/rails/compare/master@%7B2016-08-27%7D...@%7B2016-09-02%7D">here</a>!</p>

<p>Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/8/27/this-week-in-rails-bad-puns-dad-jokes-and-other-useless-information/" rel="bookmark">This Week in Rails: Bad Puns, Dad Jokes And Other Useless Information! </a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-08-27 00:00:00 +0000">August 27, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello there!</p>

<p>Yes, this is <a href="https://twitter.com/chancancode">Godfrey</a> again. I am glad a lot of you found last week’s <a href="https://rails-weekly.ongoodbits.com/2016/08/20/read-me-to-learn-a-cool-trick">Cool Trick™</a> useful. However, wouldn’t life be pretty boring if you just keep getting useful information? So I figured I would change things up a bit by delivering you an issue full of bad puns, dad jokes and other useless information. Let’s get to it!</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160820-20160826">This Week’s Rails Contributors</a></h3>

<p>This week, 11 new contributors along with 19 other returning contributors took some time to keep Rails chugging along.</p>

<h3 id="include-the-content-of-the-flash-in-etags"><a href="https://github.com/rails/rails/pull/26250">Include The Content of “The Flash” In ETags</a></h3>

<p>When confronted about <a href="https://github.com/rails/rails/commit/22af62cf486721ee2e45bb720c42ac2f4121faf4#commitcomment-8110">code bloat</a>, DHH <a href="https://github.com/rails/rails/commit/e50530ca3ab5db53ebc74314c54b62b91b932389">does not take it lightly</a>. This week, he pulled another one of those moves by committing the content of <a href="http://www.imdb.com/title/tt0439572/"><em>The Flash</em></a> into the Rails codebase.</p>

<h3 id="redirect-post-requests-with-307-status-code"><a href="https://github.com/rails/rails/pull/23941">Redirect POST Requests With 307 Status Code</a></h3>

<p>Chirag Singhal decided to stir up some drama here by sending browsers a <strong>HTTP 307 “YOU JUST DON’T GET IT”</strong> status code when upgrading POST/PUT/DELETE requests to HTTPS connections.</p>

<h3 id="remove-over-meta-programming-in-arrelation"><a href="https://github.com/rails/rails/pull/26182">Remove over meta programming in AR::Relation</a></h3>

<p>When Bogdan Gusiev dived into the AR::Relation code base, he was not pleased with what he saw. After making some tweaks in this PR, he seemed happy with the result. Why?</p>

<p><em>Well.</em></p>

<p>( •_•)&gt;⌐■-■</p>

<p>(⌐■_■)</p>

<p><em>It doesn’t meta anymore.</em></p>

<p><a href="https://www.youtube.com/watch?v=6YMPAH67f4o">YEEEEAAAAAAAAHH</a></p>

<h3 id="improve-tag_option-performance"><a href="https://github.com/rails/rails/pull/26254">Improve <code class="language-plaintext highlighter-rouge">tag_option</code> performance</a></h3>

<p>Amadeus Folego identified  <strong>tag_options</strong>  as a hotspot in his application and decided to help improve its performance by throwing in some frozen strings. Cool!</p>

<h3 id="update-docs-with-action-cable-redis-dependency"><a href="https://github.com/rails/rails/pull/26249">Update docs with Action Cable Redis dependency</a></h3>

<p>Coming back from his vacation, Rafael Reggiani Manzo redis™covered a new dependency for developing Rails. To ease the shock for the next person, he added the setup instructions to the guides.</p>

<h3 id="missing-key-should-throw-keyerror"><a href="https://github.com/rails/rails/commit/1ec85cf9d8a6ad36c3c40cc08a0c7d8407e4b080">Missing key should throw KeyError</a></h3>

<p>Last but not least, Eileen M. Uchitelle committed a key error this week.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all from me this week, I hope you find this information useless! For a more informative view, check out (no pun intended) the commits <a href="https://github.com/rails/rails/compare/master@%7B2016-08-06%7D...@%7B2016-08-12%7D">here</a>.</p>

<p>Okay, please don’t unsubscribe! 😭 Your favorite rotation of editors will be back starting next week to replace me, so I’m sure things will get better from here!</p>

<p>Promise!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/8/20/this-week-in-rails-read-me-to-learn-a-cool-trick/" rel="bookmark">This Week in Rails: Read Me To Learn A Cool Trick™!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-08-20 00:00:00 +0000">August 20, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>This is <a href="https://twitter.com/chancancode">Godfrey</a>, reporting in from Portland, OR. We have a lot to cover this week, let’s dive right into the stories so you can go back to watching Olympics!</p>

<p>👀<br />
👅</p>

<h2 id="cool-trick">Cool Trick™</h2>

<h3 id="router-visualizer"><a href="https://github.com/rails/rails/pull/26156">Router Visualizer</a></h3>

<p>Have you ever wondered what happens when you visit a URL (say <strong>/posts/5</strong> ) in your Rails app? How does the Rails router know where to send your users?</p>

<p>The first (of many) step is to compare the URL against the routes table for potential matches. To make this lookup as fast as possible, the routes table is pre-compiled into a <a href="https://en.wikipedia.org/wiki/Finite-state_machine">finite state machine</a>, specifically a <a href="https://en.wikipedia.org/wiki/Nondeterministic_finite_automaton">nondeterministic finite automaton (NFA)</a>.</p>

<p>If that sounds very intimidating, don’t worry! The Rails router actually comes with a debugging tool that could generates an <a href="http://tenderlove.github.io/fsmjs/">interactive visualization</a> of your router NFA.</p>

<p>To generate one for your app, simply run <strong>Rails.application.routes.router.visualizer</strong> from your Rails console and save the returned string into an html file. (You will need the <strong>dot</strong> command-line tool for this – OS X users can get it from homebrew with <strong>brew install graphviz.</strong> )</p>

<p>…</p>

<p>Oh, is it not working? I forgot to mention that this tool is broken on Rails 5 by an internal refactor. Don’t worry though, because Seth fixed it for us in this pull request, which would come out with the next 5.0 patch release. If you are impatient, you could try it out by running the 5-0-stable branch.</p>

<p>Before you build your next billion-dollar startup with this awesome tool, please note that this is an undocumented ( <strong>private!</strong> ) API, and as you can see, could break unexpectedly between versions (or go away entirely).</p>

<p>While it’s definitely not Production Grade™ software, it’s still very useful for learning and debugging purposes. Enjoy it while it lasts!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="optional-schemarb-alignment"><a href="https://github.com/rails/rails/pull/25675">Optional schema.rb Alignment</a></h3>

<p>When dumping the schema, Rails tries to align things vertically for readability. However, this could result in a bigger diff than you would like when making changes to an existing table. With this PR, you now have an option to turn that off!</p>

<h3 id="controller-tests-now-supports-as-option"><a href="https://github.com/rails/rails/pull/26212">Controller Tests Now Supports <code class="language-plaintext highlighter-rouge">as</code> Option</a></h3>

<p>While integration tests are <a href="https://github.com/rails/rails/pull/25862">strongly preferred</a> over controller tests going forward, this PR allows you to simulate a request content type in controller tests using the same <strong>as: :json</strong> (or <strong>as: :xml</strong> , and so on) option. </p>

<h3 id="retry_on-gets-a-job"><a href="https://github.com/rails/rails/commit/a1e4c197cb12fef66530a2edfaeda75566088d1f"><code class="language-plaintext highlighter-rouge">retry_on</code> Gets A Job</a></h3>

<p>Active Job’s <strong>retry_on</strong> API can now access to the job instance that failed, in addition to the exception object.</p>

<h3 id="make-touch_later-respects-no_touching"><a href="https://github.com/rails/rails/pull/26183">Make <code class="language-plaintext highlighter-rouge">touch_later</code> Respects <code class="language-plaintext highlighter-rouge">no_touching</code></a></h3>

<p>The <strong>no_touching</strong> API now composes correctly with <strong>touch_later</strong> as you would expect.</p>

<h3 id="query-with-arrays-and-ranges"><a href="https://github.com/rails/rails/pull/26074">Query With Arrays and Ranges</a></h3>

<p>With this PR, you will be able to pass an Array or Range object to <strong>where(some_column: …)</strong> when querying an array/range column, assuming your database supports those column types.</p>

<h3 id="fix-upgrade-task-documentation"><a href="https://github.com/rails/rails/pull/26176">Fix Upgrade Task Documentation</a></h3>

<p>This is a periodic PSA that when it comes to upgrading Rails apps, the update task is going to be your friend. In Rails 5, this command has been renamed to <strong>rails app:update</strong> , whereas when upgrading to Rails 4.2 and below, you would want to use <strong>rake rails:update</strong> instead.</p>

<p>See the <a href="http://edgeguides.rubyonrails.org/upgrading_ruby_on_rails.html#the-update-task">upgrade guide</a> for more details.</p>

<h2 id="in-case-you-missed-it">In Case You Missed It…</h2>

<h3 id="active-job-defaults-to-async-adapter"><a href="https://github.com/rails/rails/pull/26214">Active Job Defaults To Async Adapter</a></h3>

<p>In case you missed it, Active Job in Rails 5 defaults to using the “async” adapter for jobs processing (the previous default was the “inline” adapter). The documentation has been updated to reflect that change.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s it from This Week in Rails! As always, there were a lot more changes than we have room for. If you are interested, definitely go <a href="https://github.com/rails/rails/compare/master@%7B2016-08-06%7D...@%7B2016-08-12%7D">check them out</a> yourself!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/8/12/this-week-in-rails-params-encoding-better-logging-and-more/" rel="bookmark">This Week in Rails: params encoding, better logging and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2016-08-12 00:00:00 +0000">August 12, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! This is <a href="https://twitter.com/repinel">Roque</a> covering latest events from the Rails community. Like in Rio, our week was busy with plenty of amazing participants #Rio2016 🇧🇷</p>

<h2 id="featured">Featured</h2>

<h3 id="security-releases"><a href="http://weblog.rubyonrails.org/2016/8/11/Rails-5-0-0-1-4-2-7-2-and-3-2-22-3-have-been-released/">Security releases!</a></h3>

<p>New Rails versions are released with many important security fixes. If you have not done already, do not drop the ball and upgrade as soon as possible.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160806-20160812">This Week’s Rails Contributors</a></h3>

<p>This week 29 code athletes contributed to Rails. We also got 1 first time contributor. Welcome aboard the Rails Games!</p>

<h3 id="allow-specifying-encoding-of-parameters-by-action"><a href="https://github.com/rails/rails/pull/26092">Allow specifying encoding of parameters by action</a></h3>

<p>Controllers can list the parameters with <em>parameter_encoding</em>, providing the action and the encoding type.<br />
This allows parameters in the same request to have particular encoding types.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-thread_mattr_accessor-class-leaking"><a href="https://github.com/rails/rails/pull/25681">Fix thread_mattr_accessor class leaking</a></h3>

<p><em>thread_mattr_accessor</em> was sharing the variable with superclasses and subclasses. Setting the variable in one would compromise the other.</p>

<h3 id="fix-the-accept-header-overwritten-issue-in-integration-tests"><a href="https://github.com/rails/rails/pull/26003">Fix the Accept header overwritten issue in integration tests</a></h3>

<p>XHR integration tests were overwriting the <em>Accept</em> header and creating inconsistency with <em>HTTP_ACCEPT</em>.</p>

<h2 id="improved">Improved</h2>

<h3 id="better-logging-of-cached-partial-renders"><a href="https://github.com/rails/rails/pull/25825">Better logging of cached partial renders</a></h3>

<p>A while ago, <a href="https://github.com/rails/rails/issues/23879">DHH suggested an improvement</a> to better log cached partial renders. It looks pretty clean!</p>

<h3 id="show-error-message-when-rails-runner-fails"><a href="https://github.com/rails/rails/pull/24260">Show error message when Rails runner fails</a></h3>

<p>The Rails runner will now give you a hint of what is going on whenever it fails with an exception.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s it from This Week in Rails! There were many other great code athletes, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-08-06%7D...@%7B2016-08-12%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/8/5/this-week-in-rails-new-apis-bug-fixes-rio2016/" rel="bookmark">This Week in Rails: New APIs, bug fixes, #Rio2016 🇧🇷</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-08-05 00:00:00 +0000">August 5, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello! This is <a href="https://twitter.com/andatki">Andy</a> bringing you another week’s worth of highlights from Rails. Today also marks the official start of the #Rio2016 Olympic Games 🇧🇷 . <a href="http://bleacherreport.com/articles/1294490-2016-olympics-golf-rugby-and-kitesurfing-events-debuting-in-rio">New events</a> this time around include golf, sevens rugby and kitesurfing, so check those out!</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160729-20160805">Rails Contributors</a></h3>

<p>This week we’d like to thank 18 contributors to Rails and extend a welcome to this week’s only <a href="http://contributors.rubyonrails.org/contributors/kyatul/commits">first-time contributor</a>!</p>

<h3 id="new-exception-handling-apis-for-activejob"><a href="https://github.com/rails/rails/pull/25991">New exception handling APIs for ActiveJob</a></h3>

<p>New APIs <em>retry_on</em> and <em>discard_on</em> have been added to ActiveJob. These provide hooks for a job class to perform some additional functionality when exceptions occur. The PR for this feature has some nice discussion, check it out!</p>

<h3 id="new-activerecord-transaction-error-classes"><a href="https://github.com/rails/rails/pull/25107">New ActiveRecord transaction error classes</a></h3>

<p>ActiveRecord can now distinguish between serialization failures and deadlocks. A more specific error in the case of deadlocks is now returned where supported (currently only PostgreSQL). Check the PR for an analysis of other database adapters and the latest code as the class names may have changed.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="activesupportduration-inconsistencies-around-daylight-saving-time"><a href="https://github.com/rails/rails/commit/0e762ecdc3026d0c2191e42fbca8021da9ec34cc">Activesupport::Duration inconsistencies around daylight saving time</a></h3>

<p>Since <a href="https://github.com/rails/rails/commit/434df0016e228a7d51f1ad0c3d1f89faeffbed9a">this commit from December</a>, “week” durations are no longer converted to days. This means we need to add <em>:weeks</em> to the parts that ActiveSupport::TimeWithZone will consider being of variable duration to take account of DST transitions.</p>

<h2 id="improved">Improved</h2>

<h3 id="yaml-parameters-backwards-compatibility"><a href="https://github.com/rails/rails/commit/31448f2b7fa6f3920485229e5710d9fcf87f190d">YAML Parameters backwards compatibility</a></h3>

<p>This change provides backwards compatibility for Rails 4.2 based on YAML serialization changes made in Rails 5.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions and investigations too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-07-29%7D...@%7B2016-08-05%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/7/29/this-week-in-rails-much-investigations-such-bug-fixes/" rel="bookmark">🔎 This Week in Rails: Much investigations, such bug fixes! 🔍</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">prathamesh</span></span>,
              <span class="published" title="2016-07-29 00:00:00 +0000">July 29, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>This is detective  🕵  <a href="https://twitter.com/_cha1tanya/">Prathamesh</a> reporting from the secret chambers of Rails.</p>

<p>We were busy investigating many  🐛🐛🐛🐛🐛  this week and I am happy to announce that we have successfully solved many mysterious cases 💪</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160723-20160729">Rails Contributors</a></h3>

<p>Great 🔍 work by 22 detectives who solved mysterious cases this week. Also welcome to 4 new  🕵  in our growing list of contributors!</p>

<h3 id="rubyrails-applications-not-vulnerable-to-httproxy-security-issue"><a href="https://blog.phusion.nl/2016/07/21/web-applications-on-phusion-passenger-are-not-vulnerable-to-httpoxy/">Ruby/Rails applications not vulnerable to HTTProxy security issue</a></h3>

<p>The <a href="http://www.phusion.nl/">Phusion</a> team found out that Ruby, Rails and Rack applications are not affected by the recent security issue related to HTTProxy. Great  🕵  investigation!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="use-already-loaded-records-in-the-finder-methods"><a href="https://github.com/rails/rails/pull/25941">Use already loaded records in the finder methods</a></h3>

<p>If the records of the finder queries are already loaded, then Rails will use them instead of querying again.</p>

<h3 id="correctly-return-associated_table-when-associated_with-is-true"><a href="https://github.com/rails/rails/pull/25767">Correctly return associated_table when associated_with? is true</a></h3>

<p>This fixes an issue related to <em>has and belongs to many associations</em> failing when the association name and table name are the same.</p>

<h3 id="remove-circular-join-references-in-join_dependency"><a href="https://github.com/rails/rails/pull/25702">Remove circular join references in join_dependency</a></h3>

<p>This fixes a <em>stack level too deep</em> crash when a circular join on the same table is used with the current scope.</p>

<h3 id="correct-the-behavior-of-virtual-attributes-on-models-loaded-from-the-database"><a href="https://github.com/rails/rails/commit/f0ddf87e4bfcfcb861b0a9dca32edb733668bd30">Correct the behavior of virtual attributes on models loaded from the database</a></h3>

<p>Before this change, virtual attributes not backed by the database would throw an error unless explicitly initialized. This change fixes it and also cleans up the implementation for virtual attributes. </p>

<h2 id="improved">Improved</h2>

<h3 id="reset-rackinput-when-the-environment-is-scrubbed-for-the-next-request"><a href="https://github.com/rails/rails/pull/25965">Reset rack.input when the environment is scrubbed for the next request</a></h3>

<p>Before this change, parameters sent via <em>post</em> requests would leak across requests in the Action Controller tests. This change prevents that by cleaning <em>rack.input</em> at the end of the request scrubbing.</p>

<h3 id="changed-partial-rendering-to-allow-collections-which-dont-implement-to_ary"><a href="https://github.com/rails/rails/pull/25912">Changed partial rendering to allow collections which don’t implement to_ary</a></h3>

<p>This change allows collections which do not implement <em>to_ary</em> also to be used for rendering partials. It allows instances of <em>Enumerator</em> or <em>Enumerable</em> to be used for rendering partials.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions and investigations too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-07-23%7D...@%7B2016-07-29%7D">check them out</a>!</p>

<p>Until next week!  🕵 🔍 💪</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/7/24/this-week-in-rails-2x-string-blank-perf-assert_changes-and-more/" rel="bookmark">🚀 This Week in Rails: 2x String#blank? perf, assert_changes and more! 🚀</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2016-07-24 00:00:00 +0000">July 24, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello from <a href="https://www.bigbinary.com/vipul">Vipul.</a></p>

<p>This was one busy week, with <a href="https://github.com/rails/rails/compare/master@%7B2016-07-16%7D...@%7B2016-07-22%7D">many changes</a> landing on master. <br />
We had lots of performance improvements, bug fixes, new additions and enhancements.</p>

<p>And here I thought everyone was just playing <a href="http://9gag.com/tv/p/abd8vL/pokemon-go-central-park-vaporeon">Pokemon Go</a> now. </p>

<h2 id="featured">Featured</h2>

<h3 id="kasper-joins-rails-core"><a href="http://weblog.rubyonrails.org/2016/7/19/Kasper-joins-Rails-core/">Kasper joins Rails core!</a></h3>

<p>That’s right Kasper gets himself a cartoon face!</p>

<p>Kasper has helped make countless <a href="http://contributors.rubyonrails.org/contributors/kasper-timm-hansen/commits">changes</a> and helped <a href="https://github.com/rails/rails/issues?utf8=%E2%9C%93&amp;q=commenter%3Akaspth%20">others make them</a> as well.</p>

<p>He’s continued to making substantial, individual contributions, like the new partial collection <a href="https://github.com/rails/rails/pull/18948">caching</a> <a href="https://github.com/rails/rails/pull/23695">scheme</a>, <a href="https://github.com/rails/rails/pull/20904">wildcard template dependencies</a>, and <a href="https://github.com/rails/rails/pull/19571">big improvements to the test runner</a>.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160716-20160722">This Week’s Rails Contributors</a></h3>

<p>This week saw contributions from 30 fabulous people. 2 of those had a commit merged into Rails for the very first time.</p>

<p>A big thank you to you all! ❤️ If you fancy seeing yourself up there next week, why not take a peek at the list of <a href="https://goodbits.io/newsletters/19/emails/18495/**https://github.com/rails/rails/issues">current issues</a>? Improvements to the <a href="http://api.rubyonrails.org/">documentation</a> can also be a great place to start!</p>

<h3 id="2x-performance-boost-for-stringblank-in-ruby-24"><a href="https://github.com/rails/rails/commit/929a6500806fe671d9ac0002da8537bf26b8f25d">2x performance boost for String#blank? in Ruby 2.4!</a></h3>

<p><em>String#blank?</em> now uses <em>Regex#match?</em> following the backwards compatible addition of <a href="https://github.com/rails/rails/commit/575dbeeefcaafeb566afc07cdd8b55603b698d9f"><em>Regex#match?</em></a> that was introduced.</p>

<p>This helps to get upto 2x the performance with new Regex improvements on Ruby 2.4!</p>

<h3 id="introduce-assert_changes-and-assert_no_changes"><a href="https://github.com/rails/rails/pull/25393">Introduce assert_changes and assert_no_changes</a></h3>

<p><em>ActiveSupport::TestCase</em> was augmented to complement <em>assert_difference</em> with a more more general usage.</p>

<p>With this handy comparison, we can now do something like-</p>

<p><em>user = User.start_registration<br />
assert_changes ‘user.token’, from: nil, to: /\w{​32}​/ do<br />
  user.finish_registration<br />
end</em>  <br />
to encapsulate the state changes, before and after an operation.</p>

<h2 id="new">New</h2>

<h3 id="bring-back-support-for-callable-cache-key-when-rendering-collection"><a href="https://github.com/rails/rails/pull/25616/files">Bring back support for callable cache key when rendering collection</a></h3>

<p>Support for custom callable cache key was added back to view caching. This allows us to do something like</p>

<p><em>&lt;%= render partial: ‘projects/project’, collection: @projects, cached: -&gt; project {​ [project, current_user] }​ %&gt;</em></p>

<p>and pass a key based on a callable block, which allows us to depend on cache’s and cache expiration based on result of the call. In the above case, the cache will be expired with changes to <em>project</em> and <em>current_user</em> objects.</p>

<h3 id="add-exists-and-update_all-to-collectionproxy-to-respect-an-association-scope"><a href="https://github.com/rails/rails/pull/25786/files">Add exists? and update_all to CollectionProxy to respect an association scope</a></h3>

<p>This change added <em>exists?</em> and <em>update_all</em> to <em>CollectionProxy</em> to respect an association scope.</p>

<p>This was causing issues in newest version of Rails whenever <em>update_all</em> or <em>exists?</em> were called on a collection object like <em>user.references.update_all(…)</em>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-bug-in-activerecord-timezoneconverterset_time_zone_without_conversion"><a href="https://github.com/rails/rails/pull/25834">Fix bug in ActiveRecord TimeZoneConverter#set_time_zone_without_conversion</a></h3>

<p>Before this change, multi-parameter attributes conversion with invalid params caused issue, when AR’s <em>time_zone_aware_attributes</em> was enabled, since that caused an invalid conversion. </p>

<p>The new change, now tries conversion only when a valid value is available for safe-conversion.</p>

<h3 id="fix-calling-merge-method-as-the-first-occurrence-in-a-scope"><a href="https://github.com/rails/rails/pull/25849">Fix calling merge method as the first occurrence in a scope</a></h3>

<p>Previously calling merge as the first method to build up a scope used to lead to errors-</p>

<p><em>scope :unsafe_chaining, -&gt; {​ merge(Comment.newest) }​ #=&gt; NoMethodError:</em></p>

<p>This change now allows us to overcome this and build up scopes like-</p>

<p><em>scope :_chaining</em>, -&gt;{​merge(Comment.newest).joins(:comments) }​ # =&gt; OK_</p>

<h2 id="improved">Improved</h2>

<h3 id="allow-messageencryptor-to-take-advantage-of-authenticated-encryption-modes"><a href="https://github.com/rails/rails/commit/d4ea18a8cb84601509ee4c6dc691b212af8c2c36">Allow MessageEncryptor to take advantage of authenticated encryption modes</a></h3>

<p>This change allow MessageEncryptor to now support <a href="https://www.wikiwand.com/en/Authenticated_encryption">authenticated encryption modes</a>.</p>

<p>AEAD modes like <em>aes-256-gcm</em> provide both confidentiality and data authenticity, eliminating the need to use MessageVerifier to check if the encrypted data has been tampered with. This speeds up encryption/decryption and results in shorter cipher text.</p>

<h3 id="setup-default-session-store-internally-and-no-longer-through-an-initializer"><a href="https://github.com/rails/rails/pull/25438">Setup default session store internally, and no longer through an initializer</a></h3>

<p>This change removes creation of the <em>config/initializers/session_store.rb</em> to define session store via initializer and sets up default session store internally.</p>

<p>By default the session store will be set to cookie store with application name as session key.</p>

<h2 id="wrappin-up">Wrappin’ Up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-07-16%7D...@%7B2016-07-22%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/7/15/this-week-in-rails-y-u-have-not-updated-to-rails-5-yet/" rel="bookmark">This Week in Rails: Y U have not updated to Rails 5 yet?!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-07-15 00:00:00 +0000">July 15, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello from <a href="http://claudiob.github.io">Claudio</a>.</p>

<p>This week saw some small fixes applied to Rails 5. Nothing major. Nothing that should stop <strong>you</strong> from upgrading all your apps from Rails 4.2 to Rails 5. So get onboard! You can do it!</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-427-and-4116-have-been-released"><a href="http://weblog.rubyonrails.org/2016/7/13/Rails-4-2-7-and-4-1-16-have-been-released/">Rails 4.2.7 and 4.1.16 have been released!</a></h3>

<p>Check the blog post for links to all the CHANGELOGs. As <a href="http://weblog.rubyonrails.org/2016/6/30/Rails-5-0-final/">Rails 5 was released</a>, this is probably going to be the last release of Rails 4.1. Please take some time to upgrade your application to Rails 4.2 or Rails 5.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160709-201607015">This week’s Rails contributors</a></h3>

<p>32 people contributed to Rails this week, including 6 first-timers. Congratulations! Don’t hesitate to check all the <a href="https://github.com/rails/rails/compare/master@%7B2016-07-09%7D...@%7B2016-07-15%7D">changes merged into master</a> this week. </p>

<h2 id="new">New</h2>

<h3 id="add-support-for-limits-in-batch-processing"><a href="https://github.com/rails/rails/commit/451437c6f57e66cc7586ec966e530493927098c7">Add support for limits in batch processing</a></h3>

<p>Active Record’s batch processing methods now support <code class="language-plaintext highlighter-rouge">limit</code>, so you can write statements like <code class="language-plaintext highlighter-rouge">Post.limit(10_000).find_each { ​|post| … }​</code>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-arto_param-to-maximize-content"><a href="https://github.com/rails/rails/pull/23636">Fix AR::to_param to maximize content</a></h3>

<p>The documentation states that <code class="language-plaintext highlighter-rouge">AR::to_param</code> should truncate values longer than 20 characters by words. This commit enforces this behavior, using as many characters as possible to maximize the information included in the URL.</p>

<h3 id="asduration-to-serialize-empty-values-correctly"><a href="https://github.com/rails/rails/pull/25656">AS::Duration to serialize empty values correctly</a></h3>

<p><code class="language-plaintext highlighter-rouge">ActiveSupport::Duration::ISO8601Serializer</code> will not fail when asked to serialize zero-length durations such as <code class="language-plaintext highlighter-rouge">ActiveSupport::Duration.parse(0.minutes.iso8601)</code>.</p>

<h3 id="astimezonestrptime-to-raise-the-correct-error"><a href="https://github.com/rails/rails/pull/25793">AS::TimeZone#strptime to raise the correct error</a></h3>

<p>Trying to parse an invalid date such as in <code class="language-plaintext highlighter-rouge">strptime('1999-12-31', '%Y/%m/%d')</code> will now raise <code class="language-plaintext highlighter-rouge">ArgumentError</code> rather than the confusing <code class="language-plaintext highlighter-rouge">NoMethodError: undefined method empty?</code>.</p>

<h3 id="check-requestpath_parameters-encoding-when-theyre-set-in-env"><a href="https://github.com/rails/rails/pull/25816">Check <code class="language-plaintext highlighter-rouge">request.path_parameters</code> encoding when they’re set in env</a></h3>

<p>The encoding of path parameters is now checked earlier in the dispatch process so that routes that go directly to a Rack app, or skip controller instantiation, don’t have to defend themselves against non-UTF8 characters.</p>

<h2 id="improved">Improved</h2>

<h3 id="speed-up-rdoc-generation"><a href="https://github.com/rails/rails/pull/25690">Speed up RDoc generation</a></h3>

<p>Every commit to rails/master automatically updates the <a href="http://edgeapi.rubyonrails.org">Rails docs</a>. The RDoc generation has gotten faster by only including files that contain changes since the last generation.</p>

<h2 id="wrappin-up">Wrappin’ Up</h2>

<p>Repeat after me: “Next week I will upgrade all my projects to Rails 5.”</p>

<p>💬 “Next week I will upgrade all my projects to Rails 5” 💬</p>

<p>I hope you do! And finally, if you happen to travel to sunny California this summer, come say hi at the <a href="http://www.meetup.com/laruby/events/232604411/">Los Angeles Ruby meetup</a>. 🌇😎🏄</p>

<p>–Claudio</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/7/8/this-week-in-rails-this-wild-week-in-rails-rails-4-2-7-4-1-16-new-tag-helpers-syntax-and-more/" rel="bookmark">🌵 This Wild Week in Rails 🌵: Rails 4.2.7/4.1.16, new tag helpers syntax and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">jonatack</span></span>,
              <span class="published" title="2016-07-08 00:00:00 +0000">July 8, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hola desperados!</p>

<p><a href="https://twitter.com/jonatack">Jon</a> (aka Juan el bandido) here saying “Howdy” from the Navarro desert near Pamplona 🇪🇸 to bring you outlaws a back-slappin’ sagebrush issue of <strong>This Wild Week in Rails</strong> 🌵.</p>

<p>We’ll be covering a selection of the past 2 weeks’ commits. That’s a dadgummit lotta ground to cover, so pack a saddlebag o’ water, watch out fer rattlesnakes, and dontcha hesitate to click through to the <strong>pull requests</strong> for more info!</p>

<p>Giddyup!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160702-201607008">This Week’s Rails Contributors</a></h3>

<p>Let rip some proper hootin’ &amp; hollerin’ fer these <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160702-201607008">38 heroic wranglers</a>who contributed to Rails this week, including 8 first-timers! Check out the <a href="https://github.com/rails/rails/issues">current issues</a> and the <a href="http://edgeguides.rubyonrails.org/contributing_to_ruby_on_rails.html">contributing guide</a> if ye’d like to join ‘em!</p>

<h3 id="rails-427rc1-and-4116rc1-released-gold-fever-ensues"><a href="http://weblog.rubyonrails.org/2016/7/2/Rails-4-2-7-rc1-and-4-1-16-rc1-have-been-released/">Rails 4.2.7.rc1 and 4.1.16.rc1 released, gold fever ensues</a></h3>

<p>These two release candidates hit the trail this week. The final release of Rails 4.1.16 should be on its way shortly if no regressions are found. It will probably be the last release of Rails 4.1, so please take some time soon to upgrade your application to Rails 4.2 or Rails 5.</p>

<h3 id="new-syntax-for-action-view-tag-helpers"><a href="https://github.com/rails/rails/pull/25543">New syntax for Action View tag helpers</a></h3>

<p>Building on an implementation proposal by DHH, new syntactical sugar has been introduced for tag helpers that supports HTML5 markup by default and avoids positional parameters. See the PR for details and code examples as well as <a href="https://github.com/rails/rails/pull/25289">#25289</a> for the groundwork and discussion.</p>

<h3 id="updated-and-improved-rails-guides"><a href="http://edgeguides.rubyonrails.org">Updated and improved Rails Guides</a></h3>

<p>Many vital documentation contributions were made these past 2 weeks, including completion of the <a href="http://edgeguides.rubyonrails.org/testing.html">Rails Testing Guide</a> (yeehaw!) and updates for Rails 5.</p>

<h2 id="improved">Improved</h2>

<h3 id="cleaner-simpler-stack-traces"><a href="https://github.com/rails/rails/pull/25222">Cleaner, simpler stack traces</a></h3>

<p>Scheduled for Rails 5.1, this commit aims to clean up noisy stack traces and log only the traces relevant to the developer. The discussion in the PR and in <a href="https://github.com/rails/rails/pull/25343">#25343</a> is worth reading.</p>

<h3 id="update-action-view-tag-helpers-attributes"><a href="https://github.com/rails/rails/pull/25555">Update Action View tag helpers attributes</a></h3>

<p>This commit brings the boolean attributes for the Action View tag helpers up to date with the current <a href="https://www.w3.org/TR/html51/single-page.html">w3.org spec</a>, while dropping <code class="language-plaintext highlighter-rouge">autobuffer</code> in favor of <code class="language-plaintext highlighter-rouge">preload</code> and removing <code class="language-plaintext highlighter-rouge">pubdate</code>.</p>

<h3 id="raise-on-nested-time-travel-helpers"><a href="https://github.com/rails/rails/pull/24890">Raise on nested time travel helpers</a></h3>

<p>Nested time travel calls in tests can lead to confusion in time stubbing. To discourage this practice, Rails now raises on nested <code class="language-plaintext highlighter-rouge">travel</code> and <code class="language-plaintext highlighter-rouge">travel_to</code> time helper calls.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="use-correct-timezone-when-parsing-dates-in-json"><a href="https://github.com/rails/rails/pull/23011">Use correct timezone when parsing dates in json</a></h3>

<p>Time specified in ISO 8601 format without <strong>Z</strong> should be parsed as local time, yet until now it was treated as UTC. This commit fixes the problem by parsing time using the timezone specified in the application config. Additionally, <strong>YYYY-MM-DD</strong> format is now parsed as <strong>Date</strong> , not <strong>DateTime</strong> as it was until now.</p>

<p>Ported to Rails 5-0-stable since this is a potential breaking change.</p>

<h3 id="routes-using-as-option-now-work-with-get-requests"><a href="https://github.com/rails/rails/pull/25435">Routes using <code class="language-plaintext highlighter-rouge">as</code> option now work with GET requests</a></h3>

<p>This fix adds the option to the end of the URL path rather than the query params. The PR discussion contains an example of checking impact on performance and working around it. Backported to 5-0-stable.</p>

<h3 id="dont-reap-reassigned-connections"><a href="https://github.com/rails/rails/pull/25707">Don’t reap reassigned connections</a></h3>

<p>This fix ensures that concurrent invocations of the connection reaper cannot allocate the same connection to two threads. Backported to 5-0-stable.</p>

<h3 id="fix-race-condition-with-websocket-stream-writes"><a href="https://github.com/rails/rails/pull/25624">Fix race condition with websocket stream writes</a></h3>

<p>ActionCable::Connection::Stream now safeguards against concurrent writes to a websocket connection from multiple threads. Backported to 5-0-stable.</p>

<h3 id="close-hijacked-io-socket-after-use"><a href="https://github.com/rails/rails/pull/25615">Close hijacked I/O socket after use</a></h3>

<p>ActionCable::Connection::Stream now properly closes hijacked sockets when the connection was shut down. Backported to 5-0-stable.</p>

<h3 id="fix-adding-implicitly-rendered-template-digests-to-etags"><a href="https://github.com/rails/rails/pull/25546">Fix adding implicitly-rendered template digests to ETags</a></h3>

<p>Modifying an implicitly-rendered template for a controller action using <code class="language-plaintext highlighter-rouge">fresh_when</code> or <code class="language-plaintext highlighter-rouge">stale?</code> now correctly results in a new ETag value.</p>

<h3 id="fix-typedateserialize-to-consistently-return-a-date-object"><a href="https://github.com/rails/rails/pull/25364">Fix Type::Date#serialize to consistently return a date object</a></h3>

<p>Type::Date#serialize now properly casts values to date objects when making <code class="language-plaintext highlighter-rouge">where</code> and <code class="language-plaintext highlighter-rouge">find</code> queries on a date field. Backported to 5-0-stable.</p>

<h2 id="new">New</h2>

<h3 id="new-middleware-for-debugging-reloadingexecuting-deadlocks"><a href="https://github.com/rails/rails/pull/25344">New middleware for debugging reloading/executing deadlocks</a></h3>

<p>Backported to 5-0-stable, this PR adds new <code class="language-plaintext highlighter-rouge">ActionDispatch::DebugLocks</code> middleware that can be used to diagnose deadlocks in the autoload interlock.</p>

<h3 id="enable-using-rake-notes-with-other-directories"><a href="https://github.com/rails/rails/pull/25692">Enable using <code class="language-plaintext highlighter-rouge">rake notes</code> with other directories</a></h3>

<p>Developers and gems can now use <code class="language-plaintext highlighter-rouge">rake notes</code> to extract notes from other directories (like <code class="language-plaintext highlighter-rouge">/spec</code>) by registering them with the SourceAnnotationExtractor.</p>

<h2 id="wrappin-up-ye-saddle-bums">Wrappin’ Up, Ye Saddle Bums</h2>

<p>Luddy Mussy, ah’m all sewn up! That’s all for <strong>This Wild Week in Rails</strong> 🌵. Der wuz more improvements than we had room to cover here, so doncher hesitate to <a href="https://github.com/rails/rails/compare/master@%7B2016-07-02%7D...@%7B2016-07-08%7D">check ‘em out!</a></p>

<p>‘Til next week, amigos!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/7/2/this-week-in-rails-rails-5-is-out-with-new-guides-and-more/" rel="bookmark">This Week In Rails: Rails 5 is out with new guides and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2016-07-02 00:00:00 +0000">July 2, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello open sourcerer!</p>

<p>Here’s <a href="https://twitter.com/kaspth">Kasper</a> rushing straight from the bullpen to the printers to report: Slow week, but we’ll get through it.</p>

<p>Just kidding! Rails 5 is here.</p>

<p>In fact, to really underline the magnitude of this achievement please play <a href="https://www.youtube.com/watch?v=5umEUBDXfU0">this music</a> while you read.</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-5-is-here"><a href="http://weblog.rubyonrails.org/2016/6/30/Rails-5-0-final/">Rails 5 is here!</a></h3>

<p>After a period of betas Rails 5.0 has now been released. The headline features are Action Cable and a mode primed for API-only apps.</p>

<p>There are also loads of other goodies which we’re covered here before. Check out <a href="https://rails-weekly.ongoodbits.com/archive">our archives</a> or comb through the <a href="http://contributors.rubyonrails.org/releases/5-0-0/commits">9999 commits themselves</a>.</p>

<h3 id="guides-updated-for-rails-5"><a href="http://guides.rubyonrails.org">Guides updated for Rails 5</a></h3>

<p>If you’d like a more high level overview there’s also new guides ready.</p>

<p>You can find tips on <a href="http://guides.rubyonrails.org/upgrading_ruby_on_rails.html">upgrading</a>, there’s a new version of the <a href="http://guides.rubyonrails.org/testing.html">testing guide</a> — and there are the full <a href="http://guides.rubyonrails.org/5_0_release_notes.html">release notes</a>, which has a lot of details.</p>

<h3 id="rails-5-made-by-you-and-me"><a href="http://contributors.rubyonrails.org/releases/5-0-0/contributors">Rails 5: made by you and me</a></h3>

<p>Rails 5 wouldn’t be possible without the 948 people who put in free time to help make these releases happen. A roaring thank you goes out to every contributor big and small. ❤️</p>

<p>(<a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160624-20160702">Here’s</a> what happened just this week.)</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-06-24%7D...@%7B2016-07-02%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/6/24/this-week-in-rails-5-0-0-rc2-release-bugfixes-and-more/" rel="bookmark">This Week In Rails: 5.0.0.rc2 release, bugfixes, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2016-06-24 00:00:00 +0000">June 24, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/gregmolnar">Greg</a> bringing latest news from the Rails community.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160617-20160624">This week’s Rails Contributors</a></h3>

<p>22 great people helped this week to move the Rails framework forward! If you want to join these folks, have a look at the <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h3 id="rails-500rc2-release"><a href="http://weblog.rubyonrails.org/2016/6/22/Rails-5-0-rc2/">Rails 5.0.0.rc2 release!</a></h3>

<p>Rails 5 RC2 has been released with a lot of bug fixes and polishing. We are one step closer to the final release!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-railsinfo-routes-for-apps-with-globbing-route"><a href="https://github.com/rails/rails/pull/25430">Fix rails/info routes for apps with globbing route</a></h3>

<p>The <strong>/rails/info</strong> routes were inaccessible in apps with a catch-all route, as they were being appended after the globbing route and would never be matched.</p>

<h3 id="fix-dbstructureload-silent-failure-on-postgressql-error"><a href="https://github.com/rails/rails/pull/24773">Fix db:structure:load silent failure on PostgresSQL error</a></h3>

<p>The <strong>db:structure:load</strong>  task silently failed if there was any SQL error, but with this commit, now it will report the error.</p>

<h2 id="improved">Improved</h2>

<h3 id="improved-dbstructuredump"><a href="https://github.com/rails/rails/pull/23301">Improved db:structure:dump</a></h3>

<p>To avoid unnecessary diffs in the db structure dump, the <strong>–skip-comments</strong> flag is passed to the <strong>mysqldump</strong>  command from now on.</p>

<h2 id="changed">Changed</h2>

<h3 id="datetime_field-change"><a href="https://github.com/rails/rails/pull/25469/files">datetime_field change</a></h3>

<p>The <strong>datetime_tag</strong> helper now generates an input tag with the type of <strong>datetime-local</strong>.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-06-17%7D...@%7B2016-06-24%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/6/17/this-week-in-rails-smarter-file-update-checker-testable-custom-queue-adapters-and-more/" rel="bookmark">This Week In Rails: smarter file update checker, testable custom queue adapters and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2016-06-17 00:00:00 +0000">June 17, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing latest news from the Rails community.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160611-20160617">This Week’s Rails Contributors</a></h3>

<p>This week 23 people contributed to Rails. We also got 4 first time contributors. Welcome aboard folks and keep it going!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-digesting-non-html-templates-when-name-conflicts"><a href="https://github.com/rails/rails/pull/25411">Fix digesting non-HTML templates when name conflicts</a></h3>

<p>This fixes a scenario that caused incorrect template digests for <code class="language-plaintext highlighter-rouge">*/*</code> requests that render non-HTML (<em>e.g.</em> JSON) templates. The HTML template was being used to compute the cache instead of the requested type.</p>

<h3 id="prevent-the-findermethodsexists-from-raising-rangeerror"><a href="https://github.com/rails/rails/pull/25271">Prevent the <code class="language-plaintext highlighter-rouge">FinderMethods#exists?</code> from raising <code class="language-plaintext highlighter-rouge">RangeError</code></a></h3>

<p>It will return a boolean value instead of going 💥 when value is out range.</p>

<h2 id="improved">Improved</h2>

<h3 id="the-file-update-checker-will-boot-once-per-process"><a href="https://github.com/rails/rails/pull/25302">The file update checker will boot once per process</a></h3>

<p>The checker will now play nice with multi-threaded web servers like Puma. Please read the <a href="https://github.com/rails/rails/pull/25302">pull request</a> for more details.</p>

<h3 id="custom-queue-adapters-will-now-work-with-active-job-tests"><a href="https://github.com/rails/rails/pull/25367">Custom queue adapters will now work with Active Job tests</a></h3>

<p>If you have a custom queue adapter for Active Job, you can override the method <code class="language-plaintext highlighter-rouge">queue_adapter_for_test</code> in your tests to take advantage of the test helpers provided.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-06-11%7D...@%7B2016-06-17%7D">check them out</a>!</p>

<p>Until next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/6/11/this-week-in-rails-quieter-loggers-faster-delegators-and-smarter-defaults/" rel="bookmark">This Week In Rails: quieter loggers, faster delegators, and smarter defaults!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2016-06-11 00:00:00 +0000">June 11, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Ahoy hoy! <a href="https://twitter.com/imtayadeway">Tim</a> (aka Godfrey[9]) here bringing you all the latest from the Rails community. It’s been yet another killer week of activity as we continue to refine Rails 5 ahead of its upcoming launch 🚀. Don’t touch that dial - it’s gonna be a helluva show!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160604-20160610">This Week’s Rails Contributors</a></h3>

<p>This week saw contributions from 26 fabulous people. 3 of those had a commit merged into Rails for the very first time. A big thank you to you all! ❤️</p>

<p>If you fancy seeing yourself up there next week, why not take a peek at the list of <a href="https://github.com/rails/rails/issues">current issues</a>? Improvements to the <a href="http://api.rubyonrails.org/">documentation</a> can also be a great place to start!</p>

<h3 id="rails-5-the-tour"><a href="https://www.youtube.com/watch?v=OaDhY_y8WTo">Rails 5: The Tour</a></h3>

<p>Last week brought us an updated look at Rails by none other than <a href="https://twitter.com/dhh">DHH</a> himself. The video offers a whirlwind tour of some of the most powerful features of the framework for newcomers in a tutorial that gets a blog set up in around 20 minutes. It also offers something for those looking to integrate newer features into their existing Ruby on Rails applications.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="send_file-can-terminate-the-callback-cycle-when-used-in-a-before_action"><a href="https://github.com/rails/rails/pull/25079">#send_file can terminate the callback cycle when used in a before_action</a></h3>

<p>A recent regression caused <strong>#send_file</strong> to fail to halt the request cycle when used in a <strong>before_action</strong>. This is because the callback terminator checks for <strong>@_response_body</strong> , which is no longer set by <strong>#send_file</strong>. This fix updated to use <strong>#performed?</strong> instead.</p>

<h3 id="broadcasting-properly-delegates-silence-to-all-logs"><a href="https://github.com/rails/rails/pull/25341">Broadcasting properly delegates #silence to all logs</a></h3>

<p>If you use broadcasting to send messages to multiple loggers, you may have found that it does not silence all of them when told to do so. The fix updated to properly delegate <strong>#silence</strong> to all.</p>

<h2 id="improved">Improved</h2>

<h3 id="delegation-gets-a-boost-by-leveraging-kernelcaller_locations"><a href="https://github.com/rails/rails/pull/25352">Delegation gets a boost by leveraging Kernel#caller_locations</a></h3>

<p><strong>Kernel#caller_locations</strong> was introduced in MRI 2.0, and outperforms <strong>Kernel#caller</strong> in <strong>Module#delegate</strong> by around 10%. For the author this resulted in a faster boot time.</p>

<h3 id="framework-defaults-file-gets-a-spring-clean"><a href="https://github.com/rails/rails/pull/25235">Framework defaults file gets a spring clean</a></h3>

<p>The new_framework_defaults file got a spruce this week, and documentation was updated to include better advice for upgrading to the new defaults from older apps. </p>

<p>The change also utilizes the update flag in several places to provide better messages catered for those only on the upgrade path.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s it from This Week in Rails! There were many other great contributions, too numerous to list here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-06-04%7D...@%7B2016-06-10%7D">check them out</a>!</p>

<p>Until next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/6/4/this-week-in-rails-an-apology-initializer-changes-and-more/" rel="bookmark">This Week in Rails: An Apology, Initializer Changes, and More!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-06-04 00:00:00 +0000">June 4, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey, team. <a href="https://twitter.com/toddbealmear">Todd</a> here, bringing you another edition of This Week in Rails! Due to a scheduling mishap, we missed an issue last week - we won’t cover it here, but I encourage you to check out the <a href="https://github.com/rails/rails/compare/master@%7B2016-05-20%7D...@%7B2016-05-28%7D">repo activity</a> during that period.</p>

<p>Anyway, let’s get to the exciting stuff from this week!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-week-in-rails--now-in-korean"><a href="http://suhanlee.github.io/2016/ruby-2-4-integer-action-mailer-rescued-and-more.html">This Week in Rails – Now in Korean!</a></h3>

<p>First off, a very special thanks to <a href="http://suhanlee.github.io/about/">Suhan Lee</a> for translating our newsletter into Korean! He’s going to try to translate each newsletter going forward. If you’re interested in providing more translations, feel free to get in touch with <a href="https://twitter.com/chancancode">Godfrey</a>.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160528-20160603">This Week’s Contributors</a></h3>

<p>We had 25 of you lovely individuals contribute code and documentation to Rails this week. You all rock! Keep the contributions coming!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="collapse-default-initializers-into-a-single-file"><a href="https://github.com/rails/rails/pull/25231">Collapse Default Initializers Into a Single File</a></h3>

<p>A late addition to Rails 5: default Rails initializers will no longer live in their own files. Instead, a new <code class="language-plaintext highlighter-rouge">new_framework_defaults.rb</code> file will be included in new apps generated with Rails 5.</p>

<h2 id="improved">Improved</h2>

<h3 id="add-websocket-and-logger-configuration-options-for-action-cable"><a href="https://github.com/rails/rails/pull/25170">Add <code class="language-plaintext highlighter-rouge">WebSocket</code> and <code class="language-plaintext highlighter-rouge">logger</code> Configuration Options for Action Cable</a></h3>

<p>You can now configure your own WebSocket and logger options when using Action Cable.</p>

<h3 id="slim-down-active-record-yaml-dumps"><a href="https://github.com/rails/rails/commit/c4cb6862babd2665a65056e205c2a5fd17a5d99d">Slim Down Active Record YAML Dumps</a></h3>

<p>This patch decreases the size of model dumps to YAML - in some cases by a whopping 80%!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fixed-issue-chaining-exists-to-includes"><a href="https://github.com/rails/rails/commit/02da8aea832485044fde1b94c021a66d37d54dec">Fixed Issue Chaining <code class="language-plaintext highlighter-rouge">#exists?</code> to <code class="language-plaintext highlighter-rouge">#includes</code></a></h3>

<p>Sean was able to fix an issue where chaining <code class="language-plaintext highlighter-rouge">#exists?</code> on <code class="language-plaintext highlighter-rouge">#includes</code> would raise an error. It sounds like there’s more work to do here yet, so I encourage giving the commit message a look-see.</p>

<h3 id="activerecordbasehash-should-differ-between-classes"><a href="https://github.com/rails/rails/commit/c8be4574a2a35c896560ff58b26111ad6dd9d60f"><code class="language-plaintext highlighter-rouge">ActiveRecord::Base#hash</code> Should Differ Between Classes</a></h3>

<p>Previously, there was an issue where it was possible to have collisions if <code class="language-plaintext highlighter-rouge">#hash</code> was called on two different models with the same ID. This is now fixed on master.</p>

<h3 id="remove-openssl-deprecation-warnings"><a href="https://github.com/rails/rails/pull/25194">Remove OpenSSL Deprecation Warnings</a></h3>

<p>This patch fixes deprecation warnings caused by the <code class="language-plaintext highlighter-rouge">OpenSSL::Cipher::Cipher</code> namespace changing to simply <code class="language-plaintext highlighter-rouge">OpenSSL::Cipher</code>.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s a wrap for This Week in Rails! There were plenty of other things going on, so feel free to jump in and <a href="https://github.com/rails/rails/compare/master@%7B2016-05-14%7D...@%7B2016-05-20%7D">check them out yourself</a>!</p>

<p>See you next week!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/5/20/this-week-in-rails-ruby-2-4-integer-action-mailer-rescued-and-more/" rel="bookmark">This Week In Rails: Ruby 2.4 Integer, Action Mailer rescued and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2016-05-20 00:00:00 +0000">May 20, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Shhh, stay quiet! Rails 5.0 lurks just around the corner and it’s a mean beast. </p>

<p>Rails’ maintainers, computer scient(-ish)sts, spliced commit DNA merged long ago in hopes of creating a better web framework. The result is Jurrails Park. </p>

<p>Here’s <a href="https://twitter.com/kaspth">Kasper</a> alongside self-volunteering co-editor <a href="https://www.youtube.com/watch?v=lpuS7_NPv6U">Jeff Goldblum</a>, saying: </p>

<p><em>They were so preoccupied with whether or not they could, they didn’t stop to think if they should.</em></p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160514-20160520">This Weeks Rails Contributors</a></h3>

<p>Contributors! Contributors! Contributors!</p>

<p>62 commits and 22 people makes us a happy newsletter team ❤️</p>

<h3 id="fixnum--bignum--integer"><a href="https://github.com/rails/rails/pull/25056">Fixnum + Bignum = Integer</a></h3>

<p>The next version of Ruby, 2.4,  <a href="https://bugs.ruby-lang.org/issues/12005">unifies Fixnum and Bignum into Integer</a>. Have no fear, Rails is already ready with both forward compatibility, backward compatibility and all around compatible compatibility. Int’ no Fix’ too Big’, folks.</p>

<h3 id="action-mailer-rescue_from-and-more"><a href="https://github.com/rails/rails/pull/25018">Action Mailer: rescue_from and more</a></h3>

<p>Action Mailer can now rescue itself from exceptions with <strong>rescue_from</strong>. </p>

<p>This lets the mailer handle errors from the delivering job when run with Active Job. </p>

<p>Third, the exhaustively documented pull request changes how <strong>rescue_from</strong> handles Exception causes. <a href="https://github.com/rails/rails/pull/25018">Read more</a>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="support-nested-calls-to-suppress"><a href="https://github.com/rails/rails/pull/25009">Support nested calls to #suppress</a></h3>

<p>Calling <strong>suppress</strong> within another suppression on the same class was previously a let down. </p>

<p>Now the method doesn’t take its name too seriously and all should be good.</p>

<h2 id="improved">Improved</h2>

<h3 id="relation-blocked-enumerable-count"><a href="https://github.com/rails/rails/pull/24203">Relation blocked Enumerable count</a></h3>

<p>One of the first Rails 5.1 features brings the framework appropriately forward. Literally by forwarding <code class="language-plaintext highlighter-rouge">count</code> on a Relation to Enumerable when passed a block.</p>

<h3 id="timeall_day-meet-dateall_day"><a href="https://github.com/rails/rails/pull/24930">Time#all_day meet Date#all_day</a></h3>

<p>Rails has long had <code class="language-plaintext highlighter-rouge">Time#all_day</code> to really expand the horizon of past times. Now Date gets to go <code class="language-plaintext highlighter-rouge">all_day</code> too.</p>

<p>Though personally, dating for a whole day sounds pretty extreme, but kids these days ¯\_(ツ)_/¯</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That concludes our report for this week. There were plenty of other things going on, so feel free to jump in and <a href="https://github.com/rails/rails/compare/master@%7B2016-05-14%7D...@%7B2016-05-20%7D">check them out yourself</a>!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/5/6/this-week-in-rails-railsconf-recap-rails-5-0-rc-1-is-out/" rel="bookmark">This Week In Rails 💯: RailsConf recap &amp; Rails 5.0 RC 1 is out!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-05-06 00:00:00 +0000">May 6, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><img src="https://cloud.githubusercontent.com/assets/1685896/15099261/d298dbd4-151e-11e6-8b31-3e5d5261f511.jpg" alt="RailsConf 2016" /></p>

<p>Live from RailsConf, happy 100th newsletter from <a href="https://twitter.com/chancancode">Godfrey</a>, <a href="http://claudiob.github.io">Claudio</a>, <a href="https://twitter.com/vipulnsward">Vipul</a>, <a href="https://twitter.com/repinel">Roque</a> and <a href="https://twitter.com/_cha1tanya">Prathamesh</a> (plus <a href="https://twitter.com/kaspth">Kasper</a> and <a href="https://twitter.com/jonatack">Jon</a> joining remotely).</p>

<p>The train from Kansas City is leaving the station soon. Just in time for a quick recap of what happened at RailsConf 2016 and this week in Rails.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160429-20160505">This Week’s Rails Contributors</a></h3>

<p>This week 26 people contributed to Rails, including a first-time contributor. Thanks to your support, we are on our way to almost 5,000 <a href="http://contributors.rubyonrails.org">all-time contributors</a>!</p>

<h3 id="rails-50-rc-racecar-1-is-here"><a href="https://rubygems.org/gems/rails/versions/5.0.0.rc1">Rails 5.0 RC “RaceCar” 1 is here!</a></h3>

<p>Jeremy promised in his <a href="https://youtu.be/fC-r51Dgwik?t=1677">keynote</a> that Rails 5 RC 1 will be released during the conference and it is <a href="https://rubygems.org/gems/rails/versions/5.0.0.rc1">here now</a>!</p>

<p>Another key milestone towards the final Rails 5 release.</p>

<h2 id="-railsconf-">🚆 RailsConf 🚆</h2>

<h3 id="keynote-and-lightning-talks-on-youtube"><a href="https://www.youtube.com/watch?v=s8oRJNokRaM">Keynote and lightning talks on YouTube</a></h3>

<p>In the next weeks, Confreaks will be posting individual videos for each session. Meanwhile, you can still catch the full-day videos for <a href="https://www.youtube.com/watch?v=fC-r51Dgwik">Day 1</a>, <a href="https://www.youtube.com/watch?v=Q-52L_KEBO8">Day 2</a>, and <a href="https://www.youtube.com/watch?v=s8oRJNokRaM">Day 3</a>.</p>

<p>If you attended the RailsConf, don’t forget to let the organizers know your <a href="https://www.surveymonkey.com/r/ZYTQZNG">feedback</a> before May 13th!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="allow-accessing-all-helpers-at-the-controller-level"><a href="https://github.com/rails/rails/pull/24866">Allow accessing all helpers at the controller level</a></h3>

<p>With this helper proxy, users can reuse helpers in the controller without having to include all the modules related to view context.</p>

<h3 id="add-activemodelrangeerror"><a href="https://github.com/rails/rails/pull/24835">Add <code class="language-plaintext highlighter-rouge">ActiveModel::RangeError</code></a></h3>

<p>When provided with large numbers, Active Model now fails with a new <code class="language-plaintext highlighter-rouge">ActiveModel::RangeError</code> that makes it easier to rescue from, and inherits from <code class="language-plaintext highlighter-rouge">RangeError</code> to maintain backward compatibility.</p>

<h2 id="improved">Improved</h2>

<h3 id="ensure-compatibility-between-rails-session-and-rack-session"><a href="https://github.com/rails/rails/pull/24820">Ensure compatibility between Rails Session and Rack Session</a></h3>

<p>Rails session is now compatible with other Rack frameworks like Sinatra that are mounted in Rails. They can also use session tooling of Rails without any issues now.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>Meeting you all at RailsConf was a lot of fun. And if you haven’t seen us up on stage during the lightning talks, <a href="https://youtu.be/Q-52L_KEBO8?t=9h37m38s">here is the YouTube link</a> of “Goodfry and his boy band”.</p>

<p>That concludes our report for this week. There were plenty of other things going on, so feel free to jump in and <a href="https://github.com/rails/rails/compare/master@%7B2016-04-29%7D...@%7B2016-05-05%7D">check them out yourself</a>. Also look out for the announcement of all the videos from RailsConf on Confreaks!</p>

<p>See you next year at RailsConf 2017 in Phoenix AZ!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/4/30/this-week-in-rails-if-you-read-it-here-that-means-it-happened/" rel="bookmark">This Week In Rails: If You Read It Here, That Means It Happened</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-04-30 00:00:00 +0000">April 30, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><img src="https://camo.githubusercontent.com/a74445f73cae78865aa123ccc84a7d09a078485f/687474703a2f2f636c2e6c792f673163352f6b616e73617363697479323031362e706e67" alt="Kansas City 2016" /></p>

<p>Dear Mayor,</p>

<p>Welcome to <em>Kansas City</em>! This is your advisor <a href="https://twitter.com/chancancode">Godfrey</a>. Since you are new here, it must be a bit overwhelming for you. Don’t worry, I’m here to help you do your job. Let’s get to it!</p>

<h2 id="featured">Featured</h2>

<h3 id="1000-commit-pile-up-results-in-new-beta-release"><a href="http://weblog.rubyonrails.org/2016/4/28/Rails-5-0-beta4/">1000 Commit Pile-Up Results In New Beta Release</a></h3>

<p>Rails 5.0.0.beta4 was released this week. Based on the increasing version numbers, I speculate the core team is working towards a 5.0.0.RC1 release and eventually a 5.0.0 final release. I recommend you try out the beta release on our apps.</p>

<h3 id="rails-repository-receives-new-commits"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160423-201604029">Rails Repository Receives New Commits</a></h3>

<p>According to sources close to the development, 34 contributors were seen submitting patches to the Rails code base this week. From what I can tell, this appears to be a good sign.</p>

<h2 id="railsconf">RailsConf</h2>

<h3 id="kansas-dresses-up-in-color-in-anticipation-of-railsconf"><a href="http://railsconf.com">Kansas Dresses Up In Color In Anticipation Of RailsConf</a></h3>

<p>Our plans to import colors from Oz have worked – I am proud to say Kansas is no longer black and white. I recommend that you install the <a href="https://guidebook.com/g/railsconf2016/">Guidebook app</a> ahead of the conference. You might also want to sign up for the <a href="http://railsconf.com/program/workshops">workshops</a> too – see the official welcome email in your inbox for details.</p>

<h3 id="tapped-out-local-breweries-close-doors"><a href="http://railsconf.com/program/parties">Tapped Out: Local Breweries Close Doors</a></h3>

<p>We are not interested in recycling the dishwater or taking 30-second showers. Worse than that, some of the sponsors have planned parties for the attendees. How can we call ourselves a decent city if we can’t accommodate that?</p>

<p>Put some drink in your think, Mayor, and get us some water.</p>

<h3 id="majority-of-rails-users-not-attending-railsconf-poll-indicates"><a href="http://confreaks.tv/events/railsconf2016">Majority Of Rails Users Not Attending RailsConf, Poll Indicates</a></h3>

<p>Despite already accommodating well over a thousand attendees, our polls have shown the majority of Rails users will not be able to attend the conference.</p>

<p>To prevent a public outcry, I advised the conference organizers to record all talks and make them available on this website after the conference.</p>

<p>They are planning to live stream the keynotes as well, although I heard <a href="http://confreaks.tv/live/railsconf2016">the secret URL</a> won’t be up until next Wednesday. I can hear the sound of F5 buttons cracking up from here.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="local-scientist-discovers-new-methods-to-manipulate-time"><a href="https://github.com/rails/rails/commits/@%7B2016-04-30%7D/activesupport/CHANGELOG.md?author=pixeltrix">Local Scientist Discovers New Methods To Manipulate Time</a></h3>

<p>In a series of experiments to research <em><a href="http://www.mzellner.com/page4/files/2009-stephens.pdf">Swearing as a response to pain</a></em>, a local scientist has discovered some new methods to manipulate time by accident. As a result of this new discovery, these core extension methods will be available in Active Support 5.</p>

<h3 id="rails-users-add-week-and-hour-to-their-vocabulary"><a href="https://github.com/rails/rails/pull/24762">Rails Users Add “Week” and “Hour” To Their Vocabulary</a></h3>

<p>Also new to Active Support, Rails users will soon be able to express themselves in these newfound vocabularies.</p>

<h2 id="improved">Improved</h2>

<h3 id="faster-code-found-to-perform-better-under-load"><a href="https://github.com/rails/rails/pull/24723">Faster Code Found To Perform Better Under Load</a></h3>

<p>A scientific study to end the decade-old debate in the programming community has concluded in a surprising twist. The report declared that faster code <em>does</em> seem to perform better, after all.</p>

<p>As a follow up to the research, this contributor was the first to apply the new optimization technique to <code class="language-plaintext highlighter-rouge">Array#split</code>. The work has resulted in some performance gains, contrary to everyone’s expectations.</p>

<h3 id="typos-hram-readablity-according-to-linguists"><a href="https://github.com/rails/rails/commits/master@%7B2016-04-30%7D/guides">Typos Hram Readablity According To Linguists</a></h3>

<p>A group of linguists gathered in town to discuss the merits of semicolons. During a panel discussion, they have reached consensus that typos can indeed reduce readability.</p>

<p>Coincidentally, this week the Rails Guides have received a flurry of changes that improved their readability.</p>

<p>My recommendation? We should sit down and fix the typos in our city bylaws some day.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="sharelock-fix-mistaken-for-sherlock-holmes"><a href="https://github.com/rails/rails/commit/65b6496ee4cf62be4c43ff21572e03a5e9cedac1">ShareLock Fix Mistaken For Sherlock Holmes</a></h3>

<p>It is well-known in the computer science community that concurrency is hard. This patch that just landed on Rails master is the perfect example to illustrate why – in an attempt to fix a bug in Active Support’s <code class="language-plaintext highlighter-rouge">ShareLock</code> class, the patch was briefly misidentified as Sherlock Holmes, causing a brief delay and a race condition.</p>

<h3 id="survey-rails-users-find-double-loading-loading-unnecessary"><a href="https://github.com/rails/rails/pull/24653">Survey: Rails Users Find Double Loading Loading Unnecessary</a></h3>

<p>Recently, an audit discovered that Rails sometimes loads the database schema twice. According to a survey, most Rails users do not find this necessary, leading to the “feature” being removed from master this week.</p>

<h2 id="not-fixed">Not Fixed</h2>

<h3 id="jruby-builds-too-flaky-to-be-useful"><a href="https://github.com/rails/rails/commit/ea628f72c3f6ef77752794356fcb358858fd8827">JRuby Builds: “Too Flaky To Be Useful”</a></h3>

<p>I have an unfortunate piece of news for you, Mayor. The JRuby builds have been temporarily flagged as allowed to fail on Rails’ CI servers. If you know anyone who works with JRuby, we could use some help identifying and fixing the root causes here.</p>

<h2 id="mystery">Mystery</h2>

<h3 id="regexp-experts-debates-left-to-right-or-right-to-left-is-one-better"><a href="https://github.com/rails/rails/commit/bbb84a17213d60f25a61ae4a09111d5adac01a05">Regexp Experts Debates “Left To Right Or Right To Left; Is One Better?”</a></h3>

<p>Despite promising results from last week, the researchers involved have backtracked their claims on the performance benefits associated with this change. Based on my negative lookahead, I believe <a href="https://github.com/rails/rails/pull/24658">this issue</a> will remain a source of huge debate among the experts in the foreseeable future.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That concludes my report for this week. There were plenty of other things going on, so feel free to jump in and <a href="https://github.com/rails/rails/compare/master@%7B2016-04-23%7D...@%7B2016-04-29%7D">check them out yourself</a>.</p>

<p>See you next week at RailsConf!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/4/23/this-week-in-rails-speed-improvements-database-comments-and-more/" rel="bookmark">This week in Rails: Speed improvements, database comments and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2016-04-23 00:00:00 +0000">April 23, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! <a href="https://twitter.com/_cha1tanya">Prathamesh</a> here bringing you This Week in Rails. Let’s get started.</p>

<h2 id="featured">Featured</h2>

<h3 id="-this-weeks-rails-contributors-"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160416-201604022">🏆 This week’s Rails Contributors 🏆</a></h3>

<p>Thank you to 32 awesome people who contributed to Rails this week, including 5 first-timers! Want to join the party? Get started with the <a href="https://github.com/rails/rails/issues">issues</a> page.</p>

<h3 id="-stringblank-just-became-faster-"><a href="https://github.com/rails/rails/commit/697384df36a939e565b7c08725017d49dc83fe40">🏇 <code class="language-plaintext highlighter-rouge">String#blank?</code> just became faster 🏇</a></h3>

<p>This speed optimization will improve the performance of <code class="language-plaintext highlighter-rouge">blank?</code> calls against empty strings by about 3.5x. It was <a href="https://github.com/rails/rails/pull/24658">further improved</a> to about 30% faster!! BOOM 💪</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="ability-to-add-database-comments"><a href="https://github.com/rails/rails/pull/22911">Ability to add database comments</a></h3>

<p>It is possible to specify comments for tables, columns, and indexes in the database itself now with this addition. It currently works for MySQL and PostgreSQL adapters.</p>

<h2 id="improved">Improved</h2>

<h3 id="create_join_table-works-with-non-integer-column-types"><a href="https://github.com/rails/rails/pull/24221"><code class="language-plaintext highlighter-rouge">create_join_table</code> works with non-integer column types</a></h3>

<p>Creating a join table with <code class="language-plaintext highlighter-rouge">create_join_table</code> helper used to always create the columns with integer type. But now if you want to have <code class="language-plaintext highlighter-rouge">uuid</code> columns or any other type, it’s possible!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="do-not-attempt-to-return-connection-with-open-transaction-to-pool"><a href="https://github.com/rails/rails/pull/24610">Do not attempt to return connection with open transaction to pool</a></h3>

<p>This fixed issues with intermittent test failures related to the Active Record connection pool trying to return connections at the wrong time.</p>

<h3 id="fix-issues-with-inserting-schema-information-on-sqlite"><a href="https://github.com/rails/rails/pull/24685">Fix issues with inserting schema information on SQLite</a></h3>

<p>Rails recently <a href="https://github.com/rails/rails/commit/42dd2336b31a8d98776d039a2b9fd7f834156a78">improved performance</a> for inserting schema information using <code class="language-plaintext highlighter-rouge">multi-row-insert</code>. But some SQLite versions do not support the <code class="language-plaintext highlighter-rouge">multi-row-insert</code> feature which resulted into errors. Now Rails will gracefully handle this situation without an error.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This Week in Rails. There were many more improvements than we have room to cover here, so don’t hesitate to jump in and <a href="https://github.com/rails/rails/compare/master@%7B2016-04-16%7D...@%7B2016-04-22%7D">check them out yourself</a>!</p>

<p>See you next week!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/4/16/this-week-in-rails-mariadb-action-cable-and-more/" rel="bookmark">🏄 This week in Rails 🏄: MariaDB, Action Cable, and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">jonatack</span></span>,
              <span class="published" title="2016-04-16 00:00:00 +0000">April 16, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone!</p>

<p><a href="https://twitter.com/jonatack">Jon</a> here bringing you This Week in Rails from the sunny surf town of <a href="https://twitter.com/hashtag/biarritz">Biarritz, France</a> 🇫🇷☀️</p>

<p>Ready to jump in and catch a few waves of updates?</p>

<p>Grab your surfboard and let’s go!</p>

<h2 id="-featured-">🏄🏻 Featured 🏄</h2>

<h3 id="this-weeks-rails-contributors-"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160409-201604015">This Week’s Rails Contributors 🏆</a></h3>

<p>Please share some <a href="https://en.wikipedia.org/wiki/Aloha">aloha</a> 🌸 for the <a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160409-201604015">27 daring riders</a> who contributed to Rails (and world happiness) this week, including 4 committers who caught their first wave 😍😎! You can, too! <a href="https://github.com/rails/rails/issues">Check out the current issues</a> if you’d like to paddle out, make new friends and join the fun 💙</p>

<h3 id="mariadb-support-comes-to-rails-5-"><a href="https://github.com/rails/rails/pull/24542">MariaDB support comes to Rails 5! 🎉</a></h3>

<p>Thanks to <a href="https://github.com/rails/rails/pull/24475">Jeremy Daer</a>, <a href="https://github.com/rails/rails/pull/24542">Ryuta Kamizono</a>, <a href="https://github.com/rails/rails/pull/24522">Vipul A M</a> and <a href="https://github.com/rails/rails/pull/24454">Ian Gilfillan</a>, Active Record is now fully compatible with <a href="https://mariadb.org">MariaDB</a> ❤️💛💚💜… click on our heroes’ names to open the commits and see what went down behind the scenes!</p>

<p><a href="https://mariadb.org">MariaDB</a> is a community-developed open source fork of MySQL. Notable users include Wikipedia, Facebook, Google and, yes, Basecamp 3! <a href="https://en.wikipedia.org/wiki/MariaDB">Here is a good Wikipedia article</a> about MariaDB and MySQL history. Game on!</p>

<h2 id="-improved-">🌊 Improved 🌊</h2>

<h3 id="run-action-cable-callbacks-through-the-worker-pool"><a href="https://github.com/rails/rails/pull/24540">Run Action Cable callbacks through the worker pool</a></h3>

<p><em>Everybody out of the pool!</em> 🏊 It was getting crowded in the water, but luckily our experienced Baywatch lifeguards Matthew, Sean and Jeremy 🏋 were on hand to, er, <em>pool</em> their efforts to ensure your database connections are managed automatically when Action Cable is involved! Synchronized water ballet, anyone?</p>

<h3 id="fewer-string-allocations-in-number-helpers"><a href="https://github.com/rails/rails/pull/24502">Fewer string allocations in number helpers</a></h3>

<p><em>No Strings are better than NoSQL, right?</em> Ankit noticed that the <code class="language-plaintext highlighter-rouge">number_to_delimited</code> and <code class="language-plaintext highlighter-rouge">number_to_rounded</code> helper methods were creating duplicate strings. Check out the pull request to see how he improved it using <a href="https://github.com/schneems/derailed_benchmarks">derailed_benchmarks</a> to check object allocations 🍰</p>

<h3 id="speed-up-and-handle-max_time-edge-cases"><a href="https://github.com/rails/rails/pull/24523">Speed up and handle <code class="language-plaintext highlighter-rouge">max_time</code> edge cases</a></h3>

<p><em>Rails has the need for speed</em> 💨 and surfers Blake and Xavier managed a crowd-pleasing acceleration maneuver in <code class="language-plaintext highlighter-rouge">AS::FileUpdateChecker</code> using a single loop memoization rather than multiple loops, benchmarked using <a href="https://github.com/evanphx/benchmark-ips">benchmark-ips</a>. It’s good stuff; see the PR for more! 🍦</p>

<h3 id="speed-up-attribute_changed-in-activemodeldirty"><a href="https://github.com/rails/rails/pull/24511">Speed up <code class="language-plaintext highlighter-rouge">attribute_changed?</code> in ActiveModel::Dirty</a></h3>

<p><em>Faster than relocating to San Francisco</em> ✈️ (and much more fun), sun-drenched rider Lihan was able to speed up <code class="language-plaintext highlighter-rouge">attribute_changed?</code> by setting the default options parameter to nil instead of a hash, and checking the result with <a href="https://github.com/evanphx/benchmark-ips">benchmark-ips</a> 😎</p>

<h2 id="-fixed-">🌴 Fixed 🌴</h2>

<h3 id="disallow-deliver_later-after-local-message-modifications"><a href="https://github.com/rails/rails/pull/24457">Disallow #deliver_later after local message modifications</a></h3>

<p><em>Lifeguard Jeremy came across a common, hard-to-detect 🐞 in the water:</em> Local message changes weren’t being enqueued with the delivery job when using <code class="language-plaintext highlighter-rouge">#deliver_later</code>. This now raises a friendly exception to make sure your message modifications are made in either (a) the mailer method or (b) using a custom Active Job. Nice catch! 🌊</p>

<h3 id="revert-hashtransform_keys-to-always-return-a-hash"><a href="https://github.com/rails/rails/pull/24517">Revert Hash#transform_keys to always return a Hash</a></h3>

<p>While surfing Mongoid’s test suite, an error alerted our champion Emily 🏄🏾 to a change of behavior in <code class="language-plaintext highlighter-rouge">ActiveSupport#symbolize_keys</code>: Rails 4.1 returned a <code class="language-plaintext highlighter-rouge">Hash</code> but 4.2/5.0 returned <code class="language-plaintext highlighter-rouge">self.class</code>. This launched an <a href="https://github.com/rails/rails/pull/24517#issuecomment-208927120">interesting discussion</a> on the merits of <em>expected behavior</em> versus <em>matching Ruby’s behavior</em>. Have a look! 🍎</p>

<h2 id="-wrapping-up-">🌞 Wrapping Up 🌞</h2>

<p>That’s all for This Week on the Beach with Rails™ 🌴. There were many more improvements (and great waves) than we have room to cover here, so don’t hesitate to jump in and <a href="https://github.com/rails/rails/compare/master@%7B2016-04-09%7D...@%7B2016-04-15%7D">check them out yourself</a>… the water’s warm and the locals are friendly! 👣🐾</p>

<p>See you next week! 🍍🍌🍉🍇</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/4/8/this-week-in-rails-strong-etag-validators-action-cable-enhancements-and-more/" rel="bookmark">This week in Rails: strong ETag validators, Action Cable enhancements and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2016-04-08 00:00:00 +0000">April 8, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing the latest news from Rails. Hope you enjoy, and see y’all at the RailsConf in a month!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160401-20160408">This Week’s Rails Contributors</a></h3>

<p>This week 39 people contributed to Rails. We also got 11 first time contributors. Welcome aboard folks and keep it going!</p>

<h3 id="strong-etag-validators"><a href="https://github.com/rails/rails/pull/24387">Strong ETag validators</a></h3>

<p>Strong ETag is now available in addition to weak ETag. It implies that the response should be exactly the same and byte by byte identical. Useful when doing things like Range requests within a large video or PDF file.</p>

<h3 id="action-cable-protocol-negotiation"><a href="https://github.com/rails/rails/pull/24224">Action Cable protocol negotiation</a></h3>

<p>Action Cable will gracefully disconnect clients and disable the monitor if the protocol has changed. This allows clients to gradually move to the newest version.</p>

<h2 id="improved">Improved</h2>

<h3 id="allow-passing-record-being-validated-to-error-message-generator"><a href="https://github.com/rails/rails/pull/24119">Allow passing record being validated to error message generator</a></h3>

<p>The record being validated is now accessible from the message proc to generate custom error messages like:
<code class="language-plaintext highlighter-rouge">proc { |record, data| "#{data[:attribute]} failed with value #{record.name}." }</code></p>

<h3 id="add-non-us-format-support-to-number_to_phone"><a href="https://github.com/rails/rails/pull/24401">Add non-US format support to number_to_phone</a></h3>

<p>Need to format a non-US phone number? You can now use <code class="language-plaintext highlighter-rouge">number_to_phone</code> with the <code class="language-plaintext highlighter-rouge">:pattern</code> option as a Regexp.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fixed-duplicated-emails-issue-with-sendmail"><a href="https://github.com/rails/rails/pull/24436">Fixed duplicated emails issue with Sendmail</a></h3>

<p>There was an issue with Action Mailer when calling Sendmail with the <code class="language-plaintext highlighter-rouge">-t</code> argument. Sendmail would scan messages for recipients, and it could result in duplicated emails.</p>

<h3 id="fixed-the-stringto_time-behaviour-to-match-rubys"><a href="https://github.com/rails/rails/commit/9c2c677d903bcdea3feb1cad6c6d4c8c07cc8034">Fixed the String#to_time behaviour to match Ruby’s</a></h3>

<p>Previously, the method returned today’s midnight time when there was no relevant information in the string. Now it returns <code class="language-plaintext highlighter-rouge">nil</code>.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a look at the <a href="https://github.com/rails/rails/compare/master@%7B2016-04-02%7D...@%7B2016-04-08%7D">changes</a> yourself.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/4/1/this-week-in-rails-new-query-methods-action-cable-enhancements-and-more/" rel="bookmark">This week in Rails: new query methods, Action Cable enhancements and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2016-04-01 00:00:00 +0000">April 1, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hey everybody! <a href="https://twitter.com/imtayadeway">Tim</a> here reporting from Portland, OR on another solid week for the Rails community. As a protest to April Fools’ typical tomfoolery, this edition is coming to you 100% jape-free. No, really!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160326-20160401">This Week’s Rails Contributors</a></h3>

<p>This week 29 lovely people contributed to Rails, including 5 for the first time! A big Friday Hug goes out to all of them! Feel free to check out the list of current <a href="https://github.com/rails/rails/issues">issues</a> for ideas if you’d like to join them ❤️</p>

<h2 id="improved">Improved</h2>

<h3 id="active-record-gets-a-few-extra-query-methods"><a href="https://github.com/rails/rails/pull/24315">Active Record gets a few extra query methods</a></h3>

<p>Ever find yourself writing cumbersome things like <code class="language-plaintext highlighter-rouge">User.count.zero?</code>? You can now use the terser <code class="language-plaintext highlighter-rouge">User.none?</code>, as well as <code class="language-plaintext highlighter-rouge">User.one?</code> and <code class="language-plaintext highlighter-rouge">User.empty?</code>, as these three methods just got added.</p>

<h3 id="the-default-worker-pool-size-for-action-cable-just-got-lowered-considerably"><a href="https://github.com/rails/rails/pull/24376">The default worker pool size for Action Cable just got lowered considerably!</a></h3>

<p>The author of this revision put it best: “Whack it down from 100 to 4”. This will decrease the number of db connections for most, who probably don’t need so many.</p>

<h3 id="notifications-can-now-hook-into-action-cable"><a href="https://github.com/rails/rails/pull/23723">Notifications can now hook into Action Cable</a></h3>

<p>Just as you can subscribe to Action Controller’s <code class="language-plaintext highlighter-rouge">#process_action</code>, so you can now with <code class="language-plaintext highlighter-rouge">ActionCable::Channel::Base#perform_action</code> after this fine addition. Get notified!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="prepared-statements-to-have-a-cache-separate-from-unprepared-statements"><a href="https://github.com/rails/rails/commit/3af40b71f34c70a274e261cd6e6468c613de648e">Prepared statements to have a cache separate from unprepared statements</a></h3>

<p>This subtle bug was fixed this week, wherein a connection that was established with prepared statements enabled could fail if a query that had been previously run was run again with prepared statements disabled. This was because it was hitting the same cache as the prepared statements-enabled query. Prepared statements now have their own cache, which solves the problem. Hurrah!</p>

<h3 id="rails-runner-now-shows-the-correct-command-name-when-run-with-spring"><a href="https://github.com/rails/rails/pull/24325">rails runner now shows the correct command name when run with Spring</a></h3>

<p>Running <code class="language-plaintext highlighter-rouge">rails runner</code> with no arguments or with the <code class="language-plaintext highlighter-rouge">--help</code> flag shows you some information on how to use the runner as a shebang line. Unfortunately, if you were using Spring, it would get the path wrong because Spring changes a variable that relates to the command that was run (<code class="language-plaintext highlighter-rouge">bin/rails</code>). That just got fixed in this revision!</p>

<h3 id="using-rails-restart-with-puma-now-works"><a href="https://github.com/rails/rails/pull/24331">Using rails restart with Puma now works!</a></h3>

<p>Previously, when issuing <code class="language-plaintext highlighter-rouge">rails restart</code> with Puma running, it would fail to bring it up again since Puma was trying to inspect <code class="language-plaintext highlighter-rouge">ARGV</code> to decide how to go about it. The fix involved changing Puma to allow its configuration options to be overridden by Rails. Great job!</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a look at the <a href="https://github.com/rails/rails/compare/master@%7B2016-03-26%7D...@%7B2016-04-01%7D">changes</a> yourself.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/3/25/this-week-in-rails-cables-mailers-floats-and-more/" rel="bookmark">This week in Rails: Cables, Mailers, Floats, and More!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">toddbealmear</span></span>,
              <span class="published" title="2016-03-25 00:00:00 +0000">March 25, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p><a href="https://www.instagram.com/p/BDDjrm2ICFl/">Business</a> <a href="https://twitter.com/toddbealmear">Todd</a> here with your weekly briefing of all the goings-on in the Rails organization.</p>

<p>Since our last update, a number of initiatives were undertaken by many of our stakeholders to breed cross-functional synergies between the underlying components of the Rails vertical. Or, if your eyes glazed over at the sight of “cross-functional synergies” or any of the other garbage I just typed out, a bunch of people did some stuff to make Rails better and junk.</p>

<p><em>yawn</em></p>

<p>I’m running this meeting and I’m already boring myself. Let’s just jump into it, shall we?</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160319-20160325">This Week’s Rails Contributors</a></h3>

<p>28 beautiful humans helped make Rails better than it was last week. If you’d like to see your name on this list, check out the open <a href="https://github.com/rails/rails/issues">issues</a>.</p>

<h2 id="improved">Improved</h2>

<h3 id="gracefully-handle-action-cable-client-disconnects"><a href="https://github.com/rails/rails/pull/24259">Gracefully Handle Action Cable Client Disconnects</a></h3>

<p>Formerly, Action Cable would raise a connection reset error if a client forcibly disconnected. This change avoids the exception by simply closing the connection if the client disappears.</p>

<h3 id="avoid-installing-new-gems-during-the-upgrade-process"><a href="https://github.com/rails/rails/pull/24243">Avoid Installing New Gems During the Upgrade Process</a></h3>

<p>When running <code class="language-plaintext highlighter-rouge">rails app:update</code>, we should avoid adding dependencies on new gems. A previous change adds an option to dev environment config that would require the <code class="language-plaintext highlighter-rouge">listen</code> gem to be installed. Instead, the generator now adds the line in question as a comment.</p>

<h3 id="honor-default-mysql-modes"><a href="https://github.com/rails/rails/pull/24167">Honor Default MySQL Modes</a></h3>

<p>Active Record’s strict mode has traditionally overridden MySQL’s default modes. However, keeping these modes in place offers better compatibility with other databases. In Rails 5, Active Record will stop overwriting these defaults.</p>

<h3 id="improvements-to-date-inclusion-validator"><a href="https://github.com/rails/rails/pull/24297">Improvements to Date Inclusion Validator</a></h3>

<p>New in Ruby 2.2+, <code class="language-plaintext highlighter-rouge">Range#cover?</code> works with <code class="language-plaintext highlighter-rouge">Date</code> ranges. The date inclusion validator has been updated to allow <code class="language-plaintext highlighter-rouge">Date</code> ranges to use this method.</p>

<h3 id="float-to-decimal-conversion-madness"><a href="https://github.com/rails/rails/commit/c7d3bd48dff0a509f5c21ec8864cb4f774d604e6">Float to Decimal Conversion Madness</a></h3>

<p>To avoid rounding to incorrect values when coercing a <code class="language-plaintext highlighter-rouge">Float</code> to a <code class="language-plaintext highlighter-rouge">Decimal</code>, the scale needs to be applied before precision. Be sure to read the entire commit message for a summary of how the existing behavior may cause unexpected issues.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-reset_session-for-api-controllers"><a href="https://github.com/rails/rails/pull/24229">Fix reset_session for API Controllers</a></h3>

<p><code class="language-plaintext highlighter-rouge">request.reset_session</code> relies on <code class="language-plaintext highlighter-rouge">ActionDispatch::Flash</code>, which is not included in API Controllers. This change moves that requirement to the <code class="language-plaintext highlighter-rouge">Flash</code> middleware itself.</p>

<h3 id="ensure-action-cable-is-loaded-in-application-generator"><a href="https://github.com/rails/rails/pull/24196">Ensure Action Cable is Loaded in Application Generator</a></h3>

<p>This PR fixes an issue where Action Cable would not be loaded properly if the app was generated without Active Record.</p>

<h3 id="generate-applicationmailer-for-engines"><a href="https://github.com/rails/rails/pull/24164">Generate ApplicationMailer for Engines</a></h3>

<p>In a followup to one of the <a href="https://github.com/rails/rails/pull/24161">fixes</a> from last week’s issue, we’re now ensuring that <code class="language-plaintext highlighter-rouge">ApplicationMailer</code> will be correctly generated in Engines.</p>

<h3 id="prevent-key-from-being-created-when-checking-for-error-inclusion"><a href="https://github.com/rails/rails/pull/24299">Prevent Key from Being Created When Checking for Error Inclusion</a></h3>

<p>Calling <code class="language-plaintext highlighter-rouge">ActiveModel::Errors#include?</code> with a key that didn’t exist would pollute the errors hash with they specified key and an empty <code class="language-plaintext highlighter-rouge">Array</code> as its value. This week, that behavior was corrected.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a look at the <a href="https://github.com/rails/rails/compare/master@%7B2016-03-19%7D...@%7B2016-03-25%7D">changes</a> yourself.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/3/18/this-week-in-rails-no-clash-thread-vars-a-way-to-contribute-and-more/" rel="bookmark">This week in Rails: no-clash thread vars, a way to contribute and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2016-03-18 00:00:00 +0000">March 18, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Straight from the mail room, it’s this week in Rails!</p>

<p>We made sure to squeeze our <del>lone chimp with a typewriter</del> extremely talented editor <a href="https://twitter.com/kaspth">Kasper</a> for just a few more keystrokes this week.</p>

<p>The result is not a novel, but it’s pretty damn close to legible.</p>

<p>Let’s check it out!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160311-20160318">This week’s Rails contributors</a></h3>

<p>Did you know? Rails is written by people no smarter than you (I know, low bar! 😘). They show up, Google a few things for the common good and submit patches. They even get their name on this here fancy page!</p>

<h3 id="a-rails-conference-in-the-pacific"><a href="http://www.railspacific.com/">A Rails conference in the Pacific</a></h3>

<p>The pacific Rails conference is rolling, from May 20th to 21st in Taipei, Taiwan. Several editors of this newsletter will be <a href="http://www.railspacific.com/#speakers">speaking</a>, so we recommend checking it out!</p>

<h3 id="thread_mattr_accessor-doesnt-clash-with-thread-locals"><a href="https://github.com/rails/rails/pull/24143"><code class="language-plaintext highlighter-rouge">thread_mattr_accessor</code> doesn’t clash with thread-locals</a></h3>

<p>Rails 5’s <code class="language-plaintext highlighter-rouge">thread_mattr_accessor</code> wouldn’t expose a variable set at the class level to instances and vice versa, because it generated a key that wasn’t uniform both at the class and instance level. Now it does 😁</p>

<h2 id="improved">Improved</h2>

<h3 id="once-more-dbmigrate-creates-the-test-database"><a href="https://github.com/rails/rails/pull/24201">Once more, <code class="language-plaintext highlighter-rouge">db:migrate</code> creates the test database.</a></h3>

<p>Rails considers the test database a part of the complete dev environment, as such running <code class="language-plaintext highlighter-rouge">db:create</code> in development creates the test database as well. You’ll be up, running, and testing in no time.</p>

<h3 id="document-rails-logger--formatter-interface"><a href="https://github.com/rails/rails/pull/24218">Document Rails’ logger + formatter interface</a></h3>

<p>Rails’ logger and formatter — <code class="language-plaintext highlighter-rouge">ActiveSupport::TaggedLogging</code> — had a habit of saying, “tag, you’re it!”, when figuring out how to glue the pieces together. With new documentation, this rigamarole is easier to suss out.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="break-up-an-action-pack-and-action-view-circular-require"><a href="https://github.com/rails/rails/commit/12cce89c89b48b15dcf2fcdb41feaaa5b7c06991">Break up an Action Pack and Action View circular require</a></h3>

<p>Spinning <code class="language-plaintext highlighter-rouge">assigns</code> and <code class="language-plaintext highlighter-rouge">assert_template</code> out into its own gem exposed a circular require in Action View and Action Pack. Good news is, adding <code class="language-plaintext highlighter-rouge">gem 'rails-controller-testing'</code> to your Gemfile should be hassle-free after this (though if you’re using RSpec it needs <a href="https://github.com/rails/rails-controller-testing#rspec">a teensy bit more setup</a>).</p>

<h3 id="generate-applicationmailer-if-its-missing"><a href="https://github.com/rails/rails/pull/24161">Generate <code class="language-plaintext highlighter-rouge">ApplicationMailer</code> if it’s missing</a></h3>

<p>Rails 5 adds new application wide classes to inherit from, one being <code class="language-plaintext highlighter-rouge">ApplicationMailer</code>. New mailers automatically inherit from said class. However, the file for it wasn’t being generated if missing. Rest assured, it now is.</p>

<h2 id="call-for-contributors">Call for contributors</h2>

<h3 id="improve-rails-multi-database-support"><a href="https://github.com/rails/rails/issues/14176#issuecomment-196977338">Improve Rails’ multi database support</a></h3>

<p>Want to give back to Rails, but don’t know where to start? Here’s something to do, straight from a Rails core member. Take a stab at improving multi database support with the suggestions at the link.</p>

<p>Could make a great Google Summer of Code project too 😉</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a look at the <a href="https://github.com/rails/rails/compare/master@%7B2016-03-11%7D...@%7B2016-03-18%7D">changes</a> yourself.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/3/11/this-week-in-rails-stable-releases-parameters-dig-and-moar-awesome-fixes/" rel="bookmark">This week in Rails: stable releases, `Parameters#dig` and moar awesome fixes</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">huoxito</span></span>,
              <span class="published" title="2016-03-11 00:00:00 +0000">March 11, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey there!</p>

<p>This is <a href="https://twitter.com/huoxito">Washington</a> with the latest news from <a href="https://github.com/rails/rails">Rails</a>!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160305-20160311">This week’s Rails contributors</a></h3>

<p>Again we start pointing to the 40 people who took some time to improve the framework this week!</p>

<h3 id="rails-426-and-4115-have-been-released"><a href="http://weblog.rubyonrails.org/2016/3/11/Rails-4-2-6-and-4-1-15-have-been-released/">Rails 4.2.6 and 4.1.15 have been released</a></h3>

<p>After a round of release candidates here goes the latest stable releases. Hopefully a quite easy upgrade if you’ve been following the latest security patches.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="introduced-actioncontrollerparametersdig"><a href="https://github.com/rails/rails/commit/5cd2beb0135faf18c978507a4be272dfc1499bb8">Introduced <code class="language-plaintext highlighter-rouge">ActionController::Parameters#dig</code></a></h3>

<p>Similar to <code class="language-plaintext highlighter-rouge">Hash#dig</code>, this easter egg for Ruby 2.3.0 users was introduced this week and should land with Rails 5.</p>

<h2 id="improved">Improved</h2>

<h3 id="symmetric-job-payload-across-json-dumpload"><a href="https://github.com/rails/rails/pull/24123">Symmetric job payload across JSON dump/load</a></h3>

<p>One last piece of a non-native JSON data type, aka Ruby symbols, was normalized so that one can make successful run time checks.</p>

<h3 id="default-rendering-behavior-on-respond_to-collector"><a href="https://github.com/rails/rails/pull/22854">Default rendering behavior on <code class="language-plaintext highlighter-rouge">respond_to</code> collector</a></h3>

<p>This is done so that actions using <code class="language-plaintext highlighter-rouge">respond_to</code> blocks go hand in hand with Rails 5 default <code class="language-plaintext highlighter-rouge">:no_content</code> response for missing templates.</p>

<h3 id="prevent-marshalload-from-looping-infinitely"><a href="https://github.com/rails/rails/pull/24150">Prevent <code class="language-plaintext highlighter-rouge">Marshal.load</code> from looping infinitely</a></h3>

<p>Improved compatibility for marshalled objects between Rails versions, e.g. Rails 4.0.x and 4.2.x</p>

<h3 id="execute-default_scope-within-the-scope-of-subclass"><a href="https://github.com/rails/rails/pull/23666">Execute <code class="language-plaintext highlighter-rouge">default_scope</code> within the scope of subclass</a></h3>

<p>Give a proper context to queries involving a <code class="language-plaintext highlighter-rouge">default_scope</code> triggered from a subclass of <code class="language-plaintext highlighter-rouge">ActiveRecord#Base.abstract_class</code>.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a look at the <a href="https://github.com/rails/rails/compare/master@%7B2016-03-04%7D...@%7B2016-03-11%7D">changes</a> yourself.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/3/4/this-week-in-rails-rails-4-2-6-rc1-and-4-1-15-rc1-as-executor-and-as-reloader-apis-and-more/" rel="bookmark">This week in Rails: Rails 4.2.6.rc1 and 4.1.15.rc1, AS::Executor and AS::Reloader APIs and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2016-03-04 00:00:00 +0000">March 4, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi All!</p>

<p>This is <a href="https://twitter.com/vipulnsward">Vipul</a> bringing you the latest news from <a href="https://github.com/rails/rails">Rails</a>!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160227-20160304">This week’s Rails contributors</a></h3>

<p>This week 48 contributors helped to move Rails forward! Want to be one of them? Look at the <a href="https://github.com/rails/rails/issues">issues</a> list and make a contribution!</p>

<h3 id="rails-426rc1-and-4115rc1-have-been-released"><a href="http://weblog.rubyonrails.org/2016/3/1/Rails-4-2-6-rc1-and-4-1-15-rc1-have-been-released/">Rails 4.2.6.rc1 and 4.1.15.rc1 have been released</a></h3>

<p>Rails 4.2.6.rc1 and 4.1.15.rc1 have been released!
If no regressions are found expect the final release around March 4, 2016.</p>

<h3 id="publish-asexecutor-and-asreloader-apis"><a href="https://github.com/rails/rails/pull/23807">Publish AS::Executor and AS::Reloader APIs</a></h3>

<p>These both allow external code to run blocks of user code to do “work” at a similar unit size to a web request without needing to get intimate with Action Dispatch.</p>

<p>This change is intended to allow interested callers (Sidekiq, Action Cable), to just do:</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>Rails.application.reloader.wrap do
  # run some user code
end
</code></pre></div></div>

<p>and Rails will take care of the interlock, code reloading, returning Active Record connections to the pool, and anything else that might be relevant.
Exciting, if you have ever been stung by concurrent processing in jobs, etc.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="rails-now-defaults-to-puma-3"><a href="https://github.com/rails/rails/pull/23906">Rails now defaults to Puma 3</a></h3>

<p>With related changes from <a href="https://github.com/puma/puma/pull/856">Puma</a>, Puma 3.0 and up introduced compatibility to read from <code class="language-plaintext highlighter-rouge">config/puma.rb</code> when booting from the command <code class="language-plaintext highlighter-rouge">$ rails server</code>. Rails now depends on Puma 3.0, so that support for <code class="language-plaintext highlighter-rouge">config/puma.rb</code> comes out of the box.</p>

<h3 id="add-exclude-option-to-ssl-middleware"><a href="https://github.com/rails/rails/pull/22591">Add <code class="language-plaintext highlighter-rouge">exclude</code> option to SSL middleware</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">force_ssl</code> option redirects each request to HTTPS. This change now allows redirection to be constrained to only whitelisted requests with <code class="language-plaintext highlighter-rouge">exclude</code>:</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>config.ssl_options = { redirect: { exclude: -&gt; request { request.path !~ /healthcheck/ } } }
</code></pre></div></div>

<h2 id="improved">Improved</h2>

<h3 id="generate-configspringrb-in-new-applications"><a href="https://github.com/rails/rails/commit/b04d07337fd7bc17e88500e9d6bcd361885a45f8">Generate config/spring.rb in new applications</a></h3>

<p>This change makes the application generator create a new file <code class="language-plaintext highlighter-rouge">config/spring.rb</code>, which tells Spring to watch additional common files, for example <code class="language-plaintext highlighter-rouge">.ruby-version</code>. This file can then be edited to suit each application.</p>

<h3 id="added-log-rendering--when-starting-to-render-a-template"><a href="https://github.com/rails/rails/pull/23915">Added log “Rendering …”, when starting to render a template</a></h3>

<p>This change added log “Rendering …”, when starting to render a template, to log that we have started to render something, at the very beginning.</p>

<p>This helps to easily identify queries called from controller vs views.</p>

<h2 id="deprecations">Deprecations</h2>

<h3 id="deprecate-controller-and-action-path-parameters-in-routes"><a href="https://github.com/rails/rails/commit/6520ea5f7e2215a763ca74bf6cfa87be2347d5df">Deprecate :controller and :action path parameters in routes</a></h3>

<p>Allowing <code class="language-plaintext highlighter-rouge">:controller</code> and <code class="language-plaintext highlighter-rouge">:action</code> values to be specified via the path in <code class="language-plaintext highlighter-rouge">config/routes.rb</code> has been an underlying cause of a number of issues in Rails that have resulted in security releases. In light of this it’s better that controllers and actions are explicitly whitelisted rather than trying to blacklist or sanitize bad values.
This change deprecates passing these options in routes.</p>

<h3 id="deprecate-insertupdatedelete_sql-in-databasestatements"><a href="https://github.com/rails/rails/pull/23086">Deprecate <code class="language-plaintext highlighter-rouge">{insert|update|delete}_sql</code> in <code class="language-plaintext highlighter-rouge">DatabaseStatements</code></a></h3>

<p>This change deprecates <code class="language-plaintext highlighter-rouge">{insert|update|delete}_sql</code> in <code class="language-plaintext highlighter-rouge">ActiveRecord::ConnectionAdapters::DatabaseStatements</code> in favor of <code class="language-plaintext highlighter-rouge">{insert|update|delete}</code> public methods.
Originally, <code class="language-plaintext highlighter-rouge">{insert|update|delete}_sql</code> were protected methods, and were not intended for external use.</p>

<h3 id="deprecate-modulelocal_constants"><a href="https://github.com/rails/rails/commit/86d4e189580e84c4b7effc0c3ebd25b4e8dc4fee">Deprecate <code class="language-plaintext highlighter-rouge">Module.local_constants</code></a></h3>

<p><code class="language-plaintext highlighter-rouge">Module.local_constants</code> has now been deprecated.
After Ruby 1.9 (and since Rails 5 supports Ruby 2.2+), we can easily get the constants that have been defined locally by <code class="language-plaintext highlighter-rouge">Module.constants(false)</code>. Hence, <code class="language-plaintext highlighter-rouge">Module.local_constants</code> is no more necessary.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a look at the <a href="https://github.com/rails/rails/compare/master@%7B2016-02-27%7D...@%7B2016-03-04%7D">changes</a> yourself.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/2/26/this-week-in-rails-turbolinks-5-rails-5-0-0-beta3-and-more/" rel="bookmark">This week in Rails: Turbolinks 5, Rails 5.0.0.beta3 and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2016-02-26 00:00:00 +0000">February 26, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hello, this is <a href="https://twitter.com/gregmolnar">Greg</a> bringing you the latest news about the <a href="https://github.com/rails/rails">Rails</a> framework!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160219-20160226">This week’s Rails contributors</a></h3>

<p>This week 51 great developer helped to move Rails forward! Want to be one of them? Look at the <a href="https://github.com/rails/rails/issues">issues</a> list and make a contribution!</p>

<h3 id="rails-500beta3-has-been-released"><a href="https://github.com/rails/rails/compare/v5.0.0.beta2...v5.0.0.beta3">Rails 5.0.0.beta3 has been released</a></h3>

<p>Rails 5 is getting closer to the release candidate. The new beta brings many improvements and fixes.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="turbolinks-5-compatibility-changes"><a href="https://github.com/rails/rails/pull/23836">Turbolinks 5 compatibility changes</a></h3>

<p>This commit made Rails compatible with Turbolinks 5 and master uses the beta release of Turbolinks 5 now.</p>

<h3 id="rake-test-now-respects-testopts"><a href="https://github.com/rails/rails/commit/7a36686c115f1c6c60ac0a51bc4991c3d32b6e5d">rake test now respects TESTOPTS</a></h3>

<p>With this change, we can now pass options to minitest via the TESTOPTS environment variable.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fixed-primary-key-uniqueness-issue"><a href="https://github.com/rails/rails/pull/23628">Fixed primary key uniqueness issue</a></h3>

<p>This commit reverted some earlier changes which caused an issue with the uniqueness validation of a primary key field, when the primary key field is called something other than <code class="language-plaintext highlighter-rouge">id</code>.</p>

<h3 id="fixed-csrf-issue-with-button_to-tag"><a href="https://github.com/rails/rails/pull/23752">Fixed CSRF issue with button_to tag</a></h3>

<p>There was an issue with the CSRF token generated when <code class="language-plaintext highlighter-rouge">button_to</code> was called with the <code class="language-plaintext highlighter-rouge">delete</code> method, but it is all fixed now!</p>

<h2 id="improved">Improved</h2>

<h3 id="improved-action-cable-reconnection-reliability"><a href="https://github.com/rails/rails/pull/23813">Improved Action Cable reconnection reliability</a></h3>

<p>This pull request improved the Action Cable reconnections by treating <code class="language-plaintext highlighter-rouge">closing</code> state as <code class="language-plaintext highlighter-rouge">closed</code> and by calling <code class="language-plaintext highlighter-rouge">ActionCable.ConnectionMonitor#connected()</code> on the client side upon successful connection. It also introduced client side logging to make debugging easier.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a look at the <a href="https://github.com/rails/rails/compare/master@%7B2016-02-19%7D...@%7B2016-02-26%7D">changes</a> yourself.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/2/20/this-week-in-rails-railsconf-program-on_weekday-and-more/" rel="bookmark">This week in Rails: RailsConf program, on_weekday? and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2016-02-20 00:00:00 +0000">February 20, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello, this is <a href="https://twitter.com/chancancode">Godfrey</a> and <a href="https://twitter.com/_cha1tanya">Prathamesh</a> bringing you the latest developments from <a href="https://github.com/rails/rails">Rails</a>!</p>

<h2 id="featured">Featured</h2>

<h3 id="railsconf-2016-program-announced"><a href="http://railsconf.com/program">RailsConf 2016 program announced</a></h3>

<p>The conference is looking pretty awesome, with a good mix of talks on various topics. I hope you are as excited as I am!</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160213-20160219">This week’s Rails contributors</a></h3>

<p>This week, we have recorded 136 commits from 37 contributors (including 8 first-time contributors)! Thank you for making Rails better for everyone!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="on_weekday-method-to-date-time-and-datetime"><a href="https://github.com/rails/rails/pull/23687"><code class="language-plaintext highlighter-rouge">#on_weekday?</code> method to <code class="language-plaintext highlighter-rouge">Date</code>, <code class="language-plaintext highlighter-rouge">Time</code>, and <code class="language-plaintext highlighter-rouge">DateTime</code></a></h3>

<p>Along with <a href="https://github.com/rails/rails/pull/18335"><code class="language-plaintext highlighter-rouge">#on_weekend?</code></a>, you can now easily find out if a certain day falls on a weekday (M-F). The question is, do you <em>really</em> want to know?</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-incorrect-behavior-with-unsubscribing-to-channels"><a href="https://github.com/rails/rails/pull/23715">Fix incorrect behavior with unsubscribing to channels</a></h3>

<p>Saying goodbye is certainly hard, but having to listen for one might just be worse. Luckily for us, all of these are abstracted deep inside Action Cable, so we will never have to go through that ourselves.</p>

<h2 id="improved">Improved</h2>

<h3 id="inject-rails-configurations-through-railtie"><a href="https://github.com/rails/rails/pull/23505">Inject Rails configurations through Railtie</a></h3>

<p>Dependency injection might not be a virtue, but in this case, it certainly helps keeping things neatly isolated from each other.</p>

<h3 id="tagged-errors-in-logs"><a href="https://github.com/rails/rails/pull/23203">Tagged errors in logs</a></h3>

<p>A while ago, tagged logging <a href="https://github.com/rails/rails/pull/22949">became the default on production</a> on Rails 5. Now the tags are included in the logs for errors too!</p>

<h3 id="automatically-reset-actionmailerbasedeliveries-in-integration-tests"><a href="https://github.com/rails/rails/commit/9d378747326d26cf1afdac4433ead22967af0984">Automatically reset <code class="language-plaintext highlighter-rouge">ActionMailer::Base.deliveries</code> in integration tests</a></h3>

<p>With this patch, Rails 5 will automatically clear the <code class="language-plaintext highlighter-rouge">ActionMailer::Base.deliveries</code> array in between your integration tests.</p>

<h3 id="support-nested-params-in-button_to-helper"><a href="https://github.com/rails/rails/pull/17043">Support nested params in <code class="language-plaintext highlighter-rouge">button_to</code> helper</a></h3>

<p>We can now pass nested hashes or arrays to <code class="language-plaintext highlighter-rouge">button_to</code> helpers’s params option.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a look at the <a href="https://github.com/rails/rails/compare/master@%7B2016-02-13%7D...@%7B2016-02-19%7D">changes</a> yourself.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/2/12/this-week-in-rails-ruby-on-rails-with-love-since-2005/" rel="bookmark">Ruby on Rails, with love since 2005</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2016-02-12 00:00:00 +0000">February 12, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Happy Valentine’s Day weekend!</p>

<p>What better way to show your love for Rails than to help close the <a href="https://github.com/rails/rails/milestones/5.0.0">last few issues</a> pending for the release candidate of Rails 5? ☺️</p>

<p>– <a href="http://claudiob.github.io">Claudio</a></p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160206-20160212">This week’s contributors</a></h3>

<p>Thanks to the 41 people who loved Rails this week by contributing to its source code. A special kiss to the 14 of you who contributed for the first time!</p>

<h3 id="guides-using-rails-for-api-only-applications"><a href="http://edgeguides.rubyonrails.org/api_app.html">Guides: Using Rails for API-only Applications</a></h3>

<p>You heard that Rails 5 will be able to generate API-only applications. Now you can learn all the details by reading this new chapter added to the Rails Guides.</p>

<h3 id="a-new-organization-for-turbolinks"><a href="https://github.com/turbolinks/turbolinks">A new organization for Turbolinks</a></h3>

<p>The source code of turbolinks has been moved to a new GitHub organization, with plans to release more turbolinks-related libraries in the future.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="added-numeric-helper-into-schemastatements"><a href="https://github.com/rails/rails/pull/23508">Added numeric helper into SchemaStatements</a></h3>

<p>Need to add a numeric column to a database table? You can now use <code class="language-plaintext highlighter-rouge">t.numeric :foo</code> which is a lovely alias of <code class="language-plaintext highlighter-rouge">t.decimal :foo</code>.</p>

<h3 id="add-as-to-encode-a-request-as-a-specific-mime-type"><a href="https://github.com/rails/rails/pull/21671">Add <code class="language-plaintext highlighter-rouge">as</code> to encode a request as a specific mime type</a></h3>

<p>You can now test a JSON POST request with <code class="language-plaintext highlighter-rouge">post articles_path, as: :json</code> rather than adding helpers like <code class="language-plaintext highlighter-rouge">post_json</code>. And you can also test the response as parsed JSON with <code class="language-plaintext highlighter-rouge">parsed_body</code>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-performance-regression-in-active-record"><a href="https://github.com/rails/rails/issues/23507">Fix performance regression in Active Record</a></h3>

<p><a href="http://rubybench.org/rails/rails/commits?result_type=activerecord/postgres_finders_find_by_attributes&amp;display_count=1000">RubyBench</a> analyzes every commit made to rails/rails so performance regressions can be rapidly discovered… and fixed!</p>

<h2 id="improved">Improved</h2>

<h3 id="speed-up-string-xor-operation-and-reduce-object-allocations"><a href="https://github.com/rails/rails/commit/02c38678">Speed up string xor operation and reduce object allocations</a></h3>

<p>We love commits like this one which improve the performance of Rails and use <a href="https://github.com/evanphx/benchmark-ips">benchmark/ips</a> to measure their impact.</p>

<h3 id="set-database-poolsize-via-rails_max_threads"><a href="https://github.com/rails/rails/pull/23528">Set database poolsize via RAILS_MAX_THREADS</a></h3>

<p>The environment variable introduced in config/puma.rb is now reused in the database configuration to avoid connection timeout errors.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a peek at the <a href="https://github.com/rails/rails/compare/master@%7B2016-02-06%7D...@%7B2016-02-12%7D">changes</a> yourself.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/2/5/this-week-in-rails-rails-5-beta-2-railsconf-2016-registration-and-more/" rel="bookmark">Rails 5 beta 2, RailsConf 2016 registration and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2016-02-05 00:00:00 +0000">February 5, 2016 @ 12:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hello everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing the latest from the Rails world. Stay tuned!</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-500beta2-has-been-released"><a href="http://weblog.rubyonrails.org/2016/2/2/Rails-5-0-beta2/">Rails 5.0.0.beta2 has been released!</a></h3>

<p>Please give Rails 5.0 a try on your app. Spotting bugs and upgrade issues ahead helps big releases like this.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160129-20160205">This week’s contributors</a></h3>

<p>This week 54 people contributed to Rails. We also got 10 first time contributors. Welcome aboard folks and keep it going!</p>

<h3 id="railsconf-2016-registration-is-open"><a href="http://railsconf.com">RailsConf 2016 registration is open</a></h3>

<p>All aboard! The next train is leaving to Kansas City. Don’t miss it! Tickets sales ends April 3rd.</p>

<h3 id="rails-5-only-supports-postgresql-91"><a href="https://github.com/rails/rails/pull/23434">Rails 5 only supports PostgreSQL 9.1+</a></h3>

<p>Rails 5 will only support versions of PostgreSQL greater than or equal to 9.1. Older versions are no longer supported by the PostgreSQL team. You can read more on their <a href="http://www.postgresql.org/support/versioning/">official page</a>.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="add-default-puma-config-and-option-to-skip-it"><a href="https://github.com/rails/rails/pull/23057">Add default Puma config and option to skip it</a></h3>

<p>A default config has been added for Puma. It sets the default Puma thread count to 5 to mach Active Record’s default, and prevent connection timeout errors.<br />
Puma can now be skipped when generating new apps with the <code class="language-plaintext highlighter-rouge">--skip-puma</code> option.</p>

<h3 id="rails-command-now-runs-rake-tasks-in-engines"><a href="https://github.com/rails/rails/pull/23169">Rails command now runs Rake tasks in Engines</a></h3>

<p>Just like in Rails apps, it is now possible to use the <code class="language-plaintext highlighter-rouge">rails</code> command to execute <code class="language-plaintext highlighter-rouge">rake</code> tasks in Engines.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-corrupt-transaction-state-caused-by-before_commit-exceptions"><a href="https://github.com/rails/rails/pull/23407">Fix corrupt transaction state caused by before_commit exceptions</a></h3>

<p>This makes Active Record aware that a database was rolled back when a <code class="language-plaintext highlighter-rouge">before_commit</code> callback raises an exception.<br />
Before, Active Record would think the connection was active, and fail.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a peek at the <a href="https://github.com/rails/rails/compare/master@%7B2016-01-29%7D...@%7B2016-02-05%7D">changes</a> yourself.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/1/29/this-week-in-rails-security-releases-and-getting-closer-to-rails-5-rc/" rel="bookmark">This week in Rails: Security releases and getting closer to Rails 5 RC</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2016-01-29 20:15:13 +0000">January 29, 2016 @  8:15 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> bringing the latest news from this eventful week of security releases and getting closer to Rails 5 RC.</p>

<h2 id="featured">Featured</h2>

<h3 id="security-releases"><a href="http://weblog.rubyonrails.org/2016/1/25/Rails-5-0-0-beta1-1-4-2-5-1-4-1-14-1-3-2-22-1-and-rails-html-sanitizer-1-0-3-have-been-released/">Security releases!</a></h3>

<p>New Rails versions are released with many important security fixes. If you have not done already, upgrade as soon as possible.</p>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160124-20160129">This weeks contributors</a></h3>

<p>This week 44 people contributed to Rails. We also got 11 first time contributors. Welcome aboard folks and keep it going!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="drop-action-cable-dependency-on-eventmachine"><a href="https://github.com/rails/rails/pull/23305">Drop Action Cable dependency on EventMachine</a></h3>

<p>Action Cable no longer depends on EventMachine. A lot of work is done to make sure that this change works properly. Hat tip to <a href="https://twitter.com/_matthewd">Matthew Draper</a> for all the great work!</p>

<h3 id="new-welcome-page-for-rails-5"><a href="https://github.com/rails/rails/pull/23237">New welcome page for Rails 5</a></h3>

<p>Do you remember the old <code class="language-plaintext highlighter-rouge">Welcome aboard</code> page? It’s now replaced by <code class="language-plaintext highlighter-rouge">Yay! You are on Rails!</code> The welcome page got a big facelift in Rails 5, gone are the needless links and extra data. It’s compact and mentions only relevant things.</p>

<h3 id="generate-index-for-referenced-columns-by-default"><a href="https://github.com/rails/rails/pull/23179">Generate index for referenced columns by default</a></h3>

<p>Rails will now generate indexes for referenced columns by default without mentioning it in migrations. That’s what we want in 90% of the cases anyways!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="issues-with-activerecordrelationcache_key-fixed"><a href="https://github.com/rails/rails/pull/23080">Issues with <code class="language-plaintext highlighter-rouge">ActiveRecord::Relation#cache_key</code> fixed</a></h3>

<p>Lots of corner cases with using <code class="language-plaintext highlighter-rouge">cache_key</code> with loaded and unloaded collections and with selecting specific columns are fixed.</p>

<h3 id="fix-issue-with-has_many-through-sti-association"><a href="https://github.com/rails/rails/pull/23221">Fix issue with <code class="language-plaintext highlighter-rouge">has_many: through</code> STI association</a></h3>

<p>An issue with incorrect <code class="language-plaintext highlighter-rouge">source_type</code> getting used in case of <code class="language-plaintext highlighter-rouge">has_many: through</code> associations with STI models is fixed.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a peek at the <a href="https://github.com/rails/rails/compare/master@%7B2016-01-24%7D...@%7B2016-01-29%7D">changes</a> yourself.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/1/23/this-week-in-rails-doctrine-weak-etags-cabled-postgres-and-more/" rel="bookmark">This Week In Rails: Doctrine, Weak ETags, Cabled Postgres and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2016-01-23 18:40:36 +0000">January 23, 2016 @  6:40 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey passengers!</p>

<p>Have your luggage ready and get those ticket stubs out, a new issue is just about to roll in to the station. <a href="https://twitter.com/chancancode">Godfrey</a> and <a href="https://twitter.com/kaspth">Kasper</a> are co-conducting this beast of steel — eh, newsletter with Rails news, we mean.</p>

<p>Hop aboard before we roll off, and start choo-chooing toward…</p>

<p>Hey, does that sign say “Tracks End Here”?</p>

<h2 id="featured">Featured</h2>

<h3 id="fresh-off-the-tracks-a-new-rails-site"><a href="http://rubyonrails.org">Fresh off the tracks, a new Rails site!</a></h3>

<p>Ahead of the coming major release of Rails, we got a new website and logo and… doctrine?</p>

<p>Yes! See, Rails has been going strong for over 10 years, <a href="http://rubyonrails.org/doctrine/">the Rails Doctrine</a> just captures that magic and spells it out. Thus Rails is ready to roll on for the next decade. The <a href="http://weblog.rubyonrails.org/2016/1/19/new-rails-identity/">blog post</a> dishes on the new design’s backstory.</p>

<p>P.S. The Rails core team got some <a href="http://weblog.rubyonrails.org/2016/1/19/new-rails-identity/">awesome new pictures</a> too!</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20160115-20160123">This weeks Rails Contributors</a></h3>

<p>This week 41 people contributed managed to rivet themselves away from the shiny new pixels above and buckle down some contributions. Kudos to you folks 😁</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="action-cable-postgres-pubsub-can-sub-for-redis"><a href="https://github.com/rails/rails/pull/22950">Action Cable: Postgres pubsub can sub for Redis</a></h3>

<p>Action Cable uses Redis to handle publishing and subscribing, but this week Postgres became a proper pubsub’er and is swappable with Redis.</p>

<h3 id="sql-expressions-as-a-columns-default-value"><a href="https://github.com/rails/rails/pull/20005">SQL expressions as a column’s default value</a></h3>

<p>With this pull request, you will be able to use a SQL expression (such as a SQL function) as the default value for any column type!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="weaker-etags-makes-http-caches-stronger"><a href="https://github.com/rails/rails/pull/17573">Weaker ETags makes HTTP caches stronger</a></h3>

<p><a href="https://en.wikipedia.org/wiki/HTTP_ETag">HTTP ETags</a> help cut bandwidth by sending along a tag that the server could use to validate the cached content.</p>

<p>Rails supports it <a href="http://edgeguides.rubyonrails.org/caching_with_rails.html#conditional-get-support">out-of-the-box</a> but issues <a href="https://en.wikipedia.org/wiki/HTTP_ETag#Strong_and_weak_validation">“strong” ETags</a>, which has stronger cachability implications than Rails can guarantee.</p>

<p>Not anymore! In Rails 5, Rails now correctly issue “weak” ETags — matching <a href="https://github.com/rack/rack/issues/681"><code class="language-plaintext highlighter-rouge">Rack::ETag</code>’s behavior</a>.</p>

<h2 id="improved">Improved</h2>

<h3 id="removed-action-cables-celluloid-dependency"><a href="https://github.com/rails/rails/pull/22934">Removed Action Cable’s celluloid dependency</a></h3>

<p>Action Cable’s dependency on the <code class="language-plaintext highlighter-rouge">celluloid</code> gem has been removed by using the thread pool from <code class="language-plaintext highlighter-rouge">concurrent-ruby</code> (which Rails already uses). While <a href="https://github.com/rails/rails/pull/22977">temporarily reverted</a> it was <a href="https://github.com/rails/rails/commit/01c320001bcce617196270f3d398d48a89a6ea2a">reintroduced</a> this week.</p>

<h3 id="better-configuration-documentation-for-action-cable"><a href="https://github.com/rails/rails/pull/23096/">Better configuration documentation for Action Cable</a></h3>

<p>Now rejiggered: the Action Cable documentation on how to configure the library has been clarified and better highlights how useful some methods are.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so take a peek at <a href="https://github.com/rails/rails/compare/master@%7B2016-01-15%7D...@%7B2016-01-23%7D">the changes</a> yourself.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/1/19/new-rails-identity/" rel="bookmark">New Rails identity</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">dhh</span></span>,
              <span class="published" title="2016-01-19 16:00:00 +0000">January 19, 2016 @  4:00 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>It’s been 10 years since we last updated the Rails identity, so with <a href="http://weblog.rubyonrails.org/2015/12/18/Rails-5-0-beta1/">Rails 5 just around the corner</a>, we thought it was finally time for a fresh look for a new day. This is it! We have a brand new logo, a brand new site design, and lots of lovely new illustrations.</p>

<p>We can thank Basecamp designer <a href="https://twitter.com/asianmack">Jamie Dihiansan</a> for the awesome new look. The brief was that Rails shouldn’t feel slick. It should be warm, approachable, and welcoming. Rails is in a different place from where it was in 2004. We aren’t courting cutting-edge early adopters, so we can lay off the gradients. Rails is now for everyone and our site should reflect that.</p>

<h2 id="the-rails-doctrine">The Rails Doctrine</h2>

<p>In concert with the new look, I wrote the eight major tenets of <a href="http://rubyonrails.org/doctrine">The Rails Doctrine</a>. It’s still a bit of a work in progress, but please do give it a read if you want to understand deeper the values and practices that underpin us as a framework and a community.</p>

<h2 id="a-new-video-is-coming">A new video is coming</h2>

<p>I was going to record a new video for the homepage, but since we’re just on the cusp on some changes to Rails 5 that’ll change things a bit, I’m holding off until beta2 (which should be out shortly). In the mean time, you can enjoy the introduction to Action Cable. But rest assured that it’ll soon be replaced by a new, proper introduction.</p>

<p>Hope you all enjoy the new look. Now let’s ship Rails 5!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2016/1/9/this-week-in-rails-happy-new-year/" rel="bookmark">This week in Rails: Happy New Year!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">andatki</span></span>,
              <span class="published" title="2016-01-09 01:02:12 +0000">January 9, 2016 @  1:02 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy New Year! Welcome to the first 2016 issue of This week in Rails.</p>

<p>I’m <a href="https://twitter.com/andatki">Andy</a>, and before diving in to contributions from this week, let’s briefly recap some stats from 2015. Our 12 editors released 50 issues summarizing <a href="https://github.com/rails/rails/compare/master@%7B2015-01-01%7D...@%7B2015-12-18%7D">over 6500 commits</a> to Rails! Each issue is now being sent to over 4300 subscribers.</p>

<p>What a great year! To celebrate, sweep up some confetti laying around from last weekend, toss it in the air, and sing some bars of <a href="https://en.wikipedia.org/wiki/File:Auld_Lang_Syne.ogg">Auld Lang Syne</a>.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151219-20160108">This Week’s Rails Contributors</a></h3>

<p>79 people contributed to Rails since the last issue on December 18, 2015! Check out the list of <a href="https://github.com/rails/rails/issues">issues</a> if you’d like to help out as well.</p>

<h3 id="railsconf-2016-cfp-deadline"><a href="http://rubycentral-cfp.herokuapp.com/events/railsconf2016">RailsConf 2016 CFP deadline</a></h3>

<p>Interested in speaking at RailsConf 2016 in Kansas City? Call for proposals closes January 15th, 2016, 11:59pm CST! You’ve got 1 week!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="security-per-form-csrf-tokens"><a href="https://github.com/rails/rails/pull/22275">Security: Per-form CSRF tokens</a></h3>

<p>Changes brought upstream from GitHub, related to Content Security Policy (CSP) and securing forms. Check out the links in the PR to learn more.</p>

<h3 id="default-new-apps-to-tag-logs-with-request_id"><a href="https://github.com/rails/rails/pull/22949">Default new apps to tag logs with <code class="language-plaintext highlighter-rouge">request_id</code></a></h3>

<p>The <code class="language-plaintext highlighter-rouge">:request_id</code> log tag ensures that each request is tagged with a unique identifier.</p>

<h3 id="short-hand-methods-for-types-in-mysql"><a href="https://github.com/rails/rails/pull/21688">Short-hand methods for types in MySQL</a></h3>

<p>This change adds short-hand methods like <code class="language-plaintext highlighter-rouge">tinyblob</code> and <code class="language-plaintext highlighter-rouge">mediumblob</code> for text and blob types when using MySQL.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="dont-output-to-stdout-twice"><a href="https://github.com/rails/rails/pull/22933">Don’t output to <code class="language-plaintext highlighter-rouge">STDOUT</code> twice</a></h3>

<p>Stops printing messages twice with rails console or rails server and a logger set to output to STDOUT.</p>

<h2 id="faster">Faster</h2>

<h3 id="replace-xtimesmap-with-arraynewx"><a href="https://github.com/rails/rails/pull/22890">Replace <code class="language-plaintext highlighter-rouge">x.times.map{}</code> with <code class="language-plaintext highlighter-rouge">Array.new(x){}</code></a></h3>

<p>Small performance improvement supported with a benchmark. Check out the results.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2016-01-01%7D...@%7B2016-01-08%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/12/19/this-week-in-rails-rails-5-the-beta-awakens/" rel="bookmark">This week in Rails: Rails 5 - The Beta Awakens</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">toddbealmear</span></span>,
              <span class="published" title="2015-12-19 19:48:35 +0000">December 19, 2015 @  7:48 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>I hear you’re looking for a pilot. Name’s <a href="https://twitter.com/toddbealmear">Todd</a> Solo, captain of This Week in Rails. She may not look like much, but this bucket of bolts did the Kessel Run in less than twelve parsecs. She’s more than capable of smuggling all of the latest Rails intelligence to you.</p>

<p>I’ve got a very Special Edition™ for you this week - we’re celebrating the release of the <a href="http://weblog.rubyonrails.org/2015/12/18/Rails-5-0-beta1/">very first beta</a> of Rails 5! We’re going to be covering all of the big additions made since the release of Rails 4.2 in this issue. Don’t worry - no Bothans died to bring you this information.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-releases-contributors"><a href="http://contributors.rubyonrails.org/edge/contributors">This Release’s Contributors</a></h3>

<p>We had 790 scruffy-looking nerf herders contribute to this release. That’s over 7000 commits in a little over a year! Give all of these folks a big round of applause!</p>

<h3 id="rails-5-only-supports-ruby-222"><a href="https://github.com/rails/rails/commit/32f7491808d2c4e097ed7b3ee875e4d1cea8c442#diff-73ac7236f7a8247a9cd61d338ef49cda">Rails 5 Only Supports Ruby 2.2.2+</a></h3>

<p>This is important - Rails 5 will only support versions of Ruby greater than 2.2.2. Ruby 2.2 introduces a number of new features and performance enhancements that the Rails team wants to capitalize on. You can read more about Ruby 2.2 in the <a href="https://www.ruby-lang.org/en/news/2014/12/25/ruby-2-2-0-released/">release announcement</a>.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="action-cable"><a href="https://github.com/rails/rails/tree/master/actioncable">Action Cable</a></h3>

<p>In case you haven’t heard, Rails 5 is bringing WebSocket support along with it! Action Cable is a completely integrated solution for building WebSocket apps in Rails. Give it a spin!</p>

<h3 id="rails-api"><a href="https://github.com/rails/rails/pull/19832">Rails API</a></h3>

<p>Rails 5 introduces support for API-only apps. Based on the wonderful work done by the <a href="https://github.com/rails-api/rails-api">Rails API project</a>, you can now generate apps that strip out parts of Rails not needed for pure backends.</p>

<h3 id="new-command-router"><a href="https://github.com/rails/rails/issues/18878">New Command Router</a></h3>

<p>Why do you start a console with <code class="language-plaintext highlighter-rouge">rails console</code>, but run migrations with <code class="language-plaintext highlighter-rouge">rake db:migrate</code>? That doesn’t make any sense. Starting in Rails 5, many of these old <code class="language-plaintext highlighter-rouge">rake</code> commands can be run with <code class="language-plaintext highlighter-rouge">rails</code> instead.</p>

<h3 id="attributes-api"><a href="https://github.com/rails/rails/blob/8c752c7ac739d5a86d4136ab1e9d0142c4041e58/activerecord/lib/active_record/attributes.rb">Attributes API</a></h3>

<p>Your models are getting a new <code class="language-plaintext highlighter-rouge">attribute</code> class method in Rails 5, allowing you to easily define a relationship between the model and a non-Active Record type. No more misusing <code class="language-plaintext highlighter-rouge">serialize</code>!</p>

<h3 id="applicationrecord"><a href="https://github.com/rails/rails/pull/22567">ApplicationRecord</a></h3>

<p>Just like <code class="language-plaintext highlighter-rouge">ApplicationController</code>, we’re getting an <code class="language-plaintext highlighter-rouge">ApplicationRecord</code> model superclass in Rails 5. Now you don’t have to monkeypatch <code class="language-plaintext highlighter-rouge">ActiveRecord::Base</code> to add functionality!</p>

<h3 id="activerecordrelationor"><a href="https://github.com/rails/rails/pull/16052">ActiveRecord::Relation#or</a></h3>

<p>A long requested feature, <code class="language-plaintext highlighter-rouge">ActiveRecord::Relation</code> is finally getting the <code class="language-plaintext highlighter-rouge">#or</code> method we’ve all wanted.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are plenty of things we’re not able to cover here, so I highly recommend you take a peek at the release announcement and CHANGELOGs.</p>

<p>We’ll be back to our regularly scheduled program next week.</p>

<p>Until next time - may the Force be with you!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/12/11/this-week-in-rails-gzipped-asset-api-error-responses-and-more/" rel="bookmark">This week in Rails: GZipped Asset, API error responses and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2015-12-11 11:08:52 +0000">December 11, 2015 @ 11:08 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! 🌨</p>

<p>This is <a href="https://twitter.com/vipulnsward">Vipul</a>, bringing you the latest from <a href="https://github.com/rails/rails">Rails</a>.</p>

<p>P.S: Here’s something for all those at <a href="http://rubykaigi.org/2015">RubyKaigi</a> 🍣. Enjoy!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151205-201512110930">This Week’s Rails Contributors</a></h3>

<p>This week 26 fabulous people contributed to Rails, including 6 first-time contributors! Check out the <a href="https://github.com/rails/rails/issues">list of issues</a> if you’d like to help out as well.</p>

<h3 id="sprockets-reintroduce-gzip-file-generation"><a href="https://github.com/rails/sprockets/pull/193">Sprockets: Reintroduce gzip file generation</a></h3>

<p>GZip file generation was taken out <a href="https://github.com/sstephenson/sprockets/pull/589">last year</a> from sprockets. This change re-introduces compressed file generation and parallel file writing, which is useful for web servers that don’t support gzipping static assets. This is pretty useful if you are on a service like Heroku.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="introduce-after_createupdatedelete_commit-callbacks"><a href="https://github.com/rails/rails/pull/22516">Introduce after_{create,update,delete}_commit callbacks</a></h3>

<p>New shortcuts were added to <code class="language-plaintext highlighter-rouge">after_commit .. on: :action</code>.</p>

<p>For example, <code class="language-plaintext highlighter-rouge">after_commit :add_to_index_later, on: :create</code> can now be written as <code class="language-plaintext highlighter-rouge">after_create_commit :add_to_index_later</code>.</p>

<h2 id="improved">Improved</h2>

<h3 id="rails-api-ability-to-return-error-responses-in-json-format-in-development"><a href="https://github.com/rails/rails/pull/20831">Rails API: Ability to return error responses in json format in development</a></h3>

<p>Previously error pages are always being delivered in html pages in development mode, which is not handy when you would like to view json responses. This change adds support for viewing errors in json format. It also makes sure that when requesting resources like <code class="language-plaintext highlighter-rouge">post/1.json</code>, when error occurs, it returns json response based on json format in url, unlike previously used html format.</p>

<h3 id="changed-the-protect_from_forgery-prepend-default-to-false"><a href="https://github.com/rails/rails/commit/39794037817703575c35a75f1961b01b83791191">Changed the <code class="language-plaintext highlighter-rouge">protect_from_forgery</code> prepend default to <code class="language-plaintext highlighter-rouge">false</code></a></h3>

<p><code class="language-plaintext highlighter-rouge">protect_from_forgery</code> will now be inserted into the callback chain at the point it is called in the application. This is useful for cases where you want to <code class="language-plaintext highlighter-rouge">protect_from_forgery</code> after you perform required authentication callbacks or other callbacks that are required to run after forgery protection.</p>

<p>If needed, you can use <code class="language-plaintext highlighter-rouge">protect_from_forgery prepend: true</code> to always run <code class="language-plaintext highlighter-rouge">protect_from_forgery</code> before others.</p>

<h3 id="request_forgery_protection-initializer-is-removed-from-rails-api"><a href="https://github.com/rails/rails/pull/22508"><code class="language-plaintext highlighter-rouge">request_forgery_protection</code> initializer is removed from Rails API</a></h3>

<p>Usually in Rails API, you would not use <code class="language-plaintext highlighter-rouge">protect_from_forgery</code>, by default. The initializer to add this option- <code class="language-plaintext highlighter-rouge">request_forgery_protection</code> is now removed if you are creating an API.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="subscribing-to-notifications-while-inside-the-instrumented-section"><a href="https://github.com/rails/rails/commit/ab3c4a4083cce34131eeb23df42041fafe063fc3">Subscribing to notifications while inside the instrumented section.</a></h3>

<p>Previously if we tried to do</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>ActiveSupport::Notifications.instrument('foo') do
  ActiveSupport::Notifications.subscribe('foo') {}
end
</code></pre></div></div>

<p>it would create an error, because for the <code class="language-plaintext highlighter-rouge">subscribe</code> inside block, the dynamic <code class="language-plaintext highlighter-rouge">subscription</code> does not yet exist. This change make sure that subscriptions inside <code class="language-plaintext highlighter-rouge">instrumentation</code> get notified as well.</p>

<h3 id="add-redirection-path-in-the-error-message-of-assert_response-if-response-is-redirect"><a href="https://github.com/rails/rails/pull/19977">Add redirection path in the error message of assert_response if response is :redirect</a></h3>

<p>Previously, if <code class="language-plaintext highlighter-rouge">assert_response</code> was checking for any non-redirect response like <code class="language-plaintext highlighter-rouge">:success</code> and actual response was a <code class="language-plaintext highlighter-rouge">:redirect</code> then, the error message displayed was like - <code class="language-plaintext highlighter-rouge">Expected response to be a &lt;success&gt;</code>. This change, now shows the redirected path in error response as - <code class="language-plaintext highlighter-rouge">Expected response to be a &lt;success&gt;, but was a redirect to &lt;http://test.host/posts/lol&gt;</code></p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-12-05%7D...@%7B2015-12-11%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/12/7/this-week-in-rails-rails-command-infrastructure-and-more/" rel="bookmark">This week in Rails: Rails command infrastructure and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">marcelmorgan</span></span>,
              <span class="published" title="2015-12-07 06:27:50 +0000">December 7, 2015 @  6:27 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone!</p>

<p>This is <a href="https://twitter.com/marcelmorgan">Marcel</a>, bringing you the latest news in <a href="https://github.com/rails/rails">Rails</a>.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151128-20151204">This Week’s Rails Contributors</a></h3>

<p>This week 28 fabulous people contributed to Rails. Check out the list of <a href="https://github.com/rails/rails/issues">issues</a> if you’d like to see your name up there.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="rails-command-infrastructure"><a href="https://github.com/rails/rails/pull/22457">Rails Command Infrastructure</a></h3>

<p>The infrastructure needed to support the movement of <code class="language-plaintext highlighter-rouge">rake</code> tasks to the <code class="language-plaintext highlighter-rouge">rails</code> command is now in place. This paves the way to make it easier to learn commands for persons new to Rails.</p>

<h2 id="improved">Improved</h2>

<h3 id="allow-use-of-minitest-rails-gem-with-test-runner"><a href="https://github.com/rails/rails/pull/22456">Allow use of minitest-rails gem with test runner</a></h3>

<p>An explicit global namespace to <code class="language-plaintext highlighter-rouge">Rails::TestUnitReporter</code> has been added to resolve a namespace conflict between minitest-rails and Rails test runner.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="initialized-sti-models-are-now-casted-to-the-default-type"><a href="https://github.com/rails/rails/pull/17169">Initialized STI models are now casted to the default type</a></h3>

<p>If a database default was specified for the <code class="language-plaintext highlighter-rouge">type</code> column used in Single Table Inheritance (STI), it did not cast new instances to default type on initialize. This is now fixed.</p>

<h3 id="replace-actionmailerbaserespond_to-with-respond_to_missing"><a href="https://github.com/rails/rails/pull/22482">Replace <code class="language-plaintext highlighter-rouge">ActionMailer::Base.respond_to?</code> with <code class="language-plaintext highlighter-rouge">respond_to_missing?</code></a></h3>

<p>This simple refactor utilizes the <code class="language-plaintext highlighter-rouge">respond_to_missing?</code> hook introduced in Ruby 1.9. This prevents the usage of the method <code class="language-plaintext highlighter-rouge">method</code> from raising a <code class="language-plaintext highlighter-rouge">NameError</code>.</p>

<h3 id="clarify-connection-pool-error-message"><a href="https://github.com/rails/rails/pull/22449/files">Clarify connection pool error message</a></h3>

<p>The previously error message whenever all connections in the pool were used up, did not mention that.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-11-28%7D...@%7B2015-12-04%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/11/28/this-week-in-rails-don-t-miss-our-black-friday-and-cyber-monday-deals/" rel="bookmark">This week in Rails: Don&#39;t Miss Our Black Friday and Cyber Monday Deals!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2015-11-28 18:38:23 +0000">November 28, 2015 @  6:38 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone!</p>

<p>This is <a href="https://twitter.com/chancancode">Godfrey</a>, bringing you the latest news deals in <a href="https://github.com/rails/rails">Rails</a>. Have you been holding out on getting the latest copy of <a href="http://rubyonrails.org">Rails</a>? Don’t wait any longer as we are having our biggest sale of the year this weekend. Check out these unbelievable deals before they are gone!</p>

<h2 id="featured">Featured</h2>

<h3 id="-railsconf-tickets-giveaway"><a href="http://rubycentral-cfp.herokuapp.com/events/railsconf2016">🆓 RailsConf Tickets Giveaway</a></h3>

<p><strong>Limited Time Offer!</strong> Enter the <em>RailsConf Tickets Giveaway</em> (a.k.a. the <em>Call For Proposals</em>) by submitting a talk proposal! If your talk is selected, you will win a FREE admission to the conference!</p>

<p><em>Terms and conditions apply, see website for details.</em></p>

<h3 id="-lifetime-rails-contributor-membership"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151121-20151127">🆓 Lifetime Rails Contributor Membership</a></h3>

<p><strong>As Seen On The Interwebs!</strong> Start collecting points like these 25 individuals with our award-winning rewards program. To apply for your FREE membership, simply submit a pull request to <a href="https://github.com/rails/rails">Rails</a>. Membership never expires!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="-postgresql-geometric-types-support"><a href="https://github.com/rails/rails/pull/22304">🆓 PostgreSQL Geometric Types Support</a></h3>

<p><strong>In-Store Only!</strong> Get FREE support for PostgreSQL data types (such as <code class="language-plaintext highlighter-rouge">line</code>, <code class="language-plaintext highlighter-rouge">path</code> and <code class="language-plaintext highlighter-rouge">polygon</code>) in <code class="language-plaintext highlighter-rouge">schema.rb</code> when you upgrade to Rails 5.</p>

<h3 id="-certificate-of-origin"><a href="https://github.com/rails/rails/pull/22263">🆓 Certificate of Origin</a></h3>

<p><strong>Bonus Upgrade Offer!</strong> Rails 5 apps will be equipped with a FREE <code class="language-plaintext highlighter-rouge">Origin</code> header check if one is present in the request. When upgrading, existing apps will be given an option to enable the security feature at no additional cost.</p>

<h2 id="improved">Improved</h2>

<h3 id="-source-code-extraction"><a href="https://github.com/rails/rails/pull/22172">🆓 Source Code Extraction</a></h3>

<p><strong>NOT A Pricing Error!</strong> If something went wrong in an AJAX request, Rails will now throw in the extracted source code in plaintext for FREE, making things easier to read in your browser’s console.</p>

<h3 id="-dead-code-removal"><a href="https://github.com/rails/rails/pull/22399">🆓 Dead Code Removal</a></h3>

<p><strong>Everything Must Go!</strong> As part of our clearance, a piece of dead code was discovered and promptly set FREE. No wonder everyone is so excited!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="-race-condition-protection"><a href="https://github.com/rails/rails/commit/0b9812bddea50f974d51175ae81bfd6d8407f946">🆓 Race Condition Protection</a></h3>

<p><strong>While Supplies Last!</strong> When the <em>Evented File-System Monitoring</em> project landed on master, a contributor <a href="https://github.com/rails/rails/pull/22254#issuecomment-156689313">pointed out a potential race condition</a>. After ( <a href="https://github.com/rails/rails/commit/49a5b408c9e23b937e93f6355b7b0a49a4a23184">a few</a> <a href="https://github.com/rails/rails/commit/4596c1a31902806a15c970a0e210942912b139b6">attempts</a>, we have finally arrived at a solution to FREE us from the danger!</p>

<h2 id="correction">Correction</h2>

<h3 id="-byebug-upgrade-program"><a href="https://rubygems.org/gems/byebug/versions">🆓 <code class="language-plaintext highlighter-rouge">byebug</code> Upgrade Program</a></h3>

<p><strong>Manufacturer Rebate!</strong> In the <a href="https://rails-weekly.ongoodbits.com/2015/11/21/railsconf-2016-frozen-hash-keys-faster-byebug-and-more">last issue</a>, we recommended <code class="language-plaintext highlighter-rouge">byebug</code> 7.0. Turns out the latest version is actually 8.2.1 (as of this week), which addressed some issue with the 7.0 release.</p>

<p>To compansate you for the trouble, we decided to offer a FREE <code class="language-plaintext highlighter-rouge">byebug</code> upgrade program for our readers. Simply change your <code class="language-plaintext highlighter-rouge">Gemfile</code> entry accordingly and run <code class="language-plaintext highlighter-rouge">bundle install</code>, and our agents will make sure the library is upgraded.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes deals than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-11-21%7D...@%7B2015-11-27%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/11/21/this-week-in-rails-railsconf-2016-frozen-hash-keys-faster-byebug-and-more/" rel="bookmark">This week in Rails: RailsConf 2016, frozen Hash keys, faster byebug and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2015-11-21 08:50:34 +0000">November 21, 2015 @  8:50 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi everyone! This is <a href="https://twitter.com/chancancode">Godfrey</a> bringing you the latest news from <a href="https://github.com/rails/rails">Rails</a>.</p>

<h2 id="featured">Featured</h2>

<h3 id="railsconf-2016"><a href="http://railsconf.com/">RailsConf 2016</a></h3>

<p>The RailsConf 2016 website is up! This year, we will be gathering in Kansas City from May 4 to May 6. If you would like to submit a talk, the <a href="http://rubycentral-cfp.herokuapp.com/events/railsconf2016">call for proposals (CFP) is open</a> from now until Jan 15!</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151114-20151120">This Week’s Rails Contributors</a></h3>

<p>This week we have seen commits from 29 different contributors in the Rails repository, including 6 new faces!</p>

<h2 id="improved">Improved</h2>

<h3 id="frozen-fk-names-for-association"><a href="https://github.com/rails/rails/commit/e38e0c61e9d73b3531a02c6dd44c9694f64f2c0a">Frozen FK Names For Association</a></h3>

<p>When you use a non-frozen (i.e. mutable) string as a Hash key, Ruby would have to <a href="https://github.com/ruby/ruby/blob/8fdebec088657cfd6aa08ee588b79740858923e1/hash.c#L1513-L1514">duplicate and freeze it</a> in order to guarantee a stable hash key.</p>

<p>This is usually fine, but when that string is used to build many different hashes, the work adds up. Fortunately, we can simply freeze it upfront to avoid the repeated work.</p>

<h3 id="faster-byebug"><a href="https://github.com/rails/rails/pull/22328">Faster byebug</a></h3>

<p><code class="language-plaintext highlighter-rouge">byebug</code> 7.0 has recently been released with some major performance improvements. (See <a href="https://github.com/deivid-rodriguez/byebug/pull/160">this pull request</a> for details.) If you are using <code class="language-plaintext highlighter-rouge">byebug</code> for debugging, you might want to upgrade!</p>

<h3 id="speeding-up-enumerablesum"><a href="https://github.com/rails/rails/pull/22336">Speeding Up Enumerable#sum</a></h3>

<p>Did you know that <a href="http://ruby-doc.org/core-2.2.3/Enumerable.html#method-i-inject"><code class="language-plaintext highlighter-rouge">Enumerable#{inject,reduce}</code> can take a symbol as its argument</a>? Apparently, this is slightly faster too! (Note: this is different from <code class="language-plaintext highlighter-rouge">inject(&amp;:method)</code> which goes through <code class="language-plaintext highlighter-rouge">Symbol#to_proc</code>.)</p>

<h2 id="fixed">Fixed</h2>

<h3 id="use--instead-of--in-docs"><a href="https://github.com/rails/rails/pull/22299">Use <tt>…</tt> Instead Of +…+ In Docs</a></h3>

<p>Usually, you can use <code class="language-plaintext highlighter-rouge">+some_word+</code> to switch to fixed-width fonts in Rails’ documentation. However, the parser for this rule would sometime fail in some more complex cases.</p>

<p>If you are not sure when to use which, be sure to check the <a href="http://guides.rubyonrails.org/api_documentation_guidelines.html#fonts">guidelines</a>, or just check the output locally by running <code class="language-plaintext highlighter-rouge">rake rdoc</code>.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-11-14%7D...@%7B2015-11-20%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/11/14/this-week-in-rails-new-releases-exciting-rails-5-stuff-and-more/" rel="bookmark">This week in Rails: new releases, exciting Rails 5 stuff and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2015-11-14 02:53:09 +0000">November 14, 2015 @  2:53 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey everyone - <a href="https://twitter.com/imtayadeway">Tim</a> here with another monster update with all the exciting Rails-related goings-on from this week.</p>

<h2 id="featured">Featured</h2>

<h3 id="riding-rails-snappier-development-mode-in-rails-5"><a href="http://weblog.rubyonrails.org/2015/11/11/snappier-development-mode-in-rails-5/">Riding Rails: Snappier Development Mode in Rails 5</a></h3>

<p>One of the nicest things about development mode in Rails has to be the sheer convenience of running on your latest revision on each request. This of course comes at a performance cost but is about to change: instead the filesystem will notify Rails asynchronously of any changes.</p>

<h3 id="rails-425-and-4114-are-here"><a href="https://rubygems.org/gems/rails">Rails 4.2.5 and 4.1.14 are here!</a></h3>

<p>This week saw the release of both 4.2.5 and 4.1.14 versions of Rails. Go upgrade while they’re still hot!</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151107-20151113">This Week’s Rails Contributors</a></h3>

<p>This week 33 fabulous people contributed to Rails. Check out the list of <a href="https://github.com/rails/rails/issues">issues</a> if you’d like to see your name up there.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="new-days_in_year-method-added-to-time"><a href="https://github.com/rails/rails/pull/22244">New! days_in_year method added to Time</a></h3>

<p>Now you can can call <code class="language-plaintext highlighter-rouge">Time.days_in_year</code> and, at the time of writing it will return <code class="language-plaintext highlighter-rouge">365</code>. Call it next year and it will give you <code class="language-plaintext highlighter-rouge">366</code>. Nice!</p>

<h3 id="stringparameterize-gets-a-preserve_case-option"><a href="https://github.com/rails/rails/pull/21897">String#parameterize gets a preserve_case option</a></h3>

<p>This change adds an option to Preserve-the-CASE of the string instead of casting-everything-to-lowercase when generating parameters.</p>

<h2 id="improved">Improved</h2>

<h3 id="improve-support-for-non-active-record-associations-on-validation"><a href="https://github.com/rails/rails/pull/22224">Improve support for non Active Record associations on validation</a></h3>

<p>Support for non-Active Record associations just got better by skipping <code class="language-plaintext highlighter-rouge">marked_for_destruction?</code> when going through validations if it’s not implemented, making it easier to define virtual associations.</p>

<h3 id="return-a-sized-enumerator-from-hashtransform_values"><a href="https://github.com/rails/rails/pull/21806">Return a sized Enumerator from Hash#transform_values</a></h3>

<p>You can now discover the size of a hash whose values have been transformed.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="exclude-views-when-fetching-tables-on-all-the-connection-adapters"><a href="https://github.com/rails/rails/pull/21601">Exclude views when fetching tables on all the connection adapters</a></h3>

<p>This brings more consistency across the adapters where those for MySQL and SQLite would return views in addition to tables when calling <code class="language-plaintext highlighter-rouge">#tables</code>, where PostgreSQL would not. Now they all return tables, and no views.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-11-07%7D...@%7B2015-11-13%7D">check them out yourself</a>.</p>

<p>Until next time!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/11/6/this-week-in-rails-new-release-candidates-concurrent-migrations-and-more/" rel="bookmark">This week in Rails: new release candidates, concurrent migrations and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">huoxito</span></span>,
              <span class="published" title="2015-11-06 23:24:53 +0000">November 6, 2015 @ 11:24 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hi there everyone o/</p>

<p><a href="https://twitter.com/huoxito">Washington</a> here putting together another weekly Rails issue for the most awesome community.</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-425rc2-and-rails-4114rc2-are-out"><a href="http://weblog.rubyonrails.org/2015/11/6/Rails-4-2-5-rc2-and-4-1-14-rc2-have-been-released/">Rails 4.2.5.rc2 and Rails 4.1.14.rc2 are out</a></h3>

<p>Please take a minute or two to update your project Gemfile and run the build on the RCs. Spotting regressions now means they’re fixed in another RC rather than a new point release some month(s) away.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151031-20151106">This Week’s Rails Contributors</a></h3>

<p>As of 17h15min, UTC -3, 28 contributors made their commits to Rails master. Some of those for the very first time. Welcome!</p>

<h3 id="make-migrations-concurrent-safe-using-advisory-locks"><a href="https://github.com/rails/rails/pull/22122">Make migrations concurrent safe (using advisory locks)</a></h3>

<p>MySQL and Postgres Active Record adapters were enhanced to avoid confusing behaviour or exceptions when running migrations on multi-instance clusters. See the <a href="https://github.com/rails/rails/issues/22092">issue</a> as well for more details.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="add-enabled-flag-to-public_file_server-settings"><a href="https://github.com/rails/rails/pull/22173">Add enabled flag to <code class="language-plaintext highlighter-rouge">public_file_server</code> settings</a></h3>

<p>Good old <code class="language-plaintext highlighter-rouge">serve_static_files</code> is being deprecated as of Rails 5 in favor of <code class="language-plaintext highlighter-rouge">public_file_server.enabled</code> so we have all static asset options under the same <code class="language-plaintext highlighter-rouge">public_file_server</code> key.</p>

<h2 id="improved">Improved</h2>

<h3 id="deprecate-exceptionoriginal_exception-in-favor-of-exceptioncause"><a href="https://github.com/rails/rails/pull/18774">Deprecate exception#original_exception in favor of exception#cause</a></h3>

<p>Exception wrapping implementation got a bit simpler this week by using Ruby’s built in <a href="http://ruby-doc.org/core-2.2.0/Exception.html#method-i-cause">Exception#cause</a>, available since version 2.1.</p>

<h3 id="require-only-necessary-concurrent-ruby-classes"><a href="https://github.com/rails/rails/pull/22185">Require only necessary concurrent-ruby classes</a></h3>

<p>Another concurrent-ruby bump and related load time improvements.</p>

<h3 id="dont-allow-arbitrary-data-in-back-urls"><a href="https://github.com/rails/rails/pull/22180">Don’t allow arbitrary data in <code class="language-plaintext highlighter-rouge">:back</code> urls</a></h3>

<p>This was reported <a href="https://github.com/rails/rails/issues/14444">quite a while ago</a>, but now someone stepped up to the plate and followed it through. Rails got a bit safer again, thanks to the community. ❤️</p>

<h3 id="allow-passing-an-env-to-config_for"><a href="https://github.com/rails/rails/pull/22128">Allow passing an env to <code class="language-plaintext highlighter-rouge">config_for</code></a></h3>

<p>Sanity checking configuration files in other environments just got easier as well.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-10-31%7D...@%7B2015-11-06%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/10/30/this-week-in-rails-this-spooky-week-in-rails-bidirectional-destroys-indexed-errors-and-horror/" rel="bookmark">This spooky week in Rails: bidirectional destroys, indexed errors and horror!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2015-10-30 23:44:40 +0000">October 30, 2015 @ 11:44 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Beware of those,<br />
In forests reigned by cawing crows<br />
Who feel the fright, a stormy friday night</p>

<p>Your weekly Rails news, pick and choose<br />
As we weave, this;<br />
All Hallow’s Eve</p>

<p>Bet you didn’t expect to get spooked the day <em>before</em> Halloween, well, that’s our trick-a-trété. What? That’s what the french say — don’t ask.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151023-20151030">This Week’s Rails Contributors</a></h3>

<p>This week 42 contributors gathered in the town square, pitchforks in hand, and chased bugs out of Rails and up the mill.</p>

<p>That’s what mob programming is all about. I assume.</p>

<h3 id="bidirectional-destroys"><a href="https://github.com/rails/rails/pull/18548">Bidirectional Destroys</a></h3>

<p>Say, a <code class="language-plaintext highlighter-rouge">USA</code> and a <code class="language-plaintext highlighter-rouge">USSR</code> model employed defensive measures to destroy the other if they we’re destroyed. Before they’d keep destroying the other, now they’re more peaceful only destroying each other <em>once</em>. Good thing it’s a fictional example 😁</p>

<h3 id="nested-attributes-indexes-errors-by-insertions"><a href="https://github.com/rails/rails/pull/19686">Nested attributes indexes errors by insertions</a></h3>

<p>Have models with <code class="language-plaintext highlighter-rouge">accepts_nested_attributes_for</code>? The macro nestled out an <code class="language-plaintext highlighter-rouge">index_errors</code> option, so errors attach to a specific model in the submitted array.</p>

<p>There’s comments on the pull request, if you want to improve it further.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="relation-gets-left_outer_joins"><a href="https://github.com/rails/rails/pull/12071">Relation gets <code class="language-plaintext highlighter-rouge">left_outer_joins</code></a></h3>

<p>There’s now an explicit way to do this specific join — abstracted away in <code class="language-plaintext highlighter-rouge">includes</code> before.<br />
For those who want to be left out, er… join in!</p>

<h2 id="improved">Improved</h2>

<h3 id="many-to-many-relationships-count-a-little-more"><a href="https://github.com/rails/rails/pull/18383">Many to many relationships count a little more</a></h3>

<p>While calling <code class="language-plaintext highlighter-rouge">count</code> on a <code class="language-plaintext highlighter-rouge">has_and_belongs_to_many</code> relationship was correctly counted, amping up the inclusion made threw off the count. Now you can use <code class="language-plaintext highlighter-rouge">includes</code> and have things counted correctly again.</p>

<h3 id="sanitizing-order"><a href="https://github.com/rails/rails/pull/13008">Sanitizing Order</a></h3>

<p>You’d have to remember to sanitize arguments you passed to <code class="language-plaintext highlighter-rouge">order</code>, which, if you have an example like the one in the pull request, is a pain. No more.</p>

<h3 id="hashwithindifferentaccess-defaults-with-to_hash-objects"><a href="https://github.com/rails/rails/pull/16357"><code class="language-plaintext highlighter-rouge">HashWithIndifferentAccess</code> defaults with <code class="language-plaintext highlighter-rouge">to_hash</code> objects</a></h3>

<p>Passing an object that responds to <code class="language-plaintext highlighter-rouge">to_hash</code> to <code class="language-plaintext highlighter-rouge">HashWithIndifferentAccess.new</code> now respects the default values and default proc if any of those are there.</p>

<h2 id="one-more-thing">One more thing™</h2>

<h3 id="correction-active-support-delegation-to-block-args-or-arg"><a href="https://github.com/rails/rails/pull/21302">Correction: Active Support delegation to <code class="language-plaintext highlighter-rouge">block</code>, <code class="language-plaintext highlighter-rouge">args</code> or <code class="language-plaintext highlighter-rouge">arg</code></a></h3>

<p>Last week, we incorrectly said this change would raise exceptions. What really happens is <code class="language-plaintext highlighter-rouge">delegate</code> now works with <code class="language-plaintext highlighter-rouge">block</code>, <code class="language-plaintext highlighter-rouge">args</code> or <code class="language-plaintext highlighter-rouge">arg</code> if those light your Jack-o’-lantern.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-10-23%7D...@%7B2015-10-30%7D">check them out yourself</a>.</p>

<p>Until next time!</p>

<p>Also if you really want to be scared, look yourself in the mirror! Boom, nailed it!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/10/16/this-week-in-rails-4000-subscribers-file-server-headers-config-and-more/" rel="bookmark">This week in Rails: 4000 Subscribers, File Server Headers Config and More!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2015-10-16 22:42:41 +0000">October 16, 2015 @ 10:42 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hello everyone! This is <a href="https://www.twitter.com/repinel">Roque</a> with the latest from the Rails world.</p>

<h2 id="featured">Featured</h2>

<h3 id="sending-out-to-over-4000-subscribers"><a href="http://rails-weekly.ongoodbits.com">Sending out to over 4000 subscribers!</a></h3>

<p>This Week in Rails just crossed 4000 subscribers. Thanks to all subscribers and collaborators! Stay tuned!</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151009-20151016">This Week’s Rails Contributors</a></h3>

<p>26 people contributed to Rails this week, including 5 first-time contributors! If you are interested in becoming a contributor, you can have a look at the <a href="https://github.com/rails/rails/issues">issues</a> list.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="create-a-config-for-file-server-headers"><a href="https://github.com/rails/rails/pull/19135">Create a config for file server headers</a></h3>

<p>Rails now allows any static file header to be defined using the configuration option <code class="language-plaintext highlighter-rouge">config.public_file_server.headers</code>.<br />
This also deprecates the former option <code class="language-plaintext highlighter-rouge">static_cache_control</code> that would only apply the header <code class="language-plaintext highlighter-rouge">Cache-Control</code>.</p>

<h3 id="force-ssl-in-mails"><a href="https://github.com/rails/rails/pull/17388">Force SSL in mails</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">config.force_ssl</code> option will now force mails to use the protocol <code class="language-plaintext highlighter-rouge">https</code> for the <code class="language-plaintext highlighter-rouge">host</code> setup in <code class="language-plaintext highlighter-rouge">config.action_mailer.default_url_options</code>.</p>

<h3 id="allow-multiple-root-routes-in-same-scope-level"><a href="https://github.com/rails/rails/pull/20940">Allow multiple root routes in same scope level</a></h3>

<p>Lets say your application has multiple root endpoints depending on a constraint. You can now describe them using <code class="language-plaintext highlighter-rouge">root</code> entries in your <code class="language-plaintext highlighter-rouge">config/routes.rb</code> file instead of having to use <code class="language-plaintext highlighter-rouge">get</code> statements.</p>

<h2 id="improved">Improved</h2>

<h3 id="make-active-record-increment-and-decrement-concurency-safe"><a href="https://github.com/rails/rails/pull/11410">Make Active Record increment! and decrement! concurency safe</a></h3>

<p>This will prevent issues when performing updates from different instances of a same record.</p>

<h3 id="the-where-method-will-now-let-you-know-when-an-argument-type-is-unsupported"><a href="https://github.com/rails/rails/pull/21944">The where method will now let you know when an argument type is unsupported</a></h3>

<p><code class="language-plaintext highlighter-rouge">where</code> will raise <code class="language-plaintext highlighter-rouge">ArgumentError</code> on unsupported types.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-10-09%7D...@%7B2015-10-16%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/10/9/this-week-in-rails-performance-test-helper-changes-mailer-preview-improvements-and-more/" rel="bookmark">This week in Rails: Performance, Test Helper Changes, Mailer Preview Improvements and More!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">toddbealmear</span></span>,
              <span class="published" title="2015-10-09 21:46:57 +0000">October 9, 2015 @  9:46 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p><em>tap tap</em></p>

<p>Is this thing on?</p>

<p>Hey, everyone! Welcome to the latest edition of This Week in Rails - your one stop shop for all the goings-on in the <a href="https://github.com/rails/rails">Rails</a> universe. My name is <a href="https://www.twitter.com/toddbealmear">Todd</a> and I’ll be your guide. Let’s get this party started!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20151002-20151009">This Week’s Rails Contributors</a></h3>

<p>We had 41 extraordinary people commit to Rails this past week, including 15 (!) newcomers. Wanna see your name on this list? Check out the list of <a href="https://github.com/rails/rails/issues">issues</a>.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="add-equality-comparison-for-attributeset"><a href="https://github.com/rails/rails/commit/9e25e0e1735f2ccca69679243aa8cf0885104164">Add Equality Comparison for AttributeSet</a></h3>

<p>Exposes an equality comparison method (<code class="language-plaintext highlighter-rouge">==</code>) for comparing <code class="language-plaintext highlighter-rouge">ActiveRecord::AttributeSet</code> objects to each other.</p>

<h2 id="improved">Improved</h2>

<h3 id="persist-format-in-mailer-previews"><a href="https://github.com/rails/rails/pull/20983">Persist Format in Mailer Previews</a></h3>

<p>Have you ever changed the format for a mailer preview, made a code change, and reloaded the preview only to have the desired format change back to the default? How annoying! This change utilizes JavaScript’s <code class="language-plaintext highlighter-rouge">history.pushState</code> to persist your desired format across refreshes. Nifty!</p>

<h3 id="performance-improvement-for-active-record-preload"><a href="https://github.com/rails/rails/pull/21033">Performance Improvement for Active Record preload</a></h3>

<p>This patch conditionally skips an expensive method call unless it’s explicitly required when calling <code class="language-plaintext highlighter-rouge">preload</code> on an <code class="language-plaintext highlighter-rouge">ActiveRecord::Relation</code>. The net benefit is an overall reduction in allocated objects and ~40% increase in speed.</p>

<h3 id="support-arrays-in-active-jobs-assert_enqueued_jobs"><a href="https://github.com/rails/rails/pull/21852">Support Arrays in Active Job’s assert_enqueued_jobs</a></h3>

<p>This brings Active Job’s <code class="language-plaintext highlighter-rouge">assert_enqueued_jobs</code> into parity with <code class="language-plaintext highlighter-rouge">assert_performed_jobs</code>. Specifically, the <code class="language-plaintext highlighter-rouge">:only</code> option now accepts <code class="language-plaintext highlighter-rouge">Array</code>s.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-mounted-engine-route-regression"><a href="https://github.com/rails/rails/pull/21804">Fix Mounted Engine Route Regression</a></h3>

<p>A regression in 4.2.3 would cause the <code class="language-plaintext highlighter-rouge">relative_url_root</code> and <code class="language-plaintext highlighter-rouge">script_name</code> to each be included in routes for mounted Engines (the expected behavior is for one, not both to be used). This patch resolves that issue on master and 4-2-stable.</p>

<h3 id="fix-test-helper-casting-for-active-job"><a href="https://github.com/rails/rails/pull/21854">Fix Test Helper Casting for Active Job</a></h3>

<p>Fixes an issue where the <code class="language-plaintext highlighter-rouge">at:</code> argument wouldn’t be cast properly for <code class="language-plaintext highlighter-rouge">assert_enqueued_with</code> and <code class="language-plaintext highlighter-rouge">assert_performed_with</code>, causing tests to fail.</p>

<h2 id="removed">Removed</h2>

<h3 id="remove-pk_and_sequence_for-for-mysql-adapters"><a href="https://github.com/rails/rails/pull/21686">Remove pk_and_sequence_for for MySQL Adapters</a></h3>

<p><code class="language-plaintext highlighter-rouge">pk_and_sequence_for</code> is not used by MySQL adapters and is being removed. There won’t be a deprecation cycle for this change, so note that your implementation may break if you’re overriding this method anywhere.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-10-02%7D...@%7B2015-10-09%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/10/2/this-week-in-rails-job-priorities-fast-failing-tests-and-fixtures-oh-my/" rel="bookmark">This week in Rails: Job Priorities, Fast Failing Tests and Fixtures... Oh My!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2015-10-02 23:07:29 +0000">October 2, 2015 @ 11:07 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/gregmolnar">Greg</a> with help from <a href="https://twitter.com/andatki">Andy</a> (welcome!) bringing you the latest news from Rails.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150925-201510022300">This weeks Rails contributors</a></h3>

<p>33 people contributed to Rails this week, including 3 first-time contributors! If you are interested in becoming a contributor, have look on the <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="add-job-priorities-to-activejob"><a href="https://github.com/rails/rails/pull/19425">Add job priorities to ActiveJob</a></h3>

<p>This commit allows you to set the priority for your jobs with Active Job, if your backend supports this. For more details head over to the <a href="https://github.com/rails/rails/pull/19425">pull request</a>.</p>

<h3 id="fail-fast-reporting-in-test-runner"><a href="https://github.com/rails/rails/pull/21430">Fail fast reporting in test runner</a></h3>

<p>If you call your test suite with <code class="language-plaintext highlighter-rouge">--fail-fast</code> it will abort the test run on the first failure.</p>

<h3 id="allow-fixtures-files-to-set-the-model-class-in-the-file-itself"><a href="https://github.com/rails/rails/pull/20574">Allow fixtures files to set the model class in the file itself</a></h3>

<p>From now on you can set the model class in your fixture files, but <code class="language-plaintext highlighter-rouge">set_fixture_class</code> on your model will override it.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="handle-nested-fields_for-by-adding-indexes-to-record_name"><a href="https://github.com/rails/rails/pull/21431">Handle nested fields_for by adding indexes to record_name</a></h3>

<p>This commit adds indexes to the inputs in the inner blocks of a nested <code class="language-plaintext highlighter-rouge">fields_for</code>, so Rails won’t raise an exception on the submission of the form.</p>

<h3 id="add-a-hidden-field-on-the-collection_radio_buttons"><a href="https://github.com/rails/rails/pull/18303">Add a hidden field on the collection_radio_buttons</a></h3>

<p>This commit fixes an issue with <code class="language-plaintext highlighter-rouge">strong_parameters</code> if you have a single <code class="language-plaintext highlighter-rouge">collection_radio_button</code> on your form and the form is submitted with no selection.</p>

<h3 id="fix-parameter-sanitization-for-query-methods"><a href="https://github.com/rails/rails/pull/21539">Fix parameter sanitization for query methods</a></h3>

<p>With this commit the Action Controller parameters are sanitized before being passed to the Active Record query methods.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-09-26%7D...@%7B2015-10-02%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/9/26/this-week-in-rails-gsoc-performance-improvements-and-bug-fixes/" rel="bookmark">This week in Rails: GSoC, performance improvements and bug fixes!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">marcelmorgan</span></span>,
              <span class="published" title="2015-09-26 00:37:03 +0000">September 26, 2015 @ 12:37 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone! This is <a href="https://twitter.com/marcelmorgan">Marcel</a> with help from <a href="https://twitter.com/andatki">Andy</a> (welcome!) bringing news from yet another week of Rails.</p>

<h2 id="featured">Featured</h2>

<h3 id="google-summer-of-code-2015"><a href="http://weblog.rubyonrails.org/2015/9/25/gsoc-2015-wrapping-up/">Google Summer of Code 2015</a></h3>

<p>The fourth year of participation in Google Summer of Code 2015 is over with excellent work done in the areas of Asset Pipeline (performance and… source maps!), Web Console (browser extension), the Rails test suite (Regression Test Selection), development setup (evented file system monitoring) and internals refactoring (cookies). Special thanks to Google, mentors and students who made this all possible.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150918-201509025">This weeks Rails contributors</a></h3>

<p>46 people contributed to Rails this week, including 7 first-time contributors! If you are interested in becoming a contributor, you can have a look at the <a href="https://github.com/rails/rails/issues">issues</a> list.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="introduce-active-record-ignored_columns"><a href="https://github.com/rails/rails/pull/21720">Introduce Active Record <code class="language-plaintext highlighter-rouge">ignored_columns</code></a></h3>

<p>A use case for this would be ignoring columns that are transient. This may happen when using online schema change tools like <a href="https://github.com/soundcloud/lhm">lhm</a> or <a href="https://www.percona.com/doc/percona-toolkit/2.1/pt-online-schema-change.html">pt-online-schema-change</a>.</p>

<h3 id="foreign-keys-are-now-supported-in-create_table-dsl"><a href="https://github.com/rails/rails/pull/20009">Foreign keys are now supported in <code class="language-plaintext highlighter-rouge">create_table</code> DSL</a></h3>

<p>Not only is it more convenient to pass in the <code class="language-plaintext highlighter-rouge">foreign_key</code> as an option to the <code class="language-plaintext highlighter-rouge">references</code> method of the <code class="language-plaintext highlighter-rouge">create_table</code> DSL, it generates slightly more efficient SQL.</p>

<h2 id="improved">Improved</h2>

<h3 id="improve-the-performance-of-active-record-save-and-friends"><a href="https://github.com/rails/rails/commit/136fc65c9b8b66e1fb56f3a17f0d1fddff9b4bd0">Improve the performance of Active Record <code class="language-plaintext highlighter-rouge">save</code> and friends</a></h3>

<p>By taking advantage of internal code improvements (the <code class="language-plaintext highlighter-rouge">MutationTracker</code> object), Active Record’s <code class="language-plaintext highlighter-rouge">save</code> and similar methods have received a noteworthy performance improvement.</p>

<h3 id="change-assert_difference-to-return-the-result-of-the-yielded-block"><a href="https://github.com/rails/rails/pull/21754">Change <code class="language-plaintext highlighter-rouge">assert_difference</code> to return the result of the yielded block</a></h3>

<p>With this we can perform new assertions on the returned value without assigning it to an outer variable or otherwise wrapping subsequent assertions inside the <code class="language-plaintext highlighter-rouge">assert_difference</code> block.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-arguments-of-arcalculationssum"><a href="https://github.com/rails/rails/pull/21725">Fix arguments of <code class="language-plaintext highlighter-rouge">AR::Calculations#sum</code></a></h3>

<p>The arguments and behavior of <code class="language-plaintext highlighter-rouge">#sum</code> are now consistent with the other aggregate methods (<code class="language-plaintext highlighter-rouge">count</code>, <code class="language-plaintext highlighter-rouge">average</code>, <code class="language-plaintext highlighter-rouge">minimum</code>, and <code class="language-plaintext highlighter-rouge">maximum</code>) defined in <code class="language-plaintext highlighter-rouge">ActiveRecord::Calculations</code>.</p>

<h3 id="fix-silent-failure-when-mysql-is-not-running"><a href="https://github.com/rails/rails/pull/20569">Fix silent failure when MySQL is not running</a></h3>

<p>Nothing is more frustrating than a silent failure. This fix handles an error when <code class="language-plaintext highlighter-rouge">rake db:structure:load</code> is run and MySQL is not installed. Previously there were no output.</p>

<h3 id="active-record-use-database-precision-when-assigning-a-value-to-a-timestamp-attribute"><a href="https://github.com/rails/rails/pull/20317">Active Record: Use database precision when assigning a value to a timestamp attribute</a></h3>

<p>Timestamp columns can have less precision than Ruby timestamps. This affects how a fraction of a second can be stored in the database. To fix this, the precision of the column was used when assigning a value to the timestamp attribute.</p>

<h3 id="fix-ignored-usages-of-unscoped-when-preloading-active-record-models"><a href="https://github.com/rails/rails/pull/21550">Fix ignored usages of <code class="language-plaintext highlighter-rouge">unscoped</code> when preloading Active Record models</a></h3>

<p>Preloading an association that is using <code class="language-plaintext highlighter-rouge">unscoped</code> was dropping the <code class="language-plaintext highlighter-rouge">unscoped</code> part.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-09-19%7D...@%7B2015-09-25%7D">check them out yourself</a>.</p>

<p>Until next time!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/9/12/this-week-in-rails-performance-mysql-prepared-statements-and-more/" rel="bookmark">This week in Rails: Performance, MySQL prepared statements and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2015-09-12 01:01:36 +0000">September 12, 2015 @  1:01 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> after a long long time bringing you latest and greatest news from Rails world!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150904-201509011">This weeks Rails contributors</a></h3>

<p>37 people contributed to Rails this week, including 7 first-time contributors. If you are interested in becoming a contributor, you can have a look at the <a href="https://github.com/rails/rails/issues">issues</a> list.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="drop-indexes-concurrently-in-postgresql"><a href="https://github.com/rails/rails/pull/21317">Drop indexes concurrently in PostgreSQL</a></h3>

<p>Now you can drop PostgreSQL indices concurrently in Rails 5, just like how you can already add indices concurrently today.</p>

<h3 id="approachable-ssl-handling"><a href="https://github.com/rails/rails/pull/21520">Approachable SSL handling</a></h3>

<p>Remember good ‘ol <code class="language-plaintext highlighter-rouge">config.force_ssl</code>? You can now use it with greater control. With improvements in SSL redirect and better handling of Strict Transport Security, you will surely love this improved version of <code class="language-plaintext highlighter-rouge">config.force_ssl</code>.</p>

<h3 id="mult-context-validations"><a href="https://github.com/rails/rails/pull/21069">Mult-context validations</a></h3>

<p>Ever faced the need of running validations of <code class="language-plaintext highlighter-rouge">create</code> and <code class="language-plaintext highlighter-rouge">update</code> contexts both at the same time? Now you can do that by passing multiple contexts to the <code class="language-plaintext highlighter-rouge">#valid?</code> and <code class="language-plaintext highlighter-rouge">#invalid?</code> methods.</p>

<h2 id="improved">Improved</h2>

<h3 id="active-record-performance-improvements"><a href="https://github.com/rails/rails/pull/21523">Active Record performance improvements</a></h3>

<p>This week lot of work was done for improving Active Record internals by reducing object allocations, avoid creating relations when not required and so on. Kudos to <a href="https://twitter.com/tgxworld">@tgxworld</a>!</p>

<h3 id="prepared-statements-with-mysql"><a href="https://github.com/rails/rails/pull/21536">Prepared statements with MySQL</a></h3>

<p>Rails now supports latest version of mysql2 gem. Is this a big deal? Yes!! You can now use prepared statements using this version. Now that’s awesome!</p>

<h3 id="improve-sql-logging-coloration"><a href="https://github.com/rails/rails/pull/20921">Improve sql logging coloration</a></h3>

<p>If you are using custom SQL queries with Ruby herredoc, you will be able to identify them instantly in your logs. Why? Because they will have better colors thanks to this patch.</p>

<p>Not just that, overall coloration of all SQL queries is improved here as well!</p>

<h3 id="reaching-into-the-cookie-jar"><a href="https://github.com/rails/rails/compare/ed3d213eb6b79218eee9bd8b4fa8ac8c147cd114...72889a6be4ec4afd68d3e4c3ae972099e080478a">Reaching into the cookie jar</a></h3>

<p>The cookie-handling code in Rails is one of the more complicated code in the framework, largely due to the need to support and migrate legacy cookies produced by older versions of Rails.</p>

<p>Kasper refactored some of those code to make it less hostile to future improvements, nice!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="generator-errors-messages-will-be-in-plain-english"><a href="https://github.com/rails/rails/pull/21524">Generator errors messages will be in plain English</a></h3>

<p>If you have seen some weird characters showing up in error messages of <code class="language-plaintext highlighter-rouge">rails g</code> commands due to localization of some messages, it is now fixed!</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-09-05%7D...@%7B2015-09-11%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/9/4/this-week-in-rails-4000-contributors-rails-bot-abides-and-more/" rel="bookmark">This week in Rails: 4000 contributors, Rails bot abides and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2015-09-04 22:12:03 +0000">September 4, 2015 @ 10:12 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Back away, bystander.</p>

<p>There’s a flame war going on, and we’d best contain it soon — the people need their Rails news!</p>

<p><a href="https://twitter.com/kaspth">Kasper</a> pats flames and waters ferns in hopes we douse the mighty fires.</p>

<p>I’ll go brush up on campfire safety rules. Here, you read these.</p>

<h2 id="featured">Featured</h2>

<h3 id="over-4000-people-contributed-to-rails"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150828-201509042100">Over 4000 people contributed to Rails</a></h3>

<p>A little while ago we crossed 4000 contributors – that’s crazy! Remember the old days when only one person contributed to Rails? Well, I wasn’t him so I don’t. Wups!</p>

<p>36 people made their mark this week. If you’re new, peruse the <a href="https://github.com/rails/rails/issues">list</a> and join us. If you do you’ll find a new friend waiting for you.</p>

<h3 id="everybody-meet-rails-bot"><a href="https://github.com/rails-bot">Everybody meet Rails bot</a></h3>

<p>That friend is Rails bot. Fresh off the assembly line to bring those new to Rails a welcome message and tips. You’ll even get a reviewer assigned to help move things along. Come say hi with a pull request.</p>

<h2 id="improved">Improved</h2>

<h3 id="confirmation-validation-reduced-sensitivity-to-case"><a href="https://github.com/rails/rails/pull/17351">Confirmation validation reduced sensitivity to case</a></h3>

<p>If you’re validating an email confirmation and you don’t care about the case, it can be skipped with <code class="language-plaintext highlighter-rouge">case_sensitive: false</code></p>

<h3 id="migrations-explains-which-part-is-irreversible"><a href="https://github.com/rails/rails/pull/21412">Migrations explains which part is irreversible</a></h3>

<p>In Rails 5 if you’re using a migration method that isn’t reversible (meaning it can’t rollback) you will be warned about the offending method and how to roll your way out of that mess.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="passing-a-relation-to-cache-uses-relationcache_key"><a href="https://github.com/rails/rails/pull/21416">Passing a relation to <code class="language-plaintext highlighter-rouge">cache</code> uses <code class="language-plaintext highlighter-rouge">Relation#cache_key</code></a></h3>

<p>Banking on the <code class="language-plaintext highlighter-rouge">cache_key</code> added to relations a while ago, any <code class="language-plaintext highlighter-rouge">cache</code> calls in your views correctly use that instead of turning the relation into an array.</p>

<h3 id="binrails-test--e-requires-an-argument"><a href="https://github.com/rails/rails/pull/21423"><code class="language-plaintext highlighter-rouge">bin/rails test -e</code> requires an argument</a></h3>

<p>In Ruby’s OptionParser, if you wrap a parameter in brackets it’s considered optional.</p>

<p>By breaking it out of the brackets, writing <code class="language-plaintext highlighter-rouge">bin/rails test -e</code> with an empty argument now raises a more appropriate error.</p>

<h3 id="array-inquirer-finds-both-symbols-and-strings"><a href="https://github.com/rails/rails/pull/21421">Array Inquirer finds both symbols and strings</a></h3>

<p>Using <code class="language-plaintext highlighter-rouge">any?(:idea)</code> on <code class="language-plaintext highlighter-rouge">["innovative", "idea"].inquiry</code> wouldn’t find anything because the symbol passed to any didn’t match any of the strings in the array.</p>

<p>Now everyone expects the string inquiry — and there’s room for “innovative” “ideas” once again.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-08-28%7D...@%7B2015-09-04%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/8/29/this-week-in-rails-rails-4-2-4-is-out-params-require-accepts-arrays-rack-2-is-on-its-way-and-i-m-no-longer-a-teapot/" rel="bookmark">Rails 4.2.4 is out, params.require accepts arrays, Rack 2 is on its way and I&#39;m no longer a teapot!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">imtayadeway</span></span>,
              <span class="published" title="2015-08-29 03:24:30 +0000">August 29, 2015 @  3:24 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi, everybody! This is <a href="https://twitter.com/imtayadeway">Tim</a> and <a href="http://claudiob.github.io">Claudio</a> reporting here from sunny Los Angeles. It’s been a week of intense weather here, and even more intense activity in the Rails community. Let’s take a look at the highlights…</p>

<h2 id="releases">Releases</h2>

<h3 id="rails-424-and-4113-have-been-released"><a href="http://weblog.rubyonrails.org/2015/8/24/Rails-4-2-4-and-4-1-13-have-been-released/">Rails 4.2.4 and 4.1.13 have been released!</a></h3>

<p>The new versions are backward compatible, so if you are using any 4.2.x version, you can safely upgrade to 4.2.4. And if you are using 4.1.x, bump your Gemfile to 4.1.13.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150821-20150828">This week’s Rails contributors</a></h3>

<p>This week 47 awesome people helped to make Rails even better, including 3 for the first time. If you are interested in becoming a contributor, you can have a look at the <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="an-asyncadapter-for-active-job"><a href="https://github.com/rails/rails/pull/21257">An <code class="language-plaintext highlighter-rouge">AsyncAdapter</code> for Active Job</a></h3>

<p>Do you need to create asynchronous jobs without installing additional gems? Set <code class="language-plaintext highlighter-rouge">config.active_job.queue_adapter = :async</code> and post your jobs to a concurrent-ruby thread pool.</p>

<h3 id="a-new-format-for-paramsrequire"><a href="https://github.com/rails/rails/pull/19565">A new format for params.require</a></h3>

<p><code class="language-plaintext highlighter-rouge">params.require</code> can now take multiple values as an array, allowing for more succinct code such as <code class="language-plaintext highlighter-rouge">params.require(:person).require([:first_name, :last_name])</code></p>

<h3 id="getting-ready-for-rack-2"><a href="https://github.com/rails/rails/commit/51c7ac142d31095d4c699f44cc44ddea627da1eb">Getting ready for Rack 2</a></h3>

<p>In Rack 2, the <code class="language-plaintext highlighter-rouge">env</code> hash will be changed to be actual request and response objects. This commit paves the way for Rails to be compatible when Rack 2 is released.</p>

<h2 id="improved">Improved</h2>

<h3 id="speed-improvements-for-loadable_constants_for_path"><a href="https://github.com/rails/rails/pull/21411">Speed improvements for <code class="language-plaintext highlighter-rouge">loadable_constants_for_path</code></a></h3>

<p>Pull requests that improve the performance of Rails are always welcome, especially when they come with benchmarks showing a speed increase of 9x!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="goodbye-418-im-a-teapot"><a href="https://github.com/rails/rails/pull/20757">Goodbye 418 (I’m a teapot)</a></h3>

<p><a href="https://tools.ietf.org/html/rfc7231">RFC 7231</a> changed the list of HTTP status codes (dropping “418 I’m a Teapot” among others). Rails documentation has now been fixed to list the symbols that can be used to represent status codes.</p>

<h2 id="wrapping-up">Wrapping Up</h2>

<p>One last thing that deserves a mention is that the new Code of Conduct has gone live on <a href="http://rubyonrails.org/conduct/">the main website</a>. Hurrah!</p>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-08-22%7D...@%7B2015-08-28%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/8/21/this-week-in-rails-z/" rel="bookmark">🚂 This week in Rails 🚂: Learn How These 37 Rails Contributors Improved The Entire Framework In Just One Week</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2015-08-21 23:18:10 +0000">August 21, 2015 @ 11:18 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Good News Everyone, <em>This Week In Rails</em> has been acquired by BuzzFeed!</p>

<p>Just kidding. This is <a href="https://twitter.com/chancancode">Godfrey</a> here. It’s been a while since I get to write one of these myself and I’m very happy to be back. Without further ado, let’s dive right into it!</p>

<h2 id="-featured-">✨ Featured ✨</h2>

<h3 id="️-code-of-conduct"><a href="http://rubyonrails.org/conduct/">❤️ Code of Conduct</a></h3>

<p>The Rails team is committed to fostering a welcoming community for everyone. With <a href="https://github.com/rails/rails/pull/21292">the help of our community</a>, we have added an official Code of Conduct for the project this week.</p>

<h3 id="-37-programmers-contributed-to-rails-and-you-wont-believe-what-happened-next"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150815-201508212000">😱 37 Programmers Contributed To Rails And You Won’t Believe What Happened Next</a></h3>

<p>Well, their pull requests were merged and they are immortalized on the Rails Contributors website. And oh, everyone please send a warm welcome to the 10 first-time contributors this week!</p>

<h2 id="-releases-">📦 Releases 📦</h2>

<h3 id="-sprockets-has-hit-version-333-what-does-that-really-mean-for-the-rest-of-us"><a href="https://github.com/rails/sprockets/releases/tag/v3.3.3">📢 Sprockets Has Hit Version 3.3.3, What Does That Really Mean For The Rest Of Us?</a></h3>

<p>According to <a href="https://twitter.com/schneems/status/634838940747300864">@schneems</a> who is responsible for the release, this is supposed to fix an issue for those of you “who share a cache in different directories between deploys”, which includes Heroku deployments.</p>

<h2 id="-new-stuff-">💎 New Stuff 💎</h2>

<h3 id="-mysql-finally-gets-a-native-json-data-type--but-is-it-too-late-to-save-california"><a href="https://github.com/rails/rails/pull/21110">💾 MySQL Finally Gets A Native JSON Data Type – But Is It Too Late To Save California?</a></h3>

<p>MySQL has recently added a native JSON data type (perhaps inspired by its more popular cousin, PostgreSQL). Thanks to this patch, you will be ready to take advantage of that feature in Rails 5.</p>

<h2 id="-fixed-">👌 Fixed 👌</h2>

<h3 id="-the-one-weird-trick-that-lets-you-write-to-files-atomically"><a href="https://github.com/rails/rails/pull/16245">🎂 The One Weird Trick That Lets You Write To Files Atomically</a></h3>

<p>Concurrency is hard, but Rails might have finally cracked the nut. You might not know that Active Support offers a way to write to a file atomically with <code class="language-plaintext highlighter-rouge">File.atomic_write</code>.</p>

<p>Even if you have heard about it, you probably didn’t realize there is a subtle race condition in its implementation. Anyway, with this patch landing on master, those bugs will soon be behind us and we can all just sit back and enjoy the convenience it provides.</p>

<h2 id="-improved-">👍 Improved 👍</h2>

<h3 id="-nobody-likes-to-do-repeated-work--here-is-a-cache-they-wont-tell-you-about"><a href="https://github.com/rails/rails/commit/ec9c6d5846a4048c131aae70c2d338d8a3896086">🚨 Nobody Likes To Do Repeated Work – Here Is A Cache They Won’t Tell You About</a></h3>

<p>It turns out that things do not run twice as fast when you double-cache them. Who would have thought? (I wish we all wrote great commit messages like this by the way!)</p>

<h3 id="️-testing-is-important-but-has-rails-gone-too-far"><a href="https://github.com/rails/rails/pull/21106">✂️ Testing Is Important, But Has Rails Gone Too Far?</a></h3>

<p>Along those same lines, it turns out that testing the same thing twice doesn’t provide much value either.</p>

<h2 id="-wrapping-up-">🙈 Wrapping Up 🙈</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-08-15%7D...@%7B2015-08-21%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/8/15/this-week-in-rails-rails-4-2-4-rc1-4-1-13-rc1-and-more/" rel="bookmark">This week in Rails: Rails 4.2.4 RC1, 4.1.13 RC1 and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">repinel</span></span>,
              <span class="published" title="2015-08-15 08:37:36 +0000">August 15, 2015 @  8:37 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello Everyone! This is <a href="https://twitter.com/repinel">Roque</a> bringing the latest from <a href="https://github.com/rails/rails">Rails</a> with some help from <a href="https://twitter.com/kaspth">Kasper</a>.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150808-20150814">This Week’s Rails Contributors</a></h3>

<p>We had 36 awesome contributors to the Rails codebase this week. Check out the active <a href="https://github.com/rails/rails/issues">issues</a> over on GitHub if you’d like to see your name here.</p>

<h3 id="rails-424-rc1-and-4113-rc1-have-been-released"><a href="http://weblog.rubyonrails.org/2015/8/14/Rails-4-2-4-rc1-and-4-1-13-rc1-have-been-released/">Rails 4.2.4 RC1 and 4.1.13 RC1 have been released!</a></h3>

<p>There’s new release candidates, please try them and report any regressions you find, so that the Rails team can fix them before the final release.</p>

<p>Thank you to all contributors for these releases!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="active-record-relations-come-in-batches"><a href="https://github.com/rails/rails/pull/20933">Active Record relations come in batches</a></h3>

<p>This week Active Record got a new method that works like <code class="language-plaintext highlighter-rouge">find_in_batches</code> but yields relations instead of arrays. It also added a cool delegation API that lets you do something like:</p>

<p><code class="language-plaintext highlighter-rouge">People.in_batches.delete_all('age &gt; 21')</code></p>

<p>Oh, in case you were wondering – this is pretty much how Skynet works.</p>

<h2 id="improved">Improved</h2>

<h3 id="i18n-reloading-picks-up-new-and-deleted-files"><a href="https://github.com/rails/rails/pull/21124">i18n reloading picks up new and deleted files</a></h3>

<p>This patch allows new locale YAML files to be loaded without having to restart the Rails server. It also reloads the available locales when files are deleted.</p>

<h3 id="active-job-assertions-returns-matched-job"><a href="https://github.com/rails/rails/pull/21010">Active Job assertions returns matched job</a></h3>

<p>The matched job returned by these methods can be used for advanced assertions like:</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>job = assert_enqueued_with(job: SomeJob) do
  some_business_logic
end
assert_equal 5, job.arguments.second
</code></pre></div></div>

<h2 id="spun-off">Spun Off</h2>

<h3 id="xml-serialization-have-been-moved-to-a-gem"><a href="https://github.com/rails/rails/pull/21161">XML serialization have been moved to a gem</a></h3>

<p>As usage for XML serialization declined, it’s become less of a core concern of Rails. In Rails 5, this feature will be moved to the <a href="https://github.com/zzak/activemodel-serializers-xml">activemodel-serializers-xml</a> gem.</p>

<p>If you’re still using the XML Serialization feature in your app, you will need to add this to your Gemfile when you upgrade.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-08-08%7D...@%7B2015-08-14%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/8/7/this-week-in-rails-caching-madness-active-job-improvements-and-even-more-performance/" rel="bookmark">This week in Rails: caching madness, Active Job improvements, and even more performance!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">toddbealmear</span></span>,
              <span class="published" title="2015-08-07 21:42:05 +0000">August 7, 2015 @  9:42 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>What’s up, gang? <a href="https://twitter.com/toddbealmear">Todd</a> here with another edition of This Week in Rails. It was a bit of a quiet week in <a href="https://github.com/rails/rails">Railsland</a>, but I think we’ve got some quality contributions here. Read on for the deets!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150801-201508072100">This Week’s Rails Contributors</a></h3>

<p>We had 39 awesome contributors to the Rails codebase this week. Check out the active <a href="https://github.com/rails/rails/issues">issues</a> over on GitHub if you’d like to see your name here.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="add-cache_key-to-activerecordrelation"><a href="https://github.com/rails/rails/pull/20884">Add #cache_key to ActiveRecord::Relation</a></h3>

<p>This addition bakes a strategy for generating collection cache keys directly into <code class="language-plaintext highlighter-rouge">ActiveRecord::Relation</code>. Using <code class="language-plaintext highlighter-rouge">#cache_key</code>, it’s now possible to automagically generate a unique key on relations for use with Rails’ fragment cache.</p>

<h3 id="development-server-caching-toggle"><a href="https://github.com/rails/rails/pull/20961">Development Server Caching Toggle</a></h3>

<p>Per a <a href="https://github.com/rails/rails/issues/18875">request from DHH</a>, this change adds the ability to enable or disable caching in a development environment. There are two ways to toggle it - on server start with <code class="language-plaintext highlighter-rouge">--[no-]dev-caching</code> or with the <code class="language-plaintext highlighter-rouge">dev:cache</code> rake task.</p>

<h2 id="improved">Improved</h2>

<h3 id="active-job-and-locales"><a href="https://github.com/rails/rails/pull/20800">Active Job and Locales</a></h3>

<p>Active Jobs queued with <code class="language-plaintext highlighter-rouge">#perform_later</code> previously wouldn’t honor the context’s locale. This patch rectifies that by storing it on the job directly.</p>

<h3 id="even-more-performance-improvements"><a href="https://github.com/rails/rails/pull/21100">Even More Performance Improvements!</a></h3>

<p>By using <code class="language-plaintext highlighter-rouge">#start_with?</code> instead of matching on a regex, 765.5 ms have been shaved off of the total aggregate request time per 1000 requests. In conjunction with other performance work recently completed, this knocks a whopping 1.5 <em>seconds</em> off over the course of 1000 requests.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-08-01%7D...@%7B2015-08-07%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/7/31/this-week-in-rails-wildcard-template-dependencies-and-more-performance/" rel="bookmark">This week in Rails: wildcard template dependencies and more performance!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2015-07-31 23:27:36 +0000">July 31, 2015 @ 11:27 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy Friday Everyone!</p>

<p>This is <a href="https://github.com/gregmolnar">Greg</a> with the latest news about Rails. We had a quiet week so this issue will be a short one.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150724-201507312200">This week’s Rails contributors</a></h3>

<p>This week 23 awesome people helped to make Rails even better. If you are interested in becoming a contributor, you can have a look at the <a href="https://github.com/rails/rails/issues">issues list</a>.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="wildcard-template-dependencies"><a href="https://github.com/rails/rails/pull/20904">Wildcard template dependencies</a></h3>

<p>You can define your template dependencies with a wildcard and do more with less code!</p>

<h3 id="plugin-generator-for-api-applications"><a href="https://github.com/rails/rails/pull/21003">Plugin generator for API applications</a></h3>

<p>This pull requests adds an <code class="language-plaintext highlighter-rouge">--api</code> option in order to generate plugins that can be added inside API applications.</p>

<h2 id="improved">Improved</h2>

<h3 id="performance-improvements"><a href="https://github.com/rails/rails/pull/21057">Performance improvements</a></h3>

<p>By reducing the number of object allocations, this giant patch helps reduce memory usage <em>and</em> also brings you some significant speed improvement (as a benchmark, <a href="http://codetriage.com">codetriage.com</a> ran about 10% faster).</p>

<h2 id="fixed">Fixed</h2>

<h3 id="uniqueness-validator-fix"><a href="https://github.com/rails/rails/pull/20966">Uniqueness validator fix</a></h3>

<p>This commit fixes an issue when using the uniqueness validator against a custom primary key.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-07-25%7D...@%7B2015-07-31%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/7/17/this-week-in-rails-goodbye-rack-lock-concurrent-ruby-better-ac-parameters-and-more/" rel="bookmark">This week in Rails: goodbye Rack::Lock, concurrent-ruby, better AC::Parameters and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2015-07-17 22:25:27 +0000">July 17, 2015 @ 10:25 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hello Everyone!</p>

<p>This is <a href="https://twitter.com/vipulnsward">Vipul</a> from Pune, waiting to enjoy some sweet <a href="http://www.wikiwand.com/en/Sheer_khurma">Sheer khurma</a>, and delicious <a href="https://www.wikiwand.com/en/Biryani">Biryani</a> with my friends, since Eid is just around the corner.</p>

<p>Hmm, Yum.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150711-201507172200">This week’s Rails contributors</a></h3>

<p>This week 28 people helped make Rails even more awesome than before. Big thank you to all these amazing people! If you’d like to chip in, there’s always something you could <a href="https://github.com/rails/rails/issues">help work on</a>!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="remove-racklock"><a href="https://github.com/rails/rails/pull/17102">Remove <code class="language-plaintext highlighter-rouge">Rack::Lock</code></a></h3>

<p>This is one of the many concurrency-related work that went into Rails this week.</p>

<p>Instead of forcing <code class="language-plaintext highlighter-rouge">Rack::Lock</code> when <code class="language-plaintext highlighter-rouge">eager_load</code> and <code class="language-plaintext highlighter-rouge">cache_classes</code> are off, this change just prevents actual race conditions.</p>

<p>It is achieved by means of a <a href="https://en.wikipedia.org/wiki/Readers%E2%80%93writer_lock">(reentrant) shared-exclusive lock</a>. This allows multiple concurrent requests but ensures any code-loading activity gets performed in isolation.</p>

<h2 id="improved">Improved</h2>

<h3 id="replace-activesupportconcurrencylatch-with-concurrentcountdownlatch-from-concurrent-ruby"><a href="https://github.com/rails/rails/pull/20866">Replace <code class="language-plaintext highlighter-rouge">ActiveSupport::Concurrency::Latch</code> with <code class="language-plaintext highlighter-rouge">Concurrent::CountDownLatch</code> from concurrent-ruby</a></h3>

<p><code class="language-plaintext highlighter-rouge">ActiveSupport::Concurrency::Latch</code> was replaced with <code class="language-plaintext highlighter-rouge">Concurrent::CountDownLatch</code> from the <a href="https://github.com/ruby-concurrency/concurrent-ruby">concurrent-ruby</a> gem.</p>

<p>This replaces concurrency related code cluttered in AS and offloads it to <code class="language-plaintext highlighter-rouge">concurrent-ruby</code> gem, which has many concurrency utilities with runtime-specific optimizations.</p>

<h3 id="deprecate-force-association-reload-by-passing-true"><a href="https://github.com/rails/rails/pull/20888">Deprecate force association reload by passing <code class="language-plaintext highlighter-rouge">true</code></a></h3>

<p>This is to simplify the association API, as we can call reload on the association proxy or the parent object to get the same result.</p>

<p>So now to reload one would call <code class="language-plaintext highlighter-rouge">@user.posts.reload</code> instead of <code class="language-plaintext highlighter-rouge">@user.posts(true)</code> for collections and <code class="language-plaintext highlighter-rouge">@user.reload.profile</code> instead of <code class="language-plaintext highlighter-rouge">@user.profile(true)</code> for singular associations.</p>

<p>See also <a href="https://groups.google.com/forum/#!msg/rubyonrails-core/6ZPPg1ZmjQA/ZCukF2YOzOAJ">this mailing list thread</a> for more background information.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="test-runner-now-works-correctly-inside-engines"><a href="https://github.com/rails/rails/pull/20870">Test runner now works correctly inside Engines</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">bin/rails test</code> has now been extended to work properly instead engines, where previously we needed to do <code class="language-plaintext highlighter-rouge">rake test</code>.</p>

<h3 id="actioncontrollerparameters-no-longer-inherits-from-hashwithindifferentaccess"><a href="https://github.com/rails/rails/pull/20868"><code class="language-plaintext highlighter-rouge">ActionController::Parameters</code> no longer inherits from <code class="language-plaintext highlighter-rouge">HashWithIndifferentAccess</code></a></h3>

<p>Inheriting from <code class="language-plaintext highlighter-rouge">HashWithIndifferentAccess</code> allowed users to call any enumerable methods on <code class="language-plaintext highlighter-rouge">Parameters</code> object, resulting in a risk of losing the <code class="language-plaintext highlighter-rouge">permitted?</code> status or even getting back a pure <code class="language-plaintext highlighter-rouge">Hash</code> object instead of a <code class="language-plaintext highlighter-rouge">Parameters</code> object with proper sanitization.</p>

<p>This change fixes this behavior and makes sure all the methods defined on <code class="language-plaintext highlighter-rouge">Parameters</code> will return a <code class="language-plaintext highlighter-rouge">Parameters</code> object with the correct <code class="language-plaintext highlighter-rouge">permitted?</code> flag.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-07-11%7D...@%7B2015-07-17%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/7/11/this-week-in-rails-action-cable-collection-caching-and-more/" rel="bookmark">This week in Rails: Action Cable, collection caching and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2015-07-11 00:40:57 +0000">July 11, 2015 @ 12:40 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hi This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> bringing together all the latest happenings from the Rails world.</p>

<h2 id="featured">Featured</h2>

<h3 id="action-cable-alpha-is-out"><a href="https://github.com/rails/actioncable">Action Cable alpha is out!</a></h3>

<p>Action Cable is out in wild as promised by DHH in his Railsconf keynote. There is flurry of activity happening with it right now. It’s still in alpha mode and will get production ready with Rails 5.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150704-20150710">This week’s Rails contributors</a></h3>

<p>Meet the 21 lovely people who contributed to Rails this week, the community can’t thank you all enough!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="explicit-collection-caching-directive"><a href="https://github.com/rails/rails/pull/20781">Explicit collection caching directive</a></h3>

<p>Now we can explicitly specify collection caching using a special directive <code class="language-plaintext highlighter-rouge"># Template Collection</code>. The partials which do not start with <code class="language-plaintext highlighter-rouge">&lt;% cache do %&gt;</code> calls will get benefitted by this feature.</p>

<h2 id="improved">Improved</h2>

<h3 id="filter-params-based-on-parent-keys"><a href="https://github.com/rails/rails/pull/13897">Filter params based on parent keys</a></h3>

<p>Do you have nested params with same child key and different parent keys? Do you want to filter the child keys for only some of the parent keys? Now you can! Params can be filtered based on parent key using a simple config.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fix-inconsistent-behavior-of-hwia-with-default_proc"><a href="https://github.com/rails/rails/pull/20828">Fix inconsistent behavior of HWIA with default_proc</a></h3>

<p>Thanks to this fix, behavior of <code class="language-plaintext highlighter-rouge">HWIA</code> is now in sync with Ruby’s built-in <code class="language-plaintext highlighter-rouge">Hash</code> when a <code class="language-plaintext highlighter-rouge">default_proc</code> is set on the instance and it is <code class="language-plaintext highlighter-rouge">dup</code>ed.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-07-04%7D...@%7B2015-07-10%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/7/3/this-week-in-rails-sql-colors-reversible-column-defaults-and-more/" rel="bookmark">This week in Rails: SQL colors, reversible column defaults and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2015-07-03 21:48:01 +0000">July 3, 2015 @  9:48 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hello? This is your captain <a href="https://twitter.com/kaspth">Kasper</a> speaking.</p>

<p>We’re just about ready to take to the skies for our weekly cruise through the news. I took a flight course once, and walked away from the crash in flying colors. If my instructor had made it out, I’m sure he would be proud too.</p>

<p>Look at us, we’re already taking off - hey, is that light supposed to be blinking?</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150626-201507032100">This Week’s Rails Contributors</a></h3>

<p>26 daring pilots brimmed the horizon with their commits this week. There were loops and barrel rolls galore - you should have been there! Oh, but you can. See the last item if you feel the need for speed (and contributing).</p>

<h3 id="when-sql-output-met-rainbows"><a href="https://github.com/rails/rails/pull/20607">When SQL Output met Rainbows</a></h3>

<p>In Rails 5 you’ll see your SQL has gotten a fresh coat of paint - several in fact. Now common SQL statements appear in color when sprouting up in your logs. Check the link for the color map.</p>

<h3 id="change_column_default-gains-reversible-syntax"><a href="https://github.com/rails/rails/pull/20018"><code class="language-plaintext highlighter-rouge">change\_column\_default</code> Gains Reversible Syntax</a></h3>

<p>Gone are the thrills of remembering past defaults, when you changed it for a column. Both <code class="language-plaintext highlighter-rouge">from</code> and <code class="language-plaintext highlighter-rouge">to</code> can be passed now: <code class="language-plaintext highlighter-rouge">change_column_default(:posts, :state, from: nil, to: "draft")</code></p>

<p>If all your life’s ROFLMAO’ing have left you with ass left to laugh off, you’ll be ready to migrate and roll back on the floor laughing the remainder of your rear right off over this.</p>

<h2 id="improved">Improved</h2>

<h3 id="windows-users-needs-the-latest-development-kit"><a href="https://github.com/rails/rails/pull/20734">Windows Users Needs the Latest Development Kit</a></h3>

<p>If you’re a Windows user and witness to the horror of <code class="language-plaintext highlighter-rouge">rails new</code> failing with native gems not being able to be installed - rejoice! You need the latest <a href="http://rubyinstaller.org/downloads/">Development Kit</a> version, which our getting started guide will now tell you.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="where-with-association-names-are-closer-to-42"><a href="https://github.com/rails/rails/commit/6a6c4c459106e2d9b76dd1233133a2bf30866ab0"><code class="language-plaintext highlighter-rouge">where</code> with Association Names are Closer to 4.2</a></h3>

<p>To prevent ambiguity and potential collisions, association names in <code class="language-plaintext highlighter-rouge">where</code> are assumed to reference the table name.</p>

<h3 id="default_render-can-yield-when-template-is-missing"><a href="https://github.com/rails/rails/pull/20276"><code class="language-plaintext highlighter-rouge">default\_render</code> Can Yield When Template is Missing</a></h3>

<p>When a Rails 5 controller action have no corresponding template, Rails renders <code class="language-plaintext highlighter-rouge">head :no_content</code>. Before libraries were hooking into the missing template exception being thrown. Now <code class="language-plaintext highlighter-rouge">default_render</code> takes a block and the hook is back.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="feel-the-need-to-contribute"><a href="https://github.com/rails/rails/issues/created_by/dhh">Feel the need to contribute?</a></h3>

<p>From time to time DHH opens issues on Rails about stuff he’d like implemented. As long as someone hasn’t laid claim to it in the comments (or is assigned) it’s yours to take a stab at.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-06-26%7D...@%7B2015-07-03%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/6/26/this-week-in-rails-rails-4-2-3-rails-4-1-12-and-more/" rel="bookmark">This week in Rails: Rails 4.2.3, Rails 4.1.12 and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2015-06-26 23:27:25 +0000">June 26, 2015 @ 11:27 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hey there!</p>

<p>This is <a href="https://claudiob.github.io">Claudio</a>, celebrating a historical moment on the road to a better framework for everyone.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150620-201506262300">This week’s Rails contributors</a></h3>

<p>28 people contributed to the framework by having their commits merged into <a href="http://github.com/rails/rails">rails/rails</a> this week. Thanks and keep up the good work!</p>

<h3 id="rails-423-and-4112-have-been-released"><a href="http://weblog.rubyonrails.org/2015/6/26/Rails-4-2-3-and-4-1-12-have-been-released/">Rails 4.2.3 and 4.1.12 have been released!</a></h3>

<p>What are you waiting for? Run <code class="language-plaintext highlighter-rouge">bundle update rails</code> and get four months of updates in your codebases!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="integrate-protected_attributes-with-strong-parameters"><a href="https://github.com/rails/protected_attributes/pull/43">Integrate protected_attributes with strong parameters</a></h3>

<p>Are you still on Rails 3? Do you wish you could use strong parameters? Check out this commit to protected_attributes… it might just make your day.</p>

<h3 id="sprockets-40-is-coming"><a href="https://github.com/rails/sprockets/commit/962ea355041001d7551d1f4ef1b1235629613228">Sprockets 4.0 is coming</a></h3>

<p>The development of rails/sprockets moves on and… needs your help! If you’d like to contribute to its next version, don’t hesitate to contact any Rails core team member.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="raise-the-proper-error-on-namespaced-association-type-mismatch"><a href="https://github.com/rails/rails/pull/20545">Raise the proper error on namespaced-association type mismatch</a></h3>

<p>Assigning a wrong value to a namespaced association used to raise <code class="language-plaintext highlighter-rouge">NameError</code>, but will now correctly raise <code class="language-plaintext highlighter-rouge">ActiveRecord::AssociationTypeMismatch</code></p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="kasper-timm-hansen-is-a-rails-committer-team-member"><a href="http://github.com/kaspth">Kasper Timm Hansen is a Rails Committer team member</a></h3>

<p>Kasper started contributing one year ago and has not stopped (240 commits and counting)! Thanks for being awesome and for your wonderful <a href="https://dev.firmafon.dk/blog">blog posts</a>.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-06-20%7D...@%7B2015-06-26%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfreykfc@gmail.com">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/6/20/this-week-in-rails-security-releases-enumerable-relations-and-more/" rel="bookmark">This week in Rails: Security Releases, Enumerable Relations and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">huoxito</span></span>,
              <span class="published" title="2015-06-20 04:44:42 +0000">June 20, 2015 @  4:44 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hey there!</p>

<p>I’m just glad we all made to this Friday. This is <a href="https://twitter.com/huoxito">Washington</a> again pulling together a few stories for our weekly newsletter on Rails.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150613-20150619">This week’s Rails contributors</a></h3>

<p>Keeping our tradition let’s start with the 32 splendid contributors that made their commits to rails/rails this week. Keep in mind a ton other people also helped by creating issues and helping the core team with PR reviews.</p>

<h3 id="rails-security-releases-3222-4111-and-422"><a href="http://weblog.rubyonrails.org/2015/6/16/Rails-3-2-22-4-1-11-and-4-2-2-have-been-released-and-more/">Rails security releases 3.2.22, 4.1.11 and 4.2.2</a></h3>

<p>Time to upgrade your applications. Five announcements landed on <a href="https://groups.google.com/forum/#!forum/rubyonrails-security">Rails security mailing list</a> this week. Consider joining that list as well if you haven’t yet.</p>

<h2 id="improved">Improved</h2>

<h3 id="include-enumerable-in-activerecordrelation"><a href="https://github.com/rails/rails/commit/b644964b2b555798fc4b94d384b98438db863b3f">Include Enumerable in ActiveRecord::Relation</a></h3>

<p>After a <a href="https://github.com/rails/rails/pull/8794">couple years</a> Rails core team seems to have changed its mind and <code class="language-plaintext highlighter-rouge">Enumerable</code> is finally included into active record relations. Things change and I believe that’s fine.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="autoload-activerecordrecordinvalid"><a href="https://github.com/rails/rails/commit/c3133f50bc7b09c945f6387f3a64539b75d3dbc9">Autoload ActiveRecord::RecordInvalid</a></h3>

<p>Thanks to the awesome open source community <a href="https://github.com/rails/rails/issues/20626">it was noted</a> <code class="language-plaintext highlighter-rouge">ActiveRecord::RecordInvalid</code> was not being eager loaded as expected. The fix was backported to all supported branches.</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="remove-contentlength-middleware-from-the-defaults"><a href="https://github.com/rails/rails/commit/56903585a099ab67a7acfaaef0a02db8fe80c450">Remove ContentLength middleware from the defaults</a></h3>

<p>As per an <a href="https://github.com/rack/rack/commit/86ddc7a6ec68d7b6951c2dbd07947c4254e8bc0d">old change</a> on Rack spec Rails 5 will no longer ship with <code class="language-plaintext highlighter-rouge">ContentLength</code> middlleware by default.</p>

<h3 id="passing-hash-as-first-parameter-into-actioncontrollerhead-is-deprecated"><a href="https://github.com/rails/rails/pull/20407">Passing hash as first parameter into ActionController::Head is deprecated</a></h3>

<p>The way to go now is to explicitly pass the status first then pass the options hash as a second parameter.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-06-13%7D...@%7B2015-06-20%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfrey@brewhouse.io">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/6/12/this-week-in-rails-rails-api-fun-with-minitest-and-more/" rel="bookmark">This week in Rails: Rails API, fun with minitest and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">toddbealmear</span></span>,
              <span class="published" title="2015-06-12 20:51:37 +0000">June 12, 2015 @  8:51 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Howdy folks!</p>

<p>My name is <a href="https://twitter.com/toddbealmear">Todd</a> and I’ll be your guide through the land of <a href="https://github.com/rails/rails">Rails</a> this week. Straight from the comfort of my couch with awful lumbar support, I proudly present bad posture and the highlights from <a href="https://rails-weekly.ongoodbits.com/">This Week in Rails</a>.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150606-201506122000">This week’s Rails Contributors</a></h3>

<p>42 people made Rails even more awesome this week.</p>

<h3 id="rails-api-has-landed-on-master"><a href="https://github.com/rails/rails/pull/19832#event-328922869">Rails API has landed on master!</a></h3>

<p>After 52 days, lots of great comments, and a ton of incredible work by <a href="https://github.com/spastorino">Santiago</a> and <a href="https://github.com/jmbejar">Jorge</a>, Rails API has been merged into master and will be released as part of Rails 5!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="optional-scaffoldcss"><a href="https://github.com/rails/rails/pull/20479">Optional scaffold.css</a></h3>

<p>If you’ve ever wanted the ability to avoid generating <code class="language-plaintext highlighter-rouge">scaffold.css</code> when performing a scaffold, you’re in luck. Simply use the <code class="language-plaintext highlighter-rouge">--no-scaffold-stylesheet</code> switch and you’re good to go!</p>

<h2 id="improved">Improved</h2>

<h3 id="better-minitest-integration-for-rails-test-runner"><a href="https://github.com/rails/rails/pull/19571">Better minitest integration for Rails’ test runner</a></h3>

<p>The new Rails test runner has been modified to take better advantage of <a href="https://github.com/seattlerb/minitest">minitest</a>’s extension system.</p>

<h3 id="added-a-point-object-for-postgres-point-types"><a href="https://github.com/rails/rails/pull/20448">Added a Point object for Postgres point types</a></h3>

<p>Rails 5 will deprecate the current behavior for Postgres point types. Moving forward, the Postgres adapter will return a <code class="language-plaintext highlighter-rouge">Point</code> object instead of an <code class="language-plaintext highlighter-rouge">Array</code>.</p>

<h3 id="reversible-remove_foreign_key"><a href="https://github.com/rails/rails/pull/20226">Reversible <code class="language-plaintext highlighter-rouge">remove_foreign_key</code></a></h3>

<p>Migrations using <code class="language-plaintext highlighter-rouge">remove_foreign_key</code> can now be automatically reverted with <code class="language-plaintext highlighter-rouge">rake db:rollback</code> without manually defining the <code class="language-plaintext highlighter-rouge">down</code> operations.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="prefix-and-suffix-options-for-enums"><a href="https://github.com/rails/rails/pull/19813/">Prefix and suffix options for enums</a></h3>

<p>This allows you to add a prefix or suffix to enum’s auto-generated methods. Useful if you have multiple enums with the same values.</p>

<h3 id="fixed-ignore_blank-for-required-select-fields"><a href="https://github.com/rails/rails/pull/20124">Fixed ignore_blank for required select fields</a></h3>

<p>This change will now cause an <code class="language-plaintext highlighter-rouge">ArgumentError</code> to be raised in the event <code class="language-plaintext highlighter-rouge">ignore_blank</code> is set to <code class="language-plaintext highlighter-rouge">false</code> on a required select field.</p>

<h3 id="fixed-abstract-class-fixtures-with-belongs_to"><a href="https://github.com/rails/rails/pull/20437">Fixed abstract class fixtures with belongs_to</a></h3>

<p>Fixes an issue where using <code class="language-plaintext highlighter-rouge">belongs_to</code> in abstract classes would result in a crash when loading test fixtures.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-06-06%7D...@%7B2015-06-12%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfrey@brewhouse.io">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/6/6/this-week-in-rails-datetime-vs-time-summer-student-projects-and-more/" rel="bookmark">This week in Rails: DateTime vs Time, summer student projects and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">marcelmorgan</span></span>,
              <span class="published" title="2015-06-06 00:24:47 +0000">June 6, 2015 @ 12:24 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello everyone!</p>

<p>This is <a href="https://twitter.com/marcelmorgan">Marcel</a> making my ‘initial commit’ with awesome help from <a href="https://twitter.com/kaspth">Kasper</a>, your friendly ghost editor. Ten minutes from <a href="http://cdn.sandals.com/sandals/v11/slideshows/resorts/sng/media/large/slide-75.jpg">the lovely Jamaican shores</a>, here are the headlines from This Week in <a href="https://github.com/rails/rails">Rails</a>.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150528-20150605">This week’s Rails Contributors</a></h3>

<p>56 people helped make Rails even more awesome this week.</p>

<h3 id="when-should-you-use-datetime"><a href="https://gist.github.com/pixeltrix/e2298822dd89d854444b">When should you use DateTime?</a></h3>

<p>Ever wondered what is the difference between <code class="language-plaintext highlighter-rouge">DateTime</code> and <code class="language-plaintext highlighter-rouge">Time</code>? Checkout this enlightening gist on when you would use each which also landed in the <a href="https://github.com/ruby/ruby/commit/45458752d3f54ac81661d93aa55b8b5805f78138">ruby documentation</a>.</p>

<h3 id="google-summer-of-code--web-console"><a href="http://brx-web-console.blogspot.jp/">Google Summer of Code – Web Console</a></h3>

<p>Follow one of our <a href="https://developers.google.com/open-source/soc/">Google Summer of Code</a> student <a href="https://github.com/sh19910711">Hiroyuki</a> on his thoughts, experiments and progress with the <a href="https://github.com/rails/web-console">web-console</a> browser extension project.</p>

<h3 id="rails-girls-summer-of-code"><a href="http://railsgirlssummerofcode.org/blog/2015-06-04-2015-teams/">Rails Girls Summer of Code</a></h3>

<p>Meet the 16 official teams that will be participating in the 2015 Rails Girls Summer of Code. We wish them the best of luck.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="custom-configurations-can-be-required"><a href="https://github.com/rails/rails/pull/20208">Custom configurations can be required</a></h3>

<p>Sometimes there’s a configuration your app simply needs to function. Now that important client secret can raise if it hasn’t been set. Just go out with a bang: <code class="language-plaintext highlighter-rouge">Rails.application.kitty_litter_supreme.client_secret!</code></p>

<h3 id="action-mailer-queue-name-is-configurable"><a href="https://github.com/rails/rails/pull/18587">Action Mailer queue name is configurable</a></h3>

<p>Currently all mails sent with <code class="language-plaintext highlighter-rouge">deliver_later</code> are put in the mailers queue. This patch keeps that default but allows the queue name to be configured globally via <code class="language-plaintext highlighter-rouge">config.action_mailer.deliver_later_queue_name</code>. See also related <a href="https://github.com/rails/rails/commit/ae5f2b4e79f3e41aad8280109d8bfc788a1a2733">documentation commit</a>.</p>

<h2 id="improved">Improved</h2>

<h3 id="use-inline-gemfile-when-reporting-bugs"><a href="https://github.com/rails/rails/pull/20429">Use inline Gemfile when reporting bugs</a></h3>

<p>No longer do you need to write a physical Gemfile when submitting bug reports, as <a href="https://github.com/bundler/bundler/pull/3440">Bundler 1.10.3</a> now supports inline gems. Of note, when an inline Gemfile is used, <a href="https://github.com/bundler/bundler/issues/3721#issuecomment-109154581"><code class="language-plaintext highlighter-rouge">bundle exec</code> is not supported</a>.</p>

<h3 id="use-block-variable-instead-of-global"><a href="https://github.com/rails/rails/pull/20410">Use block variable instead of global</a></h3>

<p>As it turns out using a block variable instead of a “magic” global variable is not only faster but easier to read.</p>

<h3 id="enumerablepluck-supports-multiple-attributes"><a href="https://github.com/rails/rails/pull/20362">Enumerable#pluck supports multiple attributes</a></h3>

<p>This allows easier integration with Active Record, such that <code class="language-plaintext highlighter-rouge">ActiveRecord::Base#pluck</code> will now use <code class="language-plaintext highlighter-rouge">Enumerable#pluck</code> if the relation is loaded, without needing to hit the database.</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="remove-assert_template-and-assigns"><a href="https://github.com/rails/rails/pull/20138">Remove <code class="language-plaintext highlighter-rouge">assert_template</code> and <code class="language-plaintext highlighter-rouge">assigns()</code></a></h3>

<p>In order to discourage ties in the controller tests to the internal structure of how your views are organized, <code class="language-plaintext highlighter-rouge">assigns</code> and <code class="language-plaintext highlighter-rouge">assert_template</code> have both been removed and extracted to the gem <a href="https://github.com/rails/rails-controller-testing">rails-controller-testing</a>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="apply-active-record-suppression-to-all-saves"><a href="https://github.com/rails/rails/pull/20430">Apply Active Record suppression to all saves</a></h3>

<p>Active Record’s <code class="language-plaintext highlighter-rouge">suppress</code> is now being applied to non-bang <code class="language-plaintext highlighter-rouge">save</code> and <code class="language-plaintext highlighter-rouge">update</code> methods. It was also missing from <code class="language-plaintext highlighter-rouge">create_*</code> methods provided by singular associations. See <a href="https://gist.github.com/georgeclaghorn/e6e7ef670262b9c12e5f">gist</a> for more details.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-05-29%7D...@%7B2015-06-05%7D">check them out yourself</a>!</p>

<p>Have you been thinking about writing for us, but you’re scared of putting yourself out there? Don’t worry, you can help our editors improve their writing with thoughtful critique and general grammar policing.</p>

<p>You up for that? Tell <a href="mailto:godfrey@brewhouse.io">Godfrey</a> today.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/5/30/this-week-in-rails-enumerable-pluck-sqlite-collation-and-lots-more/" rel="bookmark">This week in Rails: Enumerable#pluck, SQLite Collation and lots more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2015-05-30 07:02:36 +0000">May 30, 2015 @  7:02 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>####</p>

<p>Hello everyone!</p>

<p>This is <a href="https://twitter.com/vipulnsward">Vipul</a> , happily reporting from a Simmering Summer 😎. Pour yourself a drink 🍹, sit back, relax and enjoy, as we go through these <a href="https://github.com/rails/rails">hot off the press</a> changes.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150522-20150528">This week’s Rails Contributors</a></h3>

<p>43 people helped make Rails even awesome this week. Checkout the pulse <a href="https://github.com/rails/rails/pulse">page</a> for more details.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="enumerablepluck"><a href="https://github.com/rails/rails/pull/20350"><code class="language-plaintext highlighter-rouge">Enumerable#pluck</code></a></h3>

<p><code class="language-plaintext highlighter-rouge">Enumerable#pluck</code> has just landed on master, providing similar functionality as Active Record’s <code class="language-plaintext highlighter-rouge">#pluck</code>.</p>

<p>This allows for something like
<code class="language-plaintext highlighter-rouge">[{ name: "David" }, { name: "Rafael" }, { name: "Aaron" }].pluck(:name)</code> to get everyone’s names. Pretty handy!</p>

<h2 id="improved">Improved</h2>

<h3 id="collation-support-in-sqlite"><a href="https://github.com/rails/rails/pull/20041">Collation support in SQLite</a></h3>

<p>Active Record now supports specifying a <a href="https://www.sqlite.org/datatype3.html#collation">collation function</a> for SQLite string columns.</p>

<h3 id="default-procs-in-attributes-api"><a href="https://github.com/rails/rails/pull/19914">Default procs in Attributes API</a></h3>

<p>With the new <a href="http://confreaks.tv/videos/railsconf2015-designing-a-great-ruby-api-how-we-re-simplifying-rails-5">Attributes API</a>, it is now possible to specify a proc as the default values for an attribute, which allows for runtime-generated default values such as <code class="language-plaintext highlighter-rouge">attribute :year, :integer, default: -&gt; { Time.now.year }</code>. See also these <a href="https://github.com/rails/rails/commit/a6e3cdae0ce1d05a6b9f7dff4499f6be3fbf63c2">related changes</a>.</p>

<h3 id="preserve-mysqls-sql_mode-with-strict-default"><a href="https://github.com/rails/rails/pull/17654">Preserve MySQL’s <code class="language-plaintext highlighter-rouge">sql\_mode</code> with <code class="language-plaintext highlighter-rouge">strict: :default</code></a></h3>

<p>By default, Rails overrides MySQL’s <code class="language-plaintext highlighter-rouge">sql_mode</code> setting with <code class="language-plaintext highlighter-rouge">sql_mode=STRICT_ALL_TABLES</code> to prevent silent data loss. While this is helpful, it has the unfortunate side-effect of overriding any user customizations.</p>

<p>If you prefer to manage this yourself, you can now specify <code class="language-plaintext highlighter-rouge">strict: :default</code> <a href="https://github.com/rails/rails/issues/17370#issuecomment-106159323">in your connection’s config</a> and Rails will leave your <code class="language-plaintext highlighter-rouge">sql_mode</code> alone. (<code class="language-plaintext highlighter-rouge">STRICT_ALL_TABLES</code> is still highly recommended though!)</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="deprecate-render-nothing-true"><a href="https://github.com/rails/rails/pull/20336">Deprecate <code class="language-plaintext highlighter-rouge">render nothing: true</code></a></h3>

<p>If you are using <code class="language-plaintext highlighter-rouge">render nothing: true</code>, you should start replacing it with <code class="language-plaintext highlighter-rouge">head :ok</code>, which does the same thing and is more semantic. This option will go away permanently in Rails 5.1.</p>

<h3 id="deprecate-relationuniq"><a href="https://github.com/rails/rails/commit/adfab2dcf4003ca564d78d4425566dd2d9cd8b4f">Deprecate <code class="language-plaintext highlighter-rouge">Relation#uniq</code></a></h3>

<p>The superficial similarity between <code class="language-plaintext highlighter-rouge">Relation#uniq</code> and <code class="language-plaintext highlighter-rouge">Array#uniq</code> has been a source of confusion, which led to the addition of <a href="https://github.com/rails/rails/pull/9683"><code class="language-plaintext highlighter-rouge">Relation#distinct</code></a> which better communicates what is happening under the hood.</p>

<p>The recent discussion on <a href="https://github.com/rails/rails/pull/20198">#20198</a> put the final nail in the coffin for <code class="language-plaintext highlighter-rouge">Relation#uniq</code> and its friends, <code class="language-plaintext highlighter-rouge">#uniq!</code> and <code class="language-plaintext highlighter-rouge">#uniq_value</code>. These methods are deprecated and scheduled for removal in Rails 5.1, so you might want to start using <code class="language-plaintext highlighter-rouge">#distinct</code>, <code class="language-plaintext highlighter-rouge">#distinct!</code> and <code class="language-plaintext highlighter-rouge">#distinct_value</code> soon.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/compare/master@%7B2015-05-22%7D...@%7B2015-05-29%7D">check them out yourself</a>!</p>

<p>P.S. If you enjoyed this newsletter, why not share it with your friends? :) If you wish to be part of this project please don’t hesitate to <a href="mailto:godfrey@brewhouse.io">contact Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/5/22/this-week-in-rails-try-ing-with-delegator-schema-cache-and-a-lot-more/" rel="bookmark">This week in Rails: try&#39;ing with Delegator, schema cache and a lot more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2015-05-22 20:21:56 +0000">May 22, 2015 @  8:21 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey everyone, this is <a href="https://twitter.com/_cha1tanya">Prathamesh</a>. Back with latest spells and bindings from magical world of Rails. Keep your wands ready!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150515-201505222000">This week’s Rails Contributors</a></h3>

<p>39 people got commits into <code class="language-plaintext highlighter-rouge">rails/rails</code> this week. And 7 of them made their first patch in this week! Checkout the <a href="https://github.com/rails/rails/pulse">pulse</a> page for more details.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="support-for-try-with-delegator"><a href="https://github.com/rails/rails/commit/af53280a4b5b3323ac87dc60deb2b1b781197b2b">Support for <code class="language-plaintext highlighter-rouge">try</code> with Delegator</a></h3>

<p><code class="language-plaintext highlighter-rouge">Delegator</code> will now respond to <code class="language-plaintext highlighter-rouge">try</code> rather than delegating it to the underlying object. Phew! The surprising behavior when using try with normal objects and delegators is gone finally.</p>

<h2 id="improved">Improved</h2>

<h3 id="copy-schema-cache-to-new-connection-pool-after-fork"><a href="https://github.com/rails/rails/pull/20175">Copy schema cache to new connection pool after fork</a></h3>

<p>Active Record does all the heavy lifting of maintaining and creating connection pools. It just got better. Thanks to this patch, it will copy the schema cache of old connections pools to the new ones if one already exists.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="quoted-sequence-names-now-work-with-serial"><a href="https://github.com/rails/rails/pull/20190">Quoted sequence names now work with serial?</a></h3>

<p>Quoted sequence names in PostgreSQL will work properly now with <code class="language-plaintext highlighter-rouge">serial?</code> method. Before this patch, the <code class="language-plaintext highlighter-rouge">serial?</code> method would return false if the sequence name was quoted. Finally it’s fixed.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="integerpositive-and-integernegative-in-ruby-core"><a href="https://github.com/rails/rails/commit/6c55cffa5bb804fc0291ec4aa82527ec3c57f2d2">Integer#positive? and Integer#negative? in Ruby core</a></h3>

<p>Last week <code class="language-plaintext highlighter-rouge">Integer#positive?</code> and <code class="language-plaintext highlighter-rouge">Integer#negative?</code> were added to Rails and this week they became part of <a href="https://bugs.ruby-lang.org/issues/11151">Ruby core</a>. Hooray!</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are many more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out yourself</a>!</p>

<p>P.S. If you enjoyed this newsletter, why not share it with your friends? :) If you wish to be part of this project please don’t hesitate to <a href="mailto:godfrey@brewhouse.io">contact Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/5/15/this-week-in-rails-connection-pool-responsive-site-oh-my/" rel="bookmark">This week in Rails: Connection Pool, Responsive Site, Oh my!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2015-05-15 21:17:09 +0000">May 15, 2015 @  9:17 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey everyone, <em>cough</em> this is <em>cough</em> <a href="https://twitter.com/kaspth">Kasper</a>.</p>

<p>I’ve been <em>cough</em> sick most of the week and am <em>cough</em>-ing my way through this.</p>

<p>Feel free to insert <em>cough</em>’s through the rest of this, as long as you remember not to snooze on a <em>sneeze</em> or two too.</p>

<p>Alright, <em>cough</em> ‘em up.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150508-201505152100">This Week’s Rails Contributors</a></h3>

<p>Look at these 31 people and how they’ve hammered away at their keyboards, as if possessed by a different sickness. One of radness that is, my duderinos and duderinas.</p>

<h3 id="active-record-connection-pool-is-more-concurrent"><a href="https://github.com/rails/rails/pull/14938">Active Record: Connection Pool is More Concurrent</a></h3>

<p>Active Record keeps a pool of database connections. To keep the pool safe from people trying to cannonball queries at once we need to lock it. The pull request slims down what happens when locking, so you can quicker release the lock. Basically more people can go splash, because the diving board is free earlier.</p>

<h3 id="holy-ruby-on-rails-on-responsive-website-batman"><a href="https://github.com/rails/rails.github.com/issues/46">Holy Ruby on Rails on Responsive Website, Batman!</a></h3>

<p>Are you on your phone? Are you on your watch? Are you on the toi… eh, anyway, the <a href="http://rubyonrails.org">Rails website</a> is now responsive.</p>

<p>Just to tide you over until the website redesign will be revealed. That’ll surely be a royal flush.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="the-tragoedia-and-comoedia-of-integers"><a href="https://github.com/rails/rails/commit/e54277a45da3c86fecdfa930663d7692fd083daa">The Tragoedia and Comoedia of Integers</a></h3>

<p>This week integers gained introspection methods that makes a <code class="language-plaintext highlighter-rouge">select</code> a tad easier to read. They are the gangbuster team of <code class="language-plaintext highlighter-rouge">negative?</code> and <code class="language-plaintext highlighter-rouge">positive?</code>. And hopefully the polarity shockwaves will rock <a href="https://bugs.ruby-lang.org/issues/11151">the Ruby world</a> too.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="dont-add-to-local-assigns-without-an-object"><a href="https://github.com/rails/rails/pull/20153">Don’t Add to Local Assigns without an Object</a></h3>

<p>If you rendered a partial like <code class="language-plaintext highlighter-rouge">&lt;%= render partial: 'spruce_goose' %&gt;</code>, Rails would spruce up <code class="language-plaintext highlighter-rouge">local_assigns</code> with the name of the partial. That goose chase ended this week.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="one-more-chance-to-review-rails-api"><a href="https://github.com/rails/rails/pull/19832">One More Chance to Review Rails API</a></h3>

<p>The option to generate API only Rails apps is almost done. But there’s still a chance to help out by reviewing it. Give it a shot of love!</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out yourself</a>!</p>

<p>P.S. If you enjoyed this newsletter, why not share it with your friends? :) If you wish to be part of this project please don’t hesitate to <a href="mailto:godfrey@brewhouse.io">contact Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/5/10/this-week-in-rails-job-ids-inline-images-preview-and-more/" rel="bookmark">This week in Rails: Job IDs, inline images preview and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">huoxito</span></span>,
              <span class="published" title="2015-05-10 19:05:08 +0000">May 10, 2015 @  7:05 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi there!! <a href="https://twitter.com/huoxito">Washington</a> here again.</p>

<p>Glad we all made to another Friday. A lot of small patches around Rails repository this week. So we had another relatively calm week after the major announcements on RailsConf. The <a href="http://confreaks.tv/events/railsconf2015">talks list</a> is getting bigger on confreaks by the way. You might want to watch some of those this weekend.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150502-20150508">This Week’s Contributors</a></h3>

<p>38 people made it to the Rails repository this week. Check out the <a href="https://github.com/rails/rails/pulse">pulse page</a> on github too for the full list of recent issues and PRs.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="keeping-original-job-ids-with-activejobprovider_job_id"><a href="https://github.com/rails/rails/pull/19910">Keeping original job IDs with <code class="language-plaintext highlighter-rouge">ActiveJob#provider_job_id</code></a></h3>

<p>ActiveJob will be able to report the original adapter job ID in Rails 5. The patch started targeting Delayed Job then <a href="https://github.com/rails/rails/pull/20056">Sidekiq and Que</a> got their own about a week later. Great team work.</p>

<h3 id="mailer-previews-support-inline-images"><a href="https://github.com/rails/rails/commit/60239f3e5a3303b4135e30469ba7dbf27890008d">Mailer previews support inline images</a></h3>

<p>This commit adds a preview interceptor to search for inline <code class="language-plaintext highlighter-rouge">cid:</code> urls in <code class="language-plaintext highlighter-rouge">src</code> attributes and convert them to data urls. P.S. I had to look up the <a href="http://tools.ietf.org/html/rfc2111">cid protocol</a> myself to get this one.</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="removed-assigns-from-functional-test-templates"><a href="https://github.com/rails/rails/pull/19976">Removed <code class="language-plaintext highlighter-rouge">assigns</code> from functional test templates</a></h3>

<p>Rails is moving towards deprecating the <code class="language-plaintext highlighter-rouge">assigns</code> helper on controller tests. The main motivation is that it’s asserting against the internals of the implementation which we shouldn’t care about in a unit test.</p>

<p>See some <a href="https://github.com/rails/rails/pull/18305#issuecomment-68605166">comments</a> from DHH about that and a couple other test helpers.</p>

<h2 id="improved">Improved</h2>

<h3 id="allow-custom-response-messages-on-authentication-methods"><a href="https://github.com/rails/rails/pull/19981">Allow custom response messages on authentication methods</a></h3>

<p>This adds the same functionality already provided in <code class="language-plaintext highlighter-rouge">Digest</code> to the HTTPAuth <code class="language-plaintext highlighter-rouge">Basic</code> and <code class="language-plaintext highlighter-rouge">Token</code> modules.</p>

<h3 id="apply-schema-cache-dump-when-creating-connections"><a href="https://github.com/rails/rails/pull/17632">Apply schema cache dump when creating connections</a></h3>

<p>Quite interesting patch on improving the set up for database connection pools. The schema cache dump will now be applied to every connection as they are created to avoid querying the database for its schema.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out yourself</a>!</p>

<p>P.S. If you enjoyed this newsletter, why not share it with your friends? :) If you wish to be part of this project please don’t hesitate to <a href="mailto:godfrey@brewhouse.io">contact Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/5/2/this-week-in-rails-recovering-from-railsconf/" rel="bookmark">This week in Rails: recovering from RailsConf</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2015-05-02 01:27:52 +0000">May 2, 2015 @  1:27 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy Friday! It’s <a href="https://claudiob.github.io">Claudio</a> with the latest updates on Rails. Overall, this has been a relaxed week. Many documentation fixes have made their way into <code class="language-plaintext highlighter-rouge">master</code> while features uncovered at RailsConf (like the <a href="https://github.com/rails/rails/pull/19832">integration of Rails API</a>) are being heavily discussed on GitHub.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150425-20150501">This Week’s Contributors</a></h3>

<p>This week 31 people helped Rails out. Six people had their first commit merged into rails/rails. Hooray!</p>

<h3 id="railsconf-2015-videos"><a href="http://confreaks.tv/events/railsconf2015">RailsConf 2015 videos</a></h3>

<p>One by one, all the presentations of RailsConf are being uploaded. Lots of great talks to fill your weekend!</p>

<h3 id="gsoc-students-announced"><a href="http://weblog.rubyonrails.org/2015/5/2/welcome-to-gsoc-15/">GSoC students announced!</a></h3>

<p>We are proud to announce that 8 students will be working on improving Rails as part of the Google Summer of Code 2015. Congratulations and welcome to Rails!</p>

<h2 id="improved">Improved</h2>

<h3 id="better-docs-for-minitest-assertions"><a href="https://github.com/rails/rails/commit/a66a64aa2a82b755f754bd42b8a4a4697ac89f83">Better docs for minitest assertions</a></h3>

<p>Rails ships with minitest by default but has different naming conventions for inverse assertion methods. The new guides clarify this difference. And give us a great excuse to link to <a href="https://www.youtube.com/watch?v=MA4jJNUG_dI">Ruby on Rails on Minitest</a>.</p>

<h3 id="toward-a-better-caching-with-rails-guide"><a href="https://github.com/rails/rails/commit/ae5c5b2237ee4c1aae98a048c09b6a98bd352475">Toward a better “Caching with Rails” guide</a></h3>

<p>Everyone can help make Rails better by improving its guides. <a href="http://guides.rubyonrails.org/caching_with_rails.html">“Caching with Rails”</a> is an awesome place to start. If you think you can improve it, don’t hesitate to submit a pull request!</p>

<h3 id="remove-use-of-mocha-in-the-named-base-tests"><a href="https://github.com/rails/rails/commit/3ca5ae57b517b7a5a8d07dff83703dcd1f199870">Remove use of mocha in the named-base tests</a></h3>

<p>Some tests in the Rails codebase use the <code class="language-plaintext highlighter-rouge">mocha</code> library and can be faster by using <code class="language-plaintext highlighter-rouge">minitest/mock</code> instead. This commit fixes one of those tests; you are all invited to do the same for <a href="https://github.com/rails/rails/search?utf8=%E2%9C%93&amp;q=%22stop+using+mocha%22&amp;type=Code">the remaining ones</a>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="rake-routes-not-showing-right-format-when-nested"><a href="https://github.com/rails/rails/issues/18373">Rake routes not showing right format when nested</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">rake routes</code> command was not properly showing nested routes with a scope constraint for the format override by a resource… but that just got fixed!</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>That’s all for This week in Rails. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out yourself</a>!</p>

<p>P.S. If you enjoyed this newsletter, why not share it with your friends? :) If you wish to be part of this project please don’t hesitate to <a href="mailto:godfrey@brewhouse.io">contact Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/4/25/this-week-in-rails-railsconf-2015-edition/" rel="bookmark">This week in Rails: RailsConf 2015 Edition</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2015-04-25 18:16:57 +0000">April 25, 2015 @  6:16 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>ZOMG! Hello everyone, it is <a href="https://twitter.com/chancancode">Godfrey</a> here (it’s been a while!), delivering the latest news from Rails to your inbox. This happens to be <a href="http://railsconf.com">RailsConf</a> week, so we have lots to cover; lets get to it!</p>

<p>Note: The links to the RailsConf videos are the unedited live-stream versions, and they might be removed later. Also, only talks from the keynote room are available at the moment, but don’t worry – the full set of talks will eventually be made available to everyone. Follow <a href="https://twitter.com/railsconf">@railsconf</a> to stay in the loop!</p>

<h2 id="rails-conf-2015">Rails Conf 2015</h2>

<h3 id="day-1-dhh-keynote-sara-chipps-keynote"><a href="https://youtu.be/oMlX9i9Icno">Day 1: DHH keynote, Sara Chipps keynote</a></h3>

<p><a href="https://twitter.com/dhh">David Heinemeier Hansson</a> kicked off the conference by announcing a few new features in Rails 5: Rails API, turbolinks 3, a native mobile wrapper and web sockets support (a.k.a. Action Cable).</p>

<p>The amazing <a href="https://twitter.com/sarajchipps">Sara Chipps</a> wrapped up the day by sharing her experience <a href="http://www.jewelbots.com/">teaching kids to code</a>.</p>

<p>Check the <a href="http://railsconf.com/schedule">schedule</a> for a full list of talks from Room 202. Shameless plug: <a href="https://twitter.com/chancancode">yours truly</a> gave a talk following the DHH keynote ;)</p>

<h3 id="day-2-aaron-patterson-keynote-lightning-talks"><a href="https://youtu.be/wQCda5PBn0A">Day 2: Aaron Patterson keynote, lightning talks</a></h3>

<p><a href="https://twitter.com/tenderlove">Aaron Patterson</a> started the second day with a punishing amount of word play jokes. In between trolling other keynote speakers and rebooting his computer, he also dropped an incredible amount of performance knowledge.</p>

<p>Don’t forget to catch the lightning talks towards the end of the stream!</p>

<h3 id="day-3-ruby-heroes-core-team-panel-kent-beck-closing-keynote"><a href="https://www.youtube.com/watch?v=LdWMcs9EEOE">Day 3: Ruby heroes, core team panel, Kent Beck closing keynote</a></h3>

<p>The <a href="http://rubyheroes.com/">Ruby heroes</a> awards were given on the third day, followed by a panel discussion featuring some members from the <a href="http://rubyonrails.org/core">Rails core team</a>.</p>

<p><a href="https://twitter.com/kentbeck">Kent Beck</a>, aka the creator of <a href="http://en.wikipedia.org/wiki/Extreme_programming">XP</a> (not to be confused with <a href="http://en.wikipedia.org/wiki/Windows_XP">the other XP</a>) wrapped up the conference with a focus on the human elements of programming.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150418-20150424">This week’s Rails contributors</a></h3>

<p>Just because it is Rails Conf, it doesn’t mean contributions to the Rails codebase will see any slow down. In fact, 37 contributors made their mark on Rails this week, with <em>11 first-time contributors</em>!</p>

<h3 id="rails-api"><a href="https://github.com/rails/rails/pull/19832">Rails API</a></h3>

<p>As mentioned in David’s keynote, Rails API will be part of Rails 5. Follow the pull request to track the progress and chime in on the discussion. (Please avoid leaving +1 comments!)</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="generic-bug-report-template"><a href="https://github.com/rails/rails/pull/19818">Generic bug report template</a></h3>

<p>Joining the <a href="https://github.com/rails/rails/tree/master/guides/bug_report_templates">existing bug report templates</a>, this new template will be handy for reproducing small bugs with a minimal setup. Check the <a href="http://edgeguides.rubyonrails.org/contributing_to_ruby_on_rails.html#create-an-executable-test-case">contributing guide</a> for details.</p>

<h3 id="attr_name_previously_changed"><a href="https://github.com/rails/rails/pull/19847">[attr_name]_previously_changed?</a></h3>

<p>With this patch, you can easily check if a single attribute has previously changed and react to those changes appropriately.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>It’s been quite a week! We didn’t have room to cover everything that happened in <a href="https://github.com/rails/rails/commits/master">Rails</a>, so head over and take a look for yourself.</p>

<p>Thank you for your continued support for the newsletter. (I am very glad to have met a few of you at RailsConf!) As always, feel free to <a href="https://rails-weekly.ongoodbits.com">share this with your friends</a>. If you have any comments or would like to help, <a href="mailto:godfrey@brewhouse.io">drop me a line</a>!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/4/18/this-week-in-rails-ruby-2-2-2-railsconf-and-more/" rel="bookmark">This week in Rails: Ruby 2.2.2, RailsConf and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2015-04-18 01:17:44 +0000">April 18, 2015 @  1:17 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey reader, <a href="https://twitter.com/kaspth">Kasper</a> here.</p>

<p>I’m sole jammin’ and grand slammin’ words into your inbox.</p>

<p>But before the Rails juice, a quick story spruce: At my company we have a coworker we look up to, because she’s doing a cross country trek.</p>

<p>She’s our heroine and she just crossed the border.</p>

<p>Oh right, you were looking for Rails news.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150410-20150417">This Week’s Contributors</a></h3>

<p>This week 42 people helped Rails out. Rails 5 comes closer everyday and it’s only possible because of all your help. Keep it up and it’ll be the best version of Rails yet.</p>

<h3 id="prepend-primed-to-dethrone-alias_method_chain"><a href="https://github.com/rails/rails/pull/19752"><code class="language-plaintext highlighter-rouge">prepend</code> Primed to Dethrone <code class="language-plaintext highlighter-rouge">alias_method_chain</code></a></h3>

<p>Remember when we said <code class="language-plaintext highlighter-rouge">alias_method_chain</code> had been deprecated? Well, if the method being overriden called super, you’d be stuck in an infinite recursion - like that friend who didn’t graduate kindergarten. This week <code class="language-plaintext highlighter-rouge">prepend</code> became the successor Rails needs. And how is that possible?</p>

<h3 id="rails-5-requires-ruby-222"><a href="https://github.com/rails/rails/pull/19753">Rails 5 Requires Ruby 2.2.2</a></h3>

<p>Well, I’m glad you kept reading, because Ruby 2.2.2 has a fix for <code class="language-plaintext highlighter-rouge">prepend</code>. The new version is mainly a security release - with some bug fixes squeezed in there - so no procrastinating the upgrade, okay? You want to be ready to hit <a href="http://www.eileencodes.com/posts/getting-your-local-environment-setup-to-contribute-to-rails">the lab</a> next week too.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="controllers-with-default-form-builders"><a href="https://github.com/rails/rails/pull/19736">Controllers With Default Form Builders</a></h3>

<p>There’s a new <code class="language-plaintext highlighter-rouge">default_form_builder</code> method you can override in controllers. Then <code class="language-plaintext highlighter-rouge">form_for</code> and friends will use the passed builder class to architect the view.</p>

<h3 id="a-new-action-pack-xml-parser-release"><a href="https://github.com/rails/actionpack-xml_parser/issues/7">A new Action Pack XML Parser Release</a></h3>

<p>Hey, there’s a new version of this thing out.                                                  </p>

<h2 id="improved">Improved</h2>

<h3 id="railties-uses-bundlers-exe-convention"><a href="https://github.com/rails/rails/pull/19731">Railties Uses Bundler’s exe Convention</a></h3>

<p>You’ve probably been prepending <code class="language-plaintext highlighter-rouge">bin</code> when running <code class="language-plaintext highlighter-rouge">rake</code> or <code class="language-plaintext highlighter-rouge">rails</code> like a good samaritan. Those are binstubs in action. But <code class="language-plaintext highlighter-rouge">bin</code> is for executables in general and not just those stubs. Not anymore, as Bundler reserves <code class="language-plaintext highlighter-rouge">bin</code> for binstubs and <code class="language-plaintext highlighter-rouge">exe</code> for executables. This week Railties executed that convention.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="meet-us-at-railsconf"><a href="http://railsconf.com/schedule">Meet Us at RailsConf</a></h3>

<p>A few of us are going to the big peach next week. So after you’ve seen DHH reveal the really big stuff coming in Rails 5, you can mingle with us at RailsConf. Both <a href="http://railsconf.com/program#prop_1000">Godfrey</a> and <a href="http://railsconf.com/program#prop_849">Claudio</a> will be speaking. …and I guess I’m there too.</p>

<h2 id="thats-a-wrap">That’s a wrap</h2>

<p>Another week in Rails went by - and so swiftly. There’s more changes in <a href="https://github.com/rails/rails/commits/master">this tailored</a> link.</p>

<p>Lastly, either pluck in a few of your friends’ emails <a href="https://rails-weekly.ongoodbits.com">here</a> or ask <a href="mailto:godfrey@brewhouse.io">Godfrey</a> how you can get to write these things too.</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/4/11/this-week-in-rails-batch-touching-default-controller-response-and-more/" rel="bookmark">This week in Rails: batch touching, default controller response and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">huoxito</span></span>,
              <span class="published" title="2015-04-11 03:32:39 +0000">April 11, 2015 @  3:32 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey there, this is <a href="https://twitter.com/huoxito">Washington</a>. It’s finally Friday again!!!</p>

<p>A lot of bug fixing and a couple great improvements going on the Rails environment this week. Read on for more details.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150406-20150410">This week’s Rails contributors</a></h3>

<p>31 contributors have helped improve Rails this week. Consider taking some time next week to make a contribution to an open-source project :) (I keep telling that to myself every day)</p>

<h2 id="improved">Improved</h2>

<h3 id="batch-touch-parent-records"><a href="https://github.com/rails/rails/pull/19324">Batch touch parent records</a></h3>

<p>YAY! I bet many projects have been looking forward to this improvement. After a couple discussions and <a href="https://github.com/rails/rails/pull/18824">experiments</a> touching is finally limited to the fewest possible number of queries.</p>

<h3 id="controller-actions-default-to-head-no_content-if-no-template-exists"><a href="https://github.com/rails/rails/pull/19377">Controller actions default to head :no_content if no template exists</a></h3>

<p>After all these years DHH is still <a href="https://github.com/rails/rails/issues/19036">pushing</a> for better defaults on Rails. Next major version will assume everything went fine if a controller action has no template. I can’t see why not.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="non-ascii-characters-in-urls-on-windows"><a href="https://github.com/rails/rails/pull/19689">Non-ascii characters in URLs on Windows</a></h3>

<p>We are a few months into 2015, but these encoding-related problems are still haunting us! With this fix, Windows apps will stop blowing up on strange URLs. Yet another example of how awesome the Ruby and Rails community can be.</p>

<h3 id="error-when-defining-callbacks-named-run"><a href="https://github.com/rails/rails/pull/19448">Error when defining callbacks named <code class="language-plaintext highlighter-rouge">run</code></a></h3>

<p>An apparently nice <a href="https://github.com/rails/rails/commit/796cab45561fce268aa74e6587cdb9cae3bb243e">performance improvement</a> has caused a <a href="https://github.com/rails/rails/pull/19405">regression</a> on the callback system. Plus according to new benchmarks it seems the original performance improvement is no longer relevant.</p>

<h3 id="force_ssl-without-session_store"><a href="https://github.com/rails/rails/pull/19682"><code class="language-plaintext highlighter-rouge">force_ssl</code> without <code class="language-plaintext highlighter-rouge">session_store</code></a></h3>

<p><code class="language-plaintext highlighter-rouge">config.force_ssl = true</code> now works properly even when you have disabled the session store.</p>

<h3 id="uniqueness-validations-and-out-of-range-integers-on-postgresql"><a href="https://github.com/rails/rails/pull/19688">Uniqueness validations and out-of-range integers on PostgreSQL</a></h3>

<p>Another patch to make Active Record API rock solid.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="redcarpet-322-has-an-xss-vulnerability"><a href="https://github.com/rails/rails/commit/6c98100620c0e441c0c8334bb079bf7567c2b521">Redcarpet 3.2.2 has an XSS vulnerability</a></h3>

<p>I haven’t seen much noise about <a href="http://www.openwall.com/lists/oss-security/2015/04/07/11">this vulnerability</a> on the interwebs but just in case. If you have this markdown parser on any of your projects you should probably bump it whenever you have a chance.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/4/3/this-week-in-rails-this-week-in-rails/" rel="bookmark">This week in Rails</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2015-04-03 23:15:25 +0000">April 3, 2015 @ 11:15 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy Good Friday Everyone!</p>

<p>Here comes the gist of last week’s interesting commits from Rails. Stay tuned!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150328-201504032300">This week’s Rails contributors</a></h3>

<p>We had 30 amazing contributors this week, big thanks to all them!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="explicit-base-class-for-active-job-jobs"><a href="https://github.com/rails/rails/pull/19034">Explicit base class for Active Job jobs</a></h3>

<p>It is <a href="https://github.com/rails/rails/issues/16976#issuecomment-56244353">recommended</a> to not change settings on <code class="language-plaintext highlighter-rouge">ActiveJob::Base</code> directly so from now on every generated <code class="language-plaintext highlighter-rouge">Job</code> will inherit from <code class="language-plaintext highlighter-rouge">ApplicationJob</code> and you can tweak that for your needs.</p>

<h3 id="rails-uses-sprockets-3-now"><a href="https://github.com/rails/rails/pull/19587">Rails uses Sprockets 3 now!</a></h3>

<p><a href="https://github.com/rails/sprockets/issues/16">Sprockets 3</a> will be released soon and the Rails team decided to give the release candidate a try.</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="deprecate-the-tokenizer-option-in-validates_length_of"><a href="https://github.com/rails/rails/pull/19585">Deprecate the :tokenizer option in validates_length_of</a></h3>

<p>This option only served an extremely specific use case hence became deprecated. If you rely on this functionality, you can implement it with a plain Ruby method.</p>

<h2 id="improved">Improved</h2>

<h3 id="only-coerce-time-in-comparison-if-necessary"><a href="https://github.com/rails/rails/pull/19604">Only coerce time in comparison if necessary</a></h3>

<p>In the development environment <code class="language-plaintext highlighter-rouge">ActiveSupport::FileUpdateChecker#max_mtim</code> triggers many time comparison and there were many unnecessary <code class="language-plaintext highlighter-rouge">to_time</code> calls. With this patch <code class="language-plaintext highlighter-rouge">Rails</code> saves around 100ms per request!</p>

<h3 id="reduce-memory-usage-when-loading-types-in-postgres"><a href="https://github.com/rails/rails/commit/445c12f7dfa345b86e05dc610d665f9afde14c26">Reduce memory usage when loading types in Postgres</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">PG::Result</code> object were never cleared when the application queries the types. By clearing that object Rails use less memory.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="return-super-in-actioncontrollerparametersconst_missing"><a href="https://github.com/rails/rails/pull/19544">Return super in ActionController::Parameters.const_missing</a></h3>

<p>With this pull request <code class="language-plaintext highlighter-rouge">ActionController::Parameters.const_missing</code>’s <code class="language-plaintext highlighter-rouge">super</code> is always returned whereas before it was only called and its return value was mistakenly discarded.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/3/27/this-week-in-rails-goodbye-alias_method_chain-postgresql-typecasting-and-more/" rel="bookmark">This week in Rails: Goodbye alias_method_chain, PostgreSQL typecasting and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">_cha1tanya</span></span>,
              <span class="published" title="2015-03-27 22:13:15 +0000">March 27, 2015 @ 10:13 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey all!</p>

<p>This is <a href="https://twitter.com/_cha1tanya">Prathamesh</a> with this week’s recap from <a href="https://github.com/rails/rails">Rails</a>. Lets see which issues got fixed, which features got added. Ready, steady, go!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/20150321-20150327">This week’s Rails contributors</a></h3>

<p>This week 40 people contributed to Rails, 7 out of them are new. Do you also want to help? Check out the <a href="https://github.com/rails/rails/issues">issue tracker</a> and start making Rails better.</p>

<p>By the way, <a href="https://github.com/fxn/">Xavier</a> and <a href="https://github.com/kaspth">Kasper</a> added the <a href="https://github.com/fxn/rails-contributors/pull/61">permalink feature</a> to the link of weekly contributors. So each weekly contributors link is forever to stay!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="warning-if-the-query-fetches-more-than-fixed-number-of-records"><a href="https://github.com/rails/rails/pull/18846">Warning if the query fetches more than fixed number of records</a></h3>

<p>Faced problem with queries fetching thousands of records and slowing everything? Now you will get a nice warning if the query fetches more number of records than configured value by using <code class="language-plaintext highlighter-rouge">active_record.warn_on_records_fetched_greater_than</code> config option.</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="deprecate-alias_method_chain-in-favor-of-moduleprepend"><a href="https://github.com/rails/rails/pull/19434">Deprecate alias_method_chain in favor of Module#prepend</a></h3>

<p>Do you remember the old friend <code class="language-plaintext highlighter-rouge">alias_method_chain</code>? It had a good run. But now it will be deprecated in Rails 5 in favor of <code class="language-plaintext highlighter-rouge">Module#prepend</code> which was introduced in Ruby 2.0.</p>

<h2 id="improved">Improved</h2>

<h3 id="moving-type-casting-for-postgresql-out-of-active-record"><a href="https://github.com/rails/rails/pull/17650">Moving type casting for PostgreSQL out of Active Record</a></h3>

<p>We just got <a href="https://github.com/rails/rails/commit/cd09261846053bb40f8c859b8644b28208b6d7b9">two</a> <a href="https://github.com/rails/rails/commit/3b50a7a3e18e1ae5ea1d76927e37021f50389abc">steps</a> closer to moving type casting of various data types for PostgreSQL from Active Record to PostgreSQL adapter.</p>

<h3 id="friendlier-access-to-request-variants"><a href="https://github.com/rails/rails/pull/18939">Friendlier access to request variants</a></h3>

<p>With this patch, you can now check the current request’s variant using <code class="language-plaintext highlighter-rouge">request.variant.phone?</code>, <code class="language-plaintext highlighter-rouge">request.variant.tablet?</code> and so on.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="pass-name-of-the-wrapped-job-class-to-sidekiq-for-logging"><a href="https://github.com/rails/rails/pull/19482">Pass name of the wrapped job class to Sidekiq for logging</a></h3>

<p>If you were missing your job class in the Sidekiq logs and instead seeing some weird <code class="language-plaintext highlighter-rouge">ActiveJob::JobWrapper</code>, don’t worry. Now you will get your job class back in the logs because ActiveJob will pass the wrapped class name back to Sidekiq.</p>

<h3 id="use-actual-table-name-while-joining-tables-with-has_many-through"><a href="https://github.com/rails/rails/pull/19452">Use actual table name while joining tables with has_many :through</a></h3>

<p>Previously, while joining tables having <code class="language-plaintext highlighter-rouge">has_many :through</code> association, Active Record was not using the actual table name. It was generating wrong SQL and resulting into <code class="language-plaintext highlighter-rouge">ActiveRecord::InvalidStatement</code> error when used with calculation methods like <code class="language-plaintext highlighter-rouge">#count</code>. No need to worry, its fixed now!</p>

<h3 id="generate-fixture-file-with-singular-name-for-singular-tables"><a href="https://github.com/rails/rails/pull/19540">Generate fixture file with singular name for singular tables</a></h3>

<p>Previously if the table name was made singular using <code class="language-plaintext highlighter-rouge">ActiveRecord::Base.pluaralize_table_names = false</code>, name of the fixture file getting generated was still pluralized. No longer true! Get singular fixture file for singular table name now onwards.</p>

<h2 id="summer-opportunity">Summer Opportunity</h2>

<h3 id="rails-girls-summer-of-code"><a href="http://railsgirlssummerofcode.org/">Rails Girls Summer of Code</a></h3>

<p>Checkout <a href="http://railsgirlssummerofcode.org/">Rails Girls summer of code</a>. You can submit your <a href="http://railsgirlssummerofcode.org/guide/projects/">open source project</a> to be included. Also you can help <a href="http://railsgirlssummerofcode.org/campaign/">fund</a> the campaign.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/3/21/this-week-in-rails-4-2-1-4-1-10-new-test-runner-and-more/" rel="bookmark">This week in Rails: 4.2.1, 4.1.10, new test runner and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">vipulnsward</span></span>,
              <span class="published" title="2015-03-21 00:22:00 +0000">March 21, 2015 @ 12:22 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hello Everyone!</p>

<p>This is <a href="https://twitter.com/vipulnsward">Vipul</a> from Pune, where it’s the <a href="http://en.wikipedia.org/wiki/Gudi_Padwa">Gudi-Padwa – or the Marathi New Year</a>!
Surrounded by garlands of <a href="http://timesofindia.indiatimes.com/city/nagpur/Gathi-A-sweet-way-to-say-Happy-Holi/articleshow/19135712.cms">sweets</a>, lets head on to see, whats exciting this week.</p>

<p><em>P.S. Happy New Year!</em><br />
<em>P.P.S. Isn’t it a New Year, everyday somewhere around the World?</em></p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This week’s Rails contributors</a></h3>

<p>36 people contributed to make Rails awesome this week. If you haven’t already, go ahead and watch <a href="https://github.com/rails/rails/watchers">Rails on GitHub</a> to follow the discussions and find your first opprtunity to help out!</p>

<h3 id="rails-421-and-4110-have-been-released"><a href="http://weblog.rubyonrails.org/2015/3/19/Rails-4-2-1-and-4-1-10-have-been-released/">Rails 4.2.1 and 4.1.10 have been released!</a></h3>

<p>After four release candidates, Rails 4.2.1 and 4.1.10 have finally been released! Thanks to all the contributors, for tons of fixes. Check out the full changes for <a href="https://github.com/rails/rails/compare/v4.2.0...v4.2.1">4.2.1</a> and <a href="https://github.com/rails/rails/compare/v4.1.9...v4.1.10">4.1.10</a> respectively.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="binrails-test-runner"><a href="https://github.com/rails/rails/pull/19216"><code class="language-plaintext highlighter-rouge">bin/rails test</code> runner</a></h3>

<p>A new test runner – <code class="language-plaintext highlighter-rouge">bin/rails test</code> – has landed on master. This is the successor to the rake-based test runner, and includes a few rspec-inspired features that are not part of minitest, like running by line number, rerun snippets, or logs displayed with unicorns filled with rainbow colors.</p>

<h3 id="added-rake-initializers"><a href="https://github.com/rails/rails/pull/19323">Added <code class="language-plaintext highlighter-rouge">rake initializers</code></a></h3>

<p>Need to see all those initializers scattered in you application? Worry no more. Just run <code class="language-plaintext highlighter-rouge">rake initializers</code>! Did I mention they are sorted?</p>

<h2 id="improved">Improved</h2>

<h3 id="use-fullpath-from-rack-request"><a href="https://github.com/rails/rails/commit/0755d300170d1ef2f6d78f76d0126e962167be5a">Use fullpath from Rack request</a></h3>

<p>In Rack, <code class="language-plaintext highlighter-rouge">request#fullpath</code> returns the full path including the query string. This change uses <code class="language-plaintext highlighter-rouge">fullpath</code> from rack to avoid doing the same thing again in Rails. As a result, we also reduced some object allocations!</p>

<h2 id="fixed">Fixed</h2>

<h3 id="materialize-subqueries-by-adding-distinct-to-suport-mysql-576"><a href="https://github.com/rails/rails/pull/19359">Materialize subqueries by adding <code class="language-plaintext highlighter-rouge">DISTINCT</code> to suport MySQL 5.7.6+</a></h3>

<p>In MySQL 5.7.6+, the default value for <code class="language-plaintext highlighter-rouge">optimizer_switch</code> has changed to <code class="language-plaintext highlighter-rouge">derived_merge=on</code>, which causes some issue with the subqueries generated by Rails. This change fixes that by adding a <code class="language-plaintext highlighter-rouge">DISTINCT</code> to the subqueries.</p>

<h3 id="dont-cast-nil-to-string-in-postgres-enums"><a href="https://github.com/rails/rails/commit/1e6afa40209ca15aee811bb5797c175c0d8eaad4">Don’t cast nil to string in postgres enums</a></h3>

<p>Previously, <code class="language-plaintext highlighter-rouge">nil</code> values in PostgreSQL enums were casted to an empty string, which causes an error somewhere down the chain. But worry no more – this has now been fixed!</p>

<h2 id="summer-opportunities">Summer Opportunities</h2>

<h3 id="google-summer-of-code-2015"><a href="http://weblog.rubyonrails.org/2015/3/4/google-summer-of-code-2015/">Google Summer of Code 2015</a></h3>

<p>Are you a student, or know someone who would love to contribute to Rails? Our GSoC students application <a href="https://groups.google.com/forum/#!topic/rubyonrails-gsoc/e9l-HwzHtkY">is now open</a>! Check out <a href="https://github.com/railsgsoc/ideas/wiki/2015-Ideas">our ideas page</a> and join us on the <a href="https://groups.google.com/forum/#!forum/rubyonrails-gsoc">mailing list</a> for discussion.</p>

<h3 id="rails-girls-summer-of-code"><a href="http://railsgirlssummerofcode.org/blog/2015-applications-open/">Rails Girls Summer of Code</a></h3>

<p>Rails Girls Summer of Code is also accepting application! You can also consider <a href="http://railsgirlssummerofcode.org/guide/projects/">submiting your open-source project</a> to be included.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/3/14/this-week-in-rails-rc-releases-summer-opportunities-turbo-partials-and-more/" rel="bookmark">This week in Rails: RC releases, summer opportunities, turbo partials and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">huoxito</span></span>,
              <span class="published" title="2015-03-14 01:38:05 +0000">March 14, 2015 @  1:38 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi all! o/</p>

<p>Here is <a href="https://twitter.com/huoxito">Washington</a> bringing you this week’s news from our favorite framework. I hope you have made it to Friday the 13th without any major hiccups (I can’t say the same about my internet provider). Either way, it’s time to grab a drink, wind down and read on!</p>

<h2 id="featured">Featured</h2>

<h3 id="421rc4-and-4110rc4-have-been-released"><a href="http://weblog.rubyonrails.org/2015/3/12/Rails-4-2-1-rc4-and-4-1-10-rc4-have-been-released/">4.2.1.rc4 and 4.1.10.rc4 have been released</a></h3>

<p>Give them a try on your projects to help make the next release as rock solid as possible. Many regressions have already been fixed and the final release should be out on March 17.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This week’s Rails contributors</a></h3>

<p>Couple more developers made their first commit into Rails this week. Take a moment to review the <a href="https://github.com/rails/rails/issues">open issues</a>, perhaps you will find something related to your day job, manage to fix it and have your first patch in Rails!</p>

<h2 id="summer-opportunities">Summer Opportunities</h2>

<h3 id="google-summer-of-code-2015"><a href="http://weblog.rubyonrails.org/2015/3/4/google-summer-of-code-2015/">Google Summer of Code 2015</a></h3>

<p>It’s that time of the year again! As reported last week, we have been selected to participate in this year’s <a href="https://developers.google.com/open-source/soc/">Google Summer of Code program</a>. This week, a few more exciting ideas have landed on our <a href="https://github.com/railsgsoc/ideas/wiki/2015-Ideas">project page</a>!</p>

<p><a href="https://www.google-melange.com/gsoc/homepage/google/gsoc2015">Applications</a> will open next week, so please help spread the word!</p>

<h3 id="rails-girls-summer-of-code"><a href="http://railsgirlssummerofcode.org/blog/2015-applications-open/">Rails Girls Summer of Code</a></h3>

<p>Speaking of summer, <a href="http://railsgirlssummerofcode.org/">Rails Girls Summer of Code</a> have just opened their applications today. If your company can afford it, consider <a href="http://railsgirlssummerofcode.org/sponsors/">becoming a sponsor</a>!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="turbolinks-partial-replacement"><a href="https://github.com/rails/turbolinks/pull/468">Turbolinks partial replacement</a></h3>

<p>Mostly inspired by <a href="https://github.com/Shopify/turbograft">shopify/turbograft</a> turbolinks now also supports partial replacement. Checkout the <a href="https://github.com/rails/turbolinks/pull/475">PR with docs</a> as well for usage details.</p>

<h2 id="improved">Improved</h2>

<h3 id="all-rails-tests-run-in-random-order"><a href="https://github.com/rails/rails/pull/19221">All Rails tests run in random order</a></h3>

<p>As of this week Rails is giving another try on running tests in random order!!! You should probably try the same on all your projects for more reliable test results.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="rails-5-will-need-ruby-221-or-higher"><a href="https://github.com/rails/rails/commit/8ed0b89b">Rails 5 will need Ruby 2.2.1 or higher</a></h3>

<p>Apparently Ruby 2.2.0 kwargs were still not that stable. A <a href="https://bugs.ruby-lang.org/issues/10685">related issue</a> caused a segfault error on ActionPack tests. So Rails 5 will require at least Ruby 2.2.1.</p>

<h3 id="fix-rollback-of-frozen-records"><a href="https://github.com/rails/rails/pull/18200">Fix rollback of frozen records</a></h3>

<p>In case your project upgrade to Rails 4.2.0 raised any <a href="https://github.com/rails/rails/issues/18191">Can’t modify frozen hash</a> errors, checkout the latest release candidate. Chances are it will be fixed in Rails 4.2.1.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/3/7/this-week-in-rails-50-000-commits-gsoc-opportunity-and-more/" rel="bookmark">This week in Rails: 50,000 commits, GSoC opportunity and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2015-03-07 00:04:54 +0000">March 7, 2015 @ 12:04 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Ahoy there, rapscallion.</p>

<p>We’re just about to depart for our weekly voyage on the sea of Rails news - beware the great snark!</p>

<p>Captain <a href="https://twitter.com/kaspth">Kasper</a> abides seas and appeases gods in hopes we make it ashore.</p>

<p>Come aboard and let’s cast away.</p>

<h2 id="featured">Featured</h2>

<h3 id="rails-crossed-50000-commits"><a href="https://github.com/rails/rails/pull/19128">Rails crossed 50,000 commits</a></h3>

<p>Our backs are all red from the pats given when news broke of Rails having more than 50,000 commits.<br />
Adding to that chalupa 42 chummy contributors crossed the web and <a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">helped out</a>.</p>

<h3 id="10-years-of-rails-with-dhh"><a href="http://thechangelog.com/145/">10+ Years of Rails with DHH</a></h3>

<p>Listen in as David takes a trip down memory lane. Hear why he made Rails and get some stories on the early days of Rails contributing. He also has some thoughts about money and open source. It might not be such a good thing to get paid to work on open source, after all.</p>

<h3 id="rails--google-summer-of-code-2015"><a href="http://weblog.rubyonrails.org/2015/3/4/google-summer-of-code-2015/">Rails &amp; Google Summer of Code 2015</a></h3>

<p>Speaking of being paid for open source, Rails will be part of this year’s GSoC. I was a student two years ago and wouldn’t be here without it.</p>

<p>I highly recommend doing your <a href="https://groups.google.com/forum/#!topic/rubyonrails-gsoc/TR5EUPpWLck">research</a>. Submit an honest <a href="https://github.com/kaspth/gsoc-application">proposal</a> and you just might <a href="http://weblog.rubyonrails.org/2013/5/27/rails-google-summer-of-code-projects/">make it</a>.</p>

<h2 id="seagulls-of-the-sea">Seagulls of the Sea</h2>

<h3 id="damn-winged-creatures-in-my-newsletter"><a href="https://www.google.dk/search?q=seagull&amp;biw=1147&amp;bih=741&amp;tbm=isch&amp;source=lnt&amp;tbs=isz:ex,iszw:120,iszh:120#tbm=isch&amp;q=seagulls+on+the+sea&amp;imgdii=_">Damn Winged Creatures in my Newsletter</a></h3>

<p>There we were. Having a nice day on the deck and a seagull wants to join in on the fun of staring at peaceful waters. Not on my watch.</p>

<p><em>waves broom</em></p>

<p>Return to the sea, beast!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="added-restart-rake-task"><a href="https://github.com/rails/rails/pull/18965">Added restart rake task</a></h3>

<p>Rails 5 brings a restart Dr. Frankenstein would be envious of. The new rake restart command will knock your app out cold and zap it back to life.</p>

<h3 id="enumerablewithout"><a href="https://github.com/rails/rails/pull/19157">Enumerable#without</a></h3>

<p>We also got a new Enumerable method to quickly rid of us stuff harmful to humans: <code class="language-plaintext highlighter-rouge">[:whooping_cough, :vaccine, :measles].without(:vaccine)</code>.</p>

<p>Finally, we can <a href="https://twitter.com/dhh/status/511909639274123264">sleep easy</a>.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/2/28/this-week-in-rails-this-week-in-rails/" rel="bookmark">This week in Rails</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2015-02-28 01:56:33 +0000">February 28, 2015 @  1:56 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Another week went by and here we are again, this is <a href="https://github.com/gregmolnar">Greg</a> with the latest news from the Rails community.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This Week’s Contributors</a></h3>

<p>36 amazing people helped to make Rails even better this week! Thanks everyone!</p>

<h3 id="interview-with-carlos-antonio-and-rafael-frança"><a href="http://podcast.rubyindia.org/rubyindia/8">Interview with Carlos Antonio and Rafael França</a></h3>

<p>Interview with Rails Core team members about early days of their Rails contribution, Rails team, Brazil Rails community, their day to day tools of choice and workflow, and how everyone can help out with Rails.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="default-belongs_to-validation"><a href="https://github.com/rails/rails/pull/18937">Default belongs_to validation</a></h3>

<p><code class="language-plaintext highlighter-rouge">belongs_to</code> relations will now trigger a validation error by default if the association is not present.
If you wish, you can turn this off with the <code class="language-plaintext highlighter-rouge">optional: true</code> option per association.</p>

<h3 id="move-the-validate-method-to-activemodelvalidations"><a href="https://github.com/rails/rails/pull/19018">Move the validate! method to ActiveModel::Validations</a></h3>

<p><code class="language-plaintext highlighter-rouge">validate!</code> was part of Active Record, but with this commit you can use it on any Active Model object!</p>

<h3 id="allow-limit-option-for-mysql-bigint-primary-keys"><a href="https://github.com/rails/rails/pull/17631">Allow limit option for MySQL bigint primary keys</a></h3>

<p>From now on, you can set a <code class="language-plaintext highlighter-rouge">limit</code> for your <code class="language-plaintext highlighter-rouge">bigint</code> type primary keys in MySQL.</p>

<h2 id="improved">Improved</h2>

<h3 id="faster-template-partial-caching"><a href="https://github.com/rails/rails/pull/18948">Faster template partial caching</a></h3>

<p>Collections automatically use a <code class="language-plaintext highlighter-rouge">read_multi</code> for partials starting with a cache call from now on, which makes them faster.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fixed-activemodelmodel_nameto_json"><a href="https://github.com/rails/rails/pull/19055">Fixed ActiveModel.model_name.to_json</a></h3>

<p>Previously, calling <code class="language-plaintext highlighter-rouge">User.model_name.to_json</code> would result in an infinite recursion, because <code class="language-plaintext highlighter-rouge">.model_name</code> inherited <code class="language-plaintext highlighter-rouge">.as_json</code> from Object.
This commit delegates <code class="language-plaintext highlighter-rouge">as_json</code> to the correct handler to fix that.</p>

<h3 id="fixed-mysqls-schemarb-dumper"><a href="https://github.com/rails/rails/pull/19066">Fixed mysql’s schema.rb dumper</a></h3>

<p>MySQL doesn’t have a <code class="language-plaintext highlighter-rouge">boolean</code> datatype, it uses a <code class="language-plaintext highlighter-rouge">tinyint</code> with a <code class="language-plaintext highlighter-rouge">limit</code> option, so if we dumped the schema from MySQL we couldn’t load it to Postgres since <code class="language-plaintext highlighter-rouge">limit</code> is invalid for Postgres booleans. This patch fixes that by not adding the <code class="language-plaintext highlighter-rouge">limit</code> to <code class="language-plaintext highlighter-rouge">schema.rb</code>.</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="skip_action_callback-is-deprecated"><a href="https://github.com/rails/rails/pull/19060">skip_action_callback is deprecated</a></h3>

<p>In future <code class="language-plaintext highlighter-rouge">skip_before_action</code>, <code class="language-plaintext highlighter-rouge">skip_after_action</code> and <code class="language-plaintext highlighter-rouge">skip_around_action</code> will raise an <code class="language-plaintext highlighter-rouge">ArgumentError</code> if the callback doesn’t exist, so using <code class="language-plaintext highlighter-rouge">skip_action_callback</code>, which calls all three methods will probably fail, therefore it became deprecated.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="richard-schneeman-is-a-rails-committer"><a href="https://twitter.com/rails/status/570714059819122688">Richard Schneeman is a Rails Committer!</a></h3>

<p>Please welcome our newest Rails Committer <a href="https://github.com/schneems">@schneems</a>!</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/2/20/this-week-in-rails-http_cache_forever-ar-base-suppress-and-more/" rel="bookmark">This week in Rails: http_cache_forever, AR::Base.suppress and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2015-02-20 23:37:56 +0000">February 20, 2015 @ 11:37 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>My Valentine’s Day letter to Ruby on Rails:</p>

<p>“Dear Rails, remember the first time we met?<br />
You were just 1.2, and I was in an unhealthy relationship with Perl and PHP.</p>

<p>I saw you in the library and I immediately fell in love.<br />
For seven years, you made my code more readable and my skills stronger.</p>

<p>You are the most beautiful framework and always will be.<br />
I cannot wait to see you turn 5.0.” – <a href="http://github.com/claudiob">Claudio</a></p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This Week’s Contributors</a></h3>

<p>Apparently I’m not the only one in love with Ruby on Rails. 36 programmers contributed to Rails this week, 10 of them for the first time. Keep loving!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="add-http_cache_forever-to-actioncontroller"><a href="https://github.com/rails/rails/pull/18394">Add http_cache_forever to ActionController</a></h3>

<p>The new method is perfect to cache results that are meant to never expire, such as static pages.</p>

<h3 id="add-activerecordtyperegister"><a href="https://github.com/rails/rails/commit/82d12eb9045cba57172ec7cc0786d0f72a8b711f">Add ActiveRecord::Type.register</a></h3>

<p>You can now reference with a symbol any database type that is specific to your adapter, such as:<br />
<code class="language-plaintext highlighter-rouge">ActiveRecord::Type.register(:money, MyMoneyType)</code></p>

<h3 id="add-activerecordbasesuppress"><a href="https://github.com/rails/rails/pull/18910">Add ActiveRecord::Base.suppress</a></h3>

<p>Wrapping a block with <code class="language-plaintext highlighter-rouge">suppress</code> will prevent any save operation from hitting the database. Check the PR for a real-world example.</p>

<h2 id="improved">Improved</h2>

<h3 id="add-time-option-to-activerecordbasetouch"><a href="https://github.com/rails/rails/pull/18956">Add :time option to ActiveRecord::Base.touch</a></h3>

<p>You can now <em>touch</em> an ActiveRecord instance with a different time than the current time.</p>

<h2 id="removed">Removed</h2>

<h3 id="removed-recordtaghelper"><a href="https://github.com/rails/rails/pull/18411">Removed RecordTagHelper</a></h3>

<p>The helpers <code class="language-plaintext highlighter-rouge">div_for</code> and <code class="language-plaintext highlighter-rouge">content_tag_for</code> will be gone in Rails 5. Grab the <a href="https://github.com/rails/record_tag_helper">record_tag_helper</a> gem if you still need them!</p>

<h3 id="removed-activemodelerrors-getterssetters"><a href="https://github.com/rails/rails/pull/18634">Removed ActiveModel::Errors getters/setters</a></h3>

<p>If you ever used <code class="language-plaintext highlighter-rouge">person.errors.get(:name)</code> <del>or <code class="language-plaintext highlighter-rouge">person.errors[:name]</code></del> to read an error message, you should now <del>switch to <code class="language-plaintext highlighter-rouge">person.errors.messages[:name]</code></del>. <code class="language-plaintext highlighter-rouge">add_on_empty</code> and <code class="language-plaintext highlighter-rouge">add_on_blank</code> are <a href="https://github.com/rails/rails/pull/18996">gone too</a>.</p>

<p><strong>Update</strong>: you <a href="https://github.com/rails/rails/commit/f55bfe726045594c78438841cdccd5843522deab">should be using <code class="language-plaintext highlighter-rouge">person.errors[:name]</code></a> after all! Use <code class="language-plaintext highlighter-rouge">person.errors.add(:name, ...)</code> to append.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/2/14/this-week-in-rails-speedy-integration-tests-enum-queries-and-more/" rel="bookmark">This week in Rails: Speedy Integration Tests, Enum Queries and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2015-02-14 01:00:00 +0000">February 14, 2015 @  1:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Dearest darling, reindeer-eyed reader</p>

<p>Hither summoned is <a href="https://twitter.com/kaspth">Kasper</a>, Duke of Friendly Ghosts, to bring forth thy worthy commits and Pull Requests of <a href="https://github.com/rails/rails">Rails</a> as subscribed.</p>

<p>Thusly commences our journey on this Friday the 13th - Ok, I’m sick of writing like that.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This Week’s Contributors</a></h3>

<p>A round of applause goes to this weeks contributors from all of us at this virtual news desk. We editors did a full on spit take when realizing a whopping 28 people contributed. Nothing seals that memory quite like the scalding coffee on our thighs.</p>

<h3 id="integration-tests-only-12-slower-than-controller-tests"><a href="https://github.com/rails/rails/commit/0acd4a57768fc3c7e758f9f4b26563797f43e7ef">Integration Tests Only 12% Slower than Controller Tests</a></h3>

<p>You may have thought Speed was just a movie. But we’re feeling it this week as our world got rocked with a refactoring bringing integrations’ speed closer to functionals. Stay at the edge of your seats for the <a href="https://twitter.com/tenderlove/status/566043497866616832">sequel</a>.</p>

<h2 id="improved">Improved</h2>

<h3 id="make-enums-queryable-by-label"><a href="https://github.com/rails/rails/commit/c51f9b61ce1e167f5f58f07441adcfa117694301">Make enums queryable by label</a></h3>

<p>After an <a href="https://github.com/rails/rails/commit/70ac072976c8cc6f013f0df3777e54ccae3f4f8c">amazing refactoring job</a> on Active Record internals that took many months, this change was easy. Enums can now be queried by their labels. <code class="language-plaintext highlighter-rouge">Post.where(status: Post.statuses[:draft])</code> is out in favor of <code class="language-plaintext highlighter-rouge">Post.where(status: :draft)</code>.</p>

<h3 id="fresh_when-and-stale-accepts-a-collection"><a href="https://github.com/rails/rails/pull/18374"><code class="language-plaintext highlighter-rouge">fresh_when</code> and <code class="language-plaintext highlighter-rouge">stale?</code> accepts a collection</a></h3>

<p>They say that <code class="language-plaintext highlighter-rouge">stale?</code> is everyone’s best friend. It will be by you until you get to <code class="language-plaintext highlighter-rouge">fresh_when</code>. Even if you need help when a collection seems impassable. Look around, <a href="https://www.youtube.com/watch?v=cHL62JmVku4#t=33s">you dingus</a>, your best friends are adaptable.</p>

<p>There’s usage examples on the Pull Request.</p>

<h3 id="find_in_batches-got-an-end_at-option"><a href="https://github.com/rails/rails/pull/12257"><code class="language-plaintext highlighter-rouge">find_in_batches</code> got an <code class="language-plaintext highlighter-rouge">end_at</code> option</a></h3>

<p>Sometimes you gotta know when the fun oughta stop. Sadly <code class="language-plaintext highlighter-rouge">find_in_batches</code> and <code class="language-plaintext highlighter-rouge">find_each</code> would keep going like the party animals they are. Or were, as both matured this week with a new <code class="language-plaintext highlighter-rouge">end_at</code> option. But they’re still keeping it plenty rad in their parents basement if anybody asks.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="kasper-timm-hansen-is-an-issues-team-member"><a href="https://github.com/kaspth">Kasper Timm Hansen is an issues team member</a></h3>

<p>Kasper first impressed us when he shipped his 2013 Rails GSoC project in 2014. In his spare time he writes a newsletter called This Week in Rails. In fact he wrote this very issue. Aw shucks, I thought there was something familiar about me and I!</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>This was a weird one, right? Hopefully of the glorious kind.</p>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails/commits/master">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/2/7/This-week-in-Rails/" rel="bookmark">This week in Rails: locate_many, emoji partials and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">huoxito</span></span>,
              <span class="published" title="2015-02-07 00:10:49 +0000">February 7, 2015 @ 12:10 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hey there!</p>

<p>Newsletter team is back to your inbox delivering all latest good commits and pull requests from <a href="https://github.com/rails/rails">Rails</a>. Hopefully you have your favorite drink right there with you to make this quick reading ever better.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This week’s Rails contributors</a></h3>

<p>Over 25 people contributed to Rails this week alone. Perhaps by our next newsletter your name could be on that list too!</p>

<h2 id="improved">Improved</h2>

<h3 id="efficient-lookup-for-many-models-in-global-id"><a href="https://github.com/rails/globalid/commit/ab5f975fefa62054b3acd4845d77fac60f5bc213">Efficient lookup for many models in Global ID</a></h3>

<p>Latest version of Global ID 0.3.2 brings better look up for models. You can pass an array of ids to <code class="language-plaintext highlighter-rouge">locate_many</code> to fetch records only once per model. Check out the juicy comments of Core Team members figuring out their own API.</p>

<h3 id="partial-names-dont-have-to-be-valid-ruby-identifiers"><a href="https://github.com/rails/rails/commit/da9038eaa5d19c77c734a044c6b35d7bfac01104">Partial names don’t have to be valid Ruby identifiers</a></h3>

<p>Rails master can render partial names like <code class="language-plaintext highlighter-rouge">_the-friday-party.html.erb</code> just fine now as well. If you are feeling extra adventurous, you might even try naming your partials with <a href="https://github.com/amatsuda/rails/commit/039980478074c42a1cff88df0c16e75a4fb8825c#diff-3">emojis</a>!</p>

<h3 id="perform_enqueued_jobs-can-filter-jobs-by-type"><a href="https://github.com/rails/rails/pull/18833"><code class="language-plaintext highlighter-rouge">perform_enqueued_jobs</code> can filter jobs by type</a></h3>

<p>By passing a <code class="language-plaintext highlighter-rouge">only</code> option you are able to test only those particular jobs while any other inside the block won’t be performed. Checkout the changelog entry introduced for a crystal clear example usage.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="child-record-validation-respects-validate-false-on-parents"><a href="https://github.com/rails/rails/pull/18612">Child record validation respects <code class="language-plaintext highlighter-rouge">validate: false</code> on parents</a></h3>

<p>Took a few years but this is fixed! Persisting child records will respect the current validation state of the parent record. Also good to see how the team is worrying about performance penalties for fixes in ActiveRecord core logic.</p>

<h2 id="removed">Removed</h2>

<h3 id="dropping-xhr-helper-to-simplify-actestcase"><a href="https://github.com/rails/rails/pull/18771">Dropping <code class="language-plaintext highlighter-rouge">xhr</code> helper to simplify AC::TestCase</a></h3>

<p>You will need to update your test suites in case they use either <code class="language-plaintext highlighter-rouge">xhr</code> or <code class="language-plaintext highlighter-rouge">xml_http_request</code> test helpers. Instead switch to the regular <code class="language-plaintext highlighter-rouge">get</code> and pass the keyword argument <code class="language-plaintext highlighter-rouge">xhr: true</code></p>

<h3 id="farewell-rails-built-in-documentation-tasks"><a href="https://github.com/rails/rails/commit/cd7cc5254b090ccbb84dcee4408a5acede25ef2a">Farewell Rails built in documentation tasks</a></h3>

<p>Now comes a goodbye to a few friends most of us never knew we had: the documentation rake tasks. The three siblings <code class="language-plaintext highlighter-rouge">doc:app</code>, <code class="language-plaintext highlighter-rouge">doc:rails</code> and little <code class="language-plaintext highlighter-rouge">doc:guides</code> joins local documentation in a better place - online. Our thoughts are with the remaining rake tasks. Rest In Protocols.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="eileen-m-uchitelle-is-a-rails-committer"><a href="https://twitter.com/rails/status/562300100169728001">Eileen M. Uchitelle is a Rails Committer</a></h3>

<p><a href="https://twitter.com/eileencodes">Eileen</a> has been doing <a href="https://github.com/rails/rails/commits/master?author=eileencodes">awesome work</a> on Active Record related to performance refactoring and bug fixes besides mentoring some students in the <a href="https://www.facebook.com/OpenAcademyProgram">Facebook Open Academy</a> program.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/1/31/This-week-in-Rails-Relation-or-file-fixtures-kwargs-and-more/" rel="bookmark">This week in Rails: Relation#or, file fixtures, kwargs and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">gregmolnar</span></span>,
              <span class="published" title="2015-01-31 02:13:16 +0000">January 31, 2015 @  2:13 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>It is that time of the week again!</p>

<p>This is <a href="https://github.com/gregmolnar">Greg</a>, bringing you this week’s interesting commits and pull requests from <a href="https://github.com/rails/rails">Rails</a>.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This week’s Rails contributors</a></h3>

<p>Let’s start with a big thank you for all the people who helped this week to make Rails better!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="added-or-to-activerecordrelation"><a href="https://github.com/rails/rails/pull/16052">Added #or to ActiveRecord::Relation</a></h3>

<p>A long waited feature is added to Active Record and from now on you can combine two Active Record relations with the <code class="language-plaintext highlighter-rouge">or</code> operator.</p>

<h3 id="activesupporttestingfilefixtures"><a href="https://github.com/rails/rails/pull/18658">ActiveSupport::Testing::FileFixtures</a></h3>

<p>With this addition to <code class="language-plaintext highlighter-rouge">ActiveSupport::Testing</code> there is no need to write custom helpers for testing features requiring a sample file (i.e. file uploads).</p>

<h3 id="use-kwargs-in-the-tests-http-methods"><a href="https://github.com/rails/rails/pull/18323">Use kwargs in the test’s HTTP methods</a></h3>

<p>Support for keyword arguments is added to the HTTP methods of the controller tests. An example of the new syntax:</p>

<div class="language-ruby highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="n">post</span> <span class="ss">:create</span><span class="p">,</span> <span class="ss">params: </span><span class="p">{</span> <span class="ss">y: </span><span class="n">x</span> <span class="p">},</span> <span class="ss">format: :json</span>
</code></pre></div></div>

<h2 id="improved">Improved</h2>

<h3 id="improved-performance-of-integration-tests"><a href="https://github.com/rails/rails/commit/1fb9e6eff71eb84b6cb620282c15b7b89d8e70c1">Improved performance of integration tests</a></h3>

<p><code class="language-plaintext highlighter-rouge">delegate</code> turned out to be a bottleneck at the URL generation in the integration tests. With this patch the integration tests of the applications should have a speedup.</p>

<h3 id="allow-hyphenated-names-for-plugins"><a href="https://github.com/rails/rails/pull/13601">Allow hyphenated names for plugins</a></h3>

<p>From now on you can generate a Rails plugin with a hyphenated name (i.e. namespaced engines).</p>

<h2 id="deprecated">Deprecated</h2>

<h3 id="_via_redirect-integration-test-methods-are-deprecated"><a href="https://github.com/rails/rails/pull/18693">*_via_redirect integration test methods are deprecated</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">*_via_redirect</code> methods are deprecated but do not fear, you can use <code class="language-plaintext highlighter-rouge">follow_redirect!</code> in your test suite for the same behaviour.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="fixed-http-basic-authentication-nil-issue"><a href="https://github.com/rails/rails/pull/18666">Fixed HTTP basic authentication nil issue</a></h3>

<p>When <code class="language-plaintext highlighter-rouge">request.authorization</code> returned <code class="language-plaintext highlighter-rouge">nil</code>, Rails raised a <code class="language-plaintext highlighter-rouge">NoMethodError</code>, but this is fixed now.</p>

<h3 id="arrelationgroup-accepts-sql-reserved-keywords"><a href="https://github.com/rails/rails/pull/18722">AR::Relation#group accepts SQL reserved keywords</a></h3>

<p>This patch allows you to group by SQL reserved keywords with the <code class="language-plaintext highlighter-rouge">group</code> method of Active Record.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="arthur-nogueira-neves-is-a-rails-committer"><a href="https://twitter.com/rails/status/561240742199586816">Arthur Nogueira Neves is a Rails Committer</a></h3>

<p>Please welcome our newest Rails Committer!</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>

<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/1/24/This-week-in-Rails/" rel="bookmark">This week in Rails: model error details, drop table if exists and more!</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">claudiob</span></span>,
              <span class="published" title="2015-01-24 01:01:58 +0000">January 24, 2015 @  1:01 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>It’s Friday! Gotta get down on This Week in Rails!</p>

<p>This is <a href="http://claudiob.github.io">Claudio</a>, rushing to get you the weekly updates on interesting commits and pull requests from <a href="https://github.com/rails/rails">Rails</a>.</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This week’s Rails contributors</a></h3>

<p>25 contributors helped Rails become a better framework. Keep the patches coming, and Rails 5 will be ready before you know it.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="activemodelerrorsdetails"><a href="https://github.com/rails/rails/pull/18322">ActiveModel::Errors#details</a></h3>

<p>Given a user without an email, <code class="language-plaintext highlighter-rouge">user.errors.details</code> will return <code class="language-plaintext highlighter-rouge">{email: [{error: :blank}]}</code>. In some cases, this is more useful than the message <code class="language-plaintext highlighter-rouge">{email: ["can't be blank"]}</code> provided by <code class="language-plaintext highlighter-rouge">user.errors.messages</code>.<br />
There’s a good usage example <a href="https://cowbell-labs.com/2015-01-22-active-model-errors-details.html">in this blog post</a>.</p>

<h3 id="if_exists-option-for-drop_table"><a href="https://github.com/rails/rails/pull/16366">:if_exists option for drop_table</a></h3>

<p>Writing <code class="language-plaintext highlighter-rouge">drop_table(:users, if_exists: true)</code> in a migration ensures that the migration will run without exceptions, whether or not the “users” table exists.</p>

<h3 id="actioncontrollerrenderer"><a href="https://github.com/rails/rails/pull/18546">ActionController::Renderer</a></h3>

<p>The <code class="language-plaintext highlighter-rouge">ActionController::Base#render</code> method can now output a template anywhere, even outside of a controller!</p>

<h3 id="activerecordbaseaccessed_fields"><a href="https://github.com/rails/rails/commit/be9b680">ActiveRecord::Base#accessed_fields</a></h3>

<p>Calling <code class="language-plaintext highlighter-rouge">@users = User.all</code> to list all users works, but you can get better performance by indicating the exact fields you intend to access, for instance with <code class="language-plaintext highlighter-rouge">@users = User.select(:name, :email)</code>.</p>

<p>The new <code class="language-plaintext highlighter-rouge">@users.accessed_fields</code> method will give you the list of fields accessed from the model, so you can easily optimize your queries using <code class="language-plaintext highlighter-rouge">.select</code> rather than <code class="language-plaintext highlighter-rouge">.all</code>.</p>

<h2 id="improved">Improved</h2>

<h3 id="speed-up-actioncontrollerrenderer"><a href="https://github.com/rails/rails/pull/18643">Speed up ActionController::Renderer</a></h3>

<p>Everyone loves a pull request that speeds up Rails,
especially if the performance gain is documented and verifiable.<br />
When in doubt, always use <a href="https://github.com/evanphx/benchmark-ips">benchmark/ips</a> to provide benchmark results for comparison.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="https://rails-weekly.ongoodbits.com">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/1/16/This-week-in-Rails-tokens-migrations-method-source-and-more/" rel="bookmark">This week in Rails: tokens migrations, method_source and more</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">kaspth</span></span>,
              <span class="published" title="2015-01-16 22:30:42 +0000">January 16, 2015 @ 10:30 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Live from our servers, it’s This Week in Rails!</p>

<p>As always we’re your inside scoop of interesting commits, pull requests and more from <a href="https://github.com/rails/rails">Rails</a>.</p>

<p>This is <a href="https://twitter.com/kaspth">Kasper</a>, and I’m ready to serve you this scoop. I tapped keys on the board in front of me to make words appear. It’s quite the tapestry.</p>

<p>Let’s get to it!</p>

<h2 id="featured">Featured</h2>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This week’s Rails contributors</a></h3>

<p>33 contributors made this week happen. Pull Requests were merged, new friendships were made… I think I even heard someone say they saw a cat online. That’s a rare sight, and part of what made this week special. Thanks everyone!</p>

<h3 id="tokens-in-migrations-and-model-generators"><a href="https://github.com/rails/rails/pull/18448">Tokens in migrations and model generators</a></h3>

<p>As a follow up to last week’s <code class="language-plaintext highlighter-rouge">has_secure_token</code>, both the migration and model generators can create <code class="language-plaintext highlighter-rouge">token</code> attributes.<br />
<code class="language-plaintext highlighter-rouge">rails g migration add_auth_token_to_users auth_token:token</code>. <code class="language-plaintext highlighter-rouge">rails g model user auth_token:token</code>.<br />
The model generator automatically adds <code class="language-plaintext highlighter-rouge">has_secure_token :auth_token</code> to your new model file.</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="method_source-added-to-the-default-gemfile"><a href="https://github.com/rails/rails/commit/0b2e0528df36bcef4aca62b86f55e1ea85604cd8"><code class="language-plaintext highlighter-rouge">method_source</code> added to the default Gemfile</a></h3>

<p>On Rails 5 when you generate a new app, you’ll find ‘method_source’ in your Gemfile. This gem extends the <code class="language-plaintext highlighter-rouge">Method</code> class with <code class="language-plaintext highlighter-rouge">source</code> and <code class="language-plaintext highlighter-rouge">comment</code> methods to aid your debugging. There’s a good usage example in <a href="https://github.com/rails/rails/issues/18473#issuecomment-69682891">this comment</a>.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="allow-1-or-true-for-acceptance-validation"><a href="https://github.com/rails/rails/pull/18439">Allow ‘1’ or true for acceptance validation</a></h3>

<p>Previously <code class="language-plaintext highlighter-rouge">validates_acceptance_of</code> would only accept ‘1’ as a valid attribute value. Now you can assign <code class="language-plaintext highlighter-rouge">true</code> to an attribute and the validation will pass.</p>

<h3 id="time-columns-will-be-aware-of-application-time-zone"><a href="https://github.com/rails/rails/pull/15726">Time columns will be aware of application time zone</a></h3>

<p>In Rails 5.1 your time columns will adhere to the time zone of your Rails application. To make the upgrade path smoother, the <code class="language-plaintext highlighter-rouge">config.active_record.time_zone_aware_types</code> option has been added. See the deprecation warning <a href="https://github.com/rails/rails/blob/5cd3bbbb832b58d2a0092f527d83312df4271de7/activerecord/lib/active_record/attribute_methods/time_zone_conversion.rb#L74-L86">here</a> for help.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="validation-callbacks-tested-with-contexts"><a href="https://github.com/rails/rails/pull/18454">Validation callbacks tested with contexts</a></h3>

<p>A feature you might not have heard about is validation contexts, which allow you to specify a context a callback should only be run for. Like this: <code class="language-plaintext highlighter-rouge">before_validation callback, on: :create</code>. The link shows a few tests being for this on <code class="language-plaintext highlighter-rouge">before/after_validation</code>. <a href="https://gist.github.com/dhh/9672827">Here</a> is a more advanced example.</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="http://rails-weekly.goodbits.io">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>


        <article>
          <header>
            <h2>
              <a href="/2015/1/10/This-week-in-Rails/" rel="bookmark">This week in Rails: a new beginning</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">chancancode</span></span>,
              <span class="published" title="2015-01-10 02:00:00 +0000">January 10, 2015 @  2:00 am</span>
              
                <span class="categories">in
              
              
                  <a href="/news/" rel="category tag">News</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Happy New Year, everyone!</p>

<p>It was only less than a year ago when I sent the <a href="http://us3.campaign-archive1.com/?u=2721e27ce456363785acc5405&amp;id=d1b48a0b9d">first issue</a> of
<a href="http://rails-weekly.goodbits.io"><em>This week in Rails</em></a> to a total of 14 recipients, discussing some
of the latest and greatest additions to the Rails codebase.</p>

<p>43 weeks later, this little hobby project has <a href="http://brewhouse.io/blog/2014/04/24/this-week-in-rails-the-backstory.html">evolved</a> into a true
community effort –- we have assembled an <a href="https://twitter.com/kaspth">amazing</a> <a href="https://twitter.com/gregmolnar">team</a> of
<a href="https://twitter.com/huoxito">editors</a> and other volunteers (<a href="mailto:godfrey@brewhouse.io">join us!</a>), keeping
2000 subscribers in the loop and highlighting some key contributions to our
beloved web framework every week.</p>

<p>I am incredibly excited to announce that starting this week, we will be cross-
posting the content from the newsletter to the <a href="http://weblog.rubyonrails.org">Riding Rails blog</a>. With
this, we hope to reach even more members of our wonderful community, increase
transparency, involve more of you in the decision-making processes and maybe
even inspire some future contributors!</p>

<p>I would like to thank my team at <a href="http://brewhouse.io">Brewhouse</a> and <a href="http://goodbits.io">Goodbits</a>
for supporting the project and getting it off the ground, as well as all the
volunteers who helped along the way. Of course, huge thank you to all of the
<a href="http://contributors.rubyonrails.org">Rails contributors</a> who did all the hard work! &lt;3 &lt;3 &lt;3</p>

<p>Without further ado, here is the first 2015 issue of <em>This week in Rails</em>!</p>

<hr />

<p>Welcome to <em>This week in Rails</em>, your weekly inside scoop of interesting commits, pull requests and more from <a href="https://github.com/rails/rails">Rails</a>.</p>

<p>Hi there this is <a href="https://twitter.com/huoxito">Washington</a> again!</p>

<p>Hope you all had the most gorgeous holidays ever doing things you love the most. The newsletter team is back to work and you should receive your Rails weekly news as usual. Here are some of the latest and greatest improvements, fixes and releases during the break.</p>

<h2 id="featured">Featured</h2>

<h3 id="ruby-220-released"><a href="https://www.ruby-lang.org/en/news/2014/12/25/ruby-2-2-0-released/">Ruby 2.2.0 Released</a></h3>

<p>YAY! December 25th saw another important Ruby release. See the blog post for all the goodies in this new version and keep in mind Rails 5 will target Ruby 2.2+ exclusively. As of this week, Rails’ master branch will only work on Ruby 2.2 or above.</p>

<h3 id="rails-4013-and-419-have-been-released"><a href="http://weblog.rubyonrails.org/2015/1/6/Rails-4-1-9-and-4-0-13-have-been-released/">Rails 4.0.13 and 4.1.9 have been released!</a></h3>

<p>4.0.13 is last planned release for the 4.0 release series, so you should migrate off it as soon as possible. From here on, the 4.1 (you can thank <a href="https://github.com/rafaelfranca">Rafael</a>) and 4.2 release series will continue to receive regular bug fixes. Consult the <a href="http://guides.rubyonrails.org/maintenance_policy.html">maintenance policy</a> for details.</p>

<h3 id="this-weeks-rails-contributors"><a href="http://contributors.rubyonrails.org/contributors/in-time-window/this-week">This week’s Rails Contributors</a></h3>

<p>Apparently holidays is no excuse for going to the beach all day long and having drinks away from computers. Rails community kept working hard during the break to keep improving the framework we appreciate so much. Thank you all!</p>

<h2 id="new-stuff">New Stuff</h2>

<h3 id="halting-callback-chains-by-throwing-abort"><a href="https://github.com/rails/rails/pull/17227">Halting callback chains by throwing :abort</a></h3>

<p>As of Rails 5 callback chains won’t be halted by returning <code class="language-plaintext highlighter-rouge">false</code>. Instead you should explicitly <code class="language-plaintext highlighter-rouge">throw :abort</code>. This will help keep things consistent among all frameworks included in Rails and avoid accidental halting caused by unexpected <code class="language-plaintext highlighter-rouge">false</code> return values.</p>

<h3 id="new-date-helper"><a href="https://github.com/rails/rails/pull/18335">New date helper</a></h3>

<p>Working with days and weeks just got a bit easier. Keep in mind these new helpers <code class="language-plaintext highlighter-rouge">on_weekend?</code>, <code class="language-plaintext highlighter-rouge">next_weekday</code>, <code class="language-plaintext highlighter-rouge">prev_weekday</code>, <code class="language-plaintext highlighter-rouge">next_day</code>, <code class="language-plaintext highlighter-rouge">prev_day</code>. Perhaps you had even implemented them before yourself! Good thing Rails will have them out of the box now :)</p>

<h3 id="has_secure_token-in-active-record"><a href="https://github.com/rails/rails/pull/18217"><code class="language-plaintext highlighter-rouge">has_secure_token</code> in Active Record</a></h3>

<p>Rails will ship with a new Active Record macro for generating <a href="https://github.com/rails/rails/pull/18347">base 58</a> tokens out of the box. There’s probably a large amount of applications already using this feature. As of the next major release you won’t need to add another dependency or implement it yourself.</p>

<h2 id="fixed">Fixed</h2>

<h3 id="more-conventional-filenames-for-mailers"><a href="https://github.com/rails/rails/pull/18074">More conventional filenames for mailers</a></h3>

<p>Mailer generators now appends the <code class="language-plaintext highlighter-rouge">_mailer</code> suffix in the filename just like controller and jobs generators.</p>

<h3 id="rails-50-deprecations-clean-up"><a href="https://github.com/rails/rails/pull/18325">Rails 5.0 deprecations clean up</a></h3>

<p>This week Rails got some more love with this major clean up (339 additions and 1,433 deletions) on its master branch. There’s still some deprecations left though as the team figures how to best address them.</p>

<h2 id="one-more-thing">One More Thing™</h2>

<h3 id="automatic-type-casting-deprecated-in-arel"><a href="https://twitter.com/sgrif/status/548645759856300033">Automatic type casting deprecated in Arel</a></h3>

<p>Watch out library authors! Sean Griffin put a lot of effort into improving Arel extensibility. Please get in touch with him if you need APIs to help your use case. (See also these <a href="https://github.com/rails/arel/commit/6160bfbda1d1781c3b08a33ec4955f170e95be11">follow-up</a> <a href="https://github.com/rails/rails/compare/266ff700011d...f916aa247bdd">commits</a>.)</p>

<h2 id="wrapping-up">Wrapping up</h2>

<p>That’s all for <em>This week in Rails</em>. As always, there are more changes than we have room to cover here, but feel free to <a href="https://github.com/rails/rails">check them out</a> yourself!</p>

<p>P.S. If you enjoyed this newsletter, why not <a href="http://rails-weekly.goodbits.io">share it with your friends</a>? :) If you wish to be part of this project please don’t hesitate to contact <a href="mailto:godfrey@brewhouse.io">Godfrey</a> – there’re a lot of ways you could help make this newsletter more awesome!</p>


<!-- End Post -->
          </section>
        </article>




<!-- End Content -->
      </main>
    </div>
  
</body>
</html>
