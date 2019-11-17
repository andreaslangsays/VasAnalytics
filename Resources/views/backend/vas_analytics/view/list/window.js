
Ext.define('Shopware.apps.VasAnalytics.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.vas-analytics-list-window',
    height: 450,
    title : '{s name=window_title}VasAnalytics listing{/s}',

    configure: function() {
        return {
            listingGrid: 'Shopware.apps.VasAnalytics.view.list.List',
            listingStore: 'Shopware.apps.VasAnalytics.store.Main'
        };
    }
});