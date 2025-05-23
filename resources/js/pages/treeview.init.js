"use strict";
$(function () {
    $("#jstree-1").jstree({
        plugins: ["types"],
        core: { themes: { ellipsis: !0 } },
        types: {
            default: { icon: "far fa-folder" },
            file: { icon: "far fa-file" }
        }
    }),
        $("#jstree-2").jstree({
            plugins: ["types"],
            core: {
                themes: { ellipsis: !0 },
                data: [{
                    text: "Root node 1",
                    children: [{
                        text: "initially selected",
                        state: { selected: !0 }
                    },
                    {
                        text: "Custom icon",
                        icon: "fa fa-briefcase"
                    },
                    {
                        text: "Initially open",
                        state: { opened: !0 },
                        children: [{
                            text: "Disabled node",
                            state: { disabled: !0 }
                        },
                        { text: "Another node", type: "file" }]
                    },
                    {
                        text: "Sub nodes",
                        children: [{ text: "Item 1", type: "file" },
                        { text: "Item 2", type: "file" },
                        {
                            text: "Sub nodes",
                            children: [{ text: "Item 1", type: "file" },
                            { text: "Item 2", type: "file" }]
                        },
                        { text: "Item 3", type: "file" }]
                    },
                    { text: "Custom color icon", icon: "fa fa-star text-success" }]
                },
                {
                    text: "Clickable link node",
                    icon: "fa fa-link text-info",
                    a_attr: { href: "//google.com" }
                }]
            },
            types: {
                default: { icon: "far fa-folder" },
                file: { icon: "far fa-file" }
            }
        }),
        $("#jstree-3").jstree({
            plugins: ["wholerow", "checkbox", "types"],
            core: { themes: { ellipsis: !0 } },
            types: {
                default: { icon: "far fa-folder" },
                file: { icon: "far fa-file" }
            }
        }),
        $("#jstree-4").jstree({
            plugins: ["dnd", "state", "types"],
            core: {
                themes: { ellipsis: !0 },
                check_callback: !0
            },
            types: {
                default: { icon: "far fa-folder" },
                file: { icon: "far fa-file" }
            },
            state: { key: "demo2" }
        }),
        $("#jstree-5").jstree({
            plugins: ["contextmenu", "types"],
            core: {
                themes: { ellipsis: !0 },
                check_callback: !0
            },
            contextmenu: {
                items: function (e) {
                    return {
                        create: {
                            separator_before: !1, separator_after: !0, label: "Create",
                            icon: "fa fa-pen", action: !1,
                            submenu: {
                                file: {
                                    seperator_before: !1, seperator_after: !1,
                                    icon: "fa fa-file", label: "File",
                                    action: function (e) {
                                        var t = $.jstree.reference(e.reference),
                                        e = t.get_node(e.reference); t.create_node(e,
                                            { text: "New File", type: "file", icon: "fa fa-file" },
                                            "last",
                                            function (e) { setTimeout(function () { t.edit(e) }, 0) })
                                    }
                                },
                                folder: {
                                    seperator_before: !1,
                                    seperator_after: !1,
                                    icon: "fa fa-folder", label: "Folder",
                                    action: function (e) {
                                        var t = $.jstree.reference(e.reference),
                                        e = t.get_node(e.reference); t.create_node(e,
                                            { text: "New Folder", type: "default" }, "last",
                                            function (e) { setTimeout(function () { t.edit(e) }, 0) })
                                    }
                                }
                            }
                        },
                        rename: {
                            separator_before: !1,
                            separator_after: !1,
                            label: "Rename",
                            icon: "fa fa-i-cursor",
                            action: function (e) {
                                var t = $.jstree.reference(e.reference),
                                e = t.get_node(e.reference); t.edit(e)
                            }
                        },
                        remove: {
                            separator_before: !1, separator_after: !1,
                            label: "Remove",
                            icon: "fa fa-trash-alt",
                            action: function (e) {
                                var t = $.jstree.reference(e.reference),
                                e = t.get_node(e.reference); t.delete_node(e)
                            }
                        },
                        cpp: {
                            separator_before: !1,
                            separator_after: !1,
                            label: "Edit",
                            icon: "fa fa-ellipsis-v",
                            action: !1,
                            submenu: {
                                cut: {
                                    seperator_before: !1,
                                    seperator_after: !1,
                                    label: "Cut",
                                    icon: "fa fa-cut",
                                    action: function (e) {
                                        var t = $.jstree.reference(e.reference),
                                            e = t.get_node(e.reference); t.is_selected(e) ? t.cut(t.get_top_selected()) : t.cut(e)
                                    }
                                },
                                copy: {
                                    seperator_before: !1,
                                    seperator_after: !1,
                                    label: "Copy",
                                    icon: "fa fa-copy",
                                    action: function (e) {
                                        var t = $.jstree.reference(e.reference),
                                            e = t.get_node(e.reference); t.is_selected(e) ? t.copy(t.get_top_selected()) : t.copy(e)
                                    }
                                },
                                paste: {
                                    seperator_before: !1,
                                    seperator_after: !1,
                                    label: "Paste",
                                    icon: "fa fa-paste",
                                    action: function (e) {
                                        var t = $.jstree.reference(e.reference),
                                        e = t.get_node(e.reference); t.paste(e)
                                    }
                                }
                            }
                        }
                    }
                }
            },
            types: {
                default: { icon: "far fa-folder" },
                file: { icon: "far fa-file" }
            }
        });
    var t = $("#jstree-6").jstree({
        plugins: ["search", "types"],
        core: {
            themes: { ellipsis: !0 },
            check_callback: !0
        },
        types: {
            default: { icon: "far fa-folder" },
            file: { icon: "far fa-file" }
        }
    });
    $("#jstree-6-input").keyup(function () {
        var e = $(this).val();
        t.jstree(!0).search(e)
    })
});