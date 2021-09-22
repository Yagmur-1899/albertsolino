
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<body class="index">
    <div id="wrapper">
        <nav class="pagenav">
    
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
              <a href="/2021/6/24/Rails-6-1-4-has-been-released/" rel="bookmark">Rails 6.1.4 has been released</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">rafaelfranca</span></span>,
              <span class="published" title="2021-06-24 20:46:50 +0000">June 24, 2021 @  8:46 pm</span>
              
                <span class="categories">in
              
              
                  <a href="/releases/" rel="category tag">Releases</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi everyone,</p>

<p>I am happy to announce that Rails 6.1.4 has been released.</p>

<h2 id="changes-since-613">CHANGES since 6.1.3</h2>

<p>To view the changes for each gem, please read the changelogs on GitHub:</p>
<ul>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/actioncable/CHANGELOG.md">Action Cable CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/actionmailbox/CHANGELOG.md">Action Mailbox CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/actionmailer/CHANGELOG.md">Action Mailer CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/actionpack/CHANGELOG.md">Action Pack CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/actiontext/CHANGELOG.md">Action Text CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/actionview/CHANGELOG.md">Action View CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/activejob/CHANGELOG.md">Active Job CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/activemodel/CHANGELOG.md">Active Model CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/activerecord/CHANGELOG.md">Active Record CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/activestorage/CHANGELOG.md">Active Storage CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/activesupport/CHANGELOG.md">Active Support CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.1.4/railties/CHANGELOG.md">Railties CHANGELOG</a></li>
</ul>

<p>To see a summary of changes, please read the release on GitHub:</p>

<p><a href="https://github.com/rails/rails/releases/tag/v6.1.4">6.1.4 CHANGELOG</a></p>

<p><em>Full listing</em></p>

<p>To see the full list of changes, <a href="https://github.com/rails/rails/compare/v6.1.3...v6.1.4">check out all the commits on
GitHub</a>.</p>

<h2 id="sha-256">SHA-256</h2>

<p>If you’d like to verify that your gem is the same as the one I’ve uploaded,
please use these SHA-256 hashes.</p>

<p>Here are the checksums for 6.1.4:</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>$ shasum -a 256 *-6.1.4.gem
2af39c11da8c42f5d529b109e719e82228db15a4d79caccc9165ba0af99b5cf3  actioncable-6.1.4.gem
fe846dbc94c4e4b7eec94cd83e354da4dc2d1511ff40a6271ce27e4849073980  actionmailbox-6.1.4.gem
ee6c7e7a862ad874490c9db3e536c61de07e1b91de698ea6dba52afc78bcb857  actionmailer-6.1.4.gem
8969306876f1406f666bd015ad1e1c8e6622f9ccf6a275b7297f2c13c6ef44de  actionpack-6.1.4.gem
947507251f441261765aa5e8fff36789f6213c9ae454f8cb739436a42842c4ba  actiontext-6.1.4.gem
c44ece3ad757340e80fa53e39e74a5a6b4cae17d6939d7f095b38700cf5f1ecb  actionview-6.1.4.gem
ac14ed1323774f7ddb1cc5f86b75c1169e5ff38e06cc680578155a6b67de0060  activejob-6.1.4.gem
27f3223172e81b8e60e7da7f3b812bba046472716def6793d89c177b9e435e76  activemodel-6.1.4.gem
e0ed04b3da165b2a9f0b2bcf6c664077d4903ac1ce073fdf460ace04933e09a1  activerecord-6.1.4.gem
3c94dc3ba303f6482ea057bfff9393cb0394dc96238d2732eda0feb69734eb0d  activestorage-6.1.4.gem
b37564f4fc3bc66f3f98d3032b8bb8cbdbd23ba0f7c02648287048463cf70f4f  activesupport-6.1.4.gem
b0a266453e4d53beaaf911434f49868fbc6dd3f1e317149e4b160ba6981a6d4c  rails-6.1.4.gem
a456517e6861aff2b58711bf95a20ec2ec9434ba921aacd776e3c23b39069743  railties-6.1.4.gem
</code></pre></div></div>

<p>As always, huge thanks to the many contributors who helped with this release.</p>

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
              <a href="/2021/6/15/Rails-6-0-4-has-been-released/" rel="bookmark">Rails 6.0.4 has been released</a>
            </h2>
            <p class="entry-meta">
              Posted by <span class="vcard"><span class="fn">rafaelfranca</span></span>,
              <span class="published" title="2021-06-15 10:30:00 +0000">June 15, 2021 @ 10:30 am</span>
              
                <span class="categories">in
              
              
                  <a href="/releases/" rel="category tag">Releases</a>
              
              
                </span>
              
            </p>
          </header>
          <section>
