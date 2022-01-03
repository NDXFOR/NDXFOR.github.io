<div id="map">

    <link rel="stylesheet" href="<?= base_url() ?>assets/jambu/css/leaflet.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/jambu/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/jambu/css/qgis2web.css">

    <script src="<?= base_url() ?>assets/jambu/js/qgis2web_expressions.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/leaflet.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/multi-style-layer.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/leaflet.rotatedMarker.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/leaflet.pattern.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/leaflet-hash.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/Autolinker.min.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/rbush.min.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/labelgun.min.js"></script>
    <script src="<?= base_url() ?>assets/jambu/js/labels.js"></script>
    <script src="<?= base_url() ?>assets/jambu/data/ADMINISTRASIDESA_AR_25K_0.js"></script>
    <script src="<?= base_url() ?>assets/jambu/data/sungaijambu_1.js"></script>
    <script src="<?= base_url() ?>assets/jambu/data/NAMA_JALANJAMBU_2.js"></script>
    <script src="<?= base_url() ?>assets/jambu/data/masjiddidesajambu_3.js"></script>
    <script src="<?= base_url() ?>assets/jambu/data/Balaidesajambu_4.js"></script>
    <script src="<?= base_url() ?>assets/jambu/data/0bjekdesajambu_5.js"></script>


    <script>
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-6.536903616097967, 110.67679156762318],
            [-6.510615016298144, 110.72212555496031]
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
                            fillColor: 'rgba(217,62,147,1.0)',
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
                            fillColor: 'rgba(222,225,56,1.0)',
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
                            fillColor: 'rgba(225,146,77,1.0)',
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
                            fillColor: 'rgba(14,203,153,1.0)',
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
                            fillColor: 'rgba(59,134,226,1.0)',
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
                            fillColor: 'rgba(201,50,83,1.0)',
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
                            fillColor: 'rgba(200,34,209,1.0)',
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
                            fillColor: 'rgba(73,240,129,1.0)',
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
                            fillColor: 'rgba(162,229,69,1.0)',
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
                            fillColor: 'rgba(207,130,240,1.0)',
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
                            fillColor: 'rgba(207,141,35,1.0)',
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
                            fillColor: 'rgba(204,79,65,1.0)',
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
                            fillColor: 'rgba(220,92,224,1.0)',
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
                            fillColor: 'rgba(203,166,34,1.0)',
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
                            fillColor: 'rgba(63,192,201,1.0)',
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
                            fillColor: 'rgba(225,129,39,1.0)',
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
                            fillColor: 'rgba(19,240,52,1.0)',
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
                            fillColor: 'rgba(111,56,222,1.0)',
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
                            fillColor: 'rgba(212,121,138,1.0)',
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
                            fillColor: 'rgba(44,127,211,1.0)',
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
                            fillColor: 'rgba(229,240,15,1.0)',
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
                            fillColor: 'rgba(26,203,150,1.0)',
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
                            fillColor: 'rgba(188,127,237,1.0)',
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
                            fillColor: 'rgba(217,157,89,1.0)',
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
                            fillColor: 'rgba(232,18,218,1.0)',
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
                            fillColor: 'rgba(206,89,95,1.0)',
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
                            fillColor: 'rgba(129,80,236,1.0)',
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
                            fillColor: 'rgba(79,206,15,1.0)',
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
                            fillColor: 'rgba(229,132,63,1.0)',
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
                            fillColor: 'rgba(239,150,106,1.0)',
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
                            fillColor: 'rgba(22,204,67,1.0)',
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
                            fillColor: 'rgba(240,108,82,1.0)',
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
                            fillColor: 'rgba(93,95,200,1.0)',
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
                            fillColor: 'rgba(101,194,240,1.0)',
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
                            fillColor: 'rgba(170,124,205,1.0)',
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
                            fillColor: 'rgba(104,220,206,1.0)',
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
                            fillColor: 'rgba(219,21,127,1.0)',
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
                            fillColor: 'rgba(183,84,216,1.0)',
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
                            fillColor: 'rgba(155,88,213,1.0)',
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
                            fillColor: 'rgba(209,174,122,1.0)',
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
                            fillColor: 'rgba(160,231,94,1.0)',
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
                            fillColor: 'rgba(226,151,93,1.0)',
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
                            fillColor: 'rgba(113,50,229,1.0)',
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
                            fillColor: 'rgba(58,177,207,1.0)',
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
                            fillColor: 'rgba(14,208,218,1.0)',
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
                            fillColor: 'rgba(163,104,235,1.0)',
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
                            fillColor: 'rgba(238,56,229,1.0)',
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
                            fillColor: 'rgba(18,76,211,1.0)',
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
                            fillColor: 'rgba(83,220,19,1.0)',
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
                            fillColor: 'rgba(75,229,201,1.0)',
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
                            fillColor: 'rgba(78,119,230,1.0)',
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
                            fillColor: 'rgba(212,117,188,1.0)',
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
                            fillColor: 'rgba(60,200,228,1.0)',
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
                            fillColor: 'rgba(122,130,239,1.0)',
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
                            fillColor: 'rgba(109,103,232,1.0)',
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
                            fillColor: 'rgba(120,124,234,1.0)',
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
                            fillColor: 'rgba(165,205,120,1.0)',
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
                            fillColor: 'rgba(42,88,206,1.0)',
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
                            fillColor: 'rgba(212,190,101,1.0)',
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
                            fillColor: 'rgba(69,38,208,1.0)',
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
                            fillColor: 'rgba(45,210,130,1.0)',
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
                            fillColor: 'rgba(114,202,168,1.0)',
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
                            fillColor: 'rgba(193,212,98,1.0)',
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
                            fillColor: 'rgba(134,220,108,1.0)',
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
                            fillColor: 'rgba(208,131,48,1.0)',
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
                            fillColor: 'rgba(151,16,224,1.0)',
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
                            fillColor: 'rgba(189,209,100,1.0)',
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
                            fillColor: 'rgba(211,69,233,1.0)',
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
                            fillColor: 'rgba(229,183,57,1.0)',
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
                            fillColor: 'rgba(56,142,240,1.0)',
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
                            fillColor: 'rgba(204,107,82,1.0)',
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
                            fillColor: 'rgba(232,192,62,1.0)',
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
                            fillColor: 'rgba(208,153,14,1.0)',
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
                            fillColor: 'rgba(104,218,114,1.0)',
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
                            fillColor: 'rgba(216,229,74,1.0)',
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
                            fillColor: 'rgba(37,110,237,1.0)',
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
                            fillColor: 'rgba(39,233,25,1.0)',
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
                            fillColor: 'rgba(227,214,37,1.0)',
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
                            fillColor: 'rgba(223,133,231,1.0)',
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
                            fillColor: 'rgba(178,72,220,1.0)',
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
                            fillColor: 'rgba(91,89,201,1.0)',
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
                            fillColor: 'rgba(207,17,191,1.0)',
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
                            fillColor: 'rgba(45,235,134,1.0)',
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
                            fillColor: 'rgba(71,144,212,1.0)',
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
                            fillColor: 'rgba(207,56,76,1.0)',
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
                            fillColor: 'rgba(106,203,159,1.0)',
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
                            fillColor: 'rgba(236,131,166,1.0)',
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
                            fillColor: 'rgba(29,218,202,1.0)',
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
                            fillColor: 'rgba(168,236,20,1.0)',
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
                            fillColor: 'rgba(48,238,225,1.0)',
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
                            fillColor: 'rgba(142,204,119,1.0)',
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
                            fillColor: 'rgba(113,161,234,1.0)',
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
                            fillColor: 'rgba(232,15,232,1.0)',
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
                            fillColor: 'rgba(222,167,96,1.0)',
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
                            fillColor: 'rgba(154,200,55,1.0)',
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
                            fillColor: 'rgba(105,198,224,1.0)',
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
                            fillColor: 'rgba(137,203,84,1.0)',
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
                            fillColor: 'rgba(208,63,104,1.0)',
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
                            fillColor: 'rgba(88,167,203,1.0)',
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
                            fillColor: 'rgba(203,67,55,1.0)',
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
                            fillColor: 'rgba(93,51,230,1.0)',
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
                            fillColor: 'rgba(226,191,17,1.0)',
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
                            fillColor: 'rgba(225,79,47,1.0)',
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
                            fillColor: 'rgba(52,95,237,1.0)',
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
                            fillColor: 'rgba(187,17,225,1.0)',
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
                            fillColor: 'rgba(222,128,91,1.0)',
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
                            fillColor: 'rgba(197,212,110,1.0)',
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
                            fillColor: 'rgba(114,237,116,1.0)',
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
                            fillColor: 'rgba(216,204,114,1.0)',
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
                            fillColor: 'rgba(105,235,50,1.0)',
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
                            fillColor: 'rgba(19,48,236,1.0)',
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
                            fillColor: 'rgba(203,199,123,1.0)',
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
                            fillColor: 'rgba(112,134,215,1.0)',
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
                            fillColor: 'rgba(73,61,206,1.0)',
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
                            fillColor: 'rgba(204,187,79,1.0)',
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
                            fillColor: 'rgba(43,143,230,1.0)',
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
                            fillColor: 'rgba(119,107,224,1.0)',
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
                            fillColor: 'rgba(207,221,99,1.0)',
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
                            fillColor: 'rgba(221,230,99,1.0)',
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
                            fillColor: 'rgba(15,219,168,1.0)',
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
                            fillColor: 'rgba(91,216,66,1.0)',
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
                            fillColor: 'rgba(200,24,150,1.0)',
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
                            fillColor: 'rgba(220,55,223,1.0)',
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
                            fillColor: 'rgba(232,147,108,1.0)',
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
                            fillColor: 'rgba(130,210,217,1.0)',
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
                            fillColor: 'rgba(45,164,207,1.0)',
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
                            fillColor: 'rgba(15,49,220,1.0)',
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
                            fillColor: 'rgba(64,212,27,1.0)',
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
                            fillColor: 'rgba(95,182,232,1.0)',
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
                            fillColor: 'rgba(23,213,147,1.0)',
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
                            fillColor: 'rgba(240,74,204,1.0)',
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
                            fillColor: 'rgba(231,43,109,1.0)',
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
                            fillColor: 'rgba(210,169,111,1.0)',
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
                            fillColor: 'rgba(26,239,22,1.0)',
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
                            fillColor: 'rgba(30,172,215,1.0)',
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
                            fillColor: 'rgba(186,229,105,1.0)',
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
                            fillColor: 'rgba(238,66,43,1.0)',
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
                            fillColor: 'rgba(166,100,204,1.0)',
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
                            fillColor: 'rgba(146,227,92,1.0)',
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
                            fillColor: 'rgba(111,139,209,1.0)',
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
                            fillColor: 'rgba(130,58,213,1.0)',
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
                            fillColor: 'rgba(143,29,214,1.0)',
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
                            fillColor: 'rgba(44,211,175,1.0)',
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
                            fillColor: 'rgba(106,216,119,1.0)',
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
                            fillColor: 'rgba(149,101,232,1.0)',
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
                            fillColor: 'rgba(101,201,169,1.0)',
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
                            fillColor: 'rgba(126,154,237,1.0)',
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
                            fillColor: 'rgba(219,133,183,1.0)',
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
                            fillColor: 'rgba(195,235,116,1.0)',
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
                            fillColor: 'rgba(230,65,125,1.0)',
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
                            fillColor: 'rgba(212,93,180,1.0)',
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
                            fillColor: 'rgba(123,151,202,1.0)',
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
                            fillColor: 'rgba(97,75,237,1.0)',
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
                            fillColor: 'rgba(233,42,173,1.0)',
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
                            fillColor: 'rgba(167,12,210,1.0)',
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
                            fillColor: 'rgba(66,237,151,1.0)',
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
                            fillColor: 'rgba(46,201,193,1.0)',
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
                            fillColor: 'rgba(158,204,79,1.0)',
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
                            fillColor: 'rgba(201,65,128,1.0)',
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
                            fillColor: 'rgba(24,210,24,1.0)',
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
                            fillColor: 'rgba(124,83,229,1.0)',
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
                            fillColor: 'rgba(223,110,50,1.0)',
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
                            fillColor: 'rgba(205,66,133,1.0)',
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
                            fillColor: 'rgba(228,57,163,1.0)',
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
                            fillColor: 'rgba(26,20,217,1.0)',
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
                            fillColor: 'rgba(222,177,71,1.0)',
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
                            fillColor: 'rgba(225,115,239,1.0)',
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
                            fillColor: 'rgba(98,219,28,1.0)',
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
                            fillColor: 'rgba(78,226,108,1.0)',
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
                            fillColor: 'rgba(109,203,218,1.0)',
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
                            fillColor: 'rgba(216,199,15,1.0)',
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
                            fillColor: 'rgba(86,99,210,1.0)',
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
                            fillColor: 'rgba(131,237,102,1.0)',
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
                            fillColor: 'rgba(218,37,43,1.0)',
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
                            fillColor: 'rgba(206,156,69,1.0)',
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
                            fillColor: 'rgba(226,111,176,1.0)',
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
                            fillColor: 'rgba(218,121,85,1.0)',
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
                            fillColor: 'rgba(55,211,73,1.0)',
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
                            fillColor: 'rgba(149,126,216,1.0)',
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
                            fillColor: 'rgba(94,50,215,1.0)',
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
                            fillColor: 'rgba(224,157,112,1.0)',
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
                            fillColor: 'rgba(43,207,161,1.0)',
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
                            fillColor: 'rgba(226,53,47,1.0)',
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
                            fillColor: 'rgba(168,84,207,1.0)',
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
                            fillColor: 'rgba(238,159,74,1.0)',
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
                            fillColor: 'rgba(85,208,112,1.0)',
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
                            fillColor: 'rgba(72,213,81,1.0)',
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
                            fillColor: 'rgba(222,184,108,1.0)',
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
                            fillColor: 'rgba(240,47,182,1.0)',
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
                            fillColor: 'rgba(238,129,92,1.0)',
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
                            fillColor: 'rgba(230,93,207,1.0)',
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
                            fillColor: 'rgba(166,62,218,1.0)',
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
                            fillColor: 'rgba(215,145,101,1.0)',
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
                            fillColor: 'rgba(229,236,29,1.0)',
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
                            fillColor: 'rgba(117,218,122,1.0)',
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
                            fillColor: 'rgba(216,109,164,1.0)',
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
                            fillColor: 'rgba(216,108,149,1.0)',
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
                            fillColor: 'rgba(198,233,81,1.0)',
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
                            fillColor: 'rgba(228,109,123,1.0)',
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
                            fillColor: 'rgba(234,98,56,1.0)',
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
                            fillColor: 'rgba(229,224,90,1.0)',
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
                            fillColor: 'rgba(121,240,191,1.0)',
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
                            fillColor: 'rgba(109,208,47,1.0)',
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
                            fillColor: 'rgba(47,220,96,1.0)',
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
                            fillColor: 'rgba(112,206,172,1.0)',
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
                            fillColor: 'rgba(92,231,84,1.0)',
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
                            fillColor: 'rgba(72,220,117,1.0)',
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
                            fillColor: 'rgba(63,168,233,1.0)',
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
                            fillColor: 'rgba(17,202,82,1.0)',
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
                            fillColor: 'rgba(71,201,101,1.0)',
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
                            fillColor: 'rgba(143,143,237,1.0)',
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
                            fillColor: 'rgba(48,153,239,1.0)',
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
                            fillColor: 'rgba(238,235,79,1.0)',
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
                            fillColor: 'rgba(226,61,72,1.0)',
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
                            fillColor: 'rgba(78,200,116,1.0)',
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
                            fillColor: 'rgba(235,134,51,1.0)',
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
                            fillColor: 'rgba(204,169,15,1.0)',
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
                            fillColor: 'rgba(12,22,204,1.0)',
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
                            fillColor: 'rgba(29,118,212,1.0)',
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
                            fillColor: 'rgba(205,205,95,1.0)',
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
                            fillColor: 'rgba(161,221,101,1.0)',
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
                            fillColor: 'rgba(49,121,236,1.0)',
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
                            fillColor: 'rgba(98,225,147,1.0)',
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
                            fillColor: 'rgba(46,21,239,1.0)',
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
                            fillColor: 'rgba(232,128,123,1.0)',
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
                            fillColor: 'rgba(79,210,134,1.0)',
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
                            fillColor: 'rgba(78,193,231,1.0)',
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
                            fillColor: 'rgba(96,18,213,1.0)',
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
                            fillColor: 'rgba(114,186,238,1.0)',
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
                            fillColor: 'rgba(143,235,129,1.0)',
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
                            fillColor: 'rgba(119,136,216,1.0)',
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
                            fillColor: 'rgba(46,230,95,1.0)',
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
                            fillColor: 'rgba(212,95,196,1.0)',
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
                            fillColor: 'rgba(114,212,199,1.0)',
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
                            fillColor: 'rgba(40,212,117,1.0)',
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
                            fillColor: 'rgba(124,60,207,1.0)',
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
                            fillColor: 'rgba(201,189,55,1.0)',
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
                            fillColor: 'rgba(75,223,147,1.0)',
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
                            fillColor: 'rgba(229,90,111,1.0)',
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
                            fillColor: 'rgba(46,209,176,1.0)',
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
                            fillColor: 'rgba(165,214,86,1.0)',
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
                            fillColor: 'rgba(138,228,118,1.0)',
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
                            fillColor: 'rgba(202,157,101,1.0)',
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
                            fillColor: 'rgba(135,224,126,1.0)',
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
                            fillColor: 'rgba(220,49,160,1.0)',
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
                            fillColor: 'rgba(202,215,85,1.0)',
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
                            fillColor: 'rgba(110,78,240,1.0)',
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
                            fillColor: 'rgba(194,62,206,1.0)',
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
                            fillColor: 'rgba(174,124,220,1.0)',
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
                            fillColor: 'rgba(73,174,218,1.0)',
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
                            fillColor: 'rgba(150,70,229,1.0)',
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
                            fillColor: 'rgba(224,100,78,1.0)',
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
                            fillColor: 'rgba(72,172,211,1.0)',
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
                            fillColor: 'rgba(211,53,53,1.0)',
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
                            fillColor: 'rgba(86,216,134,1.0)',
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
                            fillColor: 'rgba(136,205,109,1.0)',
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
                            fillColor: 'rgba(96,205,154,1.0)',
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
                            fillColor: 'rgba(62,132,225,1.0)',
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
                            fillColor: 'rgba(154,89,200,1.0)',
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
                            fillColor: 'rgba(129,116,203,1.0)',
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
                            fillColor: 'rgba(203,166,55,1.0)',
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
                            fillColor: 'rgba(115,222,161,1.0)',
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
                            fillColor: 'rgba(209,14,173,1.0)',
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
                            fillColor: 'rgba(224,28,74,1.0)',
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
                            fillColor: 'rgba(116,124,211,1.0)',
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
                            fillColor: 'rgba(203,47,220,1.0)',
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
                            fillColor: 'rgba(117,207,227,1.0)',
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
                            fillColor: 'rgba(228,123,115,1.0)',
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
                            fillColor: 'rgba(169,234,122,1.0)',
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
                            fillColor: 'rgba(238,14,186,1.0)',
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
                            fillColor: 'rgba(69,219,64,1.0)',
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
                            fillColor: 'rgba(176,202,111,1.0)',
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
                            fillColor: 'rgba(97,205,140,1.0)',
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
                            fillColor: 'rgba(146,201,17,1.0)',
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
                            fillColor: 'rgba(204,139,102,1.0)',
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
                            fillColor: 'rgba(104,15,200,1.0)',
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
                            fillColor: 'rgba(154,70,211,1.0)',
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
                            fillColor: 'rgba(238,150,62,1.0)',
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
                            fillColor: 'rgba(207,236,90,1.0)',
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
                            fillColor: 'rgba(25,146,211,1.0)',
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
                            fillColor: 'rgba(203,100,121,1.0)',
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
                            fillColor: 'rgba(38,103,232,1.0)',
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
                            fillColor: 'rgba(152,111,209,1.0)',
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
                            fillColor: 'rgba(141,228,28,1.0)',
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
                            fillColor: 'rgba(212,130,120,1.0)',
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
                            fillColor: 'rgba(98,209,83,1.0)',
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
                            fillColor: 'rgba(36,88,201,1.0)',
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
                            fillColor: 'rgba(73,199,221,1.0)',
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
                            fillColor: 'rgba(201,91,229,1.0)',
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
                            fillColor: 'rgba(180,235,122,1.0)',
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
                            fillColor: 'rgba(207,85,95,1.0)',
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
                            fillColor: 'rgba(203,71,161,1.0)',
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
                            fillColor: 'rgba(166,201,38,1.0)',
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
                            fillColor: 'rgba(73,209,177,1.0)',
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
                            fillColor: 'rgba(211,72,128,1.0)',
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
                            fillColor: 'rgba(224,61,159,1.0)',
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
                            fillColor: 'rgba(201,177,38,1.0)',
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
                            fillColor: 'rgba(59,206,204,1.0)',
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
                            fillColor: 'rgba(13,41,200,1.0)',
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
                            fillColor: 'rgba(87,210,100,1.0)',
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
                            fillColor: 'rgba(91,219,200,1.0)',
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
                            fillColor: 'rgba(209,100,133,1.0)',
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
                            fillColor: 'rgba(142,61,217,1.0)',
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
                            fillColor: 'rgba(19,213,45,1.0)',
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
                            fillColor: 'rgba(229,119,165,1.0)',
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
                            fillColor: 'rgba(72,62,218,1.0)',
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
                            fillColor: 'rgba(143,218,51,1.0)',
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
                            fillColor: 'rgba(17,138,231,1.0)',
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
                            fillColor: 'rgba(234,84,179,1.0)',
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
                            fillColor: 'rgba(117,78,208,1.0)',
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
                            fillColor: 'rgba(212,123,110,1.0)',
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
                            fillColor: 'rgba(66,218,71,1.0)',
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
                            fillColor: 'rgba(27,143,221,1.0)',
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
                            fillColor: 'rgba(182,46,209,1.0)',
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
                            fillColor: 'rgba(102,229,168,1.0)',
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
                            fillColor: 'rgba(232,103,135,1.0)',
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
                            fillColor: 'rgba(220,64,204,1.0)',
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
                            fillColor: 'rgba(239,91,27,1.0)',
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
                            fillColor: 'rgba(36,230,146,1.0)',
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
                            fillColor: 'rgba(85,230,182,1.0)',
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
                            fillColor: 'rgba(213,136,237,1.0)',
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
                            fillColor: 'rgba(39,209,209,1.0)',
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
                            fillColor: 'rgba(210,56,82,1.0)',
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
                            fillColor: 'rgba(54,212,217,1.0)',
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
                            fillColor: 'rgba(201,55,94,1.0)',
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
                            fillColor: 'rgba(212,225,124,1.0)',
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
                            fillColor: 'rgba(217,50,214,1.0)',
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
                            fillColor: 'rgba(130,211,98,1.0)',
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
                            fillColor: 'rgba(210,87,143,1.0)',
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
                            fillColor: 'rgba(22,230,147,1.0)',
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
                            fillColor: 'rgba(219,91,132,1.0)',
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
                            fillColor: 'rgba(205,39,122,1.0)',
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
                            fillColor: 'rgba(230,209,24,1.0)',
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
                            fillColor: 'rgba(211,82,80,1.0)',
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
                            fillColor: 'rgba(224,107,206,1.0)',
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
                            fillColor: 'rgba(153,133,227,1.0)',
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
                            fillColor: 'rgba(214,91,236,1.0)',
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
                            fillColor: 'rgba(63,213,188,1.0)',
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
                            fillColor: 'rgba(164,209,30,1.0)',
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
                            fillColor: 'rgba(96,208,210,1.0)',
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
                            fillColor: 'rgba(131,239,112,1.0)',
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
                            fillColor: 'rgba(109,224,237,1.0)',
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
                            fillColor: 'rgba(111,233,18,1.0)',
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
                            fillColor: 'rgba(177,66,218,1.0)',
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
                            fillColor: 'rgba(230,85,225,1.0)',
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
                            fillColor: 'rgba(65,200,88,1.0)',
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
                            fillColor: 'rgba(33,186,206,1.0)',
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
                            fillColor: 'rgba(50,30,205,1.0)',
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
                            fillColor: 'rgba(219,102,70,1.0)',
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
                            fillColor: 'rgba(60,132,232,1.0)',
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
                            fillColor: 'rgba(115,93,222,1.0)',
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
                            fillColor: 'rgba(200,101,207,1.0)',
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
                            fillColor: 'rgba(131,222,52,1.0)',
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
                            fillColor: 'rgba(202,109,183,1.0)',
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
                            fillColor: 'rgba(240,111,113,1.0)',
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
                            fillColor: 'rgba(92,118,222,1.0)',
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
                            fillColor: 'rgba(65,215,51,1.0)',
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
                            fillColor: 'rgba(150,229,124,1.0)',
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
                            fillColor: 'rgba(105,118,224,1.0)',
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
                            fillColor: 'rgba(111,221,217,1.0)',
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
                            fillColor: 'rgba(127,72,216,1.0)',
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
                            fillColor: 'rgba(106,209,50,1.0)',
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
                            fillColor: 'rgba(224,153,21,1.0)',
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
                            fillColor: 'rgba(212,32,191,1.0)',
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
                            fillColor: 'rgba(200,106,169,1.0)',
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
                            fillColor: 'rgba(215,162,49,1.0)',
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
                            fillColor: 'rgba(85,203,191,1.0)',
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
                            fillColor: 'rgba(145,210,49,1.0)',
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
                            fillColor: 'rgba(98,236,123,1.0)',
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
                            fillColor: 'rgba(229,109,161,1.0)',
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
                            fillColor: 'rgba(52,178,236,1.0)',
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
                            fillColor: 'rgba(236,62,111,1.0)',
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
                            fillColor: 'rgba(195,237,81,1.0)',
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
                            fillColor: 'rgba(233,108,120,1.0)',
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

        function pop_sungaijambu_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nma_sungai</th>\
                        <td>' + (feature.properties['nma_sungai'] !== null ? autolinker.link(feature.properties['nma_sungai'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_sungaijambu_1_0() {
            return {
                pane: 'pane_sungaijambu_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
                interactive: true,
            }
        }

        function style_sungaijambu_1_1() {
            return {
                pane: 'pane_sungaijambu_1',
                opacity: 1,
                color: 'rgba(65,194,190,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_sungaijambu_1');
        map.getPane('pane_sungaijambu_1').style.zIndex = 401;
        map.getPane('pane_sungaijambu_1').style['mix-blend-mode'] = 'normal';
        var layer_sungaijambu_1 = new L.geoJson.multiStyle(json_sungaijambu_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_sungaijambu_1',
            layerName: 'layer_sungaijambu_1',
            pane: 'pane_sungaijambu_1',
            onEachFeature: pop_sungaijambu_1,
            styles: [style_sungaijambu_1_0, style_sungaijambu_1_1, ]
        });
        bounds_group.addLayer(layer_sungaijambu_1);
        map.addLayer(layer_sungaijambu_1);

        function pop_NAMA_JALANJAMBU_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nama_jalan</th>\
                        <td>' + (feature.properties['nama_jalan'] !== null ? autolinker.link(feature.properties['nama_jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_NAMA_JALANJAMBU_2_0() {
            return {
                pane: 'pane_NAMA_JALANJAMBU_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 3.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_NAMA_JALANJAMBU_2');
        map.getPane('pane_NAMA_JALANJAMBU_2').style.zIndex = 402;
        map.getPane('pane_NAMA_JALANJAMBU_2').style['mix-blend-mode'] = 'normal';
        var layer_NAMA_JALANJAMBU_2 = new L.geoJson(json_NAMA_JALANJAMBU_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_NAMA_JALANJAMBU_2',
            layerName: 'layer_NAMA_JALANJAMBU_2',
            pane: 'pane_NAMA_JALANJAMBU_2',
            onEachFeature: pop_NAMA_JALANJAMBU_2,
            style: style_NAMA_JALANJAMBU_2_0,
        });
        bounds_group.addLayer(layer_NAMA_JALANJAMBU_2);
        map.addLayer(layer_NAMA_JALANJAMBU_2);

        function pop_masjiddidesajambu_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nma_masjid</th>\
                        <td>' + (feature.properties['nma_masjid'] !== null ? autolinker.link(feature.properties['nma_masjid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_masjiddidesajambu_3_0() {
            return {
                pane: 'pane_masjiddidesajambu_3',
                radius: 6.000000000000002,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(243,166,178,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_masjiddidesajambu_3');
        map.getPane('pane_masjiddidesajambu_3').style.zIndex = 403;
        map.getPane('pane_masjiddidesajambu_3').style['mix-blend-mode'] = 'normal';
        var layer_masjiddidesajambu_3 = new L.geoJson(json_masjiddidesajambu_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_masjiddidesajambu_3',
            layerName: 'layer_masjiddidesajambu_3',
            pane: 'pane_masjiddidesajambu_3',
            onEachFeature: pop_masjiddidesajambu_3,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_masjiddidesajambu_3_0(feature));
            },
        });
        bounds_group.addLayer(layer_masjiddidesajambu_3);
        map.addLayer(layer_masjiddidesajambu_3);

        function pop_Balaidesajambu_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">balai desa</th>\
                        <td>' + (feature.properties['balai desa'] !== null ? autolinker.link(feature.properties['balai desa'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Balaidesajambu_4_0() {
            return {
                pane: 'pane_Balaidesajambu_4',
                radius: 6.000000000000002,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(141,90,153,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Balaidesajambu_4');
        map.getPane('pane_Balaidesajambu_4').style.zIndex = 404;
        map.getPane('pane_Balaidesajambu_4').style['mix-blend-mode'] = 'normal';
        var layer_Balaidesajambu_4 = new L.geoJson(json_Balaidesajambu_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Balaidesajambu_4',
            layerName: 'layer_Balaidesajambu_4',
            pane: 'pane_Balaidesajambu_4',
            onEachFeature: pop_Balaidesajambu_4,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_Balaidesajambu_4_0(feature));
            },
        });
        bounds_group.addLayer(layer_Balaidesajambu_4);
        map.addLayer(layer_Balaidesajambu_4);

        function pop_0bjekdesajambu_5(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">objek_jmb</th>\
                        <td>' + (feature.properties['objek_jmb'] !== null ? autolinker.link(feature.properties['objek_jmb'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_0bjekdesajambu_5_0() {
            return {
                pane: 'pane_0bjekdesajambu_5',
                radius: 6.000000000000002,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,113,141,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_0bjekdesajambu_5');
        map.getPane('pane_0bjekdesajambu_5').style.zIndex = 405;
        map.getPane('pane_0bjekdesajambu_5').style['mix-blend-mode'] = 'normal';
        var layer_0bjekdesajambu_5 = new L.geoJson(json_0bjekdesajambu_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_0bjekdesajambu_5',
            layerName: 'layer_0bjekdesajambu_5',
            pane: 'pane_0bjekdesajambu_5',
            onEachFeature: pop_0bjekdesajambu_5,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_0bjekdesajambu_5_0(feature));
            },
        });
        bounds_group.addLayer(layer_0bjekdesajambu_5);
        map.addLayer(layer_0bjekdesajambu_5);
        setBounds();
        var i = 0;
        layer_NAMA_JALANJAMBU_2.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['nama_jalan'] !== null ? String('<div style="color: #323232; font-size: 10pt; font-family: \'Arial\', sans-serif;">' + layer.feature.properties['nama_jalan']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_NAMA_JALANJAMBU_2'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_masjiddidesajambu_3.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['nma_masjid'] !== null ? String('<div style="color: #323232; font-size: 10pt; font-family: \'Arial\', sans-serif;">' + layer.feature.properties['nma_masjid']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_masjiddidesajambu_3'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_Balaidesajambu_4.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['balai desa'] !== null ? String('<div style="color: #323232; font-size: 10pt; font-family: \'Arial\', sans-serif;">' + layer.feature.properties['balai desa']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_Balaidesajambu_4'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_0bjekdesajambu_5.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['objek_jmb'] !== null ? String('<div style="color: #323232; font-size: 10pt; font-family: \'Arial\', sans-serif;">' + layer.feature.properties['objek_jmb']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_0bjekdesajambu_5'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        resetLabels([layer_NAMA_JALANJAMBU_2, layer_masjiddidesajambu_3, layer_Balaidesajambu_4, layer_0bjekdesajambu_5]);
        map.on("zoomend", function() {
            resetLabels([layer_NAMA_JALANJAMBU_2, layer_masjiddidesajambu_3, layer_Balaidesajambu_4, layer_0bjekdesajambu_5]);
        });
        map.on("layeradd", function() {
            resetLabels([layer_NAMA_JALANJAMBU_2, layer_masjiddidesajambu_3, layer_Balaidesajambu_4, layer_0bjekdesajambu_5]);
        });
        map.on("layerremove", function() {
            resetLabels([layer_NAMA_JALANJAMBU_2, layer_masjiddidesajambu_3, layer_Balaidesajambu_4, layer_0bjekdesajambu_5]);
        });
    </script>