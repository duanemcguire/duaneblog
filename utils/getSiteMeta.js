import global from './global';

export default (meta) => {
  return [
    {
      hid: 'description',
      name: 'description',
      content: (meta && meta.description) || global.siteDesc,
    },
    {
      hid: 'og:type',
      property: 'og:type',
      content: (meta && meta.type) || global.siteType,
    },
    {
      hid: 'og:url',
      property: 'og:url',
      content: (meta && meta.url) || global.siteUrl,
    },
    {
      hid: 'og:title',
      property: 'og:title',
      content: (meta && meta.title) || global.siteTitle,
    },
    {
      hid: 'og:description',
      property: 'og:description',
      content: (meta && meta.description) || global.siteDesc,
    },
    {
      hid: 'og:image',
      property: 'og:image',
      content: (meta && meta.mainImage) || global.mainImage,
    },
    
  ];
};
