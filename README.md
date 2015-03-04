# GeoBlacklight Metadata plugin for Omeka
This is the beginning of a plugin to extend [GeoBlacklight](http://geoblacklight.org/) record exporting support to [Omeka](http://omeka.org/). This is currently being developed as a way to use Omeka as an interface for collecting metadata about user-contributed spatial data sets, and then transferring that data to the GeoBlacklight discovery platform.

This plugin uses already-exisiting Dublin Core fields, as well as Dublin Core Extended fields (therefore [this](http://omeka.org/add-ons/plugins/dublin-core-extended/) is a necessary prerequisite!), and fields from a unique element set that will be created.

####The cool things it currently does:
1) Writes text relevant to collecting GeoBlacklight metadata over comment fields accompanying Dublin Core and Dublin Core Extended elements; this text is written using the ElementForm filter in the main plugin document in order to bypass Omeka's automatic HTML escaping feature, so that instructive links can be displayed in element comments

2) Adds a "GeoBlacklight" element set to Omeka, supplying metadata fields necessary for GeoBlacklight that do not come fromo reinterpreted DC fields

3) Contains two XML-generating documents (a *browse* and a *show*) that pull data from Dublin Core and GeoBlacklight element sets to create reports that can be fed into GeoBlacklight. Like this:

```
<add xmlns="http://lucene.apache.org/solr/4/document">
	<doc>
		<field name="dc_identifier_s">nyu:test12345</field>
		<field name="dc_title_s">Here is the DC title</field>
		<field name="dc_description_s">Here is the DC description</field>
```



