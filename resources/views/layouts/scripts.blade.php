<!-- Libs JS -->
<script src="{{ asset('dashkit/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/@shopify/draggable/lib/es5/draggable.bundle.legacy.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/autosize/dist/autosize.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/list.js/dist/list.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/quill/dist/quill.min.js')}}"></script>
<script src="{{ asset('dashkit/node_modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/libs/chart.js/Chart.extension.js')}}"></script>

<!-- Map -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Theme JS -->
<!-- build:js @@webRoot/assets/js/theme.min.js -->
<script src="{{ asset('dashkit/src/assets/js/polyfills.js')}}"></script>
{{-- @if (demoMode) {<script src="{{ asset('dashkit/src/assets/js/demo.js')}}"></script>} --}}
<script src="{{ asset('dashkit/src/assets/js/charts.js')}}"></script>
{{-- @if (colorScheme=="dark" || demoMode) {<script src="dashkit/src/assets/js/charts-dark.js"></script>} --}}
<script src="{{ asset('dashkit/src/assets/js/autosize.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/dropdowns.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/dropzone.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/flatpickr.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/highlight.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/kanban.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/list.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/map.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/navbar.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/popover.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/quill.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/select2.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/tooltip.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/checklist.js')}}"></script>
<script src="{{ asset('dashkit/src/assets/js/wizard.js')}}"></script>
<!-- endbuild -->
<!-- build:js @@webRoot/assets/js/dashkit.min.js -->
<script src="{{ asset('dashkit/src/assets/js/dashkit.js')}}"></script>
<!-- endbuild -->
