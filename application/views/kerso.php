<div id="map">

    <link rel="stylesheet" href="<?= base_url() ?>assets/kerso/css/leaflet.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/kerso/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/kerso/css/qgis2web.css">
    <script src="<?= base_url() ?>assets/kerso/js/qgis2web_expressions.js"></script>
    <script src="<?= base_url() ?>assets/kerso/js/leaflet.js"></script>
    <script src="<?= base_url() ?>assets/kerso/js/leaflet.rotatedMarker.js"></script>
    <script src="<?= base_url() ?>assets/kerso/js/leaflet-hash.js"></script>
    <script src="<?= base_url() ?>assets/kerso/js/Autolinker.min.js"></script>
    <script src="<?= base_url() ?>assets/kerso/js/rbush.min.js"></script>
    <script src="<?= base_url() ?>assets/kerso/js/labelgun.min.js"></script>
    <script src="<?= base_url() ?>assets/kerso/js/labels.js"></script>
    <script src="<?= base_url() ?>assets/kerso/data/Sungai1_9.js"></script>
    <script src="<?= base_url() ?>assets/kerso/data/Jalan1_10.js"></script>
    <script src="<?= base_url() ?>assets/kerso/data/Perbatasan_11.js"></script>
    <script src="<?= base_url() ?>assets/kerso/data/Tempat_12.js"></script>
    <script src="<?= base_url() ?>assets/kerso/data/Tempat2_13.js"></script>
    <script src="<?= base_url() ?>assets/kerso/js/leaflet.pattern.js"></script>
    <script>
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-6.675414853867763, 110.63675098655985],
            [-6.621370685062341, 110.72994871039934]
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
        map.createPane('pane_Lok1_0');
        map.getPane('pane_Lok1_0').style.zIndex = 400;
        var img_Lok1_0 = 'data/Lok1_0.png';
        var img_bounds_Lok1_0 = [
            [-6.659358680270427, 110.670982386],
            [-6.654425833729574, 110.679755684]
        ];
        var layer_Lok1_0 = new L.imageOverlay(img_Lok1_0,
            img_bounds_Lok1_0, {
                pane: 'pane_Lok1_0'
            });
        bounds_group.addLayer(layer_Lok1_0);
        map.addLayer(layer_Lok1_0);
        map.createPane('pane_Lok8_1');
        map.getPane('pane_Lok8_1').style.zIndex = 401;
        var img_Lok8_1 = 'data/Lok8_1.png';
        var img_bounds_Lok8_1 = [
            [-6.652035506388131, 110.666603475],
            [-6.647257385611869, 110.675101586]
        ];
        var layer_Lok8_1 = new L.imageOverlay(img_Lok8_1,
            img_bounds_Lok8_1, {
                pane: 'pane_Lok8_1'
            });
        bounds_group.addLayer(layer_Lok8_1);
        map.addLayer(layer_Lok8_1);
        map.createPane('pane_lok6_2');
        map.getPane('pane_lok6_2').style.zIndex = 402;
        var img_lok6_2 = 'data/lok6_2.png';
        var img_bounds_lok6_2 = [
            [-6.654457633388131, 110.660552291],
            [-6.649679512611869, 110.669050402]
        ];
        var layer_lok6_2 = new L.imageOverlay(img_lok6_2,
            img_bounds_lok6_2, {
                pane: 'pane_lok6_2'
            });
        bounds_group.addLayer(layer_lok6_2);
        map.addLayer(layer_lok6_2);
        map.createPane('pane_Lok7_3');
        map.getPane('pane_Lok7_3').style.zIndex = 403;
        var img_Lok7_3 = 'data/Lok7_3.png';
        var img_bounds_Lok7_3 = [
            [-6.654432833388132, 110.668942935],
            [-6.64965471261187, 110.677441046]
        ];
        var layer_Lok7_3 = new L.imageOverlay(img_Lok7_3,
            img_bounds_Lok7_3, {
                pane: 'pane_Lok7_3'
            });
        bounds_group.addLayer(layer_Lok7_3);
        map.addLayer(layer_Lok7_3);
        map.createPane('pane_Lok5_4');
        map.getPane('pane_Lok5_4').style.zIndex = 404;
        var img_Lok5_4 = 'data/Lok5_4.png';
        var img_bounds_Lok5_4 = [
            [-6.654474167, 110.65207071330104],
            [-6.649696046, 110.66056882469897]
        ];
        var layer_Lok5_4 = new L.imageOverlay(img_Lok5_4,
            img_bounds_Lok5_4, {
                pane: 'pane_Lok5_4'
            });
        bounds_group.addLayer(layer_Lok5_4);
        map.addLayer(layer_Lok5_4);
        map.createPane('pane_Lok4_5');
        map.getPane('pane_Lok4_5').style.zIndex = 405;
        var img_Lok4_5 = 'data/Lok4_5.png';
        var img_bounds_Lok4_5 = [
            [-6.659186154, 110.65205417980104],
            [-6.654408033, 110.66055229119897]
        ];
        var layer_Lok4_5 = new L.imageOverlay(img_Lok4_5,
            img_bounds_Lok4_5, {
                pane: 'pane_Lok4_5'
            });
        bounds_group.addLayer(layer_Lok4_5);
        map.addLayer(layer_Lok4_5);
        map.createPane('pane_Lok3_6');
        map.getPane('pane_Lok3_6').style.zIndex = 406;
        var img_Lok3_6 = 'data/Lok3_6.png';
        var img_bounds_Lok3_6 = [
            [-6.659194421, 110.65415390780105],
            [-6.6544163, 110.66265201919897]
        ];
        var layer_Lok3_6 = new L.imageOverlay(img_Lok3_6,
            img_bounds_Lok3_6, {
                pane: 'pane_Lok3_6'
            });
        bounds_group.addLayer(layer_Lok3_6);
        map.addLayer(layer_Lok3_6);
        map.createPane('pane_Lok2_7');
        map.getPane('pane_Lok2_7').style.zIndex = 407;
        var img_Lok2_7 = 'data/Lok2_7.png';
        var img_bounds_Lok2_7 = [
            [-6.659194421, 110.66262721830104],
            [-6.6544163, 110.67112532969897]
        ];
        var layer_Lok2_7 = new L.imageOverlay(img_Lok2_7,
            img_bounds_Lok2_7, {
                pane: 'pane_Lok2_7'
            });
        bounds_group.addLayer(layer_Lok2_7);
        map.addLayer(layer_Lok2_7);
        map.createPane('pane_GoogleRoad_8');
        map.getPane('pane_GoogleRoad_8').style.zIndex = 408;
        var layer_GoogleRoad_8 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleRoad_8',
            opacity: 1.0,
            attribution: '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 20
        });
        layer_GoogleRoad_8;
        map.addLayer(layer_GoogleRoad_8);

        function pop_Sungai1_9(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Sung'] !== null ? autolinker.link(feature.properties['Sung'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Sungai1_9_0() {
            return {
                pane: 'pane_Sungai1_9',
                opacity: 1,
                color: 'rgba(72,123,182,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 3.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_Sungai1_9');
        map.getPane('pane_Sungai1_9').style.zIndex = 409;
        map.getPane('pane_Sungai1_9').style['mix-blend-mode'] = 'normal';
        var layer_Sungai1_9 = new L.geoJson(json_Sungai1_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Sungai1_9',
            layerName: 'layer_Sungai1_9',
            pane: 'pane_Sungai1_9',
            onEachFeature: pop_Sungai1_9,
            style: style_Sungai1_9_0,
        });
        bounds_group.addLayer(layer_Sungai1_9);
        map.addLayer(layer_Sungai1_9);

        function pop_Jalan1_10(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Jalanan1'] !== null ? autolinker.link(feature.properties['Jalanan1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Jalan1_10_0() {
            return {
                pane: 'pane_Jalan1_10',
                opacity: 1,
                color: 'rgba(219,30,42,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 3.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_Jalan1_10');
        map.getPane('pane_Jalan1_10').style.zIndex = 410;
        map.getPane('pane_Jalan1_10').style['mix-blend-mode'] = 'normal';
        var layer_Jalan1_10 = new L.geoJson(json_Jalan1_10, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Jalan1_10',
            layerName: 'layer_Jalan1_10',
            pane: 'pane_Jalan1_10',
            onEachFeature: pop_Jalan1_10,
            style: style_Jalan1_10_0,
        });
        bounds_group.addLayer(layer_Jalan1_10);
        map.addLayer(layer_Jalan1_10);

        function pop_Perbatasan_11(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Perbatasan_11_0() {
            return {
                pane: 'pane_Perbatasan_11',
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
        map.createPane('pane_Perbatasan_11');
        map.getPane('pane_Perbatasan_11').style.zIndex = 411;
        map.getPane('pane_Perbatasan_11').style['mix-blend-mode'] = 'normal';
        var layer_Perbatasan_11 = new L.geoJson(json_Perbatasan_11, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Perbatasan_11',
            layerName: 'layer_Perbatasan_11',
            pane: 'pane_Perbatasan_11',
            onEachFeature: pop_Perbatasan_11,
            style: style_Perbatasan_11_0,
        });
        bounds_group.addLayer(layer_Perbatasan_11);
        map.addLayer(layer_Perbatasan_11);

        function pop_Tempat_12(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Bangunan'] !== null ? autolinker.link(feature.properties['Bangunan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Tempat_12_0(feature) {
            switch (String(feature.properties['Bangunan'])) {
                case 'Makam Mboddas':
                    return {
                        pane: 'pane_Tempat_12',
                            radius: 8.0,
                            opacity: 1,
                            color: 'rgba(255,255,255,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(0,0,0,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Balaidesa':
                    return {
                        pane: 'pane_Tempat_12',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(255,255,255,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(118,228,70,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Counter':
                    return {
                        pane: 'pane_Tempat_12',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(255,255,255,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(121,125,201,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Makam Mbah Datuk Singaraja':
                    return {
                        pane: 'pane_Tempat_12',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(255,255,255,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(79,192,229,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Masjid':
                    return {
                        pane: 'pane_Tempat_12',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(255,255,255,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(122,100,176,1.0)',
                            interactive: true,
                    }
                    break;
                case 'MiDatuk singaraja':
                    return {
                        pane: 'pane_Tempat_12',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(255,255,255,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(63,51,151,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rumahsaya':
                    return {
                        pane: 'pane_Tempat_12',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(255,255,255,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(155,133,87,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SDn2':
                    return {
                        pane: 'pane_Tempat_12',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(255,255,255,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(157,248,66,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_Tempat_12');
        map.getPane('pane_Tempat_12').style.zIndex = 412;
        map.getPane('pane_Tempat_12').style['mix-blend-mode'] = 'normal';
        var layer_Tempat_12 = new L.geoJson(json_Tempat_12, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Tempat_12',
            layerName: 'layer_Tempat_12',
            pane: 'pane_Tempat_12',
            onEachFeature: pop_Tempat_12,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_Tempat_12_0(feature));
            },
        });
        bounds_group.addLayer(layer_Tempat_12);
        map.addLayer(layer_Tempat_12);

        function pop_Tempat2_13(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Bangunan2'] !== null ? autolinker.link(feature.properties['Bangunan2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Tempat2_13_0(feature) {
            switch (String(feature.properties['Bangunan2'])) {
                case 'Bidan Nur Faizah':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(73,204,185,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Makam Mbotdas':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(86,164,227,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Musholla':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(181,92,228,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Perempatan Pak Kosim':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,146,90,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Rumah Bpk H. Zubaidi':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(39,29,227,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SD Negeri 1':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(87,201,115,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SMK DATUK SINGARAJA KERSO':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(148,220,109,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SMP DATUK SINGARAJA KERSO':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(221,228,87,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Toko Mainan':
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(211,110,184,1.0)',
                            interactive: true,
                    }
                    break;
                default:
                    return {
                        pane: 'pane_Tempat2_13',
                            radius: 10.0,
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(238,76,98,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_Tempat2_13');
        map.getPane('pane_Tempat2_13').style.zIndex = 413;
        map.getPane('pane_Tempat2_13').style['mix-blend-mode'] = 'normal';
        var layer_Tempat2_13 = new L.geoJson(json_Tempat2_13, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Tempat2_13',
            layerName: 'layer_Tempat2_13',
            pane: 'pane_Tempat2_13',
            onEachFeature: pop_Tempat2_13,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_Tempat2_13_0(feature));
            },
        });
        bounds_group.addLayer(layer_Tempat2_13);
        map.addLayer(layer_Tempat2_13);
        setBounds();
        var i = 0;
        layer_Tempat_12.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Bangunan'] !== null ? String('<div style="color: #000000; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Bangunan']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_Tempat_12'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_Tempat2_13.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Bangunan2'] !== null ? String('<div style="color: #000000; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Bangunan2']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_Tempat2_13'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        L.ImageOverlay.include({
            getBounds: function() {
                return this._bounds;
            }
        });
        resetLabels([layer_Tempat_12, layer_Tempat2_13]);
        map.on("zoomend", function() {
            resetLabels([layer_Tempat_12, layer_Tempat2_13]);
        });
        map.on("layeradd", function() {
            resetLabels([layer_Tempat_12, layer_Tempat2_13]);
        });
        map.on("layerremove", function() {
            resetLabels([layer_Tempat_12, layer_Tempat2_13]);
        });
    </script>