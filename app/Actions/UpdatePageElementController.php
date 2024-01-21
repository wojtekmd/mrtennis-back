<?php

namespace App\Actions;

use App\Http\Requests\UpdatePageControllerRequest;
use App\Models\Page;
use App\Models\PageElement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdatePageElementController
{
    public function __invoke(Request $request, int $pageId, int $pageElementId): JsonResponse
    {
        if ($pageElement = PageElement::where(['page_id' => $pageId, 'id' => $pageElementId])->first()) {

            $validated = $this->validation($request, $pageElement, $pageId);

            try {
                if (is_null($validated['validated'])) {
                    return response()->json(['message' => 'Nie można tego zaakutalizować'], 405);
                }

                $toUpdate = is_null($validated['keyUpdate']) ? $validated['validated'] : $validated['validated'][$validated['keyUpdate']];
                $toUpdate = json_decode(str_replace(['<p>', '</p>', '<\/p>'], ['', '', '<br\/>'], json_encode($toUpdate)));

                $pageElement->content = $toUpdate;
                $pageElement->save();

                return response()->json($pageElement);

            } catch (\Throwable $e) {
                return response()->json(['message' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['message' => 'Strona nie została odnaleziona'], 404);
        }
    }

    private function validation(Request $request, PageElement $pageElement, int $pageId): array
    {
        $validated = null;
        $keyUpdate = null;

        //PAGE ID 1
        if ($pageId === 1 && $pageElement->slug === 'dynamic_info_card') {
            $validated = $request->validate([
                'cards' => 'required|array',
                'cards.*.order' => 'required|integer',
                'cards.*.is_active' => 'required|boolean',
                'cards.*.icon' => 'required|string',
                'cards.*.title' => 'required|array',
                'cards.*.title.pl' => 'required|string',
                'cards.*.title.en' => 'required|string',
                'cards.*.title.de' => 'required|string',
                'cards.*.desc' => 'required|array',
                'cards.*.desc.pl' => 'required|string',
                'cards.*.desc.en' => 'required|string',
                'cards.*.desc.de' => 'required|string',
            ]);

            $keyUpdate = 'cards';
        }

        if ($pageId === 1 && $pageElement->slug === 'content_first_text') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 1 && $pageElement->slug === 'content_image_cards') {
            $validated = $request->validate([
                'cards' => 'required|array',
                'cards.*.img' => 'required|string',
                'cards.*.title' => 'required|array',
                'cards.*.title.pl' => 'required|string',
                'cards.*.title.en' => 'required|string',
                'cards.*.title.de' => 'required|string',
            ]);

            $keyUpdate = 'cards';
        }

        if ($pageId === 1 && $pageElement->slug === 'content_desc') {
            $validated = $request->validate([
                'img' => 'required|string',
                'title' => 'required|array',
                'title.pl' => 'required|string',
                'title.en' => 'required|string',
                'title.de' => 'required|string',
                'desc' => 'required|array',
                'desc.pl' => 'required|string',
                'desc.en' => 'required|string',
                'desc.de' => 'required|string',
            ]);
        }

        //PAGE ID 2
        if ($pageId === 2 && $pageElement->slug === 'img') {
            $validated = $request->validate([
                'url' => 'required|string',
            ]);
        }

        if ($pageId === 2 && $pageElement->slug === 'img_first_text') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 2 && $pageElement->slug === 'img_second_text') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 2 && $pageElement->slug === 'form') {
            //WITHOUT UPDATE
        }

        if ($pageId === 2 && $pageElement->slug === 'form_agreement') {
            //WITHOUT UPDATE
        }

        if ($pageId === 2 && $pageElement->slug === 'form_button_send') {
            //WITHOUT UPDATE
        }

        if ($pageId === 2 && $pageElement->slug === 'status_send_message') {
            //WITHOUT UPDATE
        }

        //PAGE ID 4
        if ($pageId === 4 && $pageElement->slug === 'main_price_list') {
            $validated = $request->validate([
                'title' => 'required|array',
                'title.pl' => 'required|string',
                'title.en' => 'required|string',
                'title.de' => 'required|string',

                'headers' => 'required|array',
                'headers.*' => 'required|array',
                'headers.*.pl' => 'required|string',
                'headers.*.en' => 'required|string',
                'headers.*.de' => 'required|string',

                'values' => 'required|array',
                'values.*' => 'required|array',
//                'values.*.pl' => 'required|string',
//                'values.*.en' => 'required|string',
//                'values.*.de' => 'required|string',
            ]);
        }

        if ($pageId === 4 && $pageElement->slug === 'first_group_price_list') {
            $validated = $request->validate([
                'title' => 'required|array',
                'title.pl' => 'required|string',
                'title.en' => 'required|string',
                'title.de' => 'required|string',

                'headers' => 'required|array',
                'headers.*' => 'required|array',
                'headers.*.pl' => 'required|string',
                'headers.*.en' => 'required|string',
                'headers.*.de' => 'required|string',

                'values' => 'required|array',
                'values.*' => 'required|array',
//                'values.*.pl' => 'required|string',
//                'values.*.en' => 'required|string',
//                'values.*.de' => 'required|string',
            ]);
        }

        if ($pageId === 4 && $pageElement->slug === 'second_group_price_list') {
            $validated = $request->validate([
                'title' => 'required|array',
                'title.pl' => 'required|string',
                'title.en' => 'required|string',
                'title.de' => 'required|string',

                'headers' => 'required|array',
                'headers.*' => 'required|array',
                'headers.*.pl' => 'required|string',
                'headers.*.en' => 'required|string',
                'headers.*.de' => 'required|string',

                'values' => 'required|array',
                'values.*' => 'required|array',
//                'values.*.pl' => 'required|string',
//                'values.*.en' => 'required|string',
//                'values.*.de' => 'required|string',
            ]);
        }

        if ($pageId === 4 && $pageElement->slug === 'information_about_price_list_main') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 4 && $pageElement->slug === 'information_about_price_list_second') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        //PAGE ID 5
        if ($pageId === 5 && $pageElement->slug === 'header_text') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 5 && $pageElement->slug === 'header_description') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 5 && $pageElement->slug === 'trainers') {
            $validated = $request->validate([
                'trainers' => 'required|array',
                'trainers.*.order' => 'required|integer',
                'trainers.*.is_active' => 'required|boolean',
                'trainers.*.name' => 'required|string',
//                'trainers.*.profession' => 'string',
                'trainers.*.img' => 'required|string',
                'trainers.*.phone' => 'required|string',
                'trainers.*.desc' => 'required|array',
                'trainers.*.desc.pl' => 'required|string',
                'trainers.*.desc.en' => 'required|string',
                'trainers.*.desc.de' => 'required|string',
            ]);

            $keyUpdate = 'trainers';
        }

        //PAGE ID 6
        if ($pageId === 6 && $pageElement->slug === 'header') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 6 && $pageElement->slug === 'content') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 6 && $pageElement->slug === 'img') {
            $validated = $request->validate([
                'img' => 'required|string',
            ]);
        }

        //PAGE ID 7
        if ($pageId === 7 && $pageElement->slug === 'header') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 7 && $pageElement->slug === 'content') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 7 && $pageElement->slug === 'img') {
            $validated = $request->validate([
                'img' => 'required|string',
            ]);
        }

        //PAGE ID 8
        if ($pageId === 8 && $pageElement->slug === 'header') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 8 && $pageElement->slug === 'content') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 8 && $pageElement->slug === 'img') {
            $validated = $request->validate([
                'img' => 'required|string',
            ]);
        }

        //PAGE ID 9
        if ($pageId === 9 && $pageElement->slug === 'header') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 9 && $pageElement->slug === 'content') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 9 && $pageElement->slug === 'img') {
            $validated = $request->validate([
                'img' => 'required|string',
            ]);
        }

        //PAGE ID 10
        if ($pageId === 10 && $pageElement->slug === 'header') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 10 && $pageElement->slug === 'content') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 10 && $pageElement->slug === 'img') {
            $validated = $request->validate([
                'img' => 'required|string',
            ]);
        }

        //PAGE ID 11
        if ($pageId === 11 && $pageElement->slug === 'header') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 11 && $pageElement->slug === 'content') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 11 && $pageElement->slug === 'img') {
            $validated = $request->validate([
                'img' => 'required|string',
            ]);
        }

        //PAGE ID 12
        if ($pageId === 12 && $pageElement->slug === 'header') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 12 && $pageElement->slug === 'content') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 12 && $pageElement->slug === 'img') {
            $validated = $request->validate([
                'img' => 'required|string',
            ]);
        }

        //PAGE ID 13
        if ($pageId === 13 && $pageElement->slug === 'main_text') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        if ($pageId === 13 && $pageElement->slug === 'rules') {
            $validated = $request->validate([
                'rules' => 'required|array',
                'rules.*.header' => 'required|array',
                'rules.*.header.pl' => 'required|string',
                'rules.*.header.en' => 'required|string',
                'rules.*.header.de' => 'required|string',
                'rules.points' => 'array',
                'rules.points.*.pl' => 'required|string',
                'rules.points.*.en' => 'required|string',
                'rules.points.*.de' => 'required|string',
            ]);

            $keyUpdate = 'rules';
        }

        if ($pageId === 13 && $pageElement->slug === 'footer_text') {
            $validated = $request->validate([
                'pl' => 'required|string',
                'en' => 'required|string',
                'de' => 'required|string',
            ]);
        }

        //PAGE ID 14
        if ($pageId === 14 && $pageElement->slug === 'privacy_policy') {
            $validated = $request->validate([
                'policies' => 'required|array',
                'policies.*.header' => 'required|array',
                'policies.*.header.pl' => 'required|string',
                'policies.*.header.en' => 'required|string',
                'policies.*.header.de' => 'required|string',
                'policies.*.content' => 'required|array',
                'policies.*.content.pl' => 'required|string',
                'policies.*.content.en' => 'required|string',
                'policies.*.content.de' => 'required|string',
            ]);

            $keyUpdate = 'policies';
        }

        //PAGE ID 15
        if ($pageId === 15 && $pageElement->slug === 'cookies') {
            $validated = $request->validate([
                'cookies' => 'required|array',
                'cookies.*.header' => 'required|array',
                'cookies.*.header.pl' => 'required|string',
                'cookies.*.header.en' => 'required|string',
                'cookies.*.header.de' => 'required|string',
                'cookies.points' => 'required|array',
                'cookies.points.*.pl' => 'required|string',
                'cookies.points.*.en' => 'required|string',
                'cookies.points.*.de' => 'required|string',
            ]);

            $keyUpdate = 'cookies';
        }

        //PAGE ID 16
        if ($pageId === 16 && $pageElement->slug === 'component') {
            $validated = $request->validate([
                'navbar' => 'required|array',
                'navbar.first' => 'required|array',
                'navbar.first.pl' => 'required|string',
                'navbar.first.en' => 'required|string',
                'navbar.first.de' => 'required|string',
                'navbar.second' => 'required|array',
                'navbar.second.pl' => 'required|string',
                'navbar.second.en' => 'required|string',
                'navbar.second.de' => 'required|string',
                'navbar.third' => 'required|array',
                'navbar.third.pl' => 'required|string',
                'navbar.third.en' => 'required|string',
                'navbar.third.de' => 'required|string',
                'navbar.fourth' => 'required|array',
                'navbar.fourth.pl' => 'required|string',
                'navbar.fourth.en' => 'required|string',
                'navbar.fourth.de' => 'required|string',
                'header' => 'required|array',
                'header.first_text' => 'required|array',
                'header.first_text.pl' => 'required|string',
                'header.first_text.en' => 'required|string',
                'header.first_text.de' => 'required|string',
                'header.second_text' => 'required|array',
                'header.second_text.pl' => 'required|string',
                'header.second_text.en' => 'required|string',
                'header.second_text.de' => 'required|string',
                'header.image' => 'required|array',
                'header.image.url' => 'required|string',
                'top_section' => 'required|array',
                'top_section.header' => 'required|array',
                'top_section.header.pl' => 'required|string',
                'top_section.header.en' => 'required|string',
                'top_section.header.de' => 'required|string',
                'top_section.images' => 'required|array',
                'top_section.images.*.url' => 'required|string',

                'cookies' => 'required|array',
                'cookies.main_text' => 'required|array',
                'cookies.main_text.pl' => 'required|string',
                'cookies.main_text.en' => 'required|string',
                'cookies.main_text.de' => 'required|string',
                'cookies.more' => 'required|array',
                'cookies.more.pl' => 'required|string',
                'cookies.more.en' => 'required|string',
                'cookies.more.de' => 'required|string',
                'cookies.button_ok' => 'required|array',
                'cookies.button_ok.pl' => 'required|string',
                'cookies.button_ok.en' => 'required|string',
                'cookies.button_ok.de' => 'required|string',
                'cookies.button_cancel' => 'required|array',
                'cookies.button_cancel.pl' => 'required|string',
                'cookies.button_cancel.en' => 'required|string',
                'cookies.button_cancel.de' => 'required|string',
            ]);
        }

        return [
            'validated' => $validated,
            'keyUpdate' => $keyUpdate
        ];
    }
}
