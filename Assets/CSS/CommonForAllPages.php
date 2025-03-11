<style>img:is([sizes="auto" i], [sizes^="auto," i]) {
        contain-intrinsic-size: 3000px 1500px
    }</style>
<style id='wp-emoji-styles-inline-css'>

    img.wp-smiley, img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<style>
    .alert-box, .success-box {
        background-color: #f44336; /* Red color */
        color: white;
        padding: 15px 20px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 100%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .success-box {
        background-color: #90EE90; /* Red color */
        color: black;
        width: 100%;
        margin: 20px;
    }

    .alert-text, .success-text {
        font-size: 16px;
        margin-right: 15px;
    }

    .close-btn {
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        padding: 0;
        line-height: 1;
        outline: none;
        transition: color 0.3s ease;
    }

    .close-btn:hover {
        color: #ffcccc;
    }
</style>
<style id='ilb-icon-list-style-inline-css'>
    .dashicons {
        font-family: dashicons !important
    }

    .wp-block-ilb-icon-list {
        text-align: center
    }

    .wp-block-ilb-icon-list * {
        box-sizing: border-box
    }

    .wp-block-ilb-icon-list .ilbIconList {
        background: transparent;
        box-shadow: 0 0 10px 0 rgba(69, 39, 164, .502);
        display: inline-block;
        max-width: 100%;
        padding: 30px 25px
    }

    .wp-block-ilb-icon-list .ilbIconList.left .header {
        justify-items: start
    }

    .wp-block-ilb-icon-list .ilbIconList.center {
        text-align: center
    }

    .wp-block-ilb-icon-list .ilbIconList.center .header {
        justify-items: center
    }

    .wp-block-ilb-icon-list .ilbIconList.center ul.lists {
        display: inline-block
    }

    .wp-block-ilb-icon-list .ilbIconList.right .header {
        justify-items: end
    }

    .wp-block-ilb-icon-list .ilbIconList.right ul.lists .list {
        flex-direction: row-reverse
    }

    .wp-block-ilb-icon-list .ilbIconList .header {
        display: grid;
        height: -moz-min-content;
        height: min-content;
        margin-bottom: 30px
    }

    .wp-block-ilb-icon-list .ilbIconList .header .description, .wp-block-ilb-icon-list .ilbIconList .header .title {
        margin: 0 0 5px;
        text-align: initial;
        width: auto
    }

    .wp-block-ilb-icon-list .ilbIconList .header .title {
        color: var(--e-global-color-7c264k);
        font-size: 30px;
        font-weight: 700;
        text-transform: uppercase
    }

    .wp-block-ilb-icon-list .ilbIconList .header .description {
        color: var(--e-global-color-6qcanx);
        font-size: 18px;
        font-weight: 500
    }

    .wp-block-ilb-icon-list .ilbIconList .header .separator {
        border-top: 2px solid #828282;
        display: inline-block;
        text-align: initial;
        width: 20%
    }

    .wp-block-ilb-icon-list .ilbIconList ul.lists {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.lists .link {
        text-decoration: none
    }

    .wp-block-ilb-icon-list .ilbIconList ul.lists .link li.list {
        padding-bottom: 7px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default .content {
        max-width: 90%;
        padding: 10px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default li {
        align-items: center;
        display: flex;
        gap: 15px;
        padding: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default li:not(:last-child) {
        margin-bottom: 8px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default li .icon {
        align-items: center;
        background: var(--e-global-color-7c264k);
        border-radius: 50%;
        color: var(--e-global-color-4831827);
        display: flex;
        font-size: 18px;
        font-style: normal;
        height: 30px;
        justify-content: center;
        width: 30px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default li .link {
        display: inline-block;
        text-decoration: none
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default li .text {
        color: var(--e-global-color-6qcanx);
        margin: 0;
        max-width: calc(100% - 45px);
        text-align: left
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default li .text a {
        color: inherit;
        font-size: inherit;
        text-decoration: inherit
    }

    .wp-block-ilb-icon-list .ilbIconList ul.default li .text a:hover {
        color: inherit
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 .link {
        text-decoration: none
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 .link li.list {
        margin-bottom: 15px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 li {
        align-items: center;
        border-radius: 12px;
        box-shadow: 0 0 6px rgba(0, 0, 0, .2);
        cursor: pointer;
        display: flex;
        margin-bottom: 15px;
        padding: 16px;
        transition: background-color .2s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 li:last-child {
        margin-bottom: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 li:hover {
        background-color: rgba(0, 0, 0, .02)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 li .icon {
        align-items: center;
        border-radius: 50%;
        display: flex;
        justify-content: center
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 li .content {
        flex: 1;
        margin-left: 18px;
        max-width: 90%;
        padding: 10px;
        text-align: left
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 li .content h3 {
        font-family: sans-serif;
        font-size: 22px;
        font-weight: 500
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 li .content p {
        font-size: 14px;
        margin-top: -15px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme2 li .arrow {
        color: #ccc;
        margin-left: 16px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme3 {
        display: grid
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme3 .list {
        box-sizing: border-box;
        cursor: pointer;
        padding: 15px 10px;
        transition: all .4s cubic-bezier(.25, .8, .25, 1);
        word-wrap: break-word;
        white-space: normal
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme3 .list .feature-container .feature .icon-wrapper {
        transition: transform .5s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme3 .list .feature-container:hover .feature .icon-wrapper {
        transform: rotate(45deg)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme3 .list:hover {
        background-color: #eaecee;
        box-shadow: 0 12px 25px rgba(0, 0, 0, .3);
        transform: translateY(-8px)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme3 .link, .wp-block-ilb-icon-list .ilbIconList ul.theme4 .link {
        text-decoration: none
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 .link li.list {
        margin-bottom: 15px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li {
        align-items: center;
        border-radius: 12px;
        box-shadow: 0 0 6px rgba(0, 0, 0, .2);
        cursor: pointer;
        display: flex;
        margin-bottom: 15px;
        padding: 25px;
        position: relative;
        transition: background-color .2s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li:last-child {
        margin-bottom: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li:hover {
        background-color: rgba(0, 0, 0, .02)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li .icon {
        align-items: center;
        border-radius: 50%;
        display: flex;
        justify-content: center
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li .content {
        flex: 1;
        margin-left: 15px;
        margin-top: 20px;
        max-width: 90%;
        padding: 10px;
        text-align: left
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li .content h3 {
        font-family: sans-serif;
        font-size: 22px;
        font-weight: 500
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li .content p {
        font-size: 14px;
        margin-top: -15px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li .arrow {
        color: #ccc;
        margin-left: 16px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li .hidden-badge {
        display: none
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme4 li .badge {
        border-radius: 7px;
        padding: 5px 8px;
        position: absolute;
        right: 20px;
        top: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 {
        display: grid
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .link {
        text-decoration: none
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .content {
        max-width: 90%;
        padding: 10px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card-wrapper {
        position: relative;
        transition: transform .3s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card-wrapper:hover {
        transform: translateY(-4px)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .bg-element {
        border-radius: 1rem;
        inset: 0;
        position: absolute;
        transition: transform .3s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .bg-element-1 {
        transform: rotate(3deg)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .bg-element-2 {
        transform: rotate(-3deg)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card-wrapper:hover .bg-element-1 {
        transform: rotate(6deg)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card-wrapper:hover .bg-element-2 {
        transform: rotate(-6deg)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card {
        border: 1px solid #e5e7eb;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1);
        padding: 1.5rem;
        position: relative;
        transition: all .3s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card:hover {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, .1)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-container {
        margin-bottom: 1.5rem;
        position: relative
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-bg-blur {
        border-radius: 50%;
        filter: blur(20px);
        inset: 0;
        opacity: .2;
        position: absolute;
        transition: opacity .3s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card:hover .icon-bg-blur {
        opacity: .3
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-wrapper {
        align-items: center;
        display: flex;
        justify-content: center;
        margin: 0 auto;
        position: relative
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-pulse {
        animation: pulse 2s infinite;
        border-radius: 50%;
        inset: 0;
        position: absolute
    }

    @keyframes pulse {
        0% {
            opacity: .5;
            transform: scale(.95)
        }
        50% {
            opacity: .8;
            transform: scale(1.05)
        }
        to {
            opacity: .5;
            transform: scale(.95)
        }
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-circle {
        align-items: center;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        position: relative;
        transition: transform .3s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card:hover .icon-circle {
        transform: scale(1.1)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon {
        color: var(--e-global-color-h5jxu1);
        height: 2rem;
        width: 2rem
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .card-content {
        text-align: center
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .card-title {
        margin-bottom: .5rem;
        transition: color .3s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card:hover .card-title {
        color: var(--e-global-color-h5jxu1)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .card-description {
        line-height: 1.5;
        transition: color .3s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card:hover .card-description {
        color: #374151
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .animated-border {
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        bottom: 0;
        height: 2px;
        left: 50%;
        position: absolute;
        transform: translateX(-50%);
        transition: width .5s ease;
        width: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme5 .icon-card:hover .animated-border {
        width: 80%
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme6 .icon-list-container {
        background: var(--e-global-color-4831827);
        border-radius: .5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, .1);
        margin: 0 auto;
        overflow: hidden;
        width: 100%
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme6 .icon-table {
        border-collapse: collapse;
        text-align: center;
        width: 100%
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme6 .icon-table td {
        border-bottom: 1px solid #e5e7eb;
        padding: 1rem
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme6 .icon-container {
        align-items: center;
        display: flex;
        justify-content: center
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme6 .try-button {
        border: none;
        border-radius: .375rem;
        cursor: pointer;
        padding: 6px 10px;
        transition: background-color .2s;
        width: 70px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme6 .try-button:hover {
        background-color: #059669
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 {
        display: grid
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .icon-list-satellite {
        position: relative
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .glass-card {
        border: 1px solid #e5e7eb;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1);
        padding: 1.5rem;
        position: relative;
        transition: all .3s ease
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .icon-sphere {
        height: 70px;
        margin: 0 auto 1.5rem;
        position: relative;
        width: 70px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .theme7Icon {
        border-radius: 50%;
        padding: 12px
    }

    @keyframes rotateGradient {
        0% {
            transform: rotate(0deg)
        }
        to {
            transform: rotate(1turn)
        }
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .icon-satellite {
        align-items: center;
        display: flex;
        height: 100%;
        justify-content: center;
        position: relative;
        width: 100%;
        z-index: 2
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .glass-card:hover .feature-icon {
        transform: scale(1.1)
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .orbit {
        animation: orbitRotate 12s linear infinite;
        border-radius: 50%;
        inset: -15px;
        position: absolute
    }

    @keyframes orbitRotate {
        0% {
            transform: rotate(0deg)
        }
        to {
            transform: rotate(1turn)
        }
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .satellite {
        border-radius: 50%;
        box-shadow: 0 0 10px #fff;
        height: 10px;
        position: absolute;
        width: 10px
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .satellite:first-child {
        left: 50%;
        top: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .satellite:nth-child(2) {
        bottom: 25%;
        right: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .satellite:nth-child(3) {
        bottom: 25%;
        left: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .text-content {
        position: relative;
        text-align: center;
        z-index: 2
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .hover-line {
        background: linear-gradient(90deg, rgba(147, 51, 234, .5), rgba(79, 70, 229, .5));
        bottom: 0;
        height: 2px;
        left: 50%;
        position: absolute;
        transform: translateX(-50%);
        transition: width .4s ease;
        width: 0
    }

    .wp-block-ilb-icon-list .ilbIconList ul.theme7 .glass-card:hover .hover-line {
        width: 80%
    }

</style>
<style id='global-styles-inline-css'>
    :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: var(--e-global-color-5aa3cd2);
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: var(--e-global-color-4831827);
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :root {
        --wp--style--global--content-size: 800px;
        --wp--style--global--wide-size: 1200px;
    }

    :where(body) {
        margin: 0;
    }

    .wp-site-blocks > .alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-site-blocks > .alignright {
        float: right;
        margin-left: 2em;
    }

    .wp-site-blocks > .aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }

    :where(.wp-site-blocks) > * {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :where(.wp-site-blocks) > :first-child {
        margin-block-start: 0;
    }

    :where(.wp-site-blocks) > :last-child {
        margin-block-end: 0;
    }

    :root {
        --wp--style--block-gap: 24px;
    }

    :root :where(.is-layout-flow) > :first-child {
        margin-block-start: 0;
    }

    :root :where(.is-layout-flow) > :last-child {
        margin-block-end: 0;
    }

    :root :where(.is-layout-flow) > * {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :root :where(.is-layout-constrained) > :first-child {
        margin-block-start: 0;
    }

    :root :where(.is-layout-constrained) > :last-child {
        margin-block-end: 0;
    }

    :root :where(.is-layout-constrained) > * {
        margin-block-start: 24px;
        margin-block-end: 0;
    }

    :root :where(.is-layout-flex) {
        gap: 24px;
    }

    :root :where(.is-layout-grid) {
        gap: 24px;
    }

    .is-layout-flow > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .is-layout-flow > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .is-layout-flow > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .is-layout-constrained > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .is-layout-constrained > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained > .alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    .is-layout-flex > :is(*, div) {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    .is-layout-grid > :is(*, div) {
        margin: 0;
    }

    body {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    a:where(:not(.wp-element-button)) {
        text-decoration: underline;
    }

    :root :where(.wp-element-button, .wp-block-button__link) {
        background-color: #32373c;
        border-width: 0;
        color: var(--e-global-color-4831827);
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        text-decoration: none;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    :root :where(.wp-block-pullquote) {
        font-size: 1.5em;
        line-height: 1.6;
    }
</style>

<style>
    .elementor-kit-7 {
        --e-global-color-12f8b0d: #f9c001f2;/*#f9c001f2;*//*#0163BE;*/
        --e-global-color-text-on-primary: #000000;
        --e-global-color-btn-bgc-hover: #000000;
        --e-global-color-btn-tc-hover: #f9c001f2;
        --e-global-color-4831827-new: #FFFFFF;
        --e-global-color-4831827: #FFFFFF;
        --e-global-color-5aa3cd2: #000000;
        --e-global-color-95c65de: #FAFAFA;
        --e-global-color-64137c9: #252525;
        --e-global-color-56a7c9: #02010100;
        --e-global-color-gndmu3: #D9D9D9;
        --e-global-color-xg2feg: #E0E0E0;
        --e-global-color-reb8rr: #F0E68C;
        --e-global-color-r5mrtu: #CFCFCF;
        --e-global-color-44kdn5: #D8D8D8;
        --e-global-color-86d1mq: #FCFCFC;
        --e-global-color-y6fci8: #003E77;
        --e-global-color-8cz66x: #B9B9B9;
        --e-global-color-t8nbr1: #64748B;
        --e-global-color-btgxqf: #4B5768;
        --e-global-color-2axupa: #191D23;
        --e-global-color-n0z0p5: #888888;
        --e-global-color-nhefae: #1A1E23;
        --e-global-color-h5jxu1: #4f46e5;
        --e-global-color-7c264k: #4527a4;
        --e-global-color-6qcanx: #828282;
        --e-global-color-1vwyyk: #E1E1E1;
        --e-global-color-g5ju9m: #A4A4A4;
        --e-global-color-9g25kr: #020202;
        --e-global-color-x2pu2q: #FBFBFB;
        --e-global-color-xwfvbn: #333333;
        --e-global-color-agb6pd: #737373;
        --e-global-typography-primary-font-family: "Roboto";
        --e-global-typography-primary-font-weight: 600;
        --e-global-typography-secondary-font-family: "Roboto Slab";
        --e-global-typography-secondary-font-weight: 400;
        --e-global-typography-text-font-family: "Roboto";
        --e-global-typography-text-font-weight: 400;
        --e-global-typography-accent-font-family: "Roboto";
        --e-global-typography-accent-font-weight: 500;
        color: var(--e-global-color-agb6pd);
        font-family: "Inter", Sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.37em;
    }

    .text-on-primary{
        color: var(--e-global-color-text-on-primary) !important;
    }

    .elementor-kit-7 button, .elementor-kit-7 input[type="button"], .elementor-kit-7 input[type="submit"], .elementor-kit-7 .elementor-button {
        font-family: "Inter", Sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: var(--e-global-color-text-on-primary);
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: var(--e-global-color-12f8b0d);
        border-radius: 31px 31px 31px 31px;
        padding: 15px 30px 15px 28px;
        background-color: var(--e-global-color-12f8b0d);
    }

    .elementor-kit-7 button:hover, .elementor-kit-7 button:focus, .elementor-kit-7 input[type="button"]:hover, .elementor-kit-7 input[type="button"]:focus, .elementor-kit-7 input[type="submit"]:hover, .elementor-kit-7 input[type="submit"]:focus, .elementor-kit-7 .elementor-button:hover, .elementor-kit-7 .elementor-button:focus {
        background-color: var(--e-global-color-btn-bgc-hover);
        color: var(--e-global-color-btn-tc-hover);
    }

    .elementor-kit-7 e-page-transition {
        background-color: #FFBC7D;
    }

    .elementor-kit-7 a {
        color: var(--e-global-color-12f8b0d);
        font-family: "Inter", Sans-serif;
        font-size: 16px;
        font-weight: 400;
    }

    .elementor-kit-7 h1 {
        color: var(--e-global-color-5aa3cd2);
        font-family: "Century Old Style Std", Sans-serif;
        font-size: 50px;
        font-weight: 700;
        line-height: 1.31em;
    }

    .elementor-kit-7 h2 {
        color: var(--e-global-color-5aa3cd2);
        font-family: "Century Old Style Std", Sans-serif;
        font-size: 36px;
        font-weight: 700;
        line-height: 1.3;
    }

    .elementor-kit-7 h3 {
        color: var(--e-global-color-64137c9);
        font-family: "Century Old Style Std", Sans-serif;
        font-size: 28px;
        font-weight: 700;
        line-height: 1.29em;
    }

    .elementor-kit-7 h4 {
        color: var(--e-global-color-64137c9);
        font-family: "Century Old Style Std", Sans-serif;
        font-size: 18px;
        font-weight: 700;
        line-height: 1.29em;
    }

    .elementor-kit-7 h5 {
        color: var(--e-global-color-5aa3cd2);
        font-family: "Century Old Style Std", Sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.37em;
    }

    .elementor-kit-7 h6 {
        color: var(--e-global-color-5aa3cd2);
        font-family: "Century Old Style Std", Sans-serif;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.31em;
    }

    .elementor-kit-7 input:not([type="button"]):not([type="submit"]), .elementor-kit-7 textarea, .elementor-kit-7 .elementor-field-textual {
        color: var(--e-global-color-n0z0p5);
        accent-color: var(--e-global-color-n0z0p5);
        background-color: var(--e-global-color-86d1mq);
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: var(--e-global-color-44kdn5);
        border-radius: 8px 8px 8px 8px;
        padding: 15px 15px 15px 15px;
    }

    .elementor-section.elementor-section-boxed > .elementor-container {
        max-width: 1220px;
    }

    .e-con {
        --container-max-width: 1220px;
    }

    .elementor-widget:not(:last-child) {
        margin-block-end: 20px;
    }

    .elementor-element {
        --widgets-spacing: 20px 20px;
        --widgets-spacing-row: 20px;
        --widgets-spacing-column: 20px;
    }

    {
    }
    h1.entry-title {
        display: var(--page-title-display);
    }

    .site-header .site-branding {
        flex-direction: column;
        align-items: stretch;
    }

    .site-header {
        padding-inline-end: 0px;
        padding-inline-start: 0px;
    }

    .site-footer .site-branding {
        flex-direction: column;
        align-items: stretch;
    }

    @media (max-width: 1024px) {
        .elementor-kit-7 {
            font-size: 15px;
        }

        .elementor-kit-7 h1 {
            font-size: 40px;
        }

        .elementor-kit-7 h2 {
            font-size: 33px;
        }

        .elementor-kit-7 h3 {
            font-size: 32px;
        }

        .elementor-kit-7 h4 {
            font-size: 21px;
        }

        .elementor-kit-7 h5 {
            font-size: 18px;
        }

        .elementor-kit-7 button, .elementor-kit-7 input[type="button"], .elementor-kit-7 input[type="submit"], .elementor-kit-7 .elementor-button {
            font-size: 14px;
        }

        .elementor-section.elementor-section-boxed > .elementor-container {
            max-width: 1024px;
        }

        .e-con {
            --container-max-width: 1024px;
        }
    }

    @media (max-width: 767px) {
        .elementor-kit-7 h1 {
            font-size: 30px;
        }

        .elementor-kit-7 h2 {
            font-size: 25px;
        }

        .elementor-kit-7 h3 {
            font-size: 24px;
        }

        .elementor-kit-7 h4 {
            font-size: 22px;
        }

        .elementor-kit-7 h5 {
            font-size: 20px;
        }

        .elementor-kit-7 h6 {
            font-size: 16px;
        }

        .elementor-kit-7 button, .elementor-kit-7 input[type="button"], .elementor-kit-7 input[type="submit"], .elementor-kit-7 .elementor-button {
            font-size: 15px;
        }

        .elementor-section.elementor-section-boxed > .elementor-container {
            max-width: 767px;
        }

        .e-con {
            --container-max-width: 767px;
        }
    }

    /* Start custom CSS */
    .elementor-button-icon svg {
        width: 31px;
        height: 15px;
        transition: 0.3s;
        position: relative;
        left: 0;
    }

    .elementor-button-icon svg circle {
        stroke: var(--e-global-color-text-on-primary);
    }

    .elementor-button-icon svg path {
        fill: var(--e-global-color-text-on-primary);
    }

    .elementor-button-icon svg circle:hover {
        stroke: var(--e-global-color-12f8b0d);
    }

    .elementor-button-icon svg path:hover {
        fill: var(--e-global-color-12f8b0d);
    }

    .elementor-button-icon {
        position: relative;
    }

    .elementor-button-content-wrapper {
        align-items: center;
    }

    a.elementor-button:hover svg path {
        fill: var(--e-global-color-12f8b0d);
    }

    a.elementor-button:hover svg circle {
        stroke: var(--e-global-color-12f8b0d);
    }

    a.elementor-button:hover svg {
        /*margin-left: 10px;*/
    }

    a.elementor-button:hover svg {
        left: 10px;
    }

    /* End custom CSS */
</style>

<style>

    .elementor-11 .elementor-element.elementor-element-8a0b58b > .elementor-container > .elementor-column > .elementor-widget-wrap {
        align-content: center;
        align-items: center;
    }

    .elementor-11 .elementor-element.elementor-element-8a0b58b:not(.elementor-motion-effects-element-type-background), .elementor-11 .elementor-element.elementor-element-8a0b58b > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-color: var(--e-global-color-12f8b0d);
    }

    .elementor-11 .elementor-element.elementor-element-8a0b58b {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 1px 0px 1px 0px;
    }

    .elementor-11 .elementor-element.elementor-element-8a0b58b > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
        padding-bottom: calc(30px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
        margin-top: calc(30px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
        margin-right: calc(30px / 2);
        margin-left: calc(30px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-items.elementor-inline-items {
        margin-right: calc(-30px / 2);
        margin-left: calc(-30px / 2);
    }

    body.rtl .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        left: calc(-30px / 2);
    }

    body:not(.rtl) .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        right: calc(-30px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-item:not(:last-child):after {
        content: "";
        border-color: var(--e-global-color-text-on-primary);
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child):after {
        border-top-style: solid;
        border-top-width: 1px;
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
        border-left-style: solid;
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
        border-left-width: 1px;
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-icon i {
        transition: color 0.3s;
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-icon svg {
        transition: fill 0.3s;
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 {
        --e-icon-list-icon-size: 14px;
        --icon-vertical-offset: 0px;
    }
    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-item > a {
        font-family: "Inter", Sans-serif;
        font-size: 13px;
        font-weight: 500;
        line-height: 1.31em;
    }

    .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-text {
        color: var(--e-global-color-4831827);
        transition: color 0.3s;
    }

    .elementor-bc-flex-widget .elementor-11 .elementor-element.elementor-element-0edb924.elementor-column .elementor-widget-wrap {
        align-items: center;
    }

    .elementor-11 .elementor-element.elementor-element-0edb924.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
        align-content: center;
        align-items: center;
    }

    .elementor-11 .elementor-element.elementor-element-0edb924.elementor-column > .elementor-widget-wrap {
        justify-content: flex-end;
    }

    .elementor-11 .elementor-element.elementor-element-e813846 {
        width: auto;
        max-width: auto;
    }

    .elementor-11 .elementor-element.elementor-element-e813846 .elementor-heading-title {
        font-family: "Inter", Sans-serif;
        font-size: 13px;
        font-weight: 500;
        color: var(--e-global-color-4831827);
    }

    .elementor-11 .elementor-element.elementor-element-69a4479 {
        --grid-template-columns: repeat(0, auto);
        width: auto;
        max-width: auto;
        --icon-size: 23px;
        --grid-column-gap: 25px;
        --grid-row-gap: 0px;
    }

    .elementor-11 .elementor-element.elementor-element-69a4479 .elementor-widget-container {
        text-align: center;
    }

    .elementor-11 .elementor-element.elementor-element-69a4479 > .elementor-widget-container {
        margin: 0px 0px 0px 12px;
    }

    .elementor-11 .elementor-element.elementor-element-69a4479 .elementor-social-icon {
        background-color: var(--e-global-color-56a7c9);
        --icon-padding: 0em;
    }

    .elementor-11 .elementor-element.elementor-element-69a4479 .elementor-social-icon i {
        color: var(--e-global-color-95c65de);
    }

    .elementor-11 .elementor-element.elementor-element-69a4479 .elementor-social-icon svg {
        fill: var(--e-global-color-95c65de);
    }

    .elementor-11 .elementor-element.elementor-element-955a38f {
        width: auto;
        max-width: auto;
        --e-icon-list-icon-size: 20px;
        --icon-vertical-offset: 0px;
    }

    .elementor-11 .elementor-element.elementor-element-955a38f > .elementor-widget-container {
        margin: 0px 0px 0px 30px;
    }

    .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
        padding-bottom: calc(0px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
        margin-top: calc(0px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
        margin-right: calc(0px / 2);
        margin-left: calc(0px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-items.elementor-inline-items {
        margin-right: calc(-0px / 2);
        margin-left: calc(-0px / 2);
    }

    body.rtl .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        left: calc(-0px / 2);
    }

    body:not(.rtl) .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        right: calc(-0px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-icon i {
        transition: color 0.3s;
    }

    .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-icon svg {
        transition: fill 0.3s;
    }

    .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-item > .elementor-icon-list-text, .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-item > a {
        font-family: "Inter", Sans-serif;
        font-size: 13px;
        font-weight: 500;
        line-height: 1.31em;
    }

    .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-text {
        color: var(--e-global-color-4831827);
        transition: color 0.3s;
    }

    .elementor-11 .elementor-element.elementor-element-130d2a3b > .elementor-container > .elementor-column > .elementor-widget-wrap {
        align-content: center;
        align-items: center;
    }

    .elementor-11 .elementor-element.elementor-element-130d2a3b:not(.elementor-motion-effects-element-type-background), .elementor-11 .elementor-element.elementor-element-130d2a3b > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-color: var(--e-global-color-4831827);
    }

    .elementor-11 .elementor-element.elementor-element-130d2a3b {
        box-shadow: 0px 4px 4px 0px rgba(181, 181, 181, 0.25);
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: 0px;
        margin-bottom: 0px;
        padding: 11px 0px 11px 0px;
        z-index: 999;
    }

    .elementor-11 .elementor-element.elementor-element-130d2a3b > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-11 .elementor-element.elementor-element-1330a1e8 {
        text-align: left;
    }

    .elementor-11 .elementor-element.elementor-element-1330a1e8 img {
        width: 198px;
    }

    .elementor-11 .elementor-element.elementor-element-63c7f927 > .elementor-element-populated {
        padding: 0px 0px 0px 0px;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-menu-toggle {
        margin-left: auto;
        background-color: var(--e-global-color-12f8b0d);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu .elementor-item {
        font-family: "Inter", Sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.53;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--main .elementor-item {
        color: var(--e-global-color-5aa3cd2);
        fill: var(--e-global-color-5aa3cd2);
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 {
        --e-nav-menu-horizontal-menu-item-margin: calc(13px / 2);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child) {
        margin-bottom: 13px;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a, .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-menu-toggle {
        color: var(--e-global-color-64137c9);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a:hover,
    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a.highlighted,
    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-menu-toggle:hover {
        color: var(--e-global-color-text-on-primary);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a:hover,
    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a.highlighted {
        background-color: var(--e-global-color-12f8b0d);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a.elementor-item-active {
        color: var(--e-global-color-4831827);
        background-color: var(--e-global-color-12f8b0d);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown .elementor-item, .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown .elementor-sub-item {
        font-size: 13px;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--main .elementor-nav-menu--dropdown, .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown li:not(:last-child) {
        border-style: solid;
        border-color: #4054B20F;
        border-bottom-width: 1px;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 div.elementor-menu-toggle {
        color: var(--e-global-color-4831827);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 div.elementor-menu-toggle svg {
        fill: var(--e-global-color-4831827);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 div.elementor-menu-toggle:hover {
        color: var(--e-global-color-4831827);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 div.elementor-menu-toggle:hover svg {
        fill: var(--e-global-color-4831827);
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-menu-toggle:hover {
        background-color: var(--e-global-color-12f8b0d);
    }

    .elementor-theme-builder-content-area {
        height: 400px;
    }

    .elementor-location-header:before, .elementor-location-footer:before {
        content: "";
        display: table;
        clear: both;
    }

    @media (min-width: 768px) {
        .elementor-11 .elementor-element.elementor-element-36475be1 {
            width: 21%;
        }

        .elementor-11 .elementor-element.elementor-element-63c7f927 {
            width: 79%;
        }
    }

    @media (max-width: 1024px) and (min-width: 768px) {
        .elementor-11 .elementor-element.elementor-element-27fd286 {
            width: 50%;
        }

        .elementor-11 .elementor-element.elementor-element-0edb924 {
            width: 50%;
        }

        .elementor-11 .elementor-element.elementor-element-36475be1 {
            width: 50%;
        }

        .elementor-11 .elementor-element.elementor-element-63c7f927 {
            width: 50%;
        }
    }

    @media (max-width: 1024px) {
        .elementor-11 .elementor-element.elementor-element-69a4479 {
            --icon-size: 20px;
        }

        .elementor-11 .elementor-element.elementor-element-1330a1e8 img {
            width: 140px;
        }

        .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a {
            padding-left: 24px;
            padding-right: 24px;
            padding-top: 14px;
            padding-bottom: 14px;
        }

        .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--main > .elementor-nav-menu > li > .elementor-nav-menu--dropdown, .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 20px !important;
        }

        .elementor-11 .elementor-element.elementor-element-3795dfa0 {
            --nav-menu-icon-size: 27px;
        }

        .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-menu-toggle {
            border-width: 0px;
            border-radius: 0px;
        }
    }

    @media (max-width: 767px) {
        .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-11 .elementor-element.elementor-element-f2b2363 .elementor-icon-list-item > a {
            font-size: 11px;
        }

        .elementor-11 .elementor-element.elementor-element-0edb924.elementor-column > .elementor-widget-wrap {
            justify-content: flex-start;
        }

        .elementor-11 .elementor-element.elementor-element-69a4479 > .elementor-widget-container {
            margin: 0px 0px 0px 15px;
        }

        .elementor-11 .elementor-element.elementor-element-69a4479 {
            --icon-size: 19px;
            --grid-column-gap: 20px;
        }

        .elementor-11 .elementor-element.elementor-element-955a38f > .elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-item > .elementor-icon-list-text, .elementor-11 .elementor-element.elementor-element-955a38f .elementor-icon-list-item > a {
            font-size: 11px;
        }

        .elementor-11 .elementor-element.elementor-element-36475be1 {
            width: 50%;
        }

        .elementor-11 .elementor-element.elementor-element-63c7f927 {
            width: 50%;
        }

        .elementor-11 .elementor-element.elementor-element-63c7f927 > .elementor-element-populated {
            padding: 0px 16px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-3795dfa0 .elementor-nav-menu--dropdown a {
            padding-left: 20px;
            padding-right: 20px;
        }
    }
    /* Start custom CSS for icon-list, class: .elementor-element-955a38f */
    @media screen and (max-width: 767px) {
        .elementor-11 .elementor-element.elementor-element-955a38f {
            margin-left: auto
        }
    }

    /* End custom CSS */
    /* Start custom CSS for nav-menu, class: .elementor-element-3795dfa0 */
    .elementor-11 .elementor-element.elementor-element-3795dfa0 ul li.Promo-Btn:nth-last-child(2) a {
        font-family: "Poppins", Sans-serif !important;
        color: var(--e-global-color-text-on-primary) !important;
        background-color: var(--e-global-color-12f8b0d) !important;
        padding: 9px 60px 9px 20px !important;
        border-radius: 41px;
        margin-left: 10px !important;
        width: 50%;
        border: 1px solid var(--e-global-color-12f8b0d);
        animation: btnWiggle 2s infinite;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 li.Promo-Btn:nth-last-child(2):hover a {
        background-color: var(--e-global-color-btn-bgc-hover) !important;
        border-color: var(--e-global-color-btn-bgc-hover);
        color: var(--e-global-color-btn-tc-hover) !important;
    }

    @keyframes btnWiggle {
        0% {
            -webkit-transform: rotate(0deg);
        }

        2% {
            -webkit-transform: rotate(-2deg);
        }

        3.5% {
            -webkit-transform: rotate(2deg);
        }

        5% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(0deg);
        }
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 li.Promo-Btn:nth-last-child(2) a::before {
        content: url('/Assets/uploads/2023/06/Group-237681-on-primary.svg');
        opacity: 1 !important;
        right: 8%;
        background: transparent;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 li.Promo-Btn:nth-last-child(2):hover a::before {
        content: url('/Assets/uploads/2023/06/Group-237681-primary.svg');
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 li:nth-last-child(2):hover a::before {
        opacity: 1 !important;
        right: 6%;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 ul li.myaccountIcon:last-child a {
        font-size: 0 !important;
    }

    .elementor-11 .elementor-element.elementor-element-3795dfa0 ul li.myaccountIcon:last-child a::before {
        content: url('/Assets/uploads/2024/11/user_accicon.svg');
        width: 32px;
        height: 32px;
        opacity: 1;
    }

    @media screen and (max-width: 1023px) {
        .elementor-11 .elementor-element.elementor-element-3795dfa0 ul li:nth-last-child(2) a {
            width: fit-content !important;
            font-size: 13px !important;
            margin: 10px 0 20px 20px !important;
        }
    }

    @media (min-width: 1024px) {
        .elementor-11 .elementor-element.elementor-element-3795dfa0 ul.sub-menu {
            column-count: 2;
        }

        .elementor-11 .elementor-element.elementor-element-3795dfa0 .subCol1 ul.sub-menu {
            column-count: 1 !important;
        }
    }

    /* End custom CSS */
    .elementor-17 .elementor-element.elementor-element-4058fbf0:not(.elementor-motion-effects-element-type-background), .elementor-17 .elementor-element.elementor-element-4058fbf0 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-color: var(--e-global-color-4831827)00;
        background-image: url("/Assets/uploads/2023/07/Footer-Background-1-1-scaled.jpg");
        background-position: bottom center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .elementor-17 .elementor-element.elementor-element-4058fbf0 > .elementor-background-overlay {
        background-color: var(--e-global-color-4831827)00;
        opacity: 1;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-4058fbf0 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: 50px;
        margin-bottom: 0px;
    }

    .elementor-bc-flex-widget .elementor-17 .elementor-element.elementor-element-554e4182.elementor-column .elementor-widget-wrap {
        align-items: center;
    }

    .elementor-17 .elementor-element.elementor-element-554e4182.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
        align-content: center;
        align-items: center;
    }

    .elementor-17 .elementor-element.elementor-element-554e4182 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
        margin-bottom: 8px;
    }

    .elementor-17 .elementor-element.elementor-element-554e4182 > .elementor-element-populated {
        margin: 0px 0px 0px 0px;
        --e-column-margin-right: 0px;
        --e-column-margin-left: 0px;
    }

    .elementor-17 .elementor-element.elementor-element-55bc36d0 > .elementor-widget-container {
        margin: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-55bc36d0 .elementor-heading-title {
        font-size: 40px;
        line-height: 49px;
        color: var(--e-global-color-4831827);
    }

    .elementor-17 .elementor-element.elementor-element-3b247a93 {
        width: var(--container-widget-width, 585px);
        max-width: 585px;
        --container-widget-width: 585px;
        --container-widget-flex-grow: 0;
        color: var(--e-global-color-4831827);
    }

    .elementor-17 .elementor-element.elementor-element-3b247a93 > .elementor-widget-container {
        padding: 12px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-eb11e5e {
        width: var(--container-widget-width, 585px);
        max-width: 585px;
        --container-widget-width: 585px;
        --container-widget-flex-grow: 0;
        color: var(--e-global-color-4831827);
    }

    .elementor-17 .elementor-element.elementor-element-eb11e5e > .elementor-widget-container {
        padding: 12px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-3b8e0e29 .elementor-button:hover, .elementor-17 .elementor-element.elementor-element-3b8e0e29 .elementor-button:focus {
        background-color: var(--e-global-color-4831827);
        color: var(--e-global-color-12f8b0d);
    }

    .elementor-17 .elementor-element.elementor-element-3b8e0e29 > .elementor-widget-container {
        margin: 10px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-3b8e0e29 .elementor-button-content-wrapper {
        flex-direction: row-reverse;
    }

    .elementor-17 .elementor-element.elementor-element-3b8e0e29 .elementor-button:hover svg, .elementor-17 .elementor-element.elementor-element-3b8e0e29 .elementor-button:focus svg {
        fill: var(--e-global-color-12f8b0d);
    }

    .elementor-17 .elementor-element.elementor-element-296c420d > .elementor-element-populated {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 10px 10px 0px 10px;
    }

    .elementor-17 .elementor-element.elementor-element-296c420d > .elementor-element-populated > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-d5d9741 > .elementor-widget-container {
        margin: -65px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-d5d9741 {
        text-align: right;
    }

    .elementor-17 .elementor-element.elementor-element-d5d9741 img {
        width: 503px;
        height: 427px;
        object-fit: contain;
        object-position: center center;
    }

    .elementor-17 .elementor-element.elementor-element-1be90047:not(.elementor-motion-effects-element-type-background), .elementor-17 .elementor-element.elementor-element-1be90047 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-image: url("/Assets/uploads/2023/07/Group-237855-1.png");
        background-repeat: no-repeat;
        background-size: contain;
    }

    .elementor-17 .elementor-element.elementor-element-1be90047 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: 0px;
        margin-bottom: -35px;
        padding: 33px 0px 15px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-1be90047 > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-7c5fac5f {
        text-align: center;
    }

    .elementor-17 .elementor-element.elementor-element-7c5fac5f img {
        width: 198px;
        max-width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-5d68aa03 {
        --divider-border-style: solid;
        --divider-color: #FAFAFA1A;
        --divider-border-width: 1px;
    }

    .elementor-17 .elementor-element.elementor-element-5d68aa03 .elementor-divider-separator {
        width: 585px;
        margin: 0 auto;
        margin-center: 0;
    }

    .elementor-17 .elementor-element.elementor-element-5d68aa03 .elementor-divider {
        text-align: center;
        padding-block-start: 5px;
        padding-block-end: 5px;
    }

    .elementor-17 .elementor-element.elementor-element-21238ecf {
        text-align: center;
    }

    .elementor-17 .elementor-element.elementor-element-21238ecf .elementor-heading-title {
        font-family: "Inter", Sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 16px;
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 > .elementor-widget-container {
        margin: 2px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu .elementor-item {
        font-family: "Inter", Sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 10px;
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--main .elementor-item {
        color: var(--e-global-color-agb6pd);
        fill: var(--e-global-color-agb6pd);
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 {
        --e-nav-menu-horizontal-menu-item-margin: calc(29px / 2);
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child) {
        margin-bottom: 29px;
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--dropdown a:hover,
    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--dropdown a.highlighted,
    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-menu-toggle:hover {
        color: var(--e-global-color-5aa3cd2);
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--dropdown a:hover,
    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--dropdown a.elementor-item-active,
    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--dropdown a.highlighted {
        background-color: var(--e-global-color-56a7c9);
    }

    .elementor-17 .elementor-element.elementor-element-48aeb8a8 {
        --grid-template-columns: repeat(0, auto);
        --icon-size: 16px;
        --grid-column-gap: 15px;
        --grid-row-gap: 0px;
    }

    .elementor-17 .elementor-element.elementor-element-48aeb8a8 .elementor-widget-container {
        text-align: center;
    }

    .elementor-17 .elementor-element.elementor-element-48aeb8a8 > .elementor-widget-container {
        margin: 10px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 > .elementor-widget-container {
        margin: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
        padding-bottom: calc(42px / 2);
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
        margin-top: calc(42px / 2);
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
        margin-right: calc(42px / 2);
        margin-left: calc(42px / 2);
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-items.elementor-inline-items {
        margin-right: calc(-42px / 2);
        margin-left: calc(-42px / 2);
    }

    body.rtl .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        left: calc(-42px / 2);
    }

    body:not(.rtl) .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
        right: calc(-42px / 2);
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-item:not(:last-child):after {
        content: "";
        border-color: #ddd;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child):after {
        border-top-style: solid;
        border-top-width: 1px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
        border-left-style: solid;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
        border-left-width: 1px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-icon i {
        color: #FF0000;
        transition: color 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-icon svg {
        fill: #FF0000;
        transition: fill 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 {
        --e-icon-list-icon-size: 18px;
        --e-icon-list-icon-align: left;
        --e-icon-list-icon-margin: 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25) 0 0;
        --icon-vertical-align: flex-start;
        --icon-vertical-offset: 0px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-icon {
        padding-right: 0px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-item > a {
        font-size: 14px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-text {
        color: var(--e-global-color-agb6pd);
        transition: color 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 > .elementor-widget-container {
        margin: 0px 0px 20px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-item:not(:last-child):after {
        content: "";
        border-color: #ddd;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child):after {
        border-top-style: solid;
        border-top-width: 1px;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
        border-left-style: solid;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
        border-left-width: 1px;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-icon i {
        color: var(--e-global-color-12f8b0d);
        transition: color 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-icon svg {
        fill: var(--e-global-color-12f8b0d);
        transition: fill 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 {
        --e-icon-list-icon-size: 15px;
        --e-icon-list-icon-align: left;
        --e-icon-list-icon-margin: 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25) 0 0;
        --icon-vertical-align: center;
        --icon-vertical-offset: 0px;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-icon {
        padding-right: 0px;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-item > a {
        font-size: 14px;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-text {
        transition: color 0.3s;
    }

    .elementor-17 .elementor-element.elementor-element-87102c2 {
        --divider-border-style: solid;
        --divider-color: #00000033;
        --divider-border-width: 1px;
    }

    .elementor-17 .elementor-element.elementor-element-87102c2 > .elementor-widget-container {
        margin: -7px 0px -5px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-87102c2 .elementor-divider-separator {
        width: 100%;
        margin: 0 auto;
        margin-center: 0;
    }

    .elementor-17 .elementor-element.elementor-element-87102c2 .elementor-divider {
        text-align: center;
        padding-block-start: 5px;
        padding-block-end: 5px;
    }

    .elementor-17 .elementor-element.elementor-element-5a4202a1 {
        text-align: center;
    }

    .elementor-17 .elementor-element.elementor-element-5a4202a1 .elementor-heading-title {
        font-family: "Inter", Sans-serif;
        font-size: 14px;
        font-weight: 400;
    }

    .elementor-theme-builder-content-area {
        height: 400px;
    }

    .elementor-location-header:before, .elementor-location-footer:before {
        content: "";
        display: table;
        clear: both;
    }

    @media (min-width: 768px) {
        .elementor-17 .elementor-element.elementor-element-554e4182 {
            width: 55%;
        }

        .elementor-17 .elementor-element.elementor-element-296c420d {
            width: 45%;
        }
    }

    @media (max-width: 1024px) {
        .elementor-17 .elementor-element.elementor-element-4058fbf0 {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .elementor-17 .elementor-element.elementor-element-55bc36d0 .elementor-heading-title {
            font-size: 30px;
            line-height: 38px;
        }

        .elementor-17 .elementor-element.elementor-element-3b8e0e29 > .elementor-widget-container {
            margin: 5px 0px 10px 0px;
        }

        .elementor-17 .elementor-element.elementor-element-3b8e0e29 .elementor-button {
            font-size: 13px;
        }

        .elementor-bc-flex-widget .elementor-17 .elementor-element.elementor-element-296c420d.elementor-column .elementor-widget-wrap {
            align-items: flex-end;
        }

        .elementor-17 .elementor-element.elementor-element-296c420d.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
            align-content: flex-end;
            align-items: flex-end;
        }

        .elementor-17 .elementor-element.elementor-element-d5d9741 img {
            width: 100%;
            height: 100%;
            object-position: top left;
        }

        .elementor-17 .elementor-element.elementor-element-1be90047 {
            padding: 20px 0px 10px 0px;
        }

        .elementor-17 .elementor-element.elementor-element-5d68aa03 .elementor-divider-separator {
            width: 400px;
        }

        .elementor-17 .elementor-element.elementor-element-5d68aa03 .elementor-divider {
            padding-block-start: 5px;
            padding-block-end: 5px;
        }

        .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--dropdown a {
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 24px;
            padding-bottom: 24px;
        }

        .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--main > .elementor-nav-menu > li > .elementor-nav-menu--dropdown, .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 20px !important;
        }

        .elementor-17 .elementor-element.elementor-element-87102c2 .elementor-divider {
            padding-block-start: 5px;
            padding-block-end: 5px;
        }
    }

    @media (max-width: 767px) {
        .elementor-17 .elementor-element.elementor-element-4058fbf0:not(.elementor-motion-effects-element-type-background), .elementor-17 .elementor-element.elementor-element-4058fbf0 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-image: url("/Assets/uploads/2023/07/Footer-Background-1-1-scaled.jpg");
        }
    .elementor-17 .elementor-element.elementor-element-4058fbf0 {
        margin-top: 0px;
        margin-bottom: 0px;
        padding: 40px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-554e4182.elementor-column > .elementor-widget-wrap {
        justify-content: center;
    }

    .elementor-17 .elementor-element.elementor-element-55bc36d0 {
        width: var(--container-widget-width, 300px);
        max-width: 300px;
        --container-widget-width: 300px;
        --container-widget-flex-grow: 0;
        text-align: center;
    }

    .elementor-17 .elementor-element.elementor-element-55bc36d0 > .elementor-widget-container {
        margin: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-55bc36d0 .elementor-heading-title {
        font-size: 25px;
        line-height: 28px;
    }

    .elementor-17 .elementor-element.elementor-element-3b247a93 {
        width: 100%;
        max-width: 100%;
        text-align: center;
    }

    .elementor-17 .elementor-element.elementor-element-3b247a93 > .elementor-widget-container {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-eb11e5e {
        width: 100%;
        max-width: 100%;
        text-align: center;
    }

    .elementor-17 .elementor-element.elementor-element-eb11e5e > .elementor-widget-container {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-3b8e0e29 > .elementor-widget-container {
        margin: 10px 0px 10px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-3b8e0e29 .elementor-button {
        padding: 16px 14px 16px 14px;
    }

    .elementor-17 .elementor-element.elementor-element-d5d9741 > .elementor-widget-container {
        margin: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-1be90047 {
        padding: 40px 0px 20px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-497e0976.elementor-column > .elementor-widget-wrap {
        justify-content: center;
    }

    .elementor-17 .elementor-element.elementor-element-5d68aa03 .elementor-divider-separator {
        width: 217px;
    }

    .elementor-17 .elementor-element.elementor-element-21238ecf {
        width: var(--container-widget-width, 298px);
        max-width: 298px;
        --container-widget-width: 298px;
        --container-widget-flex-grow: 0;
    }

    .elementor-17 .elementor-element.elementor-element-21238ecf > .elementor-widget-container {
        margin: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 > .elementor-widget-container {
        margin: 0px 10px 0px 10px;
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--main .elementor-item {
        padding-left: 5px;
        padding-right: 5px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 {
        --e-nav-menu-horizontal-menu-item-margin: calc(20px / 2);
    }

    .elementor-17 .elementor-element.elementor-element-793e7582 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child) {
        margin-bottom: 20px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 {
        --e-icon-list-icon-size: 15px;
        --e-icon-list-icon-align: right;
        --e-icon-list-icon-margin: 0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25);
        --icon-vertical-align: flex-start;
        --icon-vertical-offset: 2px;
    }

    .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-item > a {
        font-size: 12px;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 {
        --e-icon-list-icon-size: 15px;
        --e-icon-list-icon-align: right;
        --e-icon-list-icon-margin: 0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25);
        --icon-vertical-align: flex-start;
        --icon-vertical-offset: 2px;
    }

    .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-item > a {
        font-size: 12px;
    }

    .elementor-17 .elementor-element.elementor-element-5a4202a1 .elementor-heading-title {
        font-size: 12px;
        line-height: 1.3em;
    }
    }

    /* Start custom CSS for heading, class: .elementor-element-55bc36d0 */
    .elementor-17 .elementor-element.elementor-element-55bc36d0 span {
        color: rgba(1, 99, 190, 1);
    }

    @media (max-width: 767px) {
        .elementor-17 .elementor-element.elementor-element-55bc36d0 > div {
            margin-top: 0 !important;
        }
    }

    /* End custom CSS */
    /* Start custom CSS for button, class: .elementor-element-3b8e0e29 */
    .elementor-17 .elementor-element.elementor-element-3b8e0e29 a.elementor-button:hover svg path {
        fill: var(--e-global-color-12f8b0d) !important;
    }

    .elementor-17 .elementor-element.elementor-element-3b8e0e29 a.elementor-button:hover svg circle {
        stroke: var(--e-global-color-12f8b0d) !important;
        fill: var(--e-global-color-4831827);
    }
    @media screen and (max-width: 767px) {
        .elementor-17 .elementor-element.elementor-element-3b8e0e29 .elementor-button-icon {
            display: none !important;
        }
    }
    .elementor-17 .elementor-element.elementor-element-48aeb8a8 .elementor-social-icon-instagram {
        background: linear-gradient(145.84deg, #BC51EF 17.27%, #E0148E 45.69%, #F19E20 67.39%, #FFE712 92.31%) !important;
    }
    @media screen and (max-width: 590px) {
        .elementor-17 .elementor-element.elementor-element-0b2b2f8 .elementor-icon-list-item:after {
            display: none;
        }
    }
    @media screen and (max-width: 590px) {
        .elementor-17 .elementor-element.elementor-element-2eda907 .elementor-icon-list-item:after {
            display: none;
        }
    }
    .elementor-17 .elementor-element.elementor-element-2eda907 a {
        color: var(--e-global-color-agb6pd);
    }

    /* End custom CSS */
    .elementor-5672 .elementor-element.elementor-element-73e4318 {
        padding: 30px 20px 30px 20px;
    }

    .elementor-5672 .elementor-element.elementor-element-f8b82a5 > .elementor-widget-container {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-5672 .elementor-element.elementor-element-f8b82a5 {
        text-align: center;
    }

    .elementor-5672 .elementor-element.elementor-element-f8b82a5 img {
        max-width: 200px;
    }

    .elementor-5672 .elementor-element.elementor-element-cf0ed70 {
        text-align: center;
    }

    .elementor-5672 .elementor-element.elementor-element-cf0ed70 .elementor-heading-title {
        color: var(--e-global-color-5aa3cd2);
    }

    .elementor-5672 .elementor-element.elementor-element-1b219eb {
        text-align: center;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-field-group {
        padding-right: calc(10px / 2);
        padding-left: calc(10px / 2);
        margin-bottom: 20px;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-form-fields-wrapper {
        margin-left: calc(-10px / 2);
        margin-right: calc(-10px / 2);
        margin-bottom: -20px;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-field-group.recaptcha_v3-bottomleft, .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-field-group.recaptcha_v3-bottomright {
        margin-bottom: 0;
    }

    body.rtl .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-labels-inline .elementor-field-group > label {
        padding-left: 0px;
    }

    body:not(.rtl) .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-labels-inline .elementor-field-group > label {
        padding-right: 0px;
    }

    body .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-labels-above .elementor-field-group > label {
        padding-bottom: 0px;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-field-type-html {
        padding-bottom: 0px;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-field-group .elementor-field {
        color: var(--e-global-color-5aa3cd2);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper) {
        background-color: var(--e-global-color-4831827);
        border-color: #25252582;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-field-group .elementor-select-wrapper select {
        background-color: var(--e-global-color-4831827);
        border-color: #25252582;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-field-group .elementor-select-wrapper::before {
        color: #25252582;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-button {
        border-style: solid;
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .e-form__buttons__wrapper__button-next {
        background-color: var(--e-global-color-12f8b0d);
        color: var(--e-global-color-4831827);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-button[type="submit"] {
        background-color: var(--e-global-color-12f8b0d);
        color: var(--e-global-color-4831827);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-button[type="submit"] svg * {
        fill: var(--e-global-color-4831827);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .e-form__buttons__wrapper__button-previous {
        color: var(--e-global-color-4831827);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .e-form__buttons__wrapper__button-next:hover {
        background-color: var(--e-global-color-5aa3cd2);
        color: var(--e-global-color-4831827);
        border-color: var(--e-global-color-5aa3cd2);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-button[type="submit"]:hover {
        background-color: var(--e-global-color-5aa3cd2);
        color: var(--e-global-color-4831827);
        border-color: var(--e-global-color-5aa3cd2);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .elementor-button[type="submit"]:hover svg * {
        fill: var(--e-global-color-4831827);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 .e-form__buttons__wrapper__button-previous:hover {
        color: var(--e-global-color-4831827);
    }

    .elementor-5672 .elementor-element.elementor-element-c1edf36 {
        --e-form-steps-indicators-spacing: 20px;
        --e-form-steps-indicator-padding: 30px;
        --e-form-steps-indicator-inactive-secondary-color: var(--e-global-color-4831827);
        --e-form-steps-indicator-active-secondary-color: var(--e-global-color-4831827);
        --e-form-steps-indicator-completed-secondary-color: var(--e-global-color-4831827);
        --e-form-steps-divider-width: 1px;
        --e-form-steps-divider-gap: 10px;
    }

    #elementor-popup-modal-5672 .dialog-widget-content {
        animation-duration: 0.5s;
        border-radius: 10px 10px 10px 10px;
        box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, 0.2);
    }

    #elementor-popup-modal-5672 {
        background-color: rgba(0, 0, 0, .8);
        justify-content: center;
        align-items: center;
        pointer-events: all;
    }

    #elementor-popup-modal-5672 .dialog-message {
        width: 400px;
        height: auto;
        padding: 0px 0px 0px 0px;
    }

    #elementor-popup-modal-5672 .dialog-close-button {
        display: flex;
    }

    @media (max-width: 767px) {
        .elementor-5672 .elementor-element.elementor-element-f8b82a5 > .elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        #elementor-popup-modal-5672 .dialog-widget-content {
            margin: 0px 20px 0px 20px;
        }
    }

    /* Start custom CSS for heading, class: .elementor-element-cf0ed70 */
    .elementor-5672 .elementor-element.elementor-element-cf0ed70 span {
        color: var(--e-global-color-12f8b0d);
    }

    /* End custom CSS */
    /* Start custom CSS for text-editor, class: .elementor-element-1b219eb */
    .elementor-5672 .elementor-element.elementor-element-1b219eb p {
        margin-bottom: 0;
    }

    /* End custom CSS */
    .elementor-4347 .elementor-element.elementor-element-af0e63d, .elementor-4347 .elementor-element.elementor-element-af0e63d > .elementor-background-overlay {
        border-radius: 15px 15px 15px 15px;
    }

    .elementor-4347 .elementor-element.elementor-element-6029f2f:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-image: url("/Assets/uploads/2023/08/Frame-63-1.png");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated, .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated > .elementor-background-overlay, .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-background-slideshow {
        border-radius: 15px 0px 0px 15px;
    }

    .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 0px 0px 0px 0px;
    }

    .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-4347 .elementor-element.elementor-element-4e45e30 img {
        width: 100%;
        height: 100%;
        border-radius: 15px 0px 0px 15px;
    }

    .elementor-4347 .elementor-element.elementor-element-1b23372:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-color: var(--e-global-color-4831827);
        background-image: url("/Assets/uploads/2023/08/Layer-1.svg");
        background-position: bottom right;
        background-repeat: no-repeat;
        background-size: contain;
    }

    .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
        margin-bottom: 15px;
    }

    .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-element-populated, .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-element-populated > .elementor-background-overlay, .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-background-slideshow {
        border-radius: 0px 15px 15px 0px;
    }

    .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-element-populated {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 30px 30px 30px 30px;
    }

    .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-element-populated > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-4347 .elementor-element.elementor-element-251d995 .elementor-heading-title {
        font-family: "Century Old Style Std", Sans-serif;
        font-size: 38px;
        font-weight: 700;
    }

    .elementor-4347 .elementor-element.elementor-element-e85edc0 > .elementor-widget-container {
        margin: 5px 0px -10px 0px;
    }

    .elementor-4347 .elementor-element.elementor-element-e85edc0 {
        color: var(--e-global-color-5aa3cd2);
        font-family: "Poppins", Sans-serif;
        font-size: 16px;
        font-weight: 400;
    }

    .elementor-4347 .elementor-element.elementor-element-0cad170 {
        width: auto;
        max-width: auto;
        top: 246px;
    }

    body:not(.rtl) .elementor-4347 .elementor-element.elementor-element-0cad170 {
        left: 76px;
    }

    body.rtl .elementor-4347 .elementor-element.elementor-element-0cad170 {
        right: 76px;
    }

    .elementor-4347 .elementor-element.elementor-element-1c57a52 {
        width: auto;
        max-width: auto;
    }

    .elementor-4347 .elementor-element.elementor-element-1c57a52 > .elementor-widget-container {
        background-color: var(--e-global-color-12f8b0d)19;
        margin: 54px 0px 0px 0px;
        padding: 10px 30px 10px 30px;
        border-radius: 30px 30px 30px 30px;
    }

    .elementor-4347 .elementor-element.elementor-element-1c57a52 .elementor-heading-title {
        font-family: "Inter", Sans-serif;
        font-size: 16px;
        font-weight: 700;
        color: var(--e-global-color-12f8b0d);
    }

    .elementor-4347 .elementor-element.elementor-element-b10f3b1 .elementor-button {
        background-color: var(--e-global-color-12f8b0d);
        fill: var(--e-global-color-4831827);
        color: var(--e-global-color-4831827);
        padding: 15px 34px 15px 034px;
    }

    .elementor-4347 .elementor-element.elementor-element-b10f3b1 .elementor-button:hover, .elementor-4347 .elementor-element.elementor-element-b10f3b1 .elementor-button:focus {
        background-color: var(--e-global-color-12f8b0d);
        color: var(--e-global-color-4831827);
    }

    .elementor-4347 .elementor-element.elementor-element-b10f3b1 > .elementor-widget-container {
        margin: 20px 0px 0px 0px;
    }

    .elementor-4347 .elementor-element.elementor-element-b10f3b1 .elementor-button-content-wrapper {
        flex-direction: row-reverse;
    }

    .elementor-4347 .elementor-element.elementor-element-b10f3b1 .elementor-button .elementor-button-content-wrapper {
        gap: 11px;
    }

    .elementor-4347 .elementor-element.elementor-element-b10f3b1 .elementor-button:hover svg, .elementor-4347 .elementor-element.elementor-element-b10f3b1 .elementor-button:focus svg {
        fill: var(--e-global-color-4831827);
    }

    #elementor-popup-modal-4347 .dialog-widget-content {
        animation-duration: 0.5s;
        background-color: var(--e-global-color-4831827)00;
        border-radius: 15px 15px 15px 15px;
        box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, 0.2);
        margin: 0px 10px 01px 0px;
    }

    #elementor-popup-modal-4347 {
        background-color: rgba(0, 0, 0, .8);
        justify-content: center;
        align-items: center;
        pointer-events: all;
    }

    #elementor-popup-modal-4347 .dialog-message {
        width: 900px;
        height: auto;
    }

    #elementor-popup-modal-4347 .dialog-close-button {
        display: flex;
        top: 5%;
    }

    body:not(.rtl) #elementor-popup-modal-4347 .dialog-close-button {
        right: 4%;
    }

    body.rtl #elementor-popup-modal-4347 .dialog-close-button {
        left: 4%;
    }

    #elementor-popup-modal-4347 .dialog-close-button i {
        color: var(--e-global-color-4831827);
    }

    #elementor-popup-modal-4347 .dialog-close-button svg {
        fill: var(--e-global-color-4831827);
    }

    @media (min-width: 768px) {
        .elementor-4347 .elementor-element.elementor-element-6029f2f {
            width: 43%;
        }

        .elementor-4347 .elementor-element.elementor-element-1b23372 {
            width: 57%;
        }
    }

    @media (max-width: 1024px) and (min-width: 768px) {
        .elementor-4347 .elementor-element.elementor-element-6029f2f {
            width: 40%;
        }
    }

    @media (max-width: 1024px) {
        .elementor-4347 .elementor-element.elementor-element-af0e63d, .elementor-4347 .elementor-element.elementor-element-af0e63d > .elementor-background-overlay {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated, .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated > .elementor-background-overlay, .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-background-slideshow {
            border-radius: 15px 0px 0px 15px;
        }

        .elementor-4347 .elementor-element.elementor-element-4e45e30 img {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-element-populated {
            padding: 60px 20px 20px 20px;
        }

        .elementor-4347 .elementor-element.elementor-element-251d995 .elementor-heading-title {
            font-size: 25px;
        }

        body:not(.rtl) .elementor-4347 .elementor-element.elementor-element-0cad170 {
            left: 60px;
        }

        body.rtl .elementor-4347 .elementor-element.elementor-element-0cad170 {
            right: 60px;
        }

        .elementor-4347 .elementor-element.elementor-element-0cad170 {
            top: 190px;
        }

        .elementor-4347 .elementor-element.elementor-element-0cad170 img {
            width: 70%;
        }

        .elementor-4347 .elementor-element.elementor-element-b10f3b1 .elementor-button {
            padding: 12px 30px 12px 30px;
        }

        #elementor-popup-modal-4347 {
            align-items: center;
        }

        #elementor-popup-modal-4347 .dialog-widget-content {
            border-radius: 0px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
        }

        #elementor-popup-modal-4347 .dialog-message {
            padding: 0px 10px 0px 10px;
        }
    }
    @media (max-width: 767px) {
        .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated, .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated > .elementor-background-overlay, .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-background-slideshow {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-4347 .elementor-element.elementor-element-6029f2f > .elementor-element-populated {
            padding: 70px 20px 70px 20px;
        }

        .elementor-4347 .elementor-element.elementor-element-4e45e30 img {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-element-populated, .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-element-populated > .elementor-background-overlay, .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-background-slideshow {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-4347 .elementor-element.elementor-element-1b23372 > .elementor-element-populated {
            padding: 40px 20px 20px 20px;
        }

        .elementor-4347 .elementor-element.elementor-element-e85edc0 {
            font-size: 14px;
        }

        .elementor-4347 .elementor-element.elementor-element-0cad170 {
            top: 200px;
        }

        .elementor-4347 .elementor-element.elementor-element-b10f3b1 > .elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        #elementor-popup-modal-4347 .dialog-message {
            padding: 0px 0px 0px 0px;
        }
    }

    /* Start custom CSS for heading, class: .elementor-element-251d995 */
    .elementor-4347 .elementor-element.elementor-element-251d995 span {
        color: var(--e-global-color-12f8b0d);
    }

    /* End custom CSS */
    /* Start custom CSS */
    #elementor-popup-modal-4347 i.eicon-close {
        padding: 5px;
        background: var(--e-global-color-12f8b0d);
        border-radius: 50px;
    }

    /* End custom CSS */
</style>

<style>
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
    }

    @media screen and (max-height: 1024px) {
        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }

    @media screen and (max-height: 640px) {
        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }
</style>
<style id="wp-custom-css">
    html {
        overflow-x: hidden;
    }

    h2.wp-block-heading a {
        font-size: 36px !important;
        font-weight: 700;
    }

    h3.wp-block-heading a {
        font-size: 28px !important;
        font-weight: 600;
    }

    ul.wp-block-list {
        padding-bottom: 20px;
    }

    .wp-block-image {
        margin-bottom: 20px;
    }

    .ilbIconList.center {
        margin: 50px 0;
    }

    .ilbIconList.center {
        margin-top: 0px !important;
    }

    .ilbIconList.left {
        margin-bottom: 50px !important;
    }        </style>