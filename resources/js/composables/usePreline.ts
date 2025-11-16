import { nextTick } from 'vue';

export async function usePreline() {
    await nextTick();
    const { HSStaticMethods } = await import('preline');
    HSStaticMethods.autoInit();
}
