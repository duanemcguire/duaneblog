@charset "UTF-8";.message+.message,.message.message--bordered{border-top:1px solid #d8d8d8}.message.is-mod-selected,.block--messages .message.is-mod-selected{background:#fff8ee}.message.is-mod-selected .message-cell--user,.block--messages .message.is-mod-selected .message-cell--user,.message.is-mod-selected .message-cell--vote,.block--messages .message.is-mod-selected .message-cell--vote{background:#fff8ee}.message.is-mod-selected .message-userArrow:after,.block--messages .message.is-mod-selected .message-userArrow:after{border-right-color:#fff8ee}.message-inner{display:flex}.message-inner+.message-inner{border-top:1px solid #d8d8d8}.message-cell{display:block;vertical-align:top;padding:10px}.message--quickReply .message-cell>.formRow:last-child>dd{padding-bottom:0}.message-cell.message-cell--closer{padding:6px}.message-cell.message-cell--closer.message-cell--user{flex:0 0 132px}.message--simple .message-cell.message-cell--closer.message-cell--user{flex:0 0 82px}.message-cell.message-cell--closer.message-cell--action{flex:0 0 52px}.message-cell.message-cell--user,.message-cell.message-cell--action{position:relative;background:#f5f5f5;border-right:1px solid #d8d8d8;min-width:0}.message-cell.message-cell--vote{position:relative;background:#f5f5f5;border-left:1px solid #d8d8d8;border-right:0;padding-top:0;padding-bottom:0}.message--solution .message-cell.message-cell--vote{background:#daf3d8}.message-cell.message-cell--vote .solutionIcon{margin-top:6px}.message-cell.message-cell--user{flex:0 0 140px}.message--simple .message-cell.message-cell--user{flex:0 0 82px}.message-cell.message-cell--action{flex:0 0 60px}.message-cell.message-cell--main{flex:1 1 auto;width:100%;min-width:0}.message-cell.message-cell--main.is-editing{padding:0}.message-cell.message-cell--main .block{margin:0}.message-cell.message-cell--main .block-container{margin:0;border:none}.message-cell.message-cell--alert{font-size:15px;flex:1 1 auto;width:100%;min-width:0;color:#aa6709;background:#fff4e5}.message-cell.message-cell--alert a{color:#f2930d}.message-cell.message-cell--extra{flex:0 0 200px;border-left:1px solid #d8d8d8;background:#f5f5f5}.message-cell.message-cell--extra .formRow-explain{margin:6px 0 0;font-size:15px;color:#8c8c8c;font-size:80%}.message-cell.message-cell--extra .formRow-explain a{color:inherit;text-decoration:underline}.message-cell.message-cell--header,.message-cell.message-cell--solutionHeader{flex:1 1 auto;width:100%;min-width:0;padding:6px 10px;margin:0}.message-cell.message-cell--header{font-weight:400;text-decoration:none;font-size:22px;color:#185886;background:#edf6fd;border-bottom:1px solid #dfdfdf;background:linear-gradient(0deg,#edf6fd,#f6fafe);border-bottom:none}.message-cell.message-cell--header a{color:inherit;text-decoration:none}.message-cell.message-cell--header a:hover{text-decoration:underline}.message-cell.message-cell--solutionHeader{color:#3d793f;font-size:20px;background:#daf3d8;border-left:3px solid #63b265}.message-main{height:100%;display:flex;flex-direction:column}.message-content{flex:1 1 auto;min-height:1px}.message-footer{margin-top:auto}.message-expandWrapper{position:relative;overflow:hidden;-webkit-transition:-xf-height height ease;transition:-xf-height height ease}.message-expandWrapper .message-expandContent{max-height:250px;overflow:hidden}.message-expandWrapper .message-expandContent--small{max-height:160px}.message-expandWrapper.is-expandable .message-expandLink{display:block}.message-expandWrapper.is-expanded .message-expandContent{max-height:none}.message-expandWrapper.is-expanded .message-expandLink{display:none}.message-column{display:flex;flex-direction:column;align-items:center}.message-expandLink{display:none;position:absolute;top:60%;bottom:0;left:0;right:0;cursor:pointer;z-index:100;background:transparent;background:linear-gradient(to bottom,rgba(254,254,254,0) 0%,#fefefe 70%)}.message-expandLink:empty{cursor:auto;background:transparent;background:linear-gradient(to bottom,rgba(254,254,254,0) 0%,#fefefe 100%)}.message-expandLink a{position:absolute;bottom:10px;left:0;right:0;text-align:center;font-size:15px;color:#f2930d;text-decoration:none}@media (max-width:650px){.message:not(.message--forceColumns) .message-inner{display:block}.message:not(.message--forceColumns) .message-cell{display:block}.message:not(.message--forceColumns) .message-cell:before,.message:not(.message--forceColumns) .message-cell:after{content:" ";display:table}.message:not(.message--forceColumns) .message-cell:after{clear:both}.message:not(.message--forceColumns) .message-cell.message-cell--user{width:auto;border-right:none;border-bottom:1px solid #d8d8d8}.message:not(.message--forceColumns) .message-cell.message-cell--vote{width:auto;border-left:none;border-top:1px solid #d8d8d8}.message:not(.message--forceColumns) .message-cell.message-cell--vote .solutionIcon{margin-top:0}.message:not(.message--forceColumns) .message-cell.message-cell--main{padding-left:10px}.message:not(.message--forceColumns) .message-cell.message-cell--extra{width:auto;border-left:none;border-top:1px solid #d8d8d8}.message:not(.message--forceColumns) .message-column{flex-direction:row;justify-content:space-evenly}.message--simple:not(.message--forceColumns) .message-cell.message-cell--user,.message--quickReply:not(.message--forceColumns) .message-cell.message-cell--user{display:none}}.message-userArrow{position:absolute;top:20px;right:-1px;border:10px solid transparent;border-left-width:0;border-right-color:#d8d8d8}.message-userArrow:after{position:absolute;top:-9px;right:-10px;content:"";border:9px solid transparent;border-left-width:0;border-right-color:#fefefe}.message-avatar{text-align:center}.message-avatar .avatar{vertical-align:bottom}.message-avatar-wrapper{position:relative;display:inline-block;vertical-align:bottom;margin-bottom:.5em}.message-avatar-wrapper .message-avatar-online{position:absolute;left:50%;margin-left:-.615em;bottom:-.5em}.message-avatar-wrapper .message-avatar-online:before{font-family:'Font Awesome 5 Pro';font-size:inherit;font-style:normal;font-weight:300;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f2bd";width:.969em;text-align:center;line-height:1;font-weight:bold;color:#7fb900;background:#f5f5f5;border:#f5f5f5 solid 2px;border-radius:50%;display:inline-block}.message-name{font-weight:700;font-size:inherit;text-align:center;margin:0}.message-userTitle{font-size:13px;font-weight:normal;text-align:center;margin:0}.message-userBanner.userBanner{display:block;margin-top:3px}.message-userExtras{margin-top:3px;font-size:13px}.message--deleted .message-userDetails{display:none}.message--deleted .message-avatar .avatar{width:48px;height:48px;font-size:29px}@media (max-width:650px){.message:not(.message--forceColumns) .message-userArrow{top:auto;right:auto;bottom:-1px;left:24px;border:none;border:10px solid transparent;border-top-width:0;border-bottom-color:#d8d8d8}.message:not(.message--forceColumns) .message-userArrow:after{top:auto;right:auto;left:-9px;bottom:-10px;border:none;border:9px solid transparent;border-top-width:0;border-bottom-color:#fefefe}.message:not(.message--forceColumns).is-mod-selected .message-userArrow:after{border-color:transparent;border-bottom-color:#fff8ee}.message:not(.message--forceColumns) .message-user{display:flex}.message:not(.message--forceColumns) .message-avatar{margin-bottom:0}.message:not(.message--forceColumns) .message-avatar .avatar{width:48px;height:48px;font-size:29px}.message:not(.message--forceColumns) .message-avatar .avatar+.message-avatar-online{left:auto;right:0}.message:not(.message--forceColumns) .message-userDetails{flex:1;min-width:0;padding-left:10px}.message:not(.message--forceColumns) .message-name{text-align:left}.message:not(.message--forceColumns) .message-userTitle,.message:not(.message--forceColumns) .message-userBanner.userBanner{display:inline-block;text-align:left;margin:0}.message:not(.message--forceColumns) .message-userExtras{display:none}.message:not(.message--forceColumns) .message--deleted .message-userDetails{display:block}}.message-content{position:relative}.message-content .js-selectToQuoteEnd{height:0;font-size:0;overflow:hidden}.message--multiQuoteList .message-content{min-height:80px;max-height:120px;overflow:hidden}.message--multiQuoteList .message-content .message-body{pointer-events:none}.message-attribution{color:#8c8c8c;font-size:13px;padding-bottom:3px;border-bottom:1px solid #e7e7e7}.message-attribution:before,.message-attribution:after{content:" ";display:table}.message-attribution:after{clear:both}.message-attribution.message-attribution--plain{border-bottom:none;font-size:inherit;padding-bottom:0}.message-attribution.message-attribution--split{display:flex;align-items:flex-end}.message-attribution.message-attribution--split .message-attribution-opposite{margin-left:auto}.message-attribution-main{float:left}.message-attribution-opposite{float:right}.message-attribution-opposite.message-attribution-opposite--list{display:flex;list-style:none;margin:0;padding:0}.message-attribution-opposite.message-attribution-opposite--list>li{margin-left:14px}.message-attribution-opposite.message-attribution-opposite--list>li:first-child{margin-left:0}.message-attribution-opposite a{color:inherit}.message-attribution-opposite a:hover{text-decoration:none;color:#185886}.message-attribution-gadget{display:inline-block;margin:-3px -7px;padding:3px 7px}.message-attribution-source{font-size:13px;margin-bottom:3px}.message-attribution-user{font-weight:700}.message-attribution-user .avatar{display:none}.message-attribution-user .attribution{display:inline;font-size:inherit;font-weight:inherit;margin:0}.message-newIndicator,a.message-newIndicator{font-size:90%;color:#fff;background:#f2930d;border-radius:2px;padding-top:1px;padding-right:4px;padding-bottom:1px;padding-left:4px;white-space:nowrap}a.message-newIndicator:hover{color:#fff}.message-minorHighlight{font-size:15px;color:#2577b1}.message-fields{margin:10px 0}.message--simple .message-fields{margin-top:6px;margin-bottom:6px}.message-fields:last-child{margin-bottom:0}.message-body{margin:10px 0;font-family:'Segoe UI','Helvetica Neue',Helvetica,Roboto,Oxygen,Ubuntu,Cantarell,'Fira Sans','Droid Sans',sans-serif}.message-body:before,.message-body:after{content:" ";display:table}.message-body:after{clear:both}.message--simple .message-body{margin-top:6px;margin-bottom:6px}.message-body:last-child{margin-bottom:0}.message-body .message-title{font-size:20px;font-weight:400;margin:0 0 10px 0;padding:0}.message-attachments{margin:.5em 0}.message-attachments-list{list-style:none;margin:0;padding:0}.message-lastEdit{margin-top:.5em;color:#8c8c8c;font-size:11px;text-align:right}.message-signature{margin-top:10px;font-size:13px;color:#8c8c8c;border-top:1px solid #dfdfdf;padding-top:3px}.message-actionBar .actionBar-set{margin-top:10px;font-size:15px}.message--simple .message-actionBar .actionBar-set{margin-top:6px}.message .likesBar{margin-top:10px;padding:6px}.message .reactionsBar{margin-top:10px;padding:6px}.message-historyTarget{margin-top:10px}.message-gradient{position:absolute;bottom:0;left:0;right:0;height:60px;background:#fefefe;background:linear-gradient(to bottom,rgba(254,254,254,0) 0%,#fefefe 90%)}.message-responses{margin-top:6px;font-size:15px}.message-responses .editorPlaceholder .input{font-size:inherit}.message-responseRow{margin-top:-1px;background:#f5f5f5;border:1px solid #dfdfdf;padding:6px}.message-responseRow.message-responseRow--likes,.message-responseRow.message-responseRow--reactions{display:none;opacity:0;-webkit-transition:all .25s ease , -xf-opacity .25s ease;transition:all .25s ease , -xf-opacity .25s ease;overflow-y:hidden;height:0;-webkit-transition-property:all , -xf-height;transition-property:all , -xf-height}.message-responseRow.message-responseRow--likes.is-active,.message-responseRow.message-responseRow--reactions.is-active{display:block;opacity:1}.message-responseRow.message-responseRow--likes.is-transitioning,.message-responseRow.message-responseRow--reactions.is-transitioning{display:block}.message-responseRow.message-responseRow--likes.is-active,.message-responseRow.message-responseRow--reactions.is-active{height:auto;overflow-y:visible}.message-responseRow.message-responseRow--likes.is-transitioning,.message-responseRow.message-responseRow--reactions.is-transitioning{overflow-y:hidden}@media (max-width:650px){.message:not(.message--forceColumns) .message-attribution-user .avatar{display:inline-flex;width:23.8px;height:23.8px;font-size:14px}.message:not(.message--forceColumns) .message-content{min-height:1px}}@media (max-width:480px){.message-signature{display:none}}.message-menuGroup{display:inline-block}.message-menuTrigger{display:inline-block}.message-menuTrigger:after{font-family:'Font Awesome 5 Pro';font-size:inherit;font-style:normal;font-weight:300;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f0d7";width:1.2em;display:inline-block;text-align:center;font-weight:900;unicode-bidi:isolate;text-align:right}.message-menuTrigger:hover:after{color:#000}.message-menu-section--editDelete .menu-linkRow{font-weight:700;font-size:17px}.message-menu-link--delete i:after{content:"\f2ed";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--edit i:after{content:"\f044";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--report i:after{content:"\f119";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--warn i:after{content:"\f071";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--spam i:after{content:"\f05e";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--ip i:after{content:"\f0e8";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--history i:after{content:"\f1da";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--follow i:after{content:"\f234";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--ignore i:after{content:"\f235";width:1.28571429em;display:inline-block;text-align:center}.message-menu-link--share i:after{content:"\f1e0";width:1.28571429em;display:inline-block;text-align:center}.message-articleUserInfo{background:#f5f5f5;border-top:1px solid #d8d8d8}.message-articleUserInfo:last-child{border-bottom-left-radius:3px;border-bottom-right-radius:3px}.message-articleUserInfo .contentRow-figure{width:120px;text-align:center}.message-articleUserInfo .contentRow-main{padding-left:20px;text-align:left}@media (max-width:650px){.message-articleUserInfo .contentRow-figure{width:auto}.message-articleUserInfo .contentRow-main{padding-left:10px}}.message-articleWrittenBy{color:#8c8c8c;font-size:15px}.message-articleUserName{font-weight:700;font-size:22px;margin:0;display:inline}.message-articleUserBlurb,.message-articleUserBlurb div{font-size:15px;display:inline}.message-articleUserAbout{font-size:15px;margin:.5em 0}.message-articleUserBanners .userBanner{margin-bottom:3px}.message-articleUserStats{font-size:15px;color:#8c8c8c}@media (max-width:480px){.message-articleUserStats{display:none}}.comment-inner{display:table;table-layout:fixed;width:100%}.comment-avatar{display:table-cell;width:24px;vertical-align:top}.comment-avatar .avatar,.comment-avatar img{vertical-align:bottom}.comment-main{display:table-cell;padding-left:10px;vertical-align:top}.comment-contentWrapper{margin-bottom:6px}.comment-user{font-weight:700}.comment-body{display:inline}.comment-note{color:#8c8c8c;font-size:11px}.comment-input{display:block;height:2.34em;margin-bottom:6px}.comment-actionBar .actionBar-set{margin-top:6px;color:#8c8c8c}.comment-likes,.comment-reactions{display:none;opacity:0;-webkit-transition:all .25s ease , -xf-opacity .25s ease;transition:all .25s ease , -xf-opacity .25s ease;overflow-y:hidden;height:0;-webkit-transition-property:all , -xf-height;transition-property:all , -xf-height;margin-top:6px;font-size:13px}.comment-likes.is-active,.comment-reactions.is-active{display:block;opacity:1}.comment-likes.is-transitioning,.comment-reactions.is-transitioning{display:block}.comment-likes.is-active,.comment-reactions.is-active{height:auto;overflow-y:visible}.comment-likes.is-transitioning,.comment-reactions.is-transitioning{overflow-y:hidden}.formSubmitRow.formSubmitRow--messageQr .formSubmitRow-controls{text-align:center;padding-left:0;padding-right:0;margin-left:10px;margin-right:10px}@media (max-width:540px){.formSubmitRow.formSubmitRow--messageQr .formSubmitRow-controls{text-align:right}}.messageNotice{margin:6px 0;padding:6px 10px;color:#aa6709;background:#fff4e5;font-size:13px;border-left:2px solid #f2930d}.messageNotice.messageNotice--nested{border-left-width:1px}.messageNotice:not(.messageNotice--highlighted) a,.messageNotice:not(.messageNotice--highlighted) a:hover{color:#f2930d}.messageNotice:before{display:inline-block;font-family:'Font Awesome 5 Pro';font-size:inherit;font-style:normal;font-weight:300;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding-right:.2em;font-size:125%;color:#f2930d}.messageNotice.messageNotice--highlighted{color:#141414;background:#edf6fd;border-left-color:#4392cb}.messageNotice.messageNotice--highlighted:before{color:#2577b1}.messageNotice.messageNotice--deleted:before{content:"\f2ed";width:1.28571429em;display:inline-block;text-align:center}.messageNotice.messageNotice--moderated:before{content:"\f132";width:1.28571429em;display:inline-block;text-align:center}.messageNotice.messageNotice--warning:before{content:"\f071";width:1.28571429em;display:inline-block;text-align:center}.messageNotice.messageNotice--ignored:before{content:"\f131";width:1.28571429em;display:inline-block;text-align:center}@media (min-width:650px){.block:not(.block--messages) .block-container:not(.block-container--noStripRadius)>.block-body:first-child>.message:first-child .message-inner:first-of-type .message-cell:first-child,.block:not(.block--messages) .block-topRadiusContent.message .message-inner:first-of-type .message-cell:first-child,.block:not(.block--messages) .block-topRadiusContent>.message:first-child .message-inner:first-of-type .message-cell:first-child{border-top-left-radius:3px}.block:not(.block--messages) .block-container:not(.block-container--noStripRadius)>.block-body:first-child>.message:first-child .message-inner:first-of-type .message-cell:last-child,.block:not(.block--messages) .block-topRadiusContent.message .message-inner:first-of-type .message-cell:last-child,.block:not(.block--messages) .block-topRadiusContent>.message:first-child .message-inner:first-of-type .message-cell:last-child{border-top-right-radius:3px}.block:not(.block--messages) .block-container:not(.block-container--noStripRadius)>.block-body:last-child>.message:last-child .message-inner:last-of-type .message-cell:first-child,.block:not(.block--messages) .block-bottomRadiusContent.message .message-inner:last-of-type .message-cell:first-child,.block:not(.block--messages) .block-bottomRadiusContent>.message:last-child .message-inner:last-of-type .message-cell:first-child{border-bottom-left-radius:3px}.block:not(.block--messages) .block-container:not(.block-container--noStripRadius)>.block-body:last-child>.message:last-child .message-inner:last-of-type .message-cell:last-child,.block:not(.block--messages) .block-bottomRadiusContent.message .message-inner:last-of-type .message-cell:last-child,.block:not(.block--messages) .block-bottomRadiusContent>.message:last-child .message-inner:last-of-type .message-cell:last-child{border-bottom-right-radius:3px}}.block--messages .block-container{background:none;border:none}.block--messages .message,.block--messages .block-row{color:#141414;background:#fefefe;border-width:1px;border-style:solid;border-top-color:#dfdfdf;border-right-color:#d8d8d8;border-bottom-color:#cbcbcb;border-left-color:#d8d8d8;border-radius:4px}.block--messages .message+.message,.block--messages .block-row+.message,.block--messages .message+.block-row,.block--messages .block-row+.block-row{margin-top:6px}.block--messages .block-filterBar{border-width:1px;border-style:solid;border-top-color:#dfdfdf;border-right-color:#d8d8d8;border-bottom-color:#cbcbcb;border-left-color:#d8d8d8;border-radius:4px;margin-bottom:6px}.block--messages .message-spacer+.message,.block--messages .message-spacer+.block-row{margin-top:6px}.block--messages .message-inner .message-cell{border-radius:0}.block--messages .message-inner:first-of-type .message-cell:first-child{border-top-left-radius:3px}.block--messages .message-inner:first-of-type .message-cell:last-child{border-top-right-radius:3px}.block--messages .message-inner:last-of-type .message-cell:first-child{border-bottom-left-radius:3px}.block--messages .message-inner:last-of-type .message-cell:last-child{border-bottom-right-radius:3px}@media (max-width:650px){.block--messages .message-inner .message-cell{border-radius:0}.block--messages .message-inner:first-of-type .message-cell:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.block--messages .message-inner:last-of-type .message-cell:last-child{border-bottom-left-radius:3px;border-bottom-right-radius:3px}.block--messages .message--simple .message-cell--user+.message-cell{border-radius:0;border-top-left-radius:3px;border-top-right-radius:3px}.block--messages .message,.block--messages .block-row,.block--messages .block-filterBar{border-left:none;border-right:none;border-radius:0}.block--messages .message .message-inner .message-cell{border-radius:0}.block--messages .message .message-inner .message-cell:first-child,.block--messages .message .message-inner .message-cell:last-child{border-radius:0}.block--messages .message--simple .message-cell--user+.message-cell{border-radius:0}}.message--article.is-moderated{background:#edf6fd}.message--article.is-deleted{opacity:.65}.message--articlePreview{display:flex;flex-direction:column;min-width:0;margin-bottom:10px}.message--articlePreview:last-child{margin-bottom:0}.message--articlePreview .articlePreview-main{display:flex;flex-direction:column}.message--articlePreview .articlePreview-image{flex:0 0 auto;align-self:center;width:100%;max-width:750px;background:center / cover #f5f5f5 no-repeat;text-decoration:none}.message--articlePreview .articlePreview-image:after{content:'';display:block;padding-bottom:75%}.message--articlePreview .articlePreview-image+.articlePreview-text .bbImageWrapper,.message--articlePreview .articlePreview-image+.articlePreview-text .bbImage{display:none}.message--articlePreview .articlePreview-image+.articlePreview-text .bbWrapper{position:relative;max-height:11.2em;overflow:hidden}.message--articlePreview .articlePreview-image+.articlePreview-text .bbWrapper:after{content:'';position:absolute;bottom:0;right:0;text-align:right;width:75%;height:1.4em;background:linear-gradient(to right,rgba(254,254,254,0),#fefefe)}.message--articlePreview .articlePreview-text{flex:1 1 auto;display:flex;flex-direction:column;padding:10px}.message--articlePreview .articlePreview-title{margin:0;font-size:20px}.message--articlePreview .articlePreview-content{flex:1 1 auto}.message--articlePreview .articlePreview-links{text-align:right;padding-top:6px}.message--articlePreview .articlePreview-statuses{float:left;display:flex;list-style:none;margin:0;padding:0}.message--articlePreview .articlePreview-statuses>li{margin-right:8px}.message--articlePreview .articlePreview-statuses .message-newIndicator{font-size:15px}.message--articlePreview .articlePreview-footer{padding:0 10px}.message--articlePreview .articlePreview-meta{display:flex;align-items:center;border-top:solid 1px #d8d8d8;padding:6px 0;color:#8c8c8c;font-size:15px}.message--articlePreview .articlePreview-meta>li{margin-right:10px}.message--articlePreview .articlePreview-meta>li:last-child{margin-right:0}.message--articlePreview .articlePreview-replies{white-space:nowrap}.message--articlePreview .articlePreview-by,.message--articlePreview .articlePreview-repliesLabel{display:none}.block--articles.block--messages.block--expanded .article-title{margin:0 0 5px;font-size:24px;font-weight:400}.block--articles.block--messages.block--expanded .message-snippet-link{margin-top:.5em;text-align:center}.block--articles.block--messages.block--expanded .message+.message{margin-top:15px}@supports (display: grid){@media (min-width:650px){.block--previews .block-body{display:grid;gap:10px;grid-template-rows:auto;grid-template-columns:repeat(2, 1fr);grid-template-areas:"a a"}.block--previews .block-body>.message:first-of-type:last-of-type{grid-area:a}.block--previews .block-body>.message--articlePreview{margin-bottom:0}.block--previews .block-body>.message--articlePreview:nth-of-type(-n+5) .articlePreview-title{font-size:22px}.block--previews .block-body>.message--articlePreview:nth-of-type(-n+5) .articlePreview-image{max-width:none}.block--previews .block-body>.message--articlePreview:nth-of-type(-n+5) .articlePreview-image:after{padding-bottom:60%}.block--previews .block-body>.message--articlePreview:nth-of-type(-n+5) .articlePreview-meta .articlePreview-by{display:block}.block--previews .block-body>.message--articlePreview:first-of-type{grid-area:a}.block--previews .block-body>.message--articlePreview:first-of-type .articlePreview-title{font-size:24px}.block--previews .block-body>.message--articlePreview:first-of-type .articlePreview-meta{border-top:none}.block--previews .block-body>.message--articlePreview:first-of-type .articlePreview-main{flex-direction:row-reverse}.block--previews .block-body>.message--articlePreview:first-of-type .articlePreview-image{width:50%}}@media (min-width:900px){.p-body-main:not(.p-body-main--withSidebar) .block--previews .block-body{grid-template-columns:repeat(4, 1fr);grid-template-areas:"a a a a" "b_1 b_1 b_2 b_2" "b_3 b_3 b_4 b_4"}.p-body-main:not(.p-body-main--withSidebar) .block--previews .block-body>.message:first-of-type:last-of-type{grid-area:a}.p-body-main:not(.p-body-main--withSidebar) .block--previews .block-body>.message--articlePreview:nth-of-type(1){grid-area:a}.p-body-main:not(.p-body-main--withSidebar) .block--previews .block-body>.message--articlePreview:nth-of-type(2){grid-area:b_1}.p-body-main:not(.p-body-main--withSidebar) .block--previews .block-body>.message--articlePreview:nth-of-type(3){grid-area:b_2}.p-body-main:not(.p-body-main--withSidebar) .block--previews .block-body>.message--articlePreview:nth-of-type(4){grid-area:b_3}.p-body-main:not(.p-body-main--withSidebar) .block--previews .block-body>.message--articlePreview:nth-of-type(5){grid-area:b_4}}@media (min-width:1150px){.p-body-main--withSidebar .block--previews .block-body{grid-template-columns:repeat(4, 1fr);grid-template-areas:"a a a a" "b_1 b_1 b_2 b_2" "b_3 b_3 b_4 b_4"}.p-body-main--withSidebar .block--previews .block-body>.message:first-of-type:last-of-type{grid-area:a}.p-body-main--withSidebar .block--previews .block-body>.message--articlePreview:nth-of-type(1){grid-area:a}.p-body-main--withSidebar .block--previews .block-body>.message--articlePreview:nth-of-type(2){grid-area:b_1}.p-body-main--withSidebar .block--previews .block-body>.message--articlePreview:nth-of-type(3){grid-area:b_2}.p-body-main--withSidebar .block--previews .block-body>.message--articlePreview:nth-of-type(4){grid-area:b_3}.p-body-main--withSidebar .block--previews .block-body>.message--articlePreview:nth-of-type(5){grid-area:b_4}}}.notices{list-style:none;margin:0;padding:0}.notices.notices--block .notice{margin-bottom:10px}.notices.notices--floating{margin:0 20px 0 auto;width:300px;max-width:100%;z-index:800}@media (max-width:340px){.notices.notices--floating{margin-right:10px}}.notices.notices--floating .notice{margin-bottom:20px}.notices.notices--scrolling{display:flex;align-items:stretch;overflow:hidden;border-width:1px;border-style:solid;border-top-color:#dfdfdf;border-right-color:#d8d8d8;border-bottom-color:#cbcbcb;border-left-color:#d8d8d8;margin-bottom:10px}.notices.notices--scrolling.notices--isMulti{margin-bottom:30px}.notices.notices--scrolling .notice{width:100%;flex-grow:0;flex-shrink:0;border:none}.noticeScrollContainer{margin-bottom:10px}.noticeScrollContainer .lSSlideWrapper{border-width:1px;border-style:solid;border-top-color:#dfdfdf;border-right-color:#d8d8d8;border-bottom-color:#cbcbcb;border-left-color:#d8d8d8}.noticeScrollContainer .notices.notices--scrolling{border:none;margin-bottom:0}.notice{position:relative;border-width:1px;border-style:solid;border-top-color:#dfdfdf;border-right-color:#d8d8d8;border-bottom-color:#cbcbcb;border-left-color:#d8d8d8}.notice:before,.notice:after{content:" ";display:table}.notice:after{clear:both}.notice.notice--primary{color:#141414;background:#edf6fd}.notice.notice--accent{color:#aa6709;background:#fff4e5}.notice.notice--accent a:not(.button--notice){color:#f2930d}.notice.notice--dark{color:#fefefe;border:none;background:#141414}.notice.notice--dark a:not(.button--notice){color:#b4b4b4}.notice.notice--light{color:#141414;background:#fefefe}.notice.notice--light a:not(.button--notice){color:#828282}.notice.notice--enablePush{display:none}@media (max-width:900px){.notice.notice--enablePush{padding:3px 3px 10px;font-size:15px}.notice.notice--cookie .notice-content{padding:3px 3px 10px;font-size:13px}.notice.notice--cookie .notice-content .button--notice{font-size:13px;padding:3px 6px}.notice.notice--cookie .notice-content .button--notice .button-text{font-size:13px}}.notices--block .notice{font-size:17px;border-radius:4px}.notices--floating .notice{font-size:11px;border-radius:4px;box-shadow:1px 1px 3px rgba(0,0,0,.25)}.notices--floating .notice.notice--primary{background-color:rgba(237,246,253,.8)}.notices--floating .notice.notice--accent{background-color:rgba(255,244,229,.8)}.notices--floating .notice.notice--dark{background-color:rgba(20,20,20,.8)}.notices--floating .notice.notice--light{background-color:rgba(254,254,254,.8)}.has-js .notices--floating .notice{display:none}.notice.notice--hasImage .notice-content{margin-left:68px;min-height:68px}@media (max-width:900px){.notice.notice--hidewide:not(.is-vis-processed){display:none;visibility:hidden}}@media (max-width:650px){.notice.notice--hidemedium:not(.is-vis-processed){display:none;visibility:hidden}}@media (max-width:480px){.notice.notice--hidenarrow:not(.is-vis-processed){display:none;visibility:hidden}}.notice-image{float:left;padding:10px 0 10px 10px}.notice-image img{max-width:48px;max-height:48px}.notice-content{padding:10px}.notice-content a.notice-dismiss{float:right;color:inherit;font-size:16px;line-height:1;height:1em;box-sizing:content-box;padding:0 0 5px 5px;opacity:.5;-webkit-transition:opacity .25s ease;transition:opacity .25s ease;cursor:pointer}.notice-content a.notice-dismiss:before{font-family:'Font Awesome 5 Pro';font-size:inherit;font-style:normal;font-weight:300;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:"\f00d";width:.75em;display:inline-block;text-align:center}.notice-content a.notice-dismiss:hover{text-decoration:none;opacity:1}.notices--floating .notice-content a.notice-dismiss{font-size:14px}.shareButtons:before,.shareButtons:after{content:" ";display:table}.shareButtons:after{clear:both}.shareButtons--iconic .shareButtons-buttons{display:grid;grid-template-columns:repeat(auto-fill,minmax(35px,1fr))}.shareButtons-label{float:left;margin-right:3px;color:#8c8c8c;min-height:35px;line-height:35px}.shareButtons-button{float:left;margin-right:3px;padding:6px;color:#8c8c8c;font-size:20px;line-height:20px;white-space:nowrap;min-width:35px;border-radius:2px;background-color:transparent;-webkit-transition:all .25s ease;transition:all .25s ease}.shareButtons-button:last-of-type{margin-right:0}.shareButtons-button:hover{text-decoration:none;color:#fff}.shareButtons-button>i{display:inline-block;vertical-align:middle;font-family:'Font Awesome 5 Pro';font-size:inherit;font-style:normal;font-weight:300;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shareButtons-button.shareButtons-button--brand>i{font-family:'Font Awesome 5 Brands';font-size:inherit;font-style:normal;font-weight:400;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shareButtons-button>span{font-weight:400;font-size:17px}.shareButtons--iconic .shareButtons-button{text-align:center}.shareButtons--iconic .shareButtons-button>i{min-width:20px}.shareButtons--iconic .shareButtons-button>span{position:absolute;height:1px;width:1px;margin:-1px;padding:0;border:0;clip:rect(0 0 0 0);overflow:hidden}.shareButtons-button.shareButtons-button--facebook:hover{background-color:#3b5998}.shareButtons-button.shareButtons-button--facebook>i:before{content:"\f39e";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.shareButtons-button--twitter:hover{background-color:#1da1f3}.shareButtons-button.shareButtons-button--twitter>i:before{content:"\f099";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.shareButtons-button--pinterest:hover{background-color:#bd081c}.shareButtons-button.shareButtons-button--pinterest>i:before{content:"\f231";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.shareButtons-button--tumblr:hover{background-color:#35465c}.shareButtons-button.shareButtons-button--tumblr>i:before{content:"\f173";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.shareButtons-button--reddit:hover{background-color:#ff4500}.shareButtons-button.shareButtons-button--reddit>i:before{content:"\f281";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.shareButtons-button--whatsApp:hover{background-color:#25d366}.shareButtons-button.shareButtons-button--whatsApp>i:before{content:"\f232";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.shareButtons-button--email:hover{background-color:#1289ff}.shareButtons-button.shareButtons-button--email>i:before{content:"\f0e0";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.shareButtons-button--share{cursor:pointer}.shareButtons-button.shareButtons-button--share:hover{background-color:#787878}.shareButtons-button.shareButtons-button--share>i:before{content:"\f1e0";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.shareButtons-button--link{cursor:pointer}.shareButtons-button.shareButtons-button--link:hover{background-color:#787878}.shareButtons-button.shareButtons-button--link>i:before{content:"\f0c1";width:1.28571429em;display:inline-block;text-align:center}.shareButtons-button.is-hidden{display:none}.shareInput{margin-bottom:5px}.shareInput:last-child{margin-bottom:0}.shareInput-label{font-size:15px}.shareInput-label:after{content:":"}.shareInput-label.is-sentence:after{content:""}.shareInput-button{color:#2577b1;cursor:pointer}.shareInput-button>i{display:inline-block;vertical-align:middle;font-family:'Font Awesome 5 Pro';font-size:inherit;font-style:normal;font-weight:300;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shareInput-button>i:before{content:"\f0c5";width:1.28571429em;display:inline-block;text-align:center}.shareInput-button.is-hidden{display:none}.shareInput-input{font-size:15px}@media (max-width:568px){.shareInput-input{font-size:16px}}.shareInput-button.is-hidden+.shareInput-input{border-radius:4px}