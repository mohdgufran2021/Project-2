<div class="row">
    <div class="col-12">
        <h1 class="text-secondary">This is Home Page For the Users.</h1>
        <div class="text-info">
            <pre>
                Text: letters and numbers, words and phrases, sentences and paragraphs.
                It's how we convey most of the meaning in web pages. Text content informs,
                describes, explains concepts and procedures to our readers (not just "visitors").
                It is the very basis of web communication.
                Text content on the web always has some structure --
                even if only top-down, and some formatting -- even if only by default.
                It can also exhibit behavior, moving or changing, appearing or disappearing in response
                to a reader's action or the author's intent. But in and of itself, text content doesn't
                have these qualities and abilities; its structure, appearance, and behavior are
                implemented and affected by other text-based resources: HTML, CSS, and JavaScript code.
                In a web page, every character of that content, structure, formatting, and behavior must
                be fetched from the server and downloaded to the browser, a decidedly non-trivial task.
                In this section we'll look at some effective methods for speeding up text content loading.
                Separate Development from Deployment
                As you reduce the size of text resources and take other actions that affect their readability,
                it's important to remember that once you modify a chunk of code for deployment, you usually can't
                read it any longer, let alone maintain it. Always keep development and deployment files separate
                to avoid replacing a development file with a deployment version. Although, if it does happen by
                accident, a code beautifier or "unminifier" (for example, http://unminify.com/) might save the day.
                Minify Your Code
                One simple and effective method is minification, which is essentially compressing a text resource
                by removing its whitespace and unnecessary characters without changing its validity or functionality.
                It doesn't sound that useful, but it is. For example, this little function
                (part of a table-sorting script) initially contains 348 characters.
                function sortables_init() {
                // Find all tables with class sortable and make them sortable
                if (!document.getElementsByTagName) return;
                var tbls = document.getElementsByTagName("table");
                for (ti=0;ti<tbls.length;ti++) {
                 thisTbl = tbls[ti];
                 if (((' '+thisTbl.className+' ').indexOf("sortable") != -1) && (thisTbl.id)) {
                     ts_makeSortable(thisTbl);
                 }
                }
                }
                After minification, it looks like this, and only contains 257 characters.
                function sortables_init(){if(!document.getElementsByTagName)return;var tbls=document.
                getElementsByTagName("table");for(ti=0;ti<tbls.length;ti++){thisTbl=tbls[ti];
                if(((''+thisTbl.className+'').indexOf("sortable")!=-1)&&(thisTbl.id)){ts_makeSortable(thisTbl)}}}
                Sure, we can't read it now, but the browser still can. That's a 26% reduction in size and required
                download time; pretty significant, even for this small sample.
                Looking at the bigger picture, the entire script block from which that snippet came is over 10k,
                but after minification it's down to 5,411 characters, a whopping 48% reduction.
                HTML and CSS can be minified in the same way, so that you can achieve improved load times
                for both formatting- and behavior-related code.
                Many (many!) online and desktop minification tools are available; one of the most popular and
                highly recommended online tools, due to its longevity and stability, is Kangax HTML Minifier,
                which offers a broad array of output customization options for the minified code.
                Other minification tools include:
                Minifier: An online tool minifies JavaScript or CSS via copy and paste.
                HTML Minifier: This online tool also handles HTML, and automatically identifies the code type(s).
                Node module for Grunt: An NPM minification package that integrates into the Grunt workflow.
                Node module for Gulp: An NPM minification package that integrates into the Gulp workflow.
            </pre>
        </div>
    </div>
</div>
