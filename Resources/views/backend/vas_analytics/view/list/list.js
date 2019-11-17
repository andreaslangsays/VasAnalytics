
Ext.define('Shopware.apps.VasAnalytics.view.list.List', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.vas-analytics-listing-grid',
    region: 'center',

    configure: function() {
        return {
            detailWindow: 'Shopware.apps.VasAnalytics.view.detail.Window'
        };
    }
});
