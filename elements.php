<?php
    $elementSetMetadata = array(
        'name'        => 'GeoBlacklight',
        'description' => "Additional metadata elements for completing GeoBlacklight records",
        'record_type' => 'Item',
    );

    $elements = array(

        array(
            'label' => 'uuid',
            'name'  => 'UUID',
            'description' => 'The persistent URL',
            'comment' => 'If you are depositing a data set, leave this field blank.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'LayerID',
            'name'  => 'Layer ID',
            'description' => 'The complete identifier for the WMS/WFS/WCS layer.',
            'comment' => 'If you are depositing a data set, leave this field blank.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'Slug',
            'name'  => 'Slug',
            'description' => 'Unique identifier visible to the user, used for Permalinks',
            'comment' => 'If you are depositing a data set, leave this field blank.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'GeomType',
            'name'  => 'Geometry Type',
            'description' => 'Geometry type for layer data.',
            'comment' => 'Select from the menu below.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'LayerModDT',
            'name'  => 'Layer Modified Date',
            'description' => 'Last modification date for the metadata record.',
            'comment' => 'If you are depositing a data set, leave this field blank.',
            'data_type' => 'Tiny Text',
        ),

        array(
            'label' => 'GeoRSSBox',
            'name'  => 'GeoRSS Box',
            'description' => 'Bounding box as maximum values for S W N E',
            'comment' => 'Provide the coordinates for the area your layer covers. To do this, use this bounding box tool <http://boundingbox.klokantech.com/> and draw a box around the total area your layer represents. Toggle down to CSV, copy the value to your clipboard, and then paste the value here. Finally, remove the commas and leave white spaces in between the numbers.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'GeoRSSPoly',
            'name'  => 'GeoRSS Polygon',
            'description' =>'Shape of the layer as a Polygon in the form S W N W N E S E S W',
            'comment' => 'If you are depositing a data set, leave this field blank.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'GeoRSSPoint',
            'name'  => 'GeoRSS Point',
            'description' =>'Point representation for layer as y, x — i.e., centroid.',
            'comment' => 'If you are depositing a data set, leave this field blank.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'SolrGeom',
            'name'  => 'Apache Solr Geometry',
            'description' => 'Geometry type for layer data.',
            'comment' => 'Select from the menu below.',
            'data_type'   => 'Tiny Text',
        ),
        
         array(
            'label' => 'SolrBbox',
            'name'  => 'Apache Solr Bounding Box',
            'description' =>'Bounding box for Solr.',
            'data_type'   => 'Tiny Text',
        ),
        
         array(
            'label' => 'SolrYear',
            'name'  => 'Apache Solr Year',
            'description' =>'Year for Solr.',
            'data_type'   => 'Tiny Text',
        ),
    );
