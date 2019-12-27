const presets = {
  h1: {
    fontSize: 2.5,
    margin: 0.67,
    fontWeight: 800,
    lineHeight: 1.7
  },

  h2: {
    fontSize: 2,
    margin: 0.75,
    fontWeight: 800,
    lineHeight: 1.6
  },

  h3: {
    fontSize: 1.375,
    margin: 0.83,
    fontWeight: 800,
    lineHeight: 1.6
  },

  h4: {
    fontSize: 1.125,
    margin: 1.5,
    lineHeight: 1.6,
    fontWeight: 800
  },

  h5: {
    fontSize: 1,
    margin: 1.67,
    fontWeight: 800,
    lineHeight: 1.5
  },

  h6: {
    fontSize: 0.875,
    margin: 1,
    lineHeight: 1.5,
    fontWeight: 800
  },

  p: {
    fontSize: 1.125,
    margin: 1,
    lineHeight: 1.5,
    fontWeight: 200
  }
};

let attributes = {
  content: {
    type: "string"
  },
  fontSize: {
    type: "object",
    default: {
      mobile: presets.h1.fontSize,
      tablet: presets.h1.fontSize,
      desktop: presets.h1.fontSize
    }
  },
  textAlign: {
    type: "object",
    default: { mobile: "left", tablet: "left", desktop: "left" }
  },
  marginTop: {
    type: "object",
    default: {
      mobile: presets.h1.margin,
      tablet: presets.h1.margin,
      desktop: presets.h1.margin
    }
  },
  marginBottom: {
    type: "object",
    default: {
      mobile: presets.h1.margin,
      tablet: presets.h1.margin,
      desktop: presets.h1.margin
    }
  },
  fontWeight: {
    type: "object",
    default: {
      mobile: presets.h1.fontWeight,
      tablet: presets.h1.fontWeight,
      desktop: presets.h1.fontWeight
    }
  },
  lineHeight: {
    type: "object",
    default: {
      mobile: presets.h1.lineHeight,
      tablet: presets.h1.lineHeight,
      desktop: presets.h1.lineHeight
    }
  },
  color: {
    type: "string",
    default: ""
  },
  Id: {
    type: "number",
    default: 0
  }
};

function make(props) {
  console.log(props);

  let b = new makeSelector(".amhHeader-wrap > div")
    .add("font-size", 200, "rem")
    .add("font-Width", 200, "rem");

  console.log(makeMediaQuery(233, b.get()));
}

make(attributes);

function makeMediaQuery(width, children) {
  return `@media (max-width: ${width}px) {${children}}`;
}
function makeSelector(name) {
  this.children = [];

  function makeStyle(name, value, add) {
    return ` ${name}: ${value}${add}`;
  }

  this.add = (name, value, add) => {
    this.children.push(makeStyle(name, value, add));
    return this;
  };
  this.get = () => {
    return ` ${name} {${this.children}}`;
  };
}
