<?php echo '<?xml version="1.0" encoding="UTF-8"?>
<add xmlns="http://lucene.apache.org/solr/4/document">
  <doc>'; ?>
<?php $item = get_current_record('item'); ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'UUID'), array('all'=>true)) as $UUID) { ?>
	<field name="uuid"><?php echo html_escape($UUID); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Identifier'), array('all'=>true)) as $Identifier) { ?>
	<field name="dc_identifier_s"><?php echo html_escape($Identifier); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Title'), array('all'=>true)) as $Title) { ?>
	<field name="dc_title_s">	<?php echo html_escape($Title); ?>	</field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Description'), array('all'=>true)) as $Description) { ?>
	<field name="dc_description_s"><?php echo html_escape($Description); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Rights'), array('all'=>true)) as $Rights) { ?>
	<field name="dc_rights_s"><?php echo html_escape($Rights); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Provenance'), array('all'=>true)) as $Provenance) { ?>
	<field name="dct_provenance_s"><?php echo html_escape($Provenance); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'References'), array('all'=>true)) as $References) { ?>
	<field name="dct_references_s"><?php echo html_escape($References); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'Layer ID'), array('all'=>true)) as $LayerID) { ?>
	<field name="layer_id_s"><?php echo html_escape($LayerID); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'Slug'), array('all'=>true)) as $Slug) { ?>
	<field name="layer_slug_s"><?php echo html_escape($Slug); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'Geometry Type'), array('all'=>true)) as $GeomType) { ?>
	<field name="layer_geom_type_s"><?php echo html_escape($GeomType); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'Layer Modified Date'), array('all'=>true)) as $LayerModDT) { ?>
	<field name="layer_modified_dt"><?php echo html_escape($LayerModDT); ?>	</field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Format'), array('all'=>true)) as $Format) { ?>
	<field name="dc_format_s"><?php echo html_escape($Format); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Language'), array('all'=>true)) as $Language) { ?>
	<field name="dc_language_s"><?php echo html_escape($Language); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Type'), array('all'=>true)) as $Type) { ?>
	<field name="dc_type_s"><?php echo html_escape($Type); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Publisher'), array('all'=>true)) as $Publisher) { ?>
	<field name="dc_publisher_s"><?php echo html_escape($Publisher); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Creator'), array('all'=>true)) as $Creator) { ?>
	<field name="dc_creator_sm"><?php echo html_escape($Creator); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Subject'), array('all'=>true)) as $Subject) { ?>
	<field name="dc_subject_sm"><?php echo html_escape($Subject); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Date Issued'), array('all'=>true)) as $DateIssued) { ?>
	<field name="dct_issued_s"><?php echo html_escape($DateIssued); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Temporal Coverage'), array('all'=>true)) as $TemporalCoverage) { ?>
	<field name="dct_temporal_sm"><?php echo html_escape($TemporalCoverage); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Spatial Coverage'), array('all'=>true)) as $SpatialCoverage) { ?>
	<field name="dct_spatial_sm"><?php echo html_escape($SpatialCoverage); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('Dublin Core', 'Relation'), array('all'=>true)) as $Relation) { ?>
	<field name="dct_relation_sm"><?php echo html_escape($Relation); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'GeoRSS Box'), array('all'=>true)) as $GeoRSSBox) { ?>
	<field name="georss_box_s"><?php echo html_escape($GeoRSSBox); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'GeoRSS Point'), array('all'=>true)) as $GeoRSSPoint) { ?>
	<field name="georss_point_s"><?php echo html_escape($GeoRSSPoint); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'GeoRSS Polygon'), array('all'=>true)) as $GeoRSSPoly) { ?>
	<field name="georss_polygon_s"><?php echo html_escape($GeoRSSPoly); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'Apache Solr Geometry'), array('all'=>true)) as $SolrGeom) { ?>
	<field name="solr_geom"><?php echo html_escape($SolrGeom); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'Apache Solr Bounding Box'), array('all'=>true)) as $SolrBbox) { ?>
	<field name="solr_bbox"><?php echo html_escape($SolrBbox); ?></field>
<?php } ?>
<?php foreach (metadata($item, array('GeoBlacklight', 'Apache Solr Year'), array('all'=>true)) as $SolrYear) { ?>
	<field name="solr_year_i"><?php echo html_escape($SolrYear); ?></field>
<?php } ?>
</doc></add>