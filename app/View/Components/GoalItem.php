<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GoalItem extends Component
{
    public $imageLocation;
    public $goalName;
    public $goalDescription;
    public $goalRequirement;
    public $goalID;

    public function __construct($imageLocation="", $goalName="", $goalDescription="", $goalRequirement="", $goalID="")
    {
        $this->imageLocation = $imageLocation;
        $this->goalName = $goalName;
        $this->goalDescription = $goalDescription;
        $this->goalRequirement = $goalRequirement;

        // change the $imageLocation depending on what %goalName is passed when called here
        switch ($goalID) {
            case 1: $this->imageLocation = asset('assets/illustrations/goals-icon/1-deja-vu.png'); break;
            case 2: $this->imageLocation = asset('assets/illustrations/goals-icon/2-wanderer-advice.png'); break;
            case 3: $this->imageLocation = asset('assets/illustrations/goals-icon/3-adventurer-experience.png'); break;
            case 4: $this->imageLocation = asset('assets/illustrations/goals-icon/4-hero-wits.png'); break;
            case 5: $this->imageLocation = asset('assets/illustrations/goals-icon/5-sage-wisdom.png'); break;
            case 6: $this->imageLocation = asset('assets/illustrations/goals-icon/6-move-up-hit-em-up.png'); break;
            case 7: $this->imageLocation = asset('assets/illustrations/goals-icon/7-are-we-there-yet.png'); break;
            case 8: $this->imageLocation = asset('assets/illustrations/goals-icon/8-yes-really-no.png'); break;
            case 9: $this->imageLocation = asset('assets/illustrations/goals-icon/9-bop-bop-bop.png'); break;
            case 10: $this->imageLocation = asset('assets/illustrations/goals-icon/10-its-over-9000.png'); break;
            case 11: $this->imageLocation = asset('assets/illustrations/goals-icon/11-from-rags.png'); break;
            case 12: $this->imageLocation = asset('assets/illustrations/goals-icon/12-to-riches.png'); break;
            case 13: $this->imageLocation = asset('assets/illustrations/goals-icon/13-high-card.png'); break;
            case 14: $this->imageLocation = asset('assets/illustrations/goals-icon/14-full-house.png'); break;
            case 15: $this->imageLocation = asset('assets/illustrations/goals-icon/15-four-of-a-kind.png'); break;
            case 16: $this->imageLocation = asset('assets/illustrations/goals-icon/16-straight-flush.png'); break;
            case 17: $this->imageLocation = asset('assets/illustrations/goals-icon/17-royal-flush.png'); break;
            case 18: $this->imageLocation = asset('assets/illustrations/goals-icon/18-near-miss.png'); break;

            default:
                $this->imageLocation = asset('assets/illustrations/goals-icon/0-default-goal.png');
                break;
        }
    }





















    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.goal-item');
    }
}
