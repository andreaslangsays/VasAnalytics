
Ext.define('Shopware.apps.VasAnalytics.model.Main', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'VasAnalytics',
            detail: 'Shopware.apps.VasAnalytics.view.detail.Container'
        };
    },


    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string', useNull: false }
    ]
});

