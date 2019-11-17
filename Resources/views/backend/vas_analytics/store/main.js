
Ext.define('Shopware.apps.VasAnalytics.store.Main', {
    extend:'Shopware.store.Listing',

    configure: function() {
        return {
            controller: 'VasAnalytics'
        };
    },
    model: 'Shopware.apps.VasAnalytics.model.Main'
});