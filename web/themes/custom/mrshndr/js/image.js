const {blocks, data, element, components, editor} = wp;
const {registerBlockType} = blocks;
const {dispatch, select} = data;
const {Fragment} = element;
const {PanelBody, BaseControl, Icon, RangeControl, IconButton, Toolbar, SelectControl} = components;
const {InnerBlocks, RichText, InspectorControls, PanelColorSettings, MediaUpload, BlockControls} = editor;
const __ = Drupal.t;

const settings = {
  save({className, attributes}) {
    const {title, subtitle, text} = attributes;

    return (
      <div className={className}>
        <h1>Sander</h1>
      </div>
    );
  },
};



const currentCategories = select('core/blocks').getCategories().filter(item => item.slug !== category.slug);
dispatch('core/blocks').setCategories([category, ...currentCategories]);

registerBlockType(`${category.slug}/example-block`, {category: category.slug, ...settings});
