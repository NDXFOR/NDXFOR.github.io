    <div id="map">

        <link rel="stylesheet" href="<?= base_url() ?>assets/tahunan/css/leaflet.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/tahunan/css/qgis2web.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/tahunan/css/fontawesome-all.min.css">
        <script src="<?= base_url() ?>assets/tahunan/js/qgis2web_expressions.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/leaflet.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/leaflet-svg-shape-markers.min.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/leaflet.rotatedMarker.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/leaflet.pattern.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/leaflet-hash.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/Autolinker.min.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/rbush.min.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/labelgun.min.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/js/labels.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/data/ADMINISTRASIDESA_AR_25K_0.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/data/Sungai_1.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/data/Jalan_2.js"></script>
        <script src="<?= base_url() ?>assets/tahunan/data/Objek_Penting_3.js"></script>
        <script>
            var map = L.map('map', {
                zoomControl: true,
                maxZoom: 28,
                minZoom: 1
            }).fitBounds([
                [-6.6386004860826855, 110.67701606384594],
                [-6.609559160190946, 110.72709705371435]
            ]);
            var hash = new L.Hash(map);
            map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
            var autolinker = new Autolinker({
                truncate: {
                    length: 30,
                    location: 'smart'
                }
            });
            var bounds_group = new L.featureGroup([]);

            function setBounds() {}

            function pop_ADMINISTRASIDESA_AR_25K_0(feature, layer) {
                var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker.link(feature.properties['KDPPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker.link(feature.properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker.link(feature.properties['KDPBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker.link(feature.properties['FCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker.link(feature.properties['LUASWH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(feature.properties['UUPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker.link(feature.properties['SRS_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LCODE'] !== null ? autolinker.link(feature.properties['LCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker.link(feature.properties['METADATA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker.link(feature.properties['KDEBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker.link(feature.properties['KDEPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker.link(feature.properties['KDCBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker.link(feature.properties['KDCPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker.link(feature.properties['KDBBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDBPUM'] !== null ? autolinker.link(feature.properties['KDBPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker.link(feature.properties['WADMKD'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker.link(feature.properties['WIADKD'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker.link(feature.properties['WADMKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker.link(feature.properties['WIADKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker.link(feature.properties['WIADKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker.link(feature.properties['WIADPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker.link(feature.properties['TIPADM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature.properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
                layer.bindPopup(popupContent, {
                    maxHeight: 400
                });
            }

            function style_ADMINISTRASIDESA_AR_25K_0_0(feature) {
                switch (String(feature.properties['NAMOBJ'])) {
                    case 'Bacin':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(216,66,116,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bae':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(239,127,29,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bakalan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(209,93,137,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bakalankrapyak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(196,72,205,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bakung':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(201,70,206,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Balong':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(232,80,88,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bancak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(202,233,47,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bandengan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(138,216,29,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bandung':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(212,203,80,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bandungharjo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(179,131,226,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bandungrejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(32,214,35,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Banget':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(97,230,132,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bango':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(94,84,207,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bangsri':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(113,130,240,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Banjaran':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(236,137,76,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bantengmati':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(214,221,13,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bantrung':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(219,27,88,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Banyumanis':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(225,101,63,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Banyuputih':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(72,201,68,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bapangan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(62,202,59,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Barongan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(238,224,103,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Batealit':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(212,175,124,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Batugede':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(68,221,93,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Batukali':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(165,203,39,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bawu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(209,141,63,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bendanpete':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(67,229,97,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bendokaton Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(192,40,226,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bermi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(225,193,124,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Besito':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(77,235,146,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Betokan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(212,53,220,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bleber':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(206,234,48,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Blimbing Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(164,203,120,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Blimbingrejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(46,225,55,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Blingoh':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(79,205,205,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bondo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(143,64,239,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Brantaksekarjati':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(216,133,225,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bringin':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(152,221,117,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Buaran':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(240,220,87,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bucu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(134,201,220,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bugel':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(231,87,169,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bugo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(126,205,100,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Buko':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(238,82,113,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bulakbaru':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(206,89,208,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bulu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(217,46,200,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bulungan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(157,234,122,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bumiharjo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(110,200,128,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bungo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(41,168,223,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Bungu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(64,223,196,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Burikan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(202,113,30,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Cabak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(229,121,111,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Cabean':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(237,176,115,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Cangkring':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(147,226,19,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Cangkringrembang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(15,15,237,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Cendono':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(76,200,95,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Cepogo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(29,236,136,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Clering':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(85,211,236,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Damaran':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(130,181,235,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Damarjati':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(229,44,96,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Damarwulan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(69,222,181,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Daren':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(119,180,236,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Datar':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(236,41,16,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Demaan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(159,127,222,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Demangan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(135,78,216,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Dermolo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(221,67,103,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Dersalam':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(37,155,223,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Dongos':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(217,89,80,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Dorang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(237,86,91,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Dudakawu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(115,230,172,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Dumpil':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(205,71,194,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gadu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(108,80,230,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gajah':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(175,208,83,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gajihan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(223,80,137,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gamong':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(215,51,160,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Garung Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(205,39,119,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gedangan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(222,207,91,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gelang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(166,237,138,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gemiring Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(85,230,52,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gemiring Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(200,60,137,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gempolsongo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(73,237,199,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gemulung':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(26,57,233,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Geneng':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(233,125,37,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gerdu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(238,128,223,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gerit':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(167,204,88,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gesengan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(231,181,106,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Getaspejaten':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(227,102,100,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Getasrabi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(16,27,220,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gidangelo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(153,130,237,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Giling':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(48,26,213,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Glantengan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(87,221,217,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gondangmanis':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(230,90,172,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gondosari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(59,219,75,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gribik':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(208,120,151,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Grogolan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(119,216,151,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gulang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(101,239,198,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gulangpongge':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(143,200,104,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gunungsari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(107,144,203,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gunungwungkal':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(91,211,105,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Gurung Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(73,239,27,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Guwosobokerto':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(74,69,230,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Guyangan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(107,81,209,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jali':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(237,101,201,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jambu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(118,117,201,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jambu Timur':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(92,233,231,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Janggalan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(223,223,88,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jati Kulon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(84,221,93,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jati Wetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(63,127,211,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jatirejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(200,31,12,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jatisari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(124,213,204,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jebol':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(43,231,152,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jembulwunut':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(201,107,146,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jepalo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(231,87,118,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jepang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(113,226,113,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jepangpakis':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(208,130,71,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jerukwangi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(186,226,25,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jetak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(86,217,234,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jetiskapuan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(134,95,217,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jinggotan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(240,38,71,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jlegong':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(234,210,137,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jleper':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(123,190,207,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jobokuto':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(231,60,54,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jondang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(202,211,99,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jrahi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(213,112,166,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jugo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(152,59,223,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jungpasir':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(204,94,69,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jungsemi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(134,140,225,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Jurang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(205,89,164,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kajeksan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(221,207,48,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kaliaman':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(109,216,180,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kalianyar':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(43,223,16,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kalicilik':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(90,227,124,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kaligarang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(68,200,191,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kaliombo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(222,24,166,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kalipitu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(218,215,59,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kalipucang Kulon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(71,170,220,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kalipucang Wetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(182,216,32,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kancilan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(109,75,202,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangaji':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(165,203,119,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangampel':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(236,117,37,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karanganyar':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(199,85,230,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangbener':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(100,122,211,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karanggondang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(32,38,202,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangkebagusan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(95,42,221,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangmalang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(88,229,154,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangmlati':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(92,219,46,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangnongko':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(148,103,232,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangrandu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(93,214,188,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangrowo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(27,52,239,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karangsari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(238,110,110,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Karimunjawa':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(74,172,217,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kauman':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(164,82,240,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kawak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(30,218,239,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kecapi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(112,230,22,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedondong':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(123,223,185,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungcino':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(192,200,42,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungdowo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(127,229,135,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungkarang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(90,181,230,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungleper':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(232,127,181,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungmalang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(236,49,202,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungmutih':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(56,93,218,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungsari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(87,140,201,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungsarimulyo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(89,212,132,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungwaru Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(88,224,210,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kedungwaru Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(222,146,111,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kelet':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(217,27,30,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Keling':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(113,164,216,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kemujan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(72,108,208,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kendalasem':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(215,144,20,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kendengsidialit':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(231,156,129,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kenduren':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(72,138,231,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kepuk':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(142,40,205,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kerjasan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(224,77,54,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kerso':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(224,233,101,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ketanjung':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(19,202,62,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ketilengsingolelo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(118,112,214,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kirig':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(151,210,13,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Klepu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(224,215,132,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Klumpit':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(228,225,124,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kotaan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(55,202,228,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kramat':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(131,121,215,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Krandon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(208,69,157,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Krapyak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(133,221,86,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Krasak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(103,38,200,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kriyan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(240,65,196,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kuanyar':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(56,160,224,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kunir':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(124,209,75,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Kuwasem':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(147,67,218,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Langgardalem':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(225,131,211,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Langon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(92,153,206,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Lau':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(81,197,208,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Lebak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(68,234,168,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Lebuawu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(213,140,237,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Loram Kulon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(218,51,185,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Loram Wetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(201,220,30,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mambak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(193,60,219,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mangunan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(31,234,224,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mantingan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(238,232,108,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Manyargading':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(209,29,119,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Margorejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(202,75,132,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Margoyoso':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(209,240,130,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mayong Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(180,120,236,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mayong Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(237,172,125,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Medani':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(183,44,225,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Megawon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(197,122,204,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Menawan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(81,35,232,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Menganti':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(66,155,223,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mijen':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(227,190,44,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mindahan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(137,211,41,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mindahan Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(232,235,28,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mlaten':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(75,221,202,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mlati Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(22,215,83,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mlati Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(139,49,203,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mlatinorowito':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(163,211,116,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mlekang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(101,151,213,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mojo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(120,84,230,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mororejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(19,170,230,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mulyoharjo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(196,52,215,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mulyorejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(22,233,180,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Muryolobo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(34,65,203,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mutih Kulon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(29,191,200,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Mutih Wetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(186,13,213,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Nalumsari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(233,118,61,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngablak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(231,85,105,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngabul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(82,234,143,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngaluran':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(180,47,203,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Nganguk':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(65,222,227,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngasem':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(52,227,75,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngawen':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(201,33,193,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngegot':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(68,218,73,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngeling':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(58,217,145,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngelo Kulon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(214,99,153,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngelowetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(237,68,183,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngembal Kulon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(118,183,229,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngembalrejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(203,84,92,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngemplak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(103,239,18,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngemplik Wetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(33,208,100,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngetuk':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(160,105,205,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ngroto':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(86,233,49,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Palemkerep':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(226,25,162,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pancur':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(198,232,117,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Panggang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(166,38,235,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Panggung':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(203,14,65,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Panjang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(110,189,223,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Panjunan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(214,48,67,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Papasan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(78,175,211,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Papringan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(69,83,234,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Parang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(39,232,216,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Paren':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(224,120,139,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pasir':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(137,192,237,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pasuruhan Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(126,226,38,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pasuruhan Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(201,176,32,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Payak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(203,158,53,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Payaman':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(21,205,147,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pecangan Kulon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(236,37,93,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pecangan Wetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(205,82,184,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pecuk':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(25,209,108,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pedawang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(206,51,206,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pedurenan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(101,138,233,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Peganjaran':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(89,127,203,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pekalongan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(215,133,89,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pelang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(50,222,142,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pendem':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(56,196,217,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pendosawalan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(162,64,207,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pengkol':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(221,121,214,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Perdopo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(179,117,215,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Petekeyan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(67,222,233,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Piji':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(153,205,62,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Plajan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(179,231,136,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Plaosan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(152,216,24,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Platar':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(198,209,116,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ploso':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(117,48,228,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Poncoharjo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(133,38,234,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Potroyudan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(187,213,110,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Prambatan Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(65,134,238,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Prambatan Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(92,224,80,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pringtulis':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(142,107,203,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pule':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(223,123,193,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Pulodarat':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(133,238,88,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Puncel':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(202,71,91,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Purwogondo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(105,136,230,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Purwokerto':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(59,208,113,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Purworejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(18,201,204,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Purwosari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(171,104,205,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Puyoh':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(17,39,237,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Rahtawu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(118,160,238,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Rajekwesi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(184,222,128,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Raji':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(95,214,44,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ranguklampitan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(204,170,106,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Rau':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(117,226,188,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Rejosari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(129,224,139,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Rendeng':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(240,185,76,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Rengging':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(180,68,221,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Robayan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(227,130,74,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ruwit':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(55,235,35,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Samirejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(211,123,131,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sampok':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(223,137,52,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(238,107,92,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Saripan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(211,144,127,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sedo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(221,93,42,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sekuro':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(227,31,116,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Semat':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(143,215,121,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sendang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(97,208,191,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Senenan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(207,113,94,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sengonbugel':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(203,107,102,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sentul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(224,57,185,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Setrokalangan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(138,237,125,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sidigede':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(20,204,75,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sidomulyo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(34,213,177,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sidorekso':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(216,70,44,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sinanggul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(216,24,142,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Singocandi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(206,65,204,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Singorejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(156,65,217,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sirahan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(221,200,94,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sitiluhur':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(141,81,219,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Slagi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(85,224,75,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Smanggu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(175,76,214,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Soco':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(208,46,105,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Somosari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(67,56,222,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sowan Kidul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(234,19,148,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sowan Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(142,75,218,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Srikandang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(204,55,14,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Srobyong':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(52,203,148,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sukodono':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(212,226,121,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sukosono':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(217,162,23,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sumanding':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(192,125,221,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sumur':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(109,203,232,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Sunggingan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(208,168,35,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Surodadi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(131,203,117,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Suwawal':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(21,225,106,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Suwawal Timur':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(228,37,187,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tahunan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(211,145,60,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tanggul':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(83,56,240,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tanggultlare':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(93,225,157,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tanjung':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(100,131,203,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tanjungkarang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(117,101,239,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tedunan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(144,178,237,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tegalarum':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(25,86,218,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tegalombo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(169,228,106,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tegalsambi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(139,238,121,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Teluk Wetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(205,167,62,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Telukawur':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(118,179,220,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tempel':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(31,207,131,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tempur':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(33,233,196,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tempuran':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(189,225,123,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tengguli':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(225,110,60,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ternadi':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(106,224,21,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tigajuru':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(239,103,223,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Trengguli':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(214,107,224,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tritis':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(112,130,220,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Troso':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(214,140,60,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tubanan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(146,240,229,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tugu Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(230,41,60,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tulakan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(110,92,227,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tumpangkrasak':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(221,189,72,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tunahan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(134,208,233,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tunggulpandean':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(238,201,38,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Turirejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(135,233,156,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Tuwang':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(81,180,202,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ujungbatu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(67,70,237,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ujungpandan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(217,73,26,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Ujungwatu':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(213,68,104,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Undaan Lor':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(100,80,203,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wanusoba':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(178,208,72,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wates':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(185,71,214,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Watuaji':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(135,222,178,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wedelan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(102,231,95,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Weding':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(226,59,220,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wedusan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(35,96,240,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Welahan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(204,70,110,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wergu Kulon':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(31,227,172,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wonoketingal':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(159,211,110,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wonorejo':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(212,125,19,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wonosari':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(240,187,102,1.0)',
                                interactive: true,
                        }
                        break;
                    case 'Wrgu Wetan':
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(118,208,144,1.0)',
                                interactive: true,
                        }
                        break;
                    default:
                        return {
                            pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                                opacity: 1,
                                color: 'rgba(35,35,35,1.0)',
                                dashArray: '',
                                lineCap: 'butt',
                                lineJoin: 'miter',
                                weight: 1.0,
                                fill: true,
                                fillOpacity: 1,
                                fillColor: 'rgba(140,114,207,1.0)',
                                interactive: true,
                        }
                        break;
                }
            }
            map.createPane('pane_ADMINISTRASIDESA_AR_25K_0');
            map.getPane('pane_ADMINISTRASIDESA_AR_25K_0').style.zIndex = 400;
            map.getPane('pane_ADMINISTRASIDESA_AR_25K_0').style['mix-blend-mode'] = 'normal';
            var layer_ADMINISTRASIDESA_AR_25K_0 = new L.geoJson(json_ADMINISTRASIDESA_AR_25K_0, {
                attribution: '',
                interactive: true,
                dataVar: 'json_ADMINISTRASIDESA_AR_25K_0',
                layerName: 'layer_ADMINISTRASIDESA_AR_25K_0',
                pane: 'pane_ADMINISTRASIDESA_AR_25K_0',
                onEachFeature: pop_ADMINISTRASIDESA_AR_25K_0,
                style: style_ADMINISTRASIDESA_AR_25K_0_0,
            });
            bounds_group.addLayer(layer_ADMINISTRASIDESA_AR_25K_0);
            map.addLayer(layer_ADMINISTRASIDESA_AR_25K_0);

            function pop_Sungai_1(feature, layer) {
                var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NamaSungai'] !== null ? autolinker.link(feature.properties['NamaSungai'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
                layer.bindPopup(popupContent, {
                    maxHeight: 400
                });
            }

            function style_Sungai_1_0() {
                return {
                    pane: 'pane_Sungai_1',
                    opacity: 1,
                    color: 'rgba(23,201,255,1.0)',
                    dashArray: '',
                    lineCap: 'square',
                    lineJoin: 'bevel',
                    weight: 3.0,
                    fillOpacity: 0,
                    interactive: true,
                }
            }
            map.createPane('pane_Sungai_1');
            map.getPane('pane_Sungai_1').style.zIndex = 401;
            map.getPane('pane_Sungai_1').style['mix-blend-mode'] = 'normal';
            var layer_Sungai_1 = new L.geoJson(json_Sungai_1, {
                attribution: '',
                interactive: true,
                dataVar: 'json_Sungai_1',
                layerName: 'layer_Sungai_1',
                pane: 'pane_Sungai_1',
                onEachFeature: pop_Sungai_1,
                style: style_Sungai_1_0,
            });
            bounds_group.addLayer(layer_Sungai_1);
            map.addLayer(layer_Sungai_1);

            function pop_Jalan_2(feature, layer) {
                var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NamaJalan'] !== null ? autolinker.link(feature.properties['NamaJalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
                layer.bindPopup(popupContent, {
                    maxHeight: 400
                });
            }

            function style_Jalan_2_0() {
                return {
                    pane: 'pane_Jalan_2',
                    opacity: 1,
                    color: 'rgba(255,252,251,1.0)',
                    dashArray: '',
                    lineCap: 'square',
                    lineJoin: 'bevel',
                    weight: 3.0,
                    fillOpacity: 0,
                    interactive: true,
                }
            }
            map.createPane('pane_Jalan_2');
            map.getPane('pane_Jalan_2').style.zIndex = 402;
            map.getPane('pane_Jalan_2').style['mix-blend-mode'] = 'normal';
            var layer_Jalan_2 = new L.geoJson(json_Jalan_2, {
                attribution: '',
                interactive: true,
                dataVar: 'json_Jalan_2',
                layerName: 'layer_Jalan_2',
                pane: 'pane_Jalan_2',
                onEachFeature: pop_Jalan_2,
                style: style_Jalan_2_0,
            });
            bounds_group.addLayer(layer_Jalan_2);
            map.addLayer(layer_Jalan_2);

            function pop_Objek_Penting_3(feature, layer) {
                var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NamaObjek'] !== null ? autolinker.link(feature.properties['NamaObjek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JenisObjek'] !== null ? autolinker.link(feature.properties['JenisObjek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
                layer.bindPopup(popupContent, {
                    maxHeight: 400
                });
            }

            function style_Objek_Penting_3_0() {
                return {
                    pane: 'pane_Objek_Penting_3',
                    shape: 'diamond',
                    radius: 6.0,
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(239,27,16,1.0)',
                    interactive: true,
                }
            }
            map.createPane('pane_Objek_Penting_3');
            map.getPane('pane_Objek_Penting_3').style.zIndex = 403;
            map.getPane('pane_Objek_Penting_3').style['mix-blend-mode'] = 'normal';
            var layer_Objek_Penting_3 = new L.geoJson(json_Objek_Penting_3, {
                attribution: '',
                interactive: true,
                dataVar: 'json_Objek_Penting_3',
                layerName: 'layer_Objek_Penting_3',
                pane: 'pane_Objek_Penting_3',
                onEachFeature: pop_Objek_Penting_3,
                pointToLayer: function(feature, latlng) {
                    var context = {
                        feature: feature,
                        variables: {}
                    };
                    return L.shapeMarker(latlng, style_Objek_Penting_3_0(feature));
                },
            });
            bounds_group.addLayer(layer_Objek_Penting_3);
            map.addLayer(layer_Objek_Penting_3);
            setBounds();
        </script>