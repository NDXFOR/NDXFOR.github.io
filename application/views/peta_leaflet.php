<div id="map">

 <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        })
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
            if (bounds_group.getLayers().length) {
                map.fitBounds(bounds_group.getBounds());
            }
        }
        function pop_ADMINISTRASIDESA_AR_25K_0(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
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
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_ADMINISTRASIDESA_AR_25K_0_0(feature) {
            switch(String(feature.properties['NAMOBJ'])) {
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
                fillColor: 'rgba(243,166,178,1.0)',
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
                fillColor: 'rgba(114,155,111,1.0)',
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
                fillColor: 'rgba(213,180,60,1.0)',
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
                fillColor: 'rgba(164,113,88,1.0)',
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
        function pop_Tempatibadah_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">point</th>\
                        <td>' + (feature.properties['point'] !== null ? autolinker.link(feature.properties['point'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Tempatibadah_1_0() {
            return {
                pane: 'pane_Tempatibadah_1',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,1,18,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Tempatibadah_1');
        map.getPane('pane_Tempatibadah_1').style.zIndex = 401;
        map.getPane('pane_Tempatibadah_1').style['mix-blend-mode'] = 'normal';
        var layer_Tempatibadah_1 = new L.geoJson(json_Tempatibadah_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Tempatibadah_1',
            layerName: 'layer_Tempatibadah_1',
            pane: 'pane_Tempatibadah_1',
            onEachFeature: pop_Tempatibadah_1,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_Tempatibadah_1_0(feature));
            },
        });
        bounds_group.addLayer(layer_Tempatibadah_1);
        map.addLayer(layer_Tempatibadah_1);
        function pop_sungai_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">sungai</th>\
                        <td>' + (feature.properties['sungai'] !== null ? autolinker.link(feature.properties['sungai'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_sungai_2_0() {
            return {
                pane: 'pane_sungai_2',
                opacity: 1,
                color: 'rgba(1,242,255,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_sungai_2');
        map.getPane('pane_sungai_2').style.zIndex = 402;
        map.getPane('pane_sungai_2').style['mix-blend-mode'] = 'normal';
        var layer_sungai_2 = new L.geoJson(json_sungai_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_sungai_2',
            layerName: 'layer_sungai_2',
            pane: 'pane_sungai_2',
            onEachFeature: pop_sungai_2,
            style: style_sungai_2_0,
        });
        bounds_group.addLayer(layer_sungai_2);
        map.addLayer(layer_sungai_2);
        function pop_coba_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
        }

        function style_coba_3_0() {
            return {
                pane: 'pane_coba_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_coba_3');
        map.getPane('pane_coba_3').style.zIndex = 403;
        map.getPane('pane_coba_3').style['mix-blend-mode'] = 'normal';
        var layer_coba_3 = new L.geoJson(json_coba_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_coba_3',
            layerName: 'layer_coba_3',
            pane: 'pane_coba_3',
            onEachFeature: pop_coba_3,
            style: style_coba_3_0,
        });
        bounds_group.addLayer(layer_coba_3);
        map.addLayer(layer_coba_3);
        function pop_jalanbanyuputih_4(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Jalan</th>\
                        <td>' + (feature.properties['Nama_Jalan'] !== null ? autolinker.link(feature.properties['Nama_Jalan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_jalanbanyuputih_4_0() {
            return {
                pane: 'pane_jalanbanyuputih_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_jalanbanyuputih_4');
        map.getPane('pane_jalanbanyuputih_4').style.zIndex = 404;
        map.getPane('pane_jalanbanyuputih_4').style['mix-blend-mode'] = 'normal';
        var layer_jalanbanyuputih_4 = new L.geoJson(json_jalanbanyuputih_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_jalanbanyuputih_4',
            layerName: 'layer_jalanbanyuputih_4',
            pane: 'pane_jalanbanyuputih_4',
            onEachFeature: pop_jalanbanyuputih_4,
            style: style_jalanbanyuputih_4_0,
        });
        bounds_group.addLayer(layer_jalanbanyuputih_4);
        map.addLayer(layer_jalanbanyuputih_4);
        function pop_ObjekVitaldanRumah_5(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_ObjekVitaldanRumah_5_0() {
            return {
                pane: 'pane_ObjekVitaldanRumah_5',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,1,1,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_ObjekVitaldanRumah_5');
        map.getPane('pane_ObjekVitaldanRumah_5').style.zIndex = 405;
        map.getPane('pane_ObjekVitaldanRumah_5').style['mix-blend-mode'] = 'normal';
        var layer_ObjekVitaldanRumah_5 = new L.geoJson(json_ObjekVitaldanRumah_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ObjekVitaldanRumah_5',
            layerName: 'layer_ObjekVitaldanRumah_5',
            pane: 'pane_ObjekVitaldanRumah_5',
            onEachFeature: pop_ObjekVitaldanRumah_5,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_ObjekVitaldanRumah_5_0(feature));
            },
        });
        bounds_group.addLayer(layer_ObjekVitaldanRumah_5);
        map.addLayer(layer_ObjekVitaldanRumah_5);
        function pop_sungaibanyuputih_6(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nam_Sungai</th>\
                        <td>' + (feature.properties['Nam_Sungai'] !== null ? autolinker.link(feature.properties['Nam_Sungai'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_sungaibanyuputih_6_0() {
            return {
                pane: 'pane_sungaibanyuputih_6',
                opacity: 1,
                color: 'rgba(1,255,255,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_sungaibanyuputih_6');
        map.getPane('pane_sungaibanyuputih_6').style.zIndex = 406;
        map.getPane('pane_sungaibanyuputih_6').style['mix-blend-mode'] = 'normal';
        var layer_sungaibanyuputih_6 = new L.geoJson(json_sungaibanyuputih_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_sungaibanyuputih_6',
            layerName: 'layer_sungaibanyuputih_6',
            pane: 'pane_sungaibanyuputih_6',
            onEachFeature: pop_sungaibanyuputih_6,
            style: style_sungaibanyuputih_6_0,
        });
        bounds_group.addLayer(layer_sungaibanyuputih_6);
        map.addLayer(layer_sungaibanyuputih_6);
        function pop_sungaikodono_7(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nm_sng</th>\
                        <td>' + (feature.properties['Nm_sng'] !== null ? autolinker.link(feature.properties['Nm_sng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_sungaikodono_7_0() {
            return {
                pane: 'pane_sungaikodono_7',
                opacity: 1,
                color: 'rgba(1,187,255,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_sungaikodono_7');
        map.getPane('pane_sungaikodono_7').style.zIndex = 407;
        map.getPane('pane_sungaikodono_7').style['mix-blend-mode'] = 'normal';
        var layer_sungaikodono_7 = new L.geoJson(json_sungaikodono_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_sungaikodono_7',
            layerName: 'layer_sungaikodono_7',
            pane: 'pane_sungaikodono_7',
            onEachFeature: pop_sungaikodono_7,
            style: style_sungaikodono_7_0,
        });
        bounds_group.addLayer(layer_sungaikodono_7);
        map.addLayer(layer_sungaikodono_7);
        function pop_Jalankodono_8(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nm_jln</th>\
                        <td>' + (feature.properties['Nm_jln'] !== null ? autolinker.link(feature.properties['Nm_jln'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Jalankodono_8_0() {
            return {
                pane: 'pane_Jalankodono_8',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 4.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_Jalankodono_8');
        map.getPane('pane_Jalankodono_8').style.zIndex = 408;
        map.getPane('pane_Jalankodono_8').style['mix-blend-mode'] = 'normal';
        var layer_Jalankodono_8 = new L.geoJson(json_Jalankodono_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Jalankodono_8',
            layerName: 'layer_Jalankodono_8',
            pane: 'pane_Jalankodono_8',
            onEachFeature: pop_Jalankodono_8,
            style: style_Jalankodono_8_0,
        });
        bounds_group.addLayer(layer_Jalankodono_8);
        map.addLayer(layer_Jalankodono_8);
        function pop_Objekvital_9(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama Objek</th>\
                        <td>' + (feature.properties['Nama Objek'] !== null ? autolinker.link(feature.properties['Nama Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Objekvital_9_0() {
            return {
                pane: 'pane_Objekvital_9',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,18,1,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Objekvital_9');
        map.getPane('pane_Objekvital_9').style.zIndex = 409;
        map.getPane('pane_Objekvital_9').style['mix-blend-mode'] = 'normal';
        var layer_Objekvital_9 = new L.geoJson(json_Objekvital_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Objekvital_9',
            layerName: 'layer_Objekvital_9',
            pane: 'pane_Objekvital_9',
            onEachFeature: pop_Objekvital_9,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_Objekvital_9_0(feature));
            },
        });
        bounds_group.addLayer(layer_Objekvital_9);
        map.addLayer(layer_Objekvital_9);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/Objekvital_9.png" /> Objekvital': layer_Objekvital_9,'<img src="legend/Jalankodono_8.png" /> Jalankodono': layer_Jalankodono_8,'<img src="legend/sungaikodono_7.png" /> sungaikodono': layer_sungaikodono_7,'<img src="legend/sungaibanyuputih_6.png" /> sungai banyuputih': layer_sungaibanyuputih_6,'<img src="legend/ObjekVitaldanRumah_5.png" /> ObjekVitaldanRumah': layer_ObjekVitaldanRumah_5,'<img src="legend/jalanbanyuputih_4.png" /> jalan banyuputih': layer_jalanbanyuputih_4,'<img src="legend/coba_3.png" /> coba': layer_coba_3,'<img src="legend/sungai_2.png" /> sungai': layer_sungai_2,'<img src="legend/Tempatibadah_1.png" /> Tempat ibadah': layer_Tempatibadah_1,'ADMINISTRASIDESA_AR_25K<br /><table><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIDESA_AR_25K_0_Sukodono0.png" /></td><td>Sukodono</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIDESA_AR_25K_0_Banyuputih1.png" /></td><td>Banyuputih</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIDESA_AR_25K_0_Lebak2.png" /></td><td>Lebak</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIDESA_AR_25K_0_3.png" /></td><td></td></tr></table>': layer_ADMINISTRASIDESA_AR_25K_0,}).addTo(map);
        setBounds();
        </script>