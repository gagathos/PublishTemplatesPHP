# PublishTemplatesPHP
Simple script useful for including global CSS in multiple templates.  Can, I guess, be used for lots of things, or just as a code snippet.

# Story
This was created because I was using online software that allowed templates to be uploaded, but not custom CSS files.  Because this was hosted on a secure server, hosting the CSS on another domain and including it would have raised warnings on the browser.

Doing this manually for one template is easy, but when we start using many templates and want to update the CSS rules across all of them it would become a nightmare.  This way, we only have one version of the global CSS that is injected into the script.

# Usage

Best is to use CLI (Command Line) which means you will have the correct permissions in the folder.  Any *.html files in the main folder will have css injected wherever there is <<CSS>> and then that copy will be put in the ./Published folder. 

This code can obviously be adapted to many use-cases other than mine. I chose to use PHP after spending about a half hour researching bash script solutions using sed and other weird, hard to understand commands. 
