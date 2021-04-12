jQuery,jQuery.widget("ui.tagit",{options:{allowDuplicates:!1,caseSensitive:!0,fieldName:"tags",placeholderText:null,readOnly:!1,removeConfirmation:!1,tagLimit:null,availableTags:[],autocomplete:{},showAutocompleteOnFocus:!1,allowSpaces:!1,singleField:!1,singleFieldDelimiter:",",singleFieldNode:null,animate:!0,tabIndex:null,beforeTagAdded:null,afterTagAdded:null,beforeTagRemoved:null,afterTagRemoved:null,onTagClicked:null,onTagLimitExceeded:null,onTagAdded:null,onTagRemoved:null,tagSource:null},_create:function(){var a=this;this.element.is("input")?(this.tagList=jQuery("<ul></ul>").insertAfter(this.element),this.options.singleField=!0,this.options.singleFieldNode=this.element,this.element.addClass("tagit-hidden-field")):this.tagList=this.element.find("ul, ol").andSelf().last(),this.tagInput=jQuery('<input type="text" />').addClass("ui-widget-content"),this.options.readOnly&&this.tagInput.attr("disabled","disabled"),this.options.tabIndex&&this.tagInput.attr("tabindex",this.options.tabIndex),this.options.placeholderText&&this.tagInput.attr("placeholder",this.options.placeholderText),this.options.autocomplete.source||(this.options.autocomplete.source=function(t,e){var i=t.term.toLowerCase(),a=jQuery.grep(this.options.availableTags,function(t){return 0===t.toLowerCase().indexOf(i)});this.options.allowDuplicates||(a=this._subtractArray(a,this.assignedTags())),e(a)}),this.options.showAutocompleteOnFocus&&(this.tagInput.focus(function(t,e){a._showAutocomplete()}),void 0===this.options.autocomplete.minLength&&(this.options.autocomplete.minLength=0)),jQuery.isFunction(this.options.autocomplete.source)&&(this.options.autocomplete.source=jQuery.proxy(this.options.autocomplete.source,this)),jQuery.isFunction(this.options.tagSource)&&(this.options.tagSource=jQuery.proxy(this.options.tagSource,this)),this.tagList.addClass("tagit").addClass("ui-widget ui-widget-content ui-corner-all").append(jQuery('<li class="tagit-new"></li>').append(this.tagInput)).click(function(t){var e,i=jQuery(t.target);i.hasClass("tagit-label")?(e=i.closest(".tagit-choice")).hasClass("removed")||a._trigger("onTagClicked",t,{tag:e,tagLabel:a.tagLabel(e)}):a.tagInput.focus()});var t,e,i,s=!1;this.options.singleField&&(this.options.singleFieldNode?(e=(t=jQuery(this.options.singleFieldNode)).val().split(this.options.singleFieldDelimiter),t.val(""),jQuery.each(e,function(t,e){a.createTag(e,null,!0),s=!0})):(this.options.singleFieldNode=jQuery('<input type="hidden" style="display:none;" value="" name="'+this.options.fieldName+'" />'),this.tagList.after(this.options.singleFieldNode))),s||this.tagList.children("li").each(function(){jQuery(this).hasClass("tagit-new")||(a.createTag(jQuery(this).text(),jQuery(this).attr("class"),!0),jQuery(this).remove())}),this.tagInput.keydown(function(t){var e;t.which==jQuery.ui.keyCode.BACKSPACE&&""===a.tagInput.val()?(e=a._lastTag(),!a.options.removeConfirmation||e.hasClass("remove")?a.removeTag(e):a.options.removeConfirmation&&e.addClass("remove ui-state-highlight")):a.options.removeConfirmation&&a._lastTag().removeClass("remove ui-state-highlight"),(t.which===jQuery.ui.keyCode.COMMA&&!1===t.shiftKey||t.which===jQuery.ui.keyCode.ENTER||t.which==jQuery.ui.keyCode.TAB&&""!==a.tagInput.val()||t.which==jQuery.ui.keyCode.SPACE&&!0!==a.options.allowSpaces&&('"'!=jQuery.trim(a.tagInput.val()).replace(/^s*/,"").charAt(0)||'"'==jQuery.trim(a.tagInput.val()).charAt(0)&&'"'==jQuery.trim(a.tagInput.val()).charAt(jQuery.trim(a.tagInput.val()).length-1)&&jQuery.trim(a.tagInput.val()).length-1!=0))&&(t.which===jQuery.ui.keyCode.ENTER&&""===a.tagInput.val()||t.preventDefault(),a.options.autocomplete.autoFocus&&a.tagInput.data("autocomplete-open")||(a.tagInput.autocomplete("close"),a.createTag(a._cleanedInput())))}).blur(function(t){a.tagInput.data("autocomplete-open")||a.createTag(a._cleanedInput())}),(this.options.availableTags||this.options.tagSource||this.options.autocomplete.source)&&(i={select:function(t,e){return a.createTag(e.item.value),!1}},jQuery.extend(i,this.options.autocomplete),i.source=this.options.tagSource||i.source,this.tagInput.autocomplete(i).bind("autocompleteopen.tagit",function(t,e){a.tagInput.data("autocomplete-open",!0)}).bind("autocompleteclose.tagit",function(t,e){a.tagInput.data("autocomplete-open",!1)}),this.tagInput.autocomplete("widget").addClass("tagit-autocomplete"))},destroy:function(){return jQuery.Widget.prototype.destroy.call(this),this.element.unbind(".tagit"),this.tagList.unbind(".tagit"),this.tagInput.removeData("autocomplete-open"),this.tagList.removeClass(["tagit","ui-widget","ui-widget-content","ui-corner-all","tagit-hidden-field"].join(" ")),this.element.is("input")?(this.element.removeClass("tagit-hidden-field"),this.tagList.remove()):(this.element.children("li").each(function(){jQuery(this).hasClass("tagit-new")?jQuery(this).remove():(jQuery(this).removeClass(["tagit-choice","ui-widget-content","ui-state-default","ui-state-highlight","ui-corner-all","remove","tagit-choice-editable","tagit-choice-read-only"].join(" ")),jQuery(this).text(jQuery(this).children(".tagit-label").text()))}),this.singleFieldNode&&this.singleFieldNode.remove()),this},_cleanedInput:function(){return jQuery.trim(this.tagInput.val().replace(/^"(.*)"$/,"$1"))},_lastTag:function(){return this.tagList.find(".tagit-choice:last:not(.removed)")},_tags:function(){return this.tagList.find(".tagit-choice:not(.removed)")},assignedTags:function(){var t=this,e=[];return this.options.singleField?""===(e=jQuery(this.options.singleFieldNode).val().split(this.options.singleFieldDelimiter))[0]&&(e=[]):this._tags().each(function(){e.push(t.tagLabel(this))}),e},_updateSingleTagsField:function(t){jQuery(this.options.singleFieldNode).val(t.join(this.options.singleFieldDelimiter)).trigger("change")},_subtractArray:function(t,e){for(var i=[],a=0;a<t.length;a++)-1==jQuery.inArray(t[a],e)&&i.push(t[a]);return i},tagLabel:function(t){return this.options.singleField?jQuery(t).find(".tagit-label:first").text():jQuery(t).find("input:first").val()},_showAutocomplete:function(){this.tagInput.autocomplete("search","")},_findTagByLabel:function(e){var i=this,a=null;return this._tags().each(function(t){if(i._formatStr(e)==i._formatStr(i.tagLabel(this)))return a=jQuery(this),!1}),a},_isNew:function(t){return!this._findTagByLabel(t)},_formatStr:function(t){return this.options.caseSensitive?t:jQuery.trim(t.toLowerCase())},_effectExists:function(t){return Boolean(jQuery.effects&&(jQuery.effects[t]||jQuery.effects.effect&&jQuery.effects.effect[t]))},createTag:function(t,e,i){var a=this;if(t=jQuery.trim(t),this.options.preprocessTag&&(t=this.options.preprocessTag(t)),""===t)return!1;if(!this.options.allowDuplicates&&!this._isNew(t)){var s=this._findTagByLabel(t);return!1!==this._trigger("onTagExists",null,{existingTag:s,duringInitialization:i})&&this._effectExists("highlight")&&s.effect("highlight"),!1}if(this.options.tagLimit&&this._tags().length>=this.options.tagLimit)return this._trigger("onTagLimitExceeded",null,{duringInitialization:i}),!1;var o,n,l,u,r=jQuery(this.options.onTagClicked?'<a class="tagit-label"></a>':'<span class="tagit-label"></span>').text(t),g=jQuery("<li></li>").addClass("tagit-choice ui-widget-content ui-state-default ui-corner-all").addClass(e).append(r);this.options.readOnly?g.addClass("tagit-choice-read-only"):(g.addClass("tagit-choice-editable"),o=jQuery("<span></span>").addClass("ui-icon ui-icon-close"),n=jQuery('<a><span class="text-icon">×</span></a>').addClass("tagit-close").append(o).click(function(t){a.removeTag(g)}),g.append(n)),this.options.singleField||(l=r.html(),g.append('<input type="hidden" value="'+l+'" name="'+this.options.fieldName+'" class="tagit-hidden-field" />')),!1!==this._trigger("beforeTagAdded",null,{tag:g,tagLabel:this.tagLabel(g),duringInitialization:i})&&(this.options.singleField&&((u=this.assignedTags()).push(t),this._updateSingleTagsField(u)),this._trigger("onTagAdded",null,g),this.tagInput.val(""),this.tagInput.parent().before(g),this._trigger("afterTagAdded",null,{tag:g,tagLabel:this.tagLabel(g),duringInitialization:i}),this.options.showAutocompleteOnFocus&&!i&&setTimeout(function(){a._showAutocomplete()},0))},removeTag:function(t,e){var i,a,s,o;e=void 0===e?this.options.animate:e,t=jQuery(t),this._trigger("onTagRemoved",null,t),!1!==this._trigger("beforeTagRemoved",null,{tag:t,tagLabel:this.tagLabel(t)})&&(this.options.singleField&&(a=this.assignedTags(),i=this.tagLabel(t),a=jQuery.grep(a,function(t){return t!=i}),this._updateSingleTagsField(a)),e?(t.addClass("removed"),s=this._effectExists("blind")?["blind",{direction:"horizontal"},"fast"]:["fast"],o=this,s.push(function(){t.remove(),o._trigger("afterTagRemoved",null,{tag:t,tagLabel:o.tagLabel(t)})}),t.fadeOut("fast").hide.apply(t,s).dequeue()):(t.remove(),this._trigger("afterTagRemoved",null,{tag:t,tagLabel:this.tagLabel(t)})))},removeTagByLabel:function(t,e){var i=this._findTagByLabel(t);if(!i)throw"No such tag exists with the name '"+t+"'";this.removeTag(i,e)},removeAll:function(){var i=this;this._tags().each(function(t,e){i.removeTag(e,!1)})}}),jQuery(document).ready(function(){jQuery("#wp-rem-tags").tagit({allowSpaces:!0})});