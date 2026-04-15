
const registry = {
    bootstrap: () => import("./modules/bootstrap.js"),
  //  map: () => import("./modules/map.js"),
    slider: () => import("./modules/slider.js"),
    counters: () => import("./modules/counters.js"),
    offices: () => import("./modules/offices.js"),
};

async function loadModules() {
    const modules = window.pageModules || [];

    for (const name of modules) {
        if (registry[name]) {
            try {
                await registry[name]();
            } catch (e) {
                console.error("Module failed:", name, e);
            }
        }
    }
}

loadModules();