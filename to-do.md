# test1
Test of inuitcss implementation

##To-do
- General styling,
- The list of all classes available to link to the relevant page,
- Usage of the breakpoint mixin and the keywords,
- Usage of the mixins (tools.mixins) and functions (in tools.functions)

##Existing classes
- .lede
- .layout, .layout__item, .layout--tiny, .layout--small, .layout--large, .layout--huge, .layout--flush, .layout--rev, .layout--middle, .layout--bottom, .layout--right, .layout--center, layout--auto
- .block, .block__img, .block__body, .block--flush, .block--tiny, .block--small, .block--large, .block--huge, .block--right, .block--center
- .media, .media__img, .media__body, .media--flush, .media--tiny, .media--small, .media--large, .media--huge, .media--rev, .media--responsive
- .flag, .flag__img, .flag__body, .flag--flush, .flag--tiny, .flag--small, .flag--large, .flag--huge, .flag--rev, .flag--top, .flag--bottom, .flag--responsive
- .box, .box--flush, .box--tiny, .box--small, .box--large, .box--huge
- .table, .table--fixed, .table--compact, .table--cosy, .table--comfy, .table--cells, .table--rows, .table--columns
- .pack, .pack__item, .pack--middle, .pack--auto, .pack--tiny, .pack--small, .pack--large, .pack--huge, .pack--rev
- .list-bare
- .list-block, .list-block__item, .list-block--tiny, .lidt-block-small, .list-block--large, .list-block--huge
- .list-ui, .list-ui__item, .list-ui--tiny, .list-ui--small, .list-ui--large, .list-ui--huge
- .btn, .btn--small, .btn--large, .btn--full, .btn--pill
- .tabs, .tabs__item, .tabs__link
- .u-1/1, .u-1/2, .u-1/3, .u-1/4, .u-1/5, .u-2/3, .u-2/4, .u-2/5, .u-3/4, .u-3/5, .u-4/5,
.u-1/1-palm, .u-1/2-palm, .u-1/3-palm, .u-1/4-palm, .u-1/5-palm, .u-2/3-palm, .u-2/4-palm, .u-2/5-palm, .u-3/4-palm, .u-3/5-palm, .u-4/5-palm, .u-1/1-lap, .u-1/2-lap, .u-1/3-lap, .u-1/4-lap, .u-1/5-lap, .u-2/3-lap, .u-2/4-lap, .u-2/5-lap, .u-3/4-lap, .u-3/5-lap, .u-4/5-lap, .u-1/1-lap-and-up .u-1/2-lap-and-up, .u-1/3-lap-and-up, .u-1/4-lap-and-up, .u-1/5-lap-and-up, .u-2/3-lap-and-up, .u-2/4-lap-and-up, .u-2/5-lap-and-up, .u-3/4-lap-and-up, .u-3/5-lap-and-up, .u-4/5-lap-and-up, .u-1/1-portable, .u-1/2-portable, .u-1/3-portable, .u-1/4-portable, .u-1/5-portable, .u-2/3-portable, .u-2/4-portable, .u-2/5-portable, .u-3/4-portable, .u-3/5-portable, .u-4/5-portable, .u-1/1-desk, .u-1/2-desk, .u-1/3-desk, .u-1/4-desk, .u-1/5-desk, .u-2/3-desk, .u-2/4-desk, .u-2/5-desk, .u-3/4-desk, .u-3/5-desk, .u-4/5-desk, .u-1/1-retina, .u-1/2-retina, .u-1/3-retina, .u-1/4-retina, .u-1/5-retina, .u-2/3-retina, .u-2/4-retina, .u-2/5-retina, .u-3/4-retina, .u-3/5-retina, .u-4/5-retina
- .m, .m-, .m--, .m+, .m++, .m0, .-m, .mt, .mt-, .mt--, .mt+, .mt++, .mt0, .-mt, .mr, .mr-, .mr--, .mr+, .mr++, .mr0, .-mr, .mb, .mb-, .mb--, .mb+, .mb++, .mb0, .-mb, .ml, .ml-, .ml--, .ml+, .ml++, .ml0, .-ml, .mh, .mh-, .mh--, .mh+, .mh++, .mh0, .-mh, .mv, .mv-, .mv--, .mv+, .mv++, .mv0, .-mv
- .p, .p-, .p--, .p+, .p++, .p0, .pt, .pt-, .pt--, .pt+, .pt++, .pt0, .rp, .pr-, .pr--, .pr+, .pr++, .pr0, .pb, .pb-, .pb--, .pb+, .pb++, .pb0, .pl, .pl-, .pl--, .pl+, .pl++, .pl0, .ph, .ph-, .ph--, .ph+, .ph++, .ph0, .pv, .pv-, .pv--, .pv+, .pv++, .pv0
- .alpha, .beta, .gamma, .delta, .epsilon, .zeta
- .clearfix

##Personal additions
- zebra, .zebra__item, .zebra__item--force, .zebra__item--resist
- .split, .split__title, .split__data
- .text--inv

##Missing classes from inuitcss
- .form-fields, .text-input, .label, .additional, .check-list, .check-label, .spoken-form, .extra-help
- .cf => replaced by .clearfix
- .accessibility..., .visibility...
- .nav, .options, .pagination, .breadcrumb, .block-list, .matrix... => replaced by list-inline, .list-ui, .tabs...
- .island, .islet, .greybox
- .marginalia, .this-or-this
- .multi-list, .line-numbers, .numbered-list
- .stat-group
- .landmark
- .giga, .mega, .kilo, .smallprint, .milli, .micro
- .lead, .source, .code-comment, .informative, .muted, .proceed, .caps
- .img--right, .img--center, .img--left, .img--rounded, .img--short, .img--medium, .img--tall
- .one-whole, .two-thirds... => replaced by .u-1/1...
- .t5, .t10, .t12, .t15; .t20, .t25, .t30, .t33, .t35, .t37, .t40, .t45, .t50, .t55, .t60, .t62, .t65, .t66, .t70, .t75, .t80, .t85, .t87, .t90, .t95
- .table--bordered, .table--striped, .table--data
- .grid... => replaced by .layout
- .flexbox, .flexbox__item
- .text-cols--2, .text-cols--3, .text-cols--4, .text-cols--5
- .link-complex, .fly-out, .icon, .go
- .btn--inactive, .btn--primary, .btn--secondary, .btn--tertiary, .btn--positive, .btn--negative, .btn--natural, .btn--soft, .btn--hard, .pill, .loz
- .rule, .stat-group,
- .brand...
- .float--..., .text--..., .weight--...
- .push, .flush, .soft, .hard... => replaced by .m... and .p...