<!-- Begin Post -->
<p>Hi everyone,</p>

<p>I am happy to announce that Rails 6.0.4 has been released.</p>

<h2 id="changes-since-603">CHANGES since 6.0.3</h2>

<p>To view the changes for each gem, please read the changelogs on GitHub:</p>
<ul>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/actioncable/CHANGELOG.md">Action Cable CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/actionmailbox/CHANGELOG.md">Action Mailbox CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/actionmailer/CHANGELOG.md">Action Mailer CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/actionpack/CHANGELOG.md">Action Pack CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/actiontext/CHANGELOG.md">Action Text CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/actionview/CHANGELOG.md">Action View CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/activejob/CHANGELOG.md">Active Job CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/activemodel/CHANGELOG.md">Active Model CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/activerecord/CHANGELOG.md">Active Record CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/activestorage/CHANGELOG.md">Active Storage CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/activesupport/CHANGELOG.md">Active Support CHANGELOG</a></li>
  <li><a href="https://github.com/rails/rails/blob/v6.0.4/railties/CHANGELOG.md">Railties CHANGELOG</a></li>
</ul>

<p>To see a summary of changes, please read the release on GitHub:</p>

<p><a href="https://github.com/rails/rails/releases/tag/v6.0.4">6.0.4 CHANGELOG</a></p>

<p><em>Full listing</em></p>

<p>To see the full list of changes, <a href="https://github.com/rails/rails/compare/v6.0.3...v6.0.4">check out all the commits on
GitHub</a>.</p>

<h2 id="sha-256">SHA-256</h2>

<p>If you’d like to verify that your gem is the same as the one I’ve uploaded,
please use these SHA-256 hashes.</p>

<p>Here are the checksums for 6.0.4:</p>

<div class="language-plaintext highlighter-rouge"><div class="highlight"><pre class="highlight"><code>$ shasum -a 256 *-6.0.4.gem
384a4edf491b5a77d81cd4e39f9e7ccc1d758178a342df5a874a0d3694bef21a  actioncable-6.0.4.gem
a9bbbe0ef49cbbb5c88bd2bd9c76afb56e4204d958eaea7482393acf8a4f4263  actionmailbox-6.0.4.gem
5eee44456af0201339787aab249f946cdb65fb0a042164ddd7889206de80f716  actionmailer-6.0.4.gem
815b66107fca6f872a7fe1badd9d7fb5dabc20634b538b35bce828b981845372  actionpack-6.0.4.gem
88eddd0d4be7650d374eecb14e8bb409776ee86e775c1a14f9db7477c9c3562b  actiontext-6.0.4.gem
433f05773ac40f4f8b8df5fdcd6bc83701b262963b097759eb6d8a9367dbe89b  actionview-6.0.4.gem
648ad0e611171b969572ff2cb898f43bbd6887daf532d49bab5f3d0edc573f3f  activejob-6.0.4.gem
e61b2e6f2c167c64bd9eb1db35b97ae8c724fabf8604e5e3d7456c1e87760de9  activemodel-6.0.4.gem
8dcf08a6c780cc4f34140c624c2f4adfc96e6a6b9538c94db16e221d62976958  activerecord-6.0.4.gem
d18793d1b42d80e49b3c2e4772624c9b61a066ad841c21fa4f6046eac002fdee  activestorage-6.0.4.gem
ddc14fc858d8a3ac8b22fa612c74d96f6ca5bea91aab1969b579b7b5d2b6f25e  activesupport-6.0.4.gem
4fcf7ceeae044e95be52efd5a3f94ec14872643121a461187424246fdd0df7cb  rails-6.0.4.gem
c5bf0d0a9e78f5481e1b96ead3450d0888aa01fd8b55be07f55d7237eaca2792  railties-6.0.4.gem
</code></pre></div></div>

<p>As always, huge thanks to the many contributors who helped with this release.</p>

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


<nav class="pagination">
  
    <a href="/page3" class="previous">&larr; Previous</a>
  
  
    
      <a href="/" class="next">Next &rarr;</a>
    
  
</nav>


<!-- End Content -->
      </main>
    </div>
  </body>
    
</body>
</html